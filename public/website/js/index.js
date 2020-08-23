if (document.querySelector('.loading-div')) {
	const UIloadingDiv = document.querySelector('.loading-div');
	window.addEventListener('load', () => {
		setTimeout(() => {
			UIloadingDiv.remove();
			document.querySelector('body').classList.remove('toggle-body-overflowY');
		}, 400);
	});
}

if (document.querySelector('[data-aos]')) {
	AOS.init();
}

// handle scrolling
const UIheaderLg = document.querySelector('.header-lg');
const UIheaderMd = document.querySelector('.header-md');

window.addEventListener('scroll', () => {
	if (window.scrollY >= 10) {
		setTimeout(() => {
			UIheaderMd.classList.add('toggle-header-md');
			UIheaderLg.classList.add('toggle-header-lg');
		}, 50);
	} else {
		setTimeout(() => {
			UIheaderMd.classList.remove('toggle-header-md');
			UIheaderLg.classList.remove('toggle-header-lg');
		}, 50);
	}
});

// Handle Header Lg
const UIheaderLgULDiv = document.querySelector('.header-lg-ul-div');
const UIfixedSubNav = document.querySelector('.fixed-sub-nav');

// clone main header md to header lg
document
	.querySelector('.header-lg .header-lg-ul-div')
	.appendChild(
		document.querySelector('.header-md .main-header-md-ul').cloneNode(true)
	);

// clone header md selected sub nav to header lg fixed sub nav
UIfixedSubNav.appendChild(
	document
		.querySelector('.header-md .main-header-md-ul .toBeClonedLi .dropped-ul')
		.cloneNode(true)
);

const headerLgClonedUl = document.querySelector(
	'.header-lg .main-header-md-ul'
);
const headerLgDropLis = document.querySelectorAll(
	'.header-lg .main-header-md-ul .drop-li'
);
for (let dropLi of headerLgDropLis) {
	dropLi.querySelector(':scope > .drop-a > i').className = 'ion-chevron-right';
	// dropLi.querySelector(':scope > .drop-a i').className = 'ion-chevron-left';
}
const UImainLiDrops = headerLgClonedUl.querySelectorAll(':scope > .drop-li');
for (let i of UImainLiDrops) {
	const UImainAdropIcon = i.querySelector(':scope > .drop-a > i');
	UImainAdropIcon.className = 'ion-chevron-down';
}

// handle headerlg dropdown links
// const UIdropLgIcons = document.querySelectorAll(".header-lg .drop-a > i");
// new HandleDrops(UIdropLgIcons);

// handle header md
const UIlines = document.querySelector('.header-md .lines');
const UIverticalMore = document.querySelector('.header-md .home-menu');
const UIuserLink = document.querySelector('.header-md .user-drop-link');
const UImainHeaderMdUlDiv = document.querySelector(
	'.header-md .main-header-md-ul-div'
);
const UIhomeHeaderMdUlDiv = document.querySelector(
	'.header-md .home-header-md-ul-div'
);
const UIuserHeaderMdUlDiv = document.querySelector(
	'.header-md .user-header-md-ul-div'
);

// main drop
UIlines.addEventListener('click', e => {
	// UIlines.classList.toggle('is-active');
	UImainHeaderMdUlDiv.classList.toggle('toggle-main-header-md-ul-div');
	document.querySelector('body').classList.add('toggle-body-overflowY');
});
document.addEventListener('click', e => {
	if (e.target.classList.contains('main-header-md-ul-div')) {
		// UIlines.classList.remove('is-active');
		UImainHeaderMdUlDiv.classList.remove('toggle-main-header-md-ul-div');
		document.querySelector('body').classList.remove('toggle-body-overflowY');
	}
});

// home drop

// handle main sidebar drop links
const UIdropMdIcons = document.querySelectorAll('.header-md .drop-a > i');
new HandleDrops(UIdropMdIcons);

