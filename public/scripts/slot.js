function nodes(elem) {
    const slots = {};
    for (let e of elem.children) {
        const name = e.getAttribute("slot");
        if (!(name in slots)) slots[name] = [];
        slots[name].push(e);
    }
    return slots;
}

function replace(elem, nodes) {
    const slots = elem.querySelectorAll("slot");
    for (let e of slots) {
        const nodeList = nodes[e.getAttribute("name")];
        if (!nodeList) continue;
        nodeList.forEach(node => e.appendChild(node));
    }
}

export { nodes, replace };