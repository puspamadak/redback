import { loadStyle } from "./asset.js";
import * as slot from "./slot.js";

class DropDown extends HTMLElement {
    render() {
        const nodes = slot.nodes(this);
        this.classList.add('dropdown');
        this.innerHTML =
            `<slot name="button"></slot>
            <slot class="opts col"></slot>`;
        slot.replace(this, nodes);
    }
    init() {
        this.button = this.children[0].children[0];
        this.button.classList.add('button');
        this.list = this.children[1];
        const obj = this;
        this.button.close = e => {
            if (e && obj.contains(e.target)) return;
            obj.classList.remove("open");
            obj.list.style.removeProperty("height");
            document.removeEventListener("pointerdown", obj.button.close);
        }
        this.button.onclick = () => this.open();
    }
    connectedCallback() {
        this.render();
        this.init();
        loadStyle('dropdown');
    }
    open() {
        if (this.classList.contains('open')) {
            this.button.close();
            return;
        }
        this.classList.add("open");
        if (this.list.offsetTop + this.list.offsetHeight > innerHeight - 20) {
            this.list.style.height = (innerHeight - 20 - this.list.offsetTop) + "px";
        }
        document.addEventListener("pointerdown", this.button.close);
    }
}

customElements.define('drop-down', DropDown);
export default DropDown;