function HandleDrops(dropIcons) {
	this.dropIcons = dropIcons;

	for (let dropI of this.dropIcons) {
		dropI.addEventListener('click', e => {
			let calcHeight = 0;
			let calcParentHeight = 0;
			let calcGrandParentHeight = 0;
			for (let ele of dropI.parentElement.nextElementSibling.children) {
				calcHeight += ele.children[0].offsetHeight;
			}
			if (dropI.parentElement.nextElementSibling.offsetHeight === 0) {
				for (let n of this.dropIcons) {
					n.parentElement.nextElementSibling.style.height = 0 + 'px';
					n.parentElement.classList.remove('toggle-drop-a');
				}

				dropI.parentElement.nextElementSibling.style.height = calcHeight + 'px';
				dropI.parentElement.classList.add('toggle-drop-a');
				if (
					dropI.parentElement.parentElement.parentElement.classList.contains(
						'dropped-ul'
					)
				) {
					for (let parentLi of dropI.parentElement.parentElement.parentElement
						.children) {
						calcParentHeight += parentLi.children[0].offsetHeight;
					}
					// if the grand parent element has a dropped-ul class
					// then set the garnd parent height to the dropped ul plus the grand parent direct children height
					dropI.parentElement.parentElement.parentElement.style.height =
						calcParentHeight + calcHeight + 'px';
					// dropI.parentElement.parentElement.parentElement.parentElement.classList.add('toggle-drop-a');
					dropI.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
						'toggle-drop-a'
					);
				}

				if (
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains(
						'dropped-ul'
					)
				) {
					for (let grandLi of dropI.parentElement.parentElement.parentElement
						.parentElement.parentElement.children) {
						calcGrandParentHeight += grandLi.children[0].offsetHeight;
					}
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.style.height =
						calcGrandParentHeight + calcParentHeight + calcHeight + 'px';
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
						'toggle-drop-a'
					);
				}
			} else {
				dropI.parentElement.nextElementSibling.style.height = 0 + 'px';
				dropI.parentElement.classList.remove('toggle-drop-a');
				if (
					dropI.parentElement.parentElement.parentElement.classList.contains(
						'dropped-ul'
					)
				) {
					// if the garnd element has a dropped-ul class
					// then set the grand parent height to its direct children height only
					for (let parentLi of dropI.parentElement.parentElement.parentElement
						.children) {
						calcParentHeight += parentLi.children[0].offsetHeight;
					}
					dropI.parentElement.parentElement.parentElement.style.height =
						calcParentHeight + 'px';
					dropI.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
						'toggle-drop-a'
					);
				}

				if (
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.classList.contains(
						'dropped-ul'
					)
				) {
					for (let grandLi of dropI.parentElement.parentElement.parentElement
						.parentElement.parentElement.children) {
						calcGrandParentHeight += grandLi.children[0].offsetHeight;
					}
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.style.height =
						calcGrandParentHeight + 'px';
					dropI.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.children[0].classList.add(
						'toggle-drop-a'
					);
				}
			}
			e.preventDefault();
		});
	}
}

// home main slider
var mainHomeSLider = new Swiper('.home-main-slider', {
	spaceBetween: 0,
	centeredSlides: false,
	speed: 1600,
	effect: 'fade',
	fadeEffect: {
		crossFade: true
	},
	loop: false,
	autoplay: {
		delay: 30000,
		disableOnInteraction: true
	},
	navigation: {
		nextEl: '.home-main-slider-next',
		prevEl: '.home-main-slider-prev'
	},
	pagination: {
		el: '.home-main-slider-pagination',
		clickable: true
	}
});

const servicesSlider = new Swiper('.services-slider', {
	spaceBetween: 0,
	centeredSlides: false,
	speed: 1600,
	loop: true,
	// autoplay: {
	//   delay: 8000,
	//   disableOnInteraction: true
	// },
	navigation: {
		nextEl: '.services-slider-button-next',
		prevEl: '.services-slider-button-prev'
	},
	pagination: {
		el: '.services-slider-pagination',
		clickable: true
	},
	slidesPerView: 3,
	spaceBetween: 1,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		},
		768: {
			slidesPerView: 2,
			spaceBetween: 1
		},
		1199: {
			slidesPerView: 3,
			spaceBetween: 1
		}
	}
});

// testimonials slider
const testimonialsSlider = new Swiper('.testimonials-slider', {
	spaceBetween: 0,
	centeredSlides: false,
	speed: 1600,
	// effect: "fade",
	// fadeEffect: {
	//   crossFade: true
	// },
	// loop: true,
	// autoplay: {
	//   delay: 8000,
	//   disableOnInteraction: true
	// },
	slidesPerView: 1,
	spaceBetween: 32,
	navigation: {
		nextEl: '.testimonials-slider-next',
		prevEl: '.testimonials-slider-prev'
	},
	pagination: {
		el: '.testimonials-slider-pagination',
		clickable: true
	}
});

