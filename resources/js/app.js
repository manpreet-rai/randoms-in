import './bootstrap';

history.replaceState(null, null, ' ');

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
        let $notification = $delete.parentNode;

        $delete.addEventListener('click', () => {
            $notification.classList.toggle("disappear");
            setTimeout(()=>{
                $notification.parentNode.removeChild($notification);
            }, 300)
        });
    });
});
