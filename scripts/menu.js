const menuBtns = document.querySelectorAll(".menu>:first-child");
for (let btn of menuBtns) btn.onclick = () => openMenu(btn);

function openMenu(btn) {
	const parent = btn.parentElement;
	btn.close = e => {
		if (e && parent.contains(e.target)) return;
		parent.classList.remove("open");
		list.style.removeProperty("height");
		document.removeEventListener("pointerdown", btn.close);
	};
	const list = btn.nextElementSibling;
	if (parent.classList.contains('open')) {
		btn.close();
		return;
	}
	parent.classList.add("open");
	if (list.offsetTop + list.offsetHeight > innerHeight - 20) {
		list.style.height = (innerHeight - 20 - list.offsetTop) + "px";
	}
	document.addEventListener("pointerdown", btn.close);
}