// home partners slider
const homePartnerssSlider = new Swiper('.home-partners-slider', {
	spaceBetween: 0,
	centeredSlides: false,
	speed: 1000,
	loop: true,
	slidesPerView: 7,
	// spaceBetween: 40,
	breakpoints: {
		1199: {
			slidesPerView: 4
			// spaceBetween: 30,
		},

		767: {
			slidesPerView: 2
			// spaceBetween: 30,
		}
	},

	autoplay: {
		delay: 1000,
		disableOnInteraction: true
	}
});

if (document.querySelector('.home-partners-slider')) {
	document
		.querySelector('.home-partners-slider')
		.addEventListener('mouseenter', () => {
			homePartnerssSlider.autoplay.stop();
		});

	document
		.querySelector('.home-partners-slider')
		.addEventListener('mouseleave', () => {
			homePartnerssSlider.autoplay.start();
		});
}

// home gallery section
if (document.querySelector('.mfa-gallery')) {
	for (let g of document.querySelectorAll('.mfa-gallery')) {
		lightGallery(g, {
			thumbnail: true
		});
	}
}

// faqs section
const UIquestions = document.querySelectorAll('.question-div');
const UIanswers = document.querySelectorAll('.answer-div');
for (let a of UIanswers) {
	a.style.height = 0 + 'px';
}
UIquestions.forEach(q => {
	q.addEventListener('click', e => {
		let answerHeight = 0;
		for (let ele of q.nextElementSibling.children) {
			answerHeight += ele.offsetHeight;
		}
		if (e.currentTarget.nextElementSibling.offsetHeight === 0) {
			UIquestions.forEach(qq => {
				qq.nextElementSibling.style.height = 0 + 'px';
				qq.parentElement.classList.remove('toggle-q-a-li');
			});
			e.currentTarget.nextElementSibling.style.height = answerHeight + 'px';
		} else {
			e.currentTarget.nextElementSibling.style.height = 0 + 'px';
		}
		e.currentTarget.parentElement.classList.toggle('toggle-q-a-li');
	});
});

