function scrollTop(event){
    event.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    })
}

function checkScrollPosition() {
    const topLink = document.querySelector('.top_link'); 
    if (window.scrollY === 0) { 
        topLink.style.display = 'none';
    } else 
    { 
        topLink.style.display = 'block'; 
    } 
}

document.getElementById("scrollTop").addEventListener('click', scrollTop);
window.addEventListener('scroll', checkScrollPosition);
checkScrollPosition()
