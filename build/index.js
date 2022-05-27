/******/ (function() { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/HomePage.js":
/*!*******************************!*\
  !*** ./assets/js/HomePage.js ***!
  \*******************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/*
Reveal on scroll function using IntersectionObserver API.
1. HTML class for full containers and parts of containers (.home-page-el like IMG or TEXT).
2. InteresectionObserver initiated with function and threshold/root options.
3. "observerCallbackF" function loops over each entry and in case intersecting removes hiding functions.
    Then observer is ended called unobserve method.
4. Hiding classes are added on load and also intersectionObserver is initiated. 
*/
class HomePage {
  constructor() {
    this.allContainers = document.querySelectorAll('.container--home');
    this.allRevealedElements = document.querySelectorAll('.home-page-el');
    this.sectionObserver = new IntersectionObserver(this.observerCallbackF, {
      root: null,
      threshold: 0.15
    });
    this.observeF(this.sectionObserver);
    this.observeEl(this.sectionObserver);
  }

  observerCallbackF(entries, sectionObserver) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      if (entry.target.classList.contains('container--home')) {
        entry.target.classList.remove('container--scroll-hide');
      }

      if (entry.target.classList.contains('home-page-el')) {
        entry.target.classList.remove('home-page-el--hide');
      }

      sectionObserver.unobserve(entry.target);
    });
  }

  observeF(sectionObserver) {
    this.allContainers.forEach(function (container) {
      sectionObserver.observe(container);
      container.classList.add('container--scroll-hide');

      if (container.classList.contains('intro') || container.classList.contains('hero')) {
        container.classList.remove('container--scroll-hide');
      }

      ;
    });
  }

  observeEl(sectionObserver) {
    this.allRevealedElements.forEach(function (el) {
      sectionObserver.observe(el);
      el.classList.add('home-page-el--hide');
    });
  }

}

/* harmony default export */ __webpack_exports__["default"] = (HomePage);

/***/ }),

/***/ "./assets/js/LazyLoadingImg.js":
/*!*************************************!*\
  !*** ./assets/js/LazyLoadingImg.js ***!
  \*************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/*
Had some hard times combining info from two tutorials.
1. Constructor takes all img elements with data-srcset attributes.
2. IntersectionObserver is called for whole root, no threshold option and root margin to upload img before it intersected.
3. "loadImg" method takes all entries, destructures and changes srcset url to data-srcset (kinda tricking the system).
4. Called foreach directly in constructor, it works and I guess no need for separate method.
*/
class LazyLoadingImg {
  constructor() {
    this.imgTargets = document.querySelectorAll('img[data-srcset]');
    this.imgObserver = new IntersectionObserver(this.loadImg, {
      root: null,
      threshold: 0,
      rootMargin: '50px'
    });
    this.imgTargets.forEach(img => this.imgObserver.observe(img));
  }

  loadImg(entries, imgObserver) {
    const [entry] = entries;
    if (!entry.isIntersecting) return;
    entry.target.srcset = entry.target.dataset.srcset;
    imgObserver.unobserve(entry.target);
  }

}

/* harmony default export */ __webpack_exports__["default"] = (LazyLoadingImg);

/***/ }),

/***/ "./assets/js/MobileMenu.js":
/*!*********************************!*\
  !*** ./assets/js/MobileMenu.js ***!
  \*********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/*
Mobile menu:
1. Burger (as container), burger_middle the middle line and mobile menu div selected.
2. Events method called (which includes click event listener and calls toggle menu method).
3. Toggle menu adds/removes CSS classes.
*/
class MobileMenu {
  constructor() {
    this.mobileMenuDiv = document.querySelector("#burger");
    this.mobileMenuIcon = document.querySelector("#burger__middle");
    this.mobileMenuClose = document.querySelector("#mobile-menu");
    this.mobileLogo = document.querySelector("#mobile-menu-open-logo");
    this.events();
  }

  events() {
    this.mobileMenuDiv.addEventListener('click', () => {
      this.toggleMenu();
    });
  }

  toggleMenu() {
    this.mobileMenuIcon.classList.toggle("header__burger__middle--active");
    this.mobileMenuClose.classList.toggle("mobile-menu--close");
    this.mobileMenuIcon.classList.toggle("header__burger__middle--open");
    this.mobileLogo.classList.toggle("mobile-menu-open-logo--hide");
  }

}

/* harmony default export */ __webpack_exports__["default"] = (MobileMenu);

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _assets_scss_style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../assets/scss/style.scss */ "./assets/scss/style.scss");
/* harmony import */ var _assets_js_MobileMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../assets/js/MobileMenu */ "./assets/js/MobileMenu.js");
/* harmony import */ var _assets_js_HomePage__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../assets/js/HomePage */ "./assets/js/HomePage.js");
/* harmony import */ var _assets_js_LazyLoadingImg__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../assets/js/LazyLoadingImg */ "./assets/js/LazyLoadingImg.js");
//Importing main SCSS file.
 //Modules and classes



 //Instantiate new object using modules and classes

const mobileMenu = new _assets_js_MobileMenu__WEBPACK_IMPORTED_MODULE_1__["default"]();
const homePage = new _assets_js_HomePage__WEBPACK_IMPORTED_MODULE_2__["default"]();
const lazyLoadingImg = new _assets_js_LazyLoadingImg__WEBPACK_IMPORTED_MODULE_3__["default"]();

/***/ }),

/***/ "./assets/scss/style.scss":
/*!********************************!*\
  !*** ./assets/scss/style.scss ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	!function() {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = function(result, chunkIds, fn, priority) {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var chunkIds = deferred[i][0];
/******/ 				var fn = deferred[i][1];
/******/ 				var priority = deferred[i][2];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every(function(key) { return __webpack_require__.O[key](chunkIds[j]); })) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	!function() {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"index": 0,
/******/ 			"./style-index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = function(chunkId) { return installedChunks[chunkId] === 0; };
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
/******/ 			var chunkIds = data[0];
/******/ 			var moreModules = data[1];
/******/ 			var runtime = data[2];
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some(function(id) { return installedChunks[id] !== 0; })) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunkwebsitewizards"] = self["webpackChunkwebsitewizards"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["./style-index"], function() { return __webpack_require__("./src/index.js"); })
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
//# sourceMappingURL=index.js.map