//////////////////////////////////////////////////////////////
if (document.querySelector('.about-drop-div')) {
	const UIaboutDropDivs = document.querySelectorAll('.about-drop-div');
	const UIaboutImages = document.querySelectorAll('.images-wrapper>ul>li');

	// open the first dropped ul
	const firstDropped = UIaboutDropDivs[0].nextElementSibling;
	let initialHeight = 0;
	for (let k of firstDropped.children) {
		initialHeight += k.offsetHeight;
	}
	firstDropped.style.height = initialHeight + 'px';
	firstDropped.parentElement.classList.add('toggle-drop-li');
	for (let dropDiv of UIaboutDropDivs) {
		dropDiv.addEventListener('click', e => {
			// reset all the dropped ul height to zero
			for (let ele of UIaboutDropDivs) {
				ele.nextElementSibling.style.height = 0 + 'px';
				ele.parentElement.classList.remove('toggle-drop-li');
			}
			// remove all the active image li
			for (let ele of UIaboutImages) {
				ele.classList.remove('active-li-img');
			}
			// calc the height of the dropped ul and set its height
			let calcDroppedHeight = 0;
			for (let h of dropDiv.nextElementSibling.children) {
				calcDroppedHeight += h.offsetHeight;
				if (dropDiv.nextElementSibling.offsetHeight === 0) {
					dropDiv.nextElementSibling.style.height = calcDroppedHeight + 'px';
					dropDiv.parentElement.classList.add('toggle-drop-li');
				} else {
					dropDiv.nextElementSibling.style.height = 0 + 'px';
					dropDiv.parentElement.classList.remove('toggle-drop-li');
				}
			}
			const toBeActiveImage = document.querySelector(
				`.images-wrapper .${dropDiv.dataset.img}`
			);
			toBeActiveImage.classList.add('active-li-img');
		});
	}
}
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////
//////////////////////// Mfa Filter ////////////////////////
if (document.querySelector('.mfa-filter-wrapper')) {
	const UIfilterContent = document.querySelector('.mfa-filter-content');
	const UImfaFilterBtns = document.querySelectorAll('.mfa-filter-btns>li');
	const UImfaFilterContent = document.querySelectorAll(
		'.mfa-filter-content>ul>li'
	);
	const UImfaFilterLoader = document.querySelector(
		'.mfa-filter-content .filter-loader'
	);

	// first of all give all the filter content the acvtive-filter-content class
	// and add the active to the __all__ button
	for (let ele of UImfaFilterContent)
		ele.classList.add('active-filter-content');
	for (let btn of UImfaFilterBtns)
		if (btn.dataset.mfaFilter === '__all__')
			btn.classList.add('active-filter-btn');

	for (let btn of UImfaFilterBtns) {
		btn.addEventListener('click', () => {
			// remove active-filter from all filter content first
			// and remove active-btn from all filter btns first
			for (let ele of UImfaFilterContent)
				ele.classList.remove('active-filter-content');
			for (let button of UImfaFilterBtns)
				button.classList.remove('active-filter-btn');

			// check if the all button is clicked, then add the active
			// class to all the filter content
			if (btn.dataset.mfaFilter === '__all__')
				for (let ele of UImfaFilterContent)
					ele.classList.add('active-filter-content');

			// then check for every button click
			// then set the active class to the button it self
			// and set the active class to the filtered content using the data attribute
			// and finally show the filter loader for one second and then hide it
			btn.classList.add('active-filter-btn');
			const filtered = document.querySelectorAll(
				`.mfa-filter-content>ul>.${btn.dataset.mfaFilter}`
			);
			for (let ele of filtered) {
				ele.classList.add('active-filter-content');
			}
			UImfaFilterLoader.classList.add('active-filter-loader');
			UIfilterContent.classList.add('hide-overflow');
			setTimeout(() => {
				UImfaFilterLoader.classList.remove('active-filter-loader');
				UIfilterContent.classList.remove('hide-overflow');
			}, 1000);
		});
	}
}
//////////////////////// Mfa Filter ////////////////////////
//////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
// counter up section
if (document.querySelector('.counter-number')) {
	$('.counter-number').counterUp({
		delay: 10,
		time: 2000
	});
}
// end counter up section
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
// handle trim servcie text
function myTrim(UIele) {
	return UIele.textContent.replace(/^\s+|\s+$/gm, ' ').trim();
}

function trimText(UIele, wordCount) {
	let myStringArray = myTrim(UIele).split(' ');
	return myStringArray.splice(0, wordCount).join(' ') + '...';
}

if (document.querySelector('.values-section')) {
	const UIdescription = document.querySelectorAll(
		'.values-section .values-card .service-desc > p'
	);
	for (let ele of UIdescription) {
		ele.textContent = trimText(ele, 16);
	}
}

// if (document.querySelector('.mfa-filter-wrapper')) {
//   const UIdescription = document.querySelectorAll(
//     '.mfa-filter-content .product-description p'
//   );
//   for (let ele of UIdescription) {
//     ele.textContent = trimText(ele, 16);
//   }
// }

// end trim
///////////////////////////////////////////////////////////

// $(function () {
//   $('#datepicker').datepicker();
// });

// handle form div
if (document.querySelector('.appointment-form')) {
	const UIformDivs = document.querySelectorAll('.appointment-form .form-div');
	UIformDivs.forEach(d => {
		d.addEventListener('click', e => {
			for (let k of UIformDivs) {
				k.classList.remove('toggle-form-div');
			}
			d.classList.add('toggle-form-div');
		});
	});

	document.addEventListener('click', e => {
		if (!e.target.parentElement.classList.contains('toggle-form-div')) {
			UIformDivs.forEach(ele => {
				ele.classList.remove('toggle-form-div');
			});
		}
	});
}
if (document.querySelector('.service-appointment-form')) {
	const UIformDivs = document.querySelectorAll(
		'.service-appointment-form .form-div'
	);
	UIformDivs.forEach(d => {
		d.addEventListener('click', e => {
			for (let k of UIformDivs) {
				k.classList.remove('toggle-form-div');
			}
			d.classList.add('toggle-form-div');
		});
	});

	document.addEventListener('click', e => {
		if (!e.target.parentElement.classList.contains('toggle-form-div')) {
			UIformDivs.forEach(ele => {
				ele.classList.remove('toggle-form-div');
			});
		}
	});
}

