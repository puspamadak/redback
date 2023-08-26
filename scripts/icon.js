import { loadStyle } from "./asset.js";

class Icon extends HTMLElement {
    static get observedAttributes() {
        return ['base', 'file', 'root'];
    }
    attributeChangedCallback(name) {
        if (name == 'base' || name == 'file' || name == 'root') {
            const base = this.getAttribute("base") ?? "images/mono";
            const file = this.getAttribute("file");
            const root = this.getAttribute("root") ?? "root";
            this.innerHTML = `<svg><use href="${base}/${file}.svg#${root}" /></svg>`;
        }
    }
    connectedCallback() {
        loadStyle('icon');
    }
}

customElements.define("i-con", Icon);
export default Icon;