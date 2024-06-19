document.addEventListener('DOMContentLoaded', () => {
    inputsModificados();
});

const crearHtml = str => document.createElement(str);

const inputsModificados = () => {
    const files = document.querySelectorAll('.input-de-robert');
    Array.from(files).forEach(
        f => {
            const label = crearHtml('label');
            const span_text = crearHtml('span');
            const span_name = crearHtml('span');
            const span_button = crearHtml('span');

            label.htmlFor = f.id;

            span_text.className = 'input-de-robert_name';
            span_button.className = 'input-de-robert_button';

            span_name.innerHTML = f.dataset.empty || 'Ningun archivo seleccionado';
            span_button.innerHTML = f.dataset.button || 'Buscar';

            label.appendChild(span_text);
            label.appendChild(span_button);
            span_text.appendChild(span_name);
            f.parentNode.appendChild(label);

            span_name.style.width = (span_text.clientWidth - 20) + 'px';
            f.addEventListener('change', e => {
                if (f.files.length == 0) {
                    span_text.innerHTML = 'Ningún archivo seleccionado';
                    span_text.style.color = "red";
                    span_text.style.border = "1px solid red";
                } else if (f.files.length > 1) {
                    span_text.innerHTML = f.files.length + ' archivos seleccionados';
                } else {
                    span_text.innerHTML = f.files[0].name;
                }
            })
        }
    );
}