// handle upload property images
if (document.querySelector('.carrers-page')) {
	const UIupload = document.querySelector('input[type="file"]');
	const UIUploadLabel = document.querySelector('label[for="file"]');
	UIupload.addEventListener('change', handleFiles);

	function handleFiles() {
		const files = this.files;
		const fileNames = [];
		for (let i = 0; i < files.length; i++) {
			fileNames.push(files[i].name);
		}
		const fileNamesString = fileNames.join(' & ');
		UIUploadLabel.textContent = fileNamesString;
	}
}
// end handle upload property images

// handle hover on news li
if (document.querySelector('.news-li')) {
	const UInewslinks = document.querySelectorAll('.news-a');
	for (let a of UInewslinks) {
		a.addEventListener('mouseenter', () => {
			a.parentElement.classList.add('toggle-news-card');
		});

		a.addEventListener('mouseleave', () => {
			a.parentElement.classList.remove('toggle-news-card');
		});
	}
}

// handle pagination
if (document.querySelector('.pagination-ul')) {
	const UIpaginationUl = document.querySelector('.pagination-ul');
	for (let page of UIpaginationUl.children) {
		page.children[0].addEventListener('click', e => {
			for (let p of UIpaginationUl.children) {
				p.children[0].classList.remove('active-page');
			}
			const UIprevPage = document.querySelector(
				'.pagination-ul li:first-of-type a'
			);
			const UInextPage = document.querySelector(
				'.pagination-ul li:last-of-type a'
			);
			page.children[0].classList.add('active-page');
			if (
				UIprevPage.classList.contains('active-page') ||
				UInextPage.classList.contains('active-page')
			) {
				page.children[0].classList.remove('active-page');
			}
			e.preventDefault();
		});
	}
}

//  handle mfa form
if (document.querySelector('.mfa-form')) {
	const UIformLabels = document.querySelectorAll('.mfa-form .form-div label');

	// for any select creat an empty option with value empty string
	const UIallFormSelect = document.querySelectorAll(
		'.mfa-form .form-div label select'
	);
	const myOption = document.createElement('option');
	myOption.setAttribute('value', '');
	myOption.setAttribute('selected', true);
	// console.log(myOption);
	for (let select of UIallFormSelect) {
		select.insertBefore(myOption, select.children[0]);
	}

	// check first if the input or select has a value then add the toggle class
	for (let formLabel of UIformLabels) {
		if (formLabel.children[1].value) {
			formLabel.classList.add('toggle-form-label');
		}
	}

	for (let formLabel of UIformLabels) {
		formLabel.addEventListener('click', toggleFormLabel);
		formLabel.addEventListener('keydown', toggleFormLabelKeydown);
	}

	function toggleFormLabel(e) {
		for (let k of UIformLabels) {
			k.classList.remove('toggle-form-label');
			if (k.children[1].value) {
				k.classList.add('toggle-form-label');
			}
		}
		e.currentTarget.classList.add('toggle-form-label');
	}

	function toggleFormLabelKeydown(e) {
		if (event.keyCode == 9) {
			for (let k of UIformLabels) {
				k.classList.remove('toggle-form-label');
				if (k.children[1].value) {
					k.classList.add('toggle-form-label');
				}
			}
			e.currentTarget.parentElement.nextElementSibling.children[0].classList.add(
				'toggle-form-label'
			);
		}
		if (e.shiftKey && e.keyCode == 9) {
			for (let k of UIformLabels) {
				k.classList.remove('toggle-form-label');
				if (k.children[1].value) {
					k.classList.add('toggle-form-label');
				}
			}
			e.currentTarget.parentElement.previousElementSibling.children[0].classList.add(
				'toggle-form-label'
			);
		}
	}

	// remove the toggle if click any where else outside form label
	// that contains the toggle-form-label class
	document.addEventListener('click', e => {
		if (
			!e.target.parentElement.classList.contains('toggle-form-label') &&
			!e.target.classList.contains('toggle-form-label')
		) {
			for (let ele of UIformLabels) {
				ele.classList.remove('toggle-form-label');
				if (ele.children[1].value) {
					ele.classList.add('toggle-form-label');
				}
			}
		}
	});

	const UIformInputs = document.querySelectorAll(
		'.bmi-form .form-div label input'
	);
	for (let formInput of UIformInputs) {
		formInput.addEventListener('change', () => {
			formInput.parentElement.classList.add('toggle-form-label');
		});
	}
}

