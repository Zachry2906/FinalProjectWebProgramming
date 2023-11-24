const scroll = document.getElementById('nav1')
window.addEventListener('scroll', fixNav)

function fixNav() {
    if (window.scrollY > scroll.offsetHeight + 150) {
        scroll.style.backgroundColor = '#ECEDEF'
    } else {
        scroll.style.backgroundColor = 'transparent'
    }
}

const tombols = document.querySelectorAll('.tombol')
const toasts = document.getElementById('toasts')

tombols.forEach(tombol => {
    tombol.addEventListener('click', function () {
        console.log("ggg");
        createNotif('Silahkan Login Terlebih dahulu')
    })
})

function createNotif(message = null) {
    const notif = document.createElement('div')
    notif.classList.add('bg-danger')
    notif.classList.add('text-light')
    notif.classList.add('rounded')
    notif.classList.add('p-2')
    notif.classList.add('mt-2')
    notif.classList.add('ms-3')

    notif.innerText = message

    toasts.appendChild(notif)

    setTimeout(() => {
        notif.remove()}, 3000)
    }
