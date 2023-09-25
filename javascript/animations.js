// animate.css is bundled with the regular css, just use the classes as is

// no use in using an observer since this will always be 100% visible first


const inView = (entries,observer) => {
    entries.forEach(entry =>{
        if(entry.isIntersecting){
            const animation = entry.target.dataset.animation;

            entry.target.classList.remove('opacity-0');
            entry.target.classList.add('animate__slower');
            entry.target.classList.add('animate__animated');
            entry.target.classList.add(animation);
            observer.unobserve(entry.target);
        }
    });
}

const obsOptions = {
    threshold: 0.25
};
const Obs = new IntersectionObserver(inView, obsOptions);

document.querySelectorAll('[data-animation]').forEach(el => {
    Obs.observe(el);
});