// lazy loading images
document.addEventListener('DOMContentLoaded', function () {
	let lazyImages = [].slice.call(document.querySelectorAll('img.lazy'));

	if ('IntersectionObserver' in window) {
		let lazyImageObserver = new IntersectionObserver(function (
			entries,
			observer
		) {
			entries.forEach(function (entry) {
				if (entry.isIntersecting) {
					let lazyImage = entry.target;
					lazyImage.src = lazyImage.dataset.src;
					// lazyImage.srcset = lazyImage.dataset.srcset;

					setTimeout(() => {
						lazyImage.classList.remove('lazy');
						lazyImageObserver.unobserve(lazyImage);
						lazyImage.nextElementSibling.remove();
					}, 1000);
				}
			});
		});

		lazyImages.forEach(function (lazyImage) {
			lazyImageObserver.observe(lazyImage);
		});
	} else {
		for (let lazyImg of document.querySelectorAll('img.lazy')) {
			lazyImg.src = lazyImg.dataset.src;
		}
	}
});

// handle gallery filter
if (document.querySelector('.gallery-filter-btns')) {
	const UIgalleryFilterBtns = document.querySelectorAll(
		'.gallery-filter-btns div'
	);
	for (let i of UIgalleryFilterBtns) {
		i.addEventListener('click', () => {
			console.log(i.dataset.showMe);
			for (let k of document.querySelectorAll('.gallery-layout')) {
				k.classList.remove('show-gallery-layout');
			}
			for (let m of UIgalleryFilterBtns) {
				m.classList.remove('active-filter-btn');
			}
			document
				.querySelector(`.${i.dataset.showMe}`)
				.classList.add('show-gallery-layout');
			i.classList.add('active-filter-btn');
		});
	}
}

$(function () {
	$('#bgndVideo').YTPlayer();
});

if (document.querySelector('#slider-video')) {
	setTimeout(() => {
		document.querySelector('#slider-video').removeAttribute('style');
		console.log(document.querySelector('#slider-video').getAttribute('style'));
	}, 100);
}

