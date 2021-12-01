let X, Y, R;

window.onload = function () {
    let btns = document.querySelectorAll(".form__R-button[name='R']")

    btns.forEach(function (el) {
        el.addEventListener('click', function () {
            btns.forEach(function (btn) {
                // btn.classList.remove('form__R-button--active')
                btn.setAttribute('active', false)
            })
            this.setAttribute('active', true)
            // this.classList.add('form__R-button--active')
        })
    })

    document.getElementById('btn-clear').onclick = function () {
        fetch('clear.php', {
            method: 'post'
        })
            .then(response => response.text())
            .then(function (result) {
                    document.getElementById('table').innerHTML = result;
                }
            );
    }

    document.getElementById('main-form').onsubmit = function () {
        if (validateX() & validateY() & validateR()) {
            let data = new FormData();
            data.append('x', X);
            data.append('y', Y);
            data.append('r', R);


            let res = 'some';

            fetch('script.php', {
                method: 'POST',
                body: data
            })
                .then(response => response.text())
                .then(function (result) {
                        document.getElementById('table').innerHTML = result;
                    }
                );
        }

        return false;
    }
}


function validateX() {
    let x_val = document.querySelector(".form__X-text[name='X']").value;
    let error_block = document.getElementById('form__X-error')

    if (isNaN(x_val) || x_val === '' || x_val > 3 || x_val < -3) {
        error_block.innerHTML = 'Введите число от -3 до 3'
        return false;
    }
    error_block.innerHTML = ''
    X = Number(x_val)
    return true
}

function validateY() {
    let y_field = document.querySelector(".form__Y-radio[name=Y]:checked");
    let error_block = document.getElementById('form__Y-error')

    if (y_field === null) {
        error_block.innerHTML = 'Выберите заничение'
        return false;
    }
    let y_val = y_field.value;

    if (y_val === '') {

    }

    if (isNaN(y_val) || y_val > 4 || y_val < -4) {
        error_block.innerHTML = 'Не ломай'
        return false;
    }

    error_block.innerHTML = ''
    Y = Number(y_val)
    return true
}

function validateR() {
    let r_fields = document.querySelectorAll('.form__R-button[name=R][active=true]')
    let error_block = document.getElementById('form__R-error')

    if (r_fields.length === 0) {
        error_block.innerHTML = 'Выберите значение'
        return false;
    }

    if (r_fields.length > 1) {
        error_block.innerHTML = 'Не ломай'
        return false;
    }

    let r_val = r_fields[0].value

    if (isNaN(r_val) || r_val > 5 || r_val < 1) {
        error_block.innerHTML = 'Не ломай'
        return false;
    }

    error_block.innerHTML = ''
    R = Number(r_val)
    return true
}
