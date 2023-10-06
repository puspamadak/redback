import Field from "./field.js";
import * as slot from "../slot.js";
import { loadStyle } from "../asset.js";

class TextField extends Field {
	render() {
		super.render();
		const nodes = slot.nodes(this);
		this.innerHTML =
			`<div class="input-box">
                <legend></legend>
                <slot class="input"></slot>
				<slot name="action"></slot>
            </div>
            <div class="error"></div>`;
		slot.replace(this, nodes);
	}
	init() {
		this.box = this.children[0];
		this.legend = this.box.children[0];
		this.input = this.box.children[1].children[0];
		this.error = this.children[1];
		this.legend.innerHTML = this.getAttribute("placeholder");
		this.input.addEventListener('input', () => {
			this.showPh();
			this.clearError();
		});
		this.showPh();
	}
	connectedCallback() {
		this.render();
		this.init();
		loadStyle('field/field');
	}
	showPh() {
		var v;
		switch (this.input.tagName) {
			case 'DIV': v = this.input.innerHTML; break;
			default: v = this.input.value;
		}
		this.classList.toggle("filled", v != undefined && v !== "");
	}
}

customElements.define('text-field', TextField);
export default TextField;