// handle stepper form
if (document.querySelector('.stepper-form')) {
	const UIstepperForm = document.querySelector('.stepper-form');
	const UIprevBtn = document.querySelector('.prev-btn');
	const UInextBtn = document.querySelector('.next-btn');
	const UIstepperSubmitBtn = document.querySelector('.stepper-submit-btn');
	const UIformSteps = document.querySelectorAll('.step');

	let currentStep = 0;
	UInextBtn.addEventListener('click', handleNextClick);
	UIprevBtn.addEventListener('click', handlePrevClick);

	showStep();
	createStepperIndicators();
	selectCurrentStepIndicator();

	// select all current step inputs, textareas, and selectors
	const stepErrorsObj = {};
	let UIcurrentStep = document.querySelector('.active-step');
	let UIcurrentStepInputs = UIcurrentStep.querySelectorAll(
		'.active-step input'
	);
	let UIcurrentStepTextareas = UIcurrentStep.querySelectorAll(
		'.active-step textarea'
	);
	let UIcurrentStepSelectors = UIcurrentStep.querySelectorAll(
		'.active-step select'
	);

	const UIStepperInputs = document.querySelectorAll('.stepper-form input');
	const UIStepperTextareas = document.querySelectorAll(
		'.stepper-form textarea'
	);
	const UIStepperSelectors = document.querySelectorAll('.stepper-form select');
	// validate inputs on change for each form step
	validateInputFieldOnChange(UIStepperInputs, stepErrorsObj);
	validateInputFieldOnChange(UIStepperTextareas, stepErrorsObj);
	validateInputFieldOnChange(UIStepperSelectors, stepErrorsObj);

	function handleNextClick(e) {
		e.preventDefault();
		////////////////////////////////////////////////////
		// validate inputs, selctors, textareas
		validateInputFieldOnNextClick(UIcurrentStepInputs, stepErrorsObj);
		validateInputFieldOnNextClick(UIcurrentStepTextareas, stepErrorsObj);
		validateInputFieldOnNextClick(UIcurrentStepSelectors, stepErrorsObj);

		////////////////////////////////////////////////////
		// do the following if and only if the current step is valid
		if (
			Object.keys(stepErrorsObj).length === 0 &&
			currentStep < UIformSteps.length - 1
		) {
			// increment current step
			// update the currentStep document selector
			// show a step
			// select indicator
			currentStep += 1;
			UIcurrentStep = document.querySelector(
				`.step[data-step-index="${currentStep}"]`
			);
			UIcurrentStepInputs = UIcurrentStep.querySelectorAll('input');
			UIcurrentStepTextareas = UIcurrentStep.querySelectorAll('textarea');
			UIcurrentStepSelectors = UIcurrentStep.querySelectorAll('select');

			currentStep === UIformSteps.length &&
				(currentStep = UIformSteps.length - 1);
			showStep();
			selectCurrentStepIndicator();
		}
		console.log('after click', stepErrorsObj);
	}

	function handlePrevClick(e) {
		e.preventDefault();
		// delete all the errors object attributes
		// remove the disabled from submit and next btns
		// remove has-error from every input
		// decrement current step
		// update the current step document element
		// show a step
		// select indicator

		for (let key in stepErrorsObj) {
			delete stepErrorsObj[key];
		}
		if (UIcurrentStep.querySelector('.has-error')) {
			for (let i of UIcurrentStep.querySelectorAll('.has-error')) {
				i.classList.remove('has-error');
				i.querySelector('.helper-error').textContent = '';
			}
		}

		currentStep -= 1;
		UIcurrentStep = document.querySelector(
			`.step[data-step-index="${currentStep}"]`
		);
		UIcurrentStepInputs = UIcurrentStep.querySelectorAll('input');
		UIcurrentStepTextareas = UIcurrentStep.querySelectorAll('textarea');
		UIcurrentStepSelectors = UIcurrentStep.querySelectorAll('select');

		currentStep === 0 && (currentStep = 0);
		showStep();
		// UIstepperSubmitBtn.removeAttribute('disabled');
		UInextBtn.removeAttribute('disabled');
		selectCurrentStepIndicator();
	}

	function showStep() {
		// hide the submit btn and only show it if iam in the last step
		// check if the current step is the first one the remove the prev btn
		currentStep === 0
			? (UIprevBtn.style.display = 'none')
			: (UIprevBtn.style.display = 'block');

		// check if the current step is the equal to steps lenght - 1 (last step) => then remove the next btn and show the submit btn
		if (currentStep === UIformSteps.length - 1) {
			UInextBtn.style.display = 'none';
			UIstepperSubmitBtn.style.display = 'block';
		} else {
			UInextBtn.style.display = 'block';
			UIstepperSubmitBtn.style.display = 'none';
		}

		// check if the current step is the same of the stepIndex => then add the active-step class
		for (let cs of UIformSteps) {
			cs.classList.remove('active-step');
			const stepIndex = parseInt(cs.dataset.stepIndex);
			if (currentStep === stepIndex) {
				cs.classList.add('active-step');
			}
		}
	}

	// create indicators
	function createStepperIndicators() {
		const indicators = document.createElement('div');
		indicators.classList.add('stepper-indicators');
		UIstepperForm.querySelector('.btns__indicators').insertBefore(
			indicators,
			UIstepperForm.querySelector('.btns')
		);
		for (let i = 0; i < UIformSteps.length; i++) {
			const indicator = document.createElement('div');
			indicator.classList.add('indicator');
			indicator.setAttribute('data-index', i);
			indicators.appendChild(indicator);
		}
	}

	// select the current step indicator
	function selectCurrentStepIndicator() {
		for (let i of document.querySelectorAll('.stepper-indicators .indicator')) {
			if (currentStep === parseInt(i.dataset.index))
				i.classList.add('active-indicator');
			else i.classList.remove('active-indicator');
		}
	}

	/////////////////////
	// validate input on next click
	function validateInputFieldOnNextClick(DOMcurrentStepInputs, errorsObj) {
		for (let input of DOMcurrentStepInputs) {
			if (input.type === 'checkbox') {
				if (!input.checked) {
					errorsObj[input.name] = 'Required';
					input.parentElement.classList.add('has-error');
					input.parentElement.querySelector('.helper-error').textContent =
						stepErrorsObj[input.name];
					UInextBtn.setAttribute('disabled', true);
				} else {
					delete errorsObj[input.name];
					input.parentElement.classList.remove('has-error');
					input.parentElement.querySelector('.helper-error').textContent = '';
				}
			} else if (input.type === 'radio') {
				let UIfieldRadios = input.parentElement.querySelectorAll(
					'input[type="radio"]'
				);
				let radiosHaveNoError = false;
				// false || false || false => false
				// false || true || false => true
				for (let i of UIfieldRadios) {
					radiosHaveNoError = radiosHaveNoError || i.checked;
				}
				// if no one of the radios checked
				if (!radiosHaveNoError) {
					errorsObj[UIfieldRadios[0].name] = 'Required';
					UIfieldRadios[0].parentElement.classList.add('has-error');
					UIfieldRadios[0].parentElement.querySelector(
						'.helper-error'
					).textContent = stepErrorsObj[UIfieldRadios[0].name];
					UInextBtn.setAttribute('disabled', true);
				} else {
					delete errorsObj[UIfieldRadios[0].name];
					UIfieldRadios[0].parentElement.classList.remove('has-error');
					UIfieldRadios[0].parentElement.querySelector(
						'.helper-error'
					).textContent = '';
				}
			} else {
				if (!input.value) {
					errorsObj[input.name] = 'Required';
					input.parentElement.classList.add('has-error');
					input.parentElement.querySelector('.helper-error').textContent =
						stepErrorsObj[input.name];
					UInextBtn.setAttribute('disabled', true);
				} else {
					// delete the valid properity form the errors object
					// remove the has-error class from the parent of the input
					// and clear the helper-error span
					delete errorsObj[input.name];
					input.parentElement.classList.remove('has-error');
					input.parentElement.querySelector('.helper-error').textContent = '';
				}
			}
		}
	}
	///////////////////////////
	// validate input on change
	function validateInputFieldOnChange(DOMstepperInputs, errorsObj) {
		for (let input of DOMstepperInputs) {
			input.addEventListener(
				'input',
				e => handleInputFieldChange(errorsObj, input, e),
				false
			);
			input.addEventListener(
				'blur',
				e => handleInputFieldChange(errorsObj, input, e),
				false
			);
			if (input.type === 'checkbox' || input.type === 'radio') {
				input.addEventListener(
					'click',
					e => handleInputFieldChange(errorsObj, input, e),
					false
				);
			}
		}
	}

	function handleInputFieldChange(errorsObj, input, e) {
		// input.setAttribute('value', e.target.value);
		if (input.type === 'checkbox' || input.type === 'radio') {
			if (e.target.checked && Object.keys(errorsObj).length > 0) {
				delete errorsObj[input.name];
				input.parentElement.classList.remove('has-error');
				input.parentElement.querySelector('.helper-error').textContent = '';
			} else if (!e.target.checked && Object.keys(errorsObj.length > 0)) {
				console.log('abc');
				UInextBtn.setAttribute('disabled', true);
				errorsObj[input.name] = 'Required';
				input.parentElement.classList.add('has-error');
				input.parentElement.querySelector('.helper-error').textContent =
					errorsObj[input.name];
			} else if (e.target.checked && Object.keys(errorsObj.length === 0)) {
				UInextBtn.removeAttribute('disabled');
			}
		}
		// check if any other input of type text, number, date, file ......
		else {
			if (e.target.value && Object.keys(errorsObj).length > 0) {
				// delete the valid properity form the errors object
				// remove the has-error class from the parent of the input
				// and clear the helper-error span
				delete errorsObj[input.name];
				input.parentElement.classList.remove('has-error');
				input.parentElement.querySelector('.helper-error').textContent = '';
			}

			// if there are step errros handle them
			// add this input to the errors object
			// append 'has-erro' class to its parent
			// and append the value of the error to the helper error span
			// disable the next and submit buttons
			else if (!e.target.value && Object.keys(errorsObj.length > 0)) {
				console.log('abc');
				UInextBtn.setAttribute('disabled', true);
				errorsObj[input.name] = 'Required';
				input.parentElement.classList.add('has-error');
				input.parentElement.querySelector('.helper-error').textContent =
					errorsObj[input.name];
			} else if (e.target.value && Object.keys(errorsObj.length === 0)) {
				UInextBtn.removeAttribute('disabled');
			}
		}

		console.log(errorsObj);
	}

	// UIstepperForm.addEventListener('submit', e => {
	// 	// e.preventDefault();
	// 	console.log('hi');
	// 	handleNextClick(e);
	// });
}

customSelect('select.my-select');

if (document.querySelector('.star-rating')) {
	const starRatingControls = new StarRating('.star-rating');
}
