/*
Had some hard times combining info from two tutorials.
1. Constructor takes all img elements with data-srcset attributes.
2. IntersectionObserver is called for whole root, no threshold option and root margin to upload img before it intersected.
3. "loadImg" method takes all entries and changes srcset url to data-srcset (kinda tricking the system).
4. Called foreach directly in constructor, it works and I guess no need for separate method.
*/
class LazyLoadingImg {
    constructor(){
        this.imgTargets = document.querySelectorAll('img[data-srcset]');
        this.imgObserver = new IntersectionObserver(this.loadImg, {
            root: null,
            threshold: 0,
            rootMargin: '100px',
        });
        this.imgTargets.forEach(img => this.imgObserver.observe(img));
    }
    loadImg(entries, imgObserver){
       entries.forEach((entry) => {
        if(!entry.isIntersecting) return;
        console.log(entry);
        entry.target.srcset = entry.target.dataset.srcset;
        imgObserver.unobserve(entry.target);
       })
    };

}
export default LazyLoadingImg;