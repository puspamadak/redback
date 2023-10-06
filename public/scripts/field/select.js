import { loadStyle } from "../asset.js";
import DropDown from "../dropdown.js";

class SelectBox extends DropDown {
    _value = '';

    init() {
        super.init();
        loadStyle('field/select');
        this.button.innerHTML =
            `<span></span>
            <i-con file="angle" class="arrow"></icon>`;
        for (let c of this.list.children) {
            c.value = c.getAttribute("value");
            if (c.hasAttribute("selected")) this.setOpt(c);
            c.addEventListener("click", () => {
                this.setOpt(c);
                this.button.close();
            });
        }
    }
    setOpt(opt) {
        this.setContent(opt);
        this._value = opt.value;
        this.dispatchEvent(new Event('input', { bubbles: true }));
    }
    set value(value) {
        for (let c of this.opts) {
            if (c.value != value) continue;
            this.setOpt(c);
            return true;
        }
        return false;
    }
    get value() {
        return this._value;
    }
    setContent(opt) {
        if (this.hasAttribute("hide") && this.getAttribute("hide") == opt.value) return;
        this.button.children[0].innerHTML = opt.innerHTML;
    }
}

customElements.define('select-box', SelectBox);
export default SelectBox;