function getChildrenWidth(element) {
	var total = 0;
	for (let child of element.children) total += child.offsetWidth;
	return total;
}

const resizeObserver = new ResizeObserver(() => {
	if (getChildrenWidth(main_menu) > main_menu.offsetWidth) {
		while (getChildrenWidth(main_menu) > main_menu.offsetWidth) {
			let item = main_menu.lastElementChild;
			item.origWidth = item.offsetWidth;
			overflow_menu.insertBefore(item, overflow_menu.firstElementChild);
		}
	} else {
		let childrenWidth = getChildrenWidth(main_menu);
		while (childrenWidth < main_menu.offsetWidth && overflow_menu.firstElementChild && overflow_menu.firstElementChild.origWidth <= main_menu.offsetWidth - childrenWidth) {
			main_menu.appendChild(overflow_menu.firstElementChild);
			childrenWidth = getChildrenWidth(main_menu);
		}
	}
	overflow_btn.style.display = overflow_menu.children.length == 0 ? "none" : "flex";
});
resizeObserver.observe(main_menu);