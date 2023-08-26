class Field extends HTMLElement {
    _checker = () => true;

    render() {
        this.classList.add("field");
    }
    showError(msg) {
        this.error.innerHTML = msg;
        if (this.classList.contains("error")) {
            this.clearError();
            setTimeout(() => this.classList.add("error"), 0);
        } else {
            this.classList.add("error");
        }
    }
    clearError() {
        this.classList.remove("error");
    }
    set checker(checker) {
        this._checker = checker;
    }
    get validate() {
        const returnVal = this._checker(this.input);
        if (returnVal === true) return true;
        this.showError(returnVal);
        return false;
    }
}

export default Field;