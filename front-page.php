<?php 
/* Template Name: Home page */

$homeTop = get_post_custom_values($key = 'home-top');

?>

<?php get_header(); ?>

<section class="container container--home hero">
    <div class="container__inner d-flex-2 pt-md pb-md">
        <div class="hero__content flex-2-child-50">
            <h1 class="heading heading--1"><?php if(isset($homeTop)) {echo $homeTop[0];}; ?></h1>
            <div class="hero__content--paragraph">
                <p><?php if(isset($homeTop)) {echo $homeTop[1];}; ?></p>
                <p><?php if(isset($homeTop)) {echo $homeTop[2];}; ?></p>
            </div>
        </div>
        <figure class="flex-2-child-50">
            <img srcset="<?php echo get_template_directory_uri() . '/images/home-top-img-mobile.webp'; ?> 365w, <?php echo get_template_directory_uri() . '/images/home-top-img.svg'; ?> 600w" alt="Home page map"/>
        </figure>
    </div>
</section>

<section class="container container--home intro container--scroll-reveal">
    <div class="container__inner txt-center pt-md pb-md">
        <h2 class="heading heading--2 clr-white pb-md">Custom solutions</h2>
        <p class="paragraph content-mx-60  clr-white home-page-el home-page-el--reveal">Let me know your vision about the perfect website and let’s see what can be created. Endless possibilities for layouts, content boxes and user journeys.</p>
    </div>
    <div class="container_inner d-flex-2 txt-center pb-md">
        <figure class="flex-2-child-50 home-page-el home-page-el--reveal">
            <img src="<?php echo get_template_directory_uri() . '/images/cms-edit-content.svg'; ?>" alt="Edit content"/>
        </figure>
        <div class="flex-2-child-50 home-page-el home-page-el--reveal">
            <h3 class="heading heading--3 clr-white pb-sm">Power of CMS</h3>
            <p class="paragraph clr-white content-mx-35">Create, edit, update content and upload images. Control the content, pages and menus in your website.</p>
        </div>
    </div>
    <div class="container_inner d-flex-2 d-flex-2--rev txt-center pb-md">
        <div class="flex-2-child-50 home-page-el home-page-el--reveal">
            <h3 class="heading heading--3 clr-white pt-sm pb-sm">All vital functions</h3>
            <p class="paragraph clr-white pb-sm content-mx-35">Post news, introduce your services or products, get questions from customers and start building your network.</p>
        </div>
        <figure class="flex-2-child-50 home-page-el home-page-el--reveal">
                <img  
                    class="lazy"
                    srcset="<?php echo get_template_directory_uri() . '/images/lazy-load.png'; ?>"
                    data-srcset="<?php echo get_template_directory_uri() . '/images/city-london-mobile.webp'; ?> 470w, <?php echo get_template_directory_uri() . '/images/city-london.svg';?> 600w" alt="Edit content"
                    alt=""
                />
            <noscript>
                <img srcset="<?php echo get_template_directory_uri() . '/images/city-london-mobile.webp'; ?> 470w, <?php echo get_template_directory_uri() . '/images/city-london.svg'; ?> 600w" alt="Edit content"/>
            </noscript>

        </figure>
    </div>
    <div class="container_inner txt-center pb-md home-page-el home-page-el--reveal">
        <a class="btn btn--white" href="">Check examples</a>
    </div>
</section>

<section class="container container--home about container--scroll-reveal">
    <div class="container__inner txt-center pt-md pb-md">
        <h2 class="heading heading--2 pb-md">About me</h2>
        <p class="paragraph content-mx-60">I am web/WordPress developer with a focus to HTML, CSS, JavaScript and functionality (WordPress CMS). I can create or update your website.</p>
    </div>
</section>

<section class="container container--home container--scroll-reveal">
    <div class="container__inner boxes pb-md">
        <div class="box">
            <figure class="box__image">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" fill="none" xmlns:v="https://vecta.io/nano"><g fill="#481a72"><path d="M256 66.666H0V221.334H256V66.666Z"/><path d="M256 34.666H0v32.04h256v-32.04z"/></g><use xlink:href="#B" fill="#e21b1b"/><use xlink:href="#B" x="13.388" opacity=".49" fill="#fff"/><g fill="#666"><use xlink:href="#B" x="26.772"/><path d="M221.76 58.53H77.98l9.56-15.672h143.788L221.76 58.53z"/></g><path d="M97.6 47.198l.928 3.564.524 2.228h.048c.156-.708.4-1.46.62-2.212l1.148-3.58h1.072l1.084 3.504.624 2.288h.044a22.06 22.06 0 0 1 .54-2.272l1.004-3.52h1.26l-2.26 7.008h-1.156l-1.072-3.344-.624-2.308h-.028c-.168.784-.38 1.56-.64 2.32l-1.132 3.332h-1.156l-2.112-7.008H97.6h0zm10.828 0l.928 3.564.524 2.228h.044c.16-.708.4-1.46.624-2.212l1.14-3.58h1.072l1.088 3.504.62 2.288h.048c.136-.768.316-1.528.54-2.272l1.004-3.52h1.26l-2.26 7.008h-1.164l-1.072-3.344a21.81 21.81 0 0 1-.62-2.308h-.032c-.164.784-.376 1.56-.636 2.32l-1.132 3.332h-1.164l-2.116-7.008h1.304 0zm10.816 0l.928 3.564.524 2.228h.044c.16-.708.4-1.46.624-2.212l1.14-3.58h1.072l1.088 3.504.62 2.288h.048c.136-.768.316-1.528.54-2.272l1.004-3.52h1.26l-2.26 7.008h-1.164l-1.076-3.344a21.81 21.81 0 0 1-.62-2.308h-.032c-.164.784-.376 1.56-.636 2.32l-1.132 3.332h-1.164l-2.116-7.008h1.308 0z" fill="#fff"/><path d="M0 205.79h41.428l15.544 15.54H0v-15.54zm256 0h-41.428l-15.544 15.54H256v-15.54z" fill="#666"/><path d="M212.224 162.514H43.776v-59.376h168.448v59.376h0zm-166.448-2h164.448v-55.376H45.776v55.376z" fill="#e21b1b"/><g fill="#fff"><path d="M94.964 148.53h-6.496l-.704-22.836L76.4 148.53h-6.64l-1.172-31.232h6.284l.276 21.856 10.716-21.856h6.968l.724 21.62 10.288-21.62h6.224L94.964 148.53z"/><path d="M136.148 148.53h-6.496l-.704-22.836-11.38 22.836h-6.624l-1.172-31.232h6.284l.276 21.856 10.716-21.856H134l.724 21.62 10.288-21.62h6.224l-15.088 31.232z"/><path d="M177.332 148.53h-6.496l-.704-22.836-11.38 22.836h-6.624l-1.172-31.232h6.284l.276 21.856 10.716-21.856h6.968l.724 21.62 10.288-21.62h6.224l-15.104 31.232z"/></g><defs ><path id="B" d="M22.096 55.154c2.465 0 4.464-1.999 4.464-4.464s-1.999-4.464-4.464-4.464-4.464 1.999-4.464 4.464 1.999 4.464 4.464 4.464z"/></defs></svg>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4>Website creation</h4>
                <p>Everything starts from the beginning - CMS, visual part and your chosen functionalities.</p>
            </div>
        </div>
        <div class="box">
        <figure class="box__image">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="none" xmlns:v="https://vecta.io/nano"><g clip-path="url(#B)"><path d="M157.013 86.4v139.947H98.987V86.4h58.026z" fill="#c4c8c4"/><path d="M128 86.4H98.987v139.947H128V86.4z" fill="#a5a9a6"/><g fill="#481a72"><path d="M237.116 169.6H18.884C8.455 169.6 0 161.145 0 150.716V31.471c0-10.429 8.455-18.884 18.884-18.884h218.232c10.429 0 18.884 8.455 18.884 18.884v119.245c0 10.429-8.455 18.884-18.884 18.884z"/><path d="M128 169.6H18.884C8.455 169.6 0 161.145 0 150.716V31.471c0-10.429 8.455-18.884 18.884-18.884H128V169.6z"/></g><g fill="#fef7ff"><path d="M233.813 35.685H22.187v110.818h211.626V35.685z"/><path d="M128 35.685H22.187v110.818H128V35.685z"/></g><g fill="#481a72"><path d="M186.88 243.413H69.12c-7.069 0-12.8-5.731-12.8-12.8s5.731-12.8 12.8-12.8h117.76c7.069 0 12.8 5.731 12.8 12.8s-5.731 12.8-12.8 12.8z"/><path d="M128 243.413H69.12c-7.069 0-12.8-5.731-12.8-12.8s5.731-12.8 12.8-12.8H128v25.6z"/></g><g fill="#a03774"><path d="M100.875 44.873s2.453 1.784 4.962 2.345c.359.08.525.495.313.796-.465.662-1.347 1.661-2.738 2.273-1.196.526-2.537-.386-2.537-1.693v-3.721h0z"/><path d="M96.188 41.706s1.075-.005 2.411.138a4.65 4.65 0 0 1 4.162 4.615v1.771c0 .598-.562 1.04-1.141.891-1.273-.328-3.418-.749-5.432-.524v-6.891h0z"/></g><path d="M97.163 41.708h-1.948v14.755h1.948V41.708z" fill="url(#A)"/><path d="M97.163 54.59h-1.948v1.873h1.948V54.59z" fill="#c76266"/><path d="M96.188 78.941h-13.77v24.503h13.77 13.771V78.941H96.188z" fill="#819fea"/><path d="M96.188 84.996c-2.226 0-4.032 1.805-4.032 4.032v3.418h4.032 4.032v-3.418c0-2.227-1.805-4.032-4.032-4.032z" fill="#3d63ad"/><path d="M82.418 78.227v4.148h27.541v-4.148H96.188h-13.77z" fill="#466dbc"/><path d="M99.362 55.124v1.337l-3.173.003-3.173-.003v-1.337c0-.56-.454-1.013-1.013-1.013h-2.6c-.56 0-1.013.454-1.013 1.013v20.143h7.8 7.8V55.124c0-.56-.454-1.013-1.013-1.013h-2.6c-.561 0-1.014.454-1.014 1.013z" fill="#819fea"/><path d="M96.188 60.671c-1.753 0-3.173 1.421-3.173 3.173v1.65h3.173 3.173v-1.65c0-1.753-1.421-3.173-3.173-3.173z" fill="#3d63ad"/><g fill="#c7daff"><path d="M110.426 69.744h-3.006c-.566 0-1.024.459-1.024 1.024v2.758h-6.128v-2.758c0-.566-.459-1.024-1.024-1.024h-3.056-3.055c-.566 0-1.024.459-1.024 1.024v2.758H85.98v-2.758c0-.566-.458-1.024-1.024-1.024H81.95h-3.006c-.566 0-1.024.459-1.024 1.024v2.758 5.965h18.267 18.267v-5.965-2.758c0-.566-.458-1.024-1.024-1.024h-3.005 0zm-14.238 34.434H68.351v30.117h27.837 27.837v-30.117H96.188z"/></g><g fill="#466dbc"><path d="M68.351 104.178v5.506h55.674v-5.506H96.188 68.351zm28.178 8.563a17.23 17.23 0 0 0-17.225 17.225v4.329h34.451v-4.329a17.23 17.23 0 0 0-17.226-17.225z"/></g><g fill="#c7daff"><path d="M109.994 119.229a17.29 17.29 0 0 0-2.495-2.543v10.897h-3.657V114.37a17.14 17.14 0 0 0-2.495-.941v14.154h-3.57v-14.792l-1.247-.05-1.248.05v14.792h-3.657v-14.129c-.862.255-1.696.574-2.495.955v13.174h-3.57v-10.897a17.31 17.31 0 0 0-2.495 2.543v8.354h-3.593a17.35 17.35 0 0 0-.168 2.383v.112h3.761v4.217h2.495v-4.217h3.57v4.217h2.495v-4.217h3.657v4.217h2.495v-4.217h3.57v4.217h2.495v-4.217h3.657v4.217h2.495v-4.217h3.761v-.112a17.51 17.51 0 0 0-.168-2.383h-3.593v-8.354h0zm9.392-20.323v2.828h-4.64v-2.828c0-.528-.428-.956-.956-.956h-3.683-3.683c-.528 0-.956.428-.956.956v2.828h-4.64v-2.828c0-.528-.428-.956-.956-.956h-3.683-3.683c-.528 0-.956.428-.956.956v2.828h-4.64v-2.828c0-.528-.428-.956-.956-.956h-3.683-3.683c-.528 0-.956.428-.956.956v2.828h-4.639v-2.828c0-.528-.428-.956-.956-.956h-3.683v3.785 4.411h27.837 27.836v-4.411-3.785h-3.683c-.528 0-.956.428-.956.956z"/></g><path d="M69.778 94.469l3.565 39.826H50.134l2.73-39.826h16.913z" fill="#819fea"/><path d="M67.717 85.269v2.761h-4.152v-2.761c0-.566-.459-1.024-1.024-1.024H59.95c-.566 0-1.024.458-1.024 1.024v2.761h-4.152v-2.761c0-.566-.458-1.024-1.024-1.024h-2.592c-.566 0-1.024.458-1.024 1.024v2.761 6.439h22.222V88.03v-2.761c0-.566-.459-1.024-1.024-1.024h-2.592c-.566 0-1.024.458-1.024 1.024z" fill="#c7daff"/><path d="M70.14 98.519l-.362-4.05H52.865l-.278 4.05H70.14z" fill="#466dbc"/><g fill="#3d63ad"><path d="M66.386 134.295v-6.361a4.57 4.57 0 0 0-4.568-4.568 4.57 4.57 0 0 0-4.568 4.568v6.361h9.136zm-1.732-20.191h-5.673v-3.792c0-1.567 1.27-2.836 2.836-2.836s2.836 1.27 2.836 2.836v3.792h0z"/></g><path d="M122.222 94.469l-3.564 39.826h23.208l-2.73-39.826h-16.914z" fill="#819fea"/><path d="M124.283 85.269v2.761h4.152v-2.761c0-.566.459-1.024 1.024-1.024h2.592c.565 0 1.024.458 1.024 1.024v2.761h4.152v-2.761c0-.566.458-1.024 1.023-1.024h2.592c.566 0 1.024.458 1.024 1.024v2.761 6.439h-22.222V88.03v-2.761c0-.566.458-1.024 1.024-1.024h2.591c.566 0 1.024.458 1.024 1.024z" fill="#c7daff"/><path d="M121.86 98.519l.362-4.05h16.914l.277 4.05H121.86z" fill="#466dbc"/><g fill="#3d63ad"><path d="M125.614 134.295v-6.361a4.57 4.57 0 0 1 4.568-4.568 4.57 4.57 0 0 1 4.569 4.568v6.361h-9.137zm1.732-20.191h5.673v-3.792c0-1.567-1.27-2.836-2.837-2.836s-2.836 1.27-2.836 2.836v3.792h0z"/></g><g fill="#481a72"><path d="M163 85.479l17.055-7.923v3.766l-12.898 5.649v.071l12.898 5.649v3.766L163 88.536V85.48zm19.689 12.402l7.604-25.762h3.589l-7.604 25.762h-3.589zM213 88.641l-17.055 7.818v-3.766l13.182-5.649v-.071l-13.182-5.649v-3.766L213 85.373v3.268z"/></g></g><defs><linearGradient id="A" x1="96.188" y1="43.523" x2="96.188" y2="55.736" gradientUnits="userSpaceOnUse"><stop offset=".005" stop-color="#ffc3b0"/><stop offset="1" stop-color="#e8897b"/></linearGradient><clipPath id="B"><path fill="#fff" d="M0 0h256v256H0z"/></clipPath></defs></svg>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4>Updates</h4>
                <p>I can add additional functions or renew style of your page. If something does not work, I might try to fix the problem or offer other working solution.</p>
            </div>
        </div>
        <div class="box">
        <figure class="box__image">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 256" fill="none" xmlns:v="https://vecta.io/nano"><style><![CDATA[.B{fill:#481a72}.C{fill:#fff}.D{fill:#f7ad7e}]]></style><g clip-path="url(#K)"><g clip-path="url(#L)"><path opacity=".18" d="M30.066 192.073s-25.029-25.636-17.522-52.77S40.28 112.146 73.218 86.72s41.604-50.869 93.023-47.402 85.516 90.713 77.431 114.403-15.026 41.603-15.026 41.603l-198.58-3.251z" class="B"/><use xlink:href="#M" class="C"/><g class="B"><use xlink:href="#M" opacity=".52"/><path d="M242.196 187.454H25.691v4.625h216.505v-4.625z"/><path d="M236.352 192.079H30.072v39.867h206.28v-39.867z"/></g><path opacity=".23" d="M236.352 192.079H30.072v9.532h206.28v-9.532z" fill="url(#A)"/><path d="M96.908 187.426H47.503l2.315-11.558h45.643l1.447 11.558z" class="B"/><path opacity=".52" d="M96.812 187.426H50.295l2.179-11.558H95.45l1.362 11.558z" fill="url(#B)"/><path d="M69.637 181.463h-.968c-.057-.278-.157-.523-.3-.733s-.312-.388-.515-.531-.423-.255-.667-.328a2.66 2.66 0 0 0-.765-.109c-.484 0-.922.122-1.315.367s-.701.605-.933 1.081-.343 1.06-.343 1.752.114 1.275.343 1.751.542.837.933 1.081.831.367 1.315.367a2.66 2.66 0 0 0 .765-.109c.244-.073.467-.181.667-.324s.375-.324.515-.535.243-.457.3-.733h.968a3.22 3.22 0 0 1-.398 1.096c-.192.323-.432.597-.718.824s-.607.394-.964.511-.732.175-1.135.175c-.681 0-1.288-.166-1.818-.499s-.948-.807-1.253-1.42-.456-1.343-.456-2.185.152-1.572.456-2.186.722-1.087 1.253-1.42 1.137-.499 1.818-.499c.403 0 .782.058 1.135.175s.678.289.964.515.526.497.718.82.325.685.398 1.096zm1.127-1.639v-.858h5.993v.858h-2.513v7.133h-.968v-7.133h-2.513zm-.815 16.138c0 .842-.152 1.571-.456 2.185s-.722 1.087-1.252 1.42-1.137.499-1.818.499-1.288-.166-1.818-.499-.948-.807-1.253-1.42-.456-1.343-.456-2.185.152-1.572.456-2.186.722-1.087 1.253-1.42 1.137-.499 1.818-.499 1.288.166 1.818.499.948.807 1.252 1.42.456 1.343.456 2.186zm-.936 0c0-.692-.116-1.276-.347-1.752s-.54-.837-.933-1.081-.827-.367-1.311-.367-.922.122-1.315.367-.701.605-.933 1.081-.343 1.06-.343 1.752.114 1.275.343 1.751.542.837.933 1.081.831.367 1.315.367.921-.122 1.311-.367.704-.605.933-1.081.347-1.06.347-1.751z" fill="#000"/><path d="M96.182 172.934s1.016-28.887 6.809-31.776 29.614-1.736 34.811-.289 9.357 22.061 10.69 25.279c2.457 5.918 11.701 9.243 11.701 9.243l-.869 12.131-54.886-.283s-6.52-1.305-8.256-14.305z" class="B"/><path d="M112.932 140.052a2.6 2.6 0 0 0-.397 1.855 8.9 8.9 0 0 0 2.133 4.897c1.197 1.364 2.641 2.489 4.256 3.314.511-1.26.919-3.461 1.98-3.847a33.76 33.76 0 0 1 3.445-.602c.068-.09-3.144-.567-3.252-.612-2.008-.494-3.433-1.742-4.8-3.297-.345-.361-.641-.765-.88-1.203-.278-.567-.039-1.333-.834-1.26-.311.012-.617.084-.9.213s-.539.314-.751.542h0z" fill="url(#C)"/><path d="M129.126 147.616c.165.193.409.408.636.3.079-.048.143-.117.187-.198a3.97 3.97 0 0 0 .477-2.871c-.209-.977-.573-1.913-1.078-2.775a11.14 11.14 0 0 0-1.572-2.315c-.295-.312-.795-.613-1.135-.335a.92.92 0 0 0-.25.494c-.255 1.004-2.655 4.846-2.054 5.753.233.358 2.735.131 3.155.415a8.3 8.3 0 0 1 1.634 1.532h0z" fill="url(#D)"/><path d="M132.281 119.256c-.113-1.56-3.285-2.241-3.79-3.405l4.817-.192s.568 6.338-1.702 9.436l-.494-1.203c.596-2.951 1.425-1.004 1.169-4.636z" fill="#984e45"/><path d="M116.938 129.799l-1.77 10.815s3.972 5.821 8.999 4.953 3.178-3.325 3.178-3.325l-.613-9.175s-3.978.948-9.794-3.268z" class="D"/><path opacity=".52" d="M116.314 133.595l.624-3.796c5.816 4.216 8.824 2.423 8.824 2.423l1.407 4.908c-.851.834.187 3.847-3.184 3.506-2.78-.272-5.407-4.051-7.671-7.041z" fill="url(#E)"/><path d="M112.393 121.946c.426 6.003 6.576 16.602 12.58 16.171s7.734-12.835 7.308-18.838-3.796-9.419-9.816-8.994c-1.427.104-2.82.487-4.099 1.13a10.88 10.88 0 0 0-3.354 2.613c-.935 1.083-1.648 2.339-2.098 3.698a10.9 10.9 0 0 0-.521 4.22h0z" class="D"/><path d="M117.358 110.438c.369-.096.482-.386.942-.777 1.787-1.532 4.307-1.827 6.565-1.583 5.64.618 6.94 4.596 8.426 3.972s4.193 1.736 2.349 4.414-4.845 3.405-8.511 1.623c-2.349-1.135-5.6-2.037-8.211-1.379a1.51 1.51 0 0 0-.587.196 1.52 1.52 0 0 0-.457.417c-.363.715-.187 2.117-.164 2.9a40.13 40.13 0 0 0 .698 5.697c-.301.028-.522-.267-.658-.54-.335-.646-.568-1.344-.874-1.997-.363-.737-1.039-1.906-1.969-1.305-.233.179-.428.403-.573.658a2.21 2.21 0 0 0-.273.829c-.266 1.282-.062 3.126 1.005 4.028.856.721 1.106 2.089 1.31 3.127.068.329.403 1.191.278 1.492-.227.534-1.01.477-1.412.153a3.05 3.05 0 0 1-.835-1.702c-.773-3.042-1.888-5.987-3.325-8.778-.36-.632-.658-1.297-.89-1.986-.361-1.541-.249-3.154.323-4.63.424-1.531 1.277-2.909 2.457-3.972 1.328-1.072 2.457-.913 3.972-.84a1.34 1.34 0 0 0 .414-.017h0z" fill="#984e45"/><path opacity=".23" d="M119.73 186.66l.868-11.269-9.243-1.299-2.894-15.746s10.69 9.822 19.678 9.561 10.111-3.757 10.111-3.757l1.703 22.249-20.223.261z" fill="url(#F)"/><path d="M121.483 146.078l1.203 2.026 1.782 1.588 3.177 34.67 6.163-.193-7.655-34.862.914-3.405s-3.853-.494-5.584.176z" fill="url(#G)"/><path d="M118.669 179.533s7.705-6.162 10.401-5.396 5.589 3.66 5.782 4.624-1.135 2.503-2.701 2.696-3.274 1.543-4.233 1.135-3.274 0-4.239 1.134-5.396 2.696-5.396 2.696-2.888-4.001.386-6.889z" class="D"/><use xlink:href="#N" class="B"/><use xlink:href="#N" fill="url(#H)"/><use xlink:href="#O" class="B"/><use xlink:href="#O" fill="url(#I)"/><use xlink:href="#P" class="B"/><use xlink:href="#P" fill="url(#J)"/><g class="B"><path d="M225.542 133.964a16.94 16.94 0 0 0 1.873-4.404l3.308-.635.034-3.66.034-3.66-3.297-.692a17.05 17.05 0 0 0-1.787-4.437l1.89-2.786-2.565-2.611-2.559-2.615-2.837 1.838c-1.372-.825-2.852-1.453-4.398-1.867l-.635-3.308-3.66-.039-3.66-.035-.687 3.274c-1.553.391-3.046.993-4.437 1.788l-2.786-1.89-2.61 2.565-2.61 2.565 1.838 2.837c-.829 1.372-1.459 2.854-1.872 4.403l-3.308.636-.034 3.66-.034 3.659 3.296.693a17.1 17.1 0 0 0 1.788 4.437l-1.867 2.792 2.565 2.61 2.564 2.616 2.837-1.839c1.372.824 2.852 1.452 4.398 1.867l.635 3.308 3.66.04 3.66.034.675-3.303c1.555-.385 3.048-.985 4.438-1.781l2.786 1.889 2.61-2.565 2.61-2.564-1.856-2.82zm-21.181-2.599c-1.244-1.267-2.084-2.875-2.414-4.619s-.136-3.548.559-5.182a8.97 8.97 0 0 1 3.344-3.997 8.98 8.98 0 0 1 9.974.093c1.467 1 2.604 2.413 3.268 4.06s.825 3.453.462 5.191a8.98 8.98 0 0 1-2.5 4.573c-.841.826-1.837 1.479-2.93 1.92s-2.263.662-3.441.651a8.97 8.97 0 0 1-3.429-.716 8.95 8.95 0 0 1-2.893-1.974h0zm-11.848-16.881a11.38 11.38 0 0 0 1.243-2.934l2.201-.419v-2.44-2.435l-2.19-.465c-.259-1.034-.66-2.027-1.192-2.95l1.26-1.856-1.702-1.742-1.702-1.736-1.879 1.22a11.41 11.41 0 0 0-2.928-1.243l-.425-2.202h-2.434-2.44l-.46 2.196a11.22 11.22 0 0 0-2.956 1.186l-1.856-1.254-1.736 1.702-1.742 1.702 1.226 1.878a11.57 11.57 0 0 0-1.249 2.934l-2.201.419v2.44 2.435l2.196.465c.258 1.034.659 2.027 1.191 2.95l-1.259 1.856 1.702 1.742 1.702 1.736 1.878-1.225a11.27 11.27 0 0 0 2.928 1.248l.426 2.202h2.434 2.434l.466-2.196a11.56 11.56 0 0 0 2.956-1.186l1.85 1.254 1.742-1.703 1.736-1.702-1.22-1.878zm-14.106-1.702a5.98 5.98 0 0 1-1.607-3.075c-.219-1.161-.09-2.361.373-3.449s1.237-2.013 2.225-2.66a5.97 5.97 0 0 1 6.639.062c.977.666 1.734 1.606 2.175 2.702a5.98 5.98 0 0 1-5.603 8.195c-1.584-.02-3.096-.669-4.202-1.804v.029z"/></g><path d="M17.066 125.713l-.641-.811 19.809-15.644 18.152 5.64 19.451-18.6 15.343 2.23 13.465-15.508.777.681-13.834 15.927-15.4-2.236-19.531 18.674-18.214-5.657-19.377 15.303z" class="C"/><g class="B"><path d="M57.257 115.137a2.76 2.76 0 0 1-.268 1.578c-.243.488-.626.893-1.1 1.164a2.75 2.75 0 0 1-1.561.355c-.544-.039-1.065-.237-1.496-.571a2.76 2.76 0 0 1-.97-2.907c.144-.526.441-.998.853-1.355a2.75 2.75 0 0 1 1.462-.653c.725-.092 1.457.108 2.035.556a2.76 2.76 0 0 1 1.046 1.833h0zm-18.237-5.408a2.76 2.76 0 0 1-1.373 2.739c-.474.27-1.017.392-1.561.353s-1.064-.238-1.495-.573a2.76 2.76 0 0 1-.967-2.907c.144-.526.441-.997.853-1.354a2.76 2.76 0 0 1 3.497-.092 2.76 2.76 0 0 1 1.046 1.834z"/></g><path d="M54.942 118.734a3.28 3.28 0 0 1-1.879-.317c-.581-.289-1.063-.744-1.386-1.308a3.28 3.28 0 0 1 .255-3.637c.398-.513.939-.897 1.554-1.102a3.27 3.27 0 0 1 1.905-.052 3.28 3.28 0 0 1 1.612 1.016c.425.49.695 1.096.775 1.74.106.861-.133 1.729-.664 2.415s-1.313 1.133-2.173 1.245h0zm-.692-5.476c-.448.051-.872.234-1.216.526a2.27 2.27 0 0 0-.687 2.439 2.27 2.27 0 0 0 2 1.555c.45.031.9-.073 1.29-.298s.706-.563.904-.968.272-.86.21-1.307a2.27 2.27 0 0 0-2.514-1.947h.011z" class="C"/><path d="M76.725 96.673c.069.541-.025 1.09-.268 1.578s-.626.893-1.1 1.163-1.017.394-1.561.356-1.065-.237-1.496-.572-.753-.789-.926-1.306a2.76 2.76 0 0 1-.044-1.601c.144-.526.441-.998.853-1.355s.921-.585 1.462-.653a2.75 2.75 0 0 1 2.037.555 2.75 2.75 0 0 1 1.045 1.834h0z" class="B"/><path d="M74.399 100.27a3.28 3.28 0 0 1-3.264-1.625 3.28 3.28 0 0 1 .255-3.638 3.28 3.28 0 0 1 3.459-1.154 3.28 3.28 0 0 1 2.387 2.756c.106.861-.133 1.729-.664 2.415s-1.313 1.133-2.173 1.245h0zm-.687-5.475a2.27 2.27 0 0 0-1.931 1.64 2.27 2.27 0 0 0 .791 2.407 2.27 2.27 0 0 0 2.528.175 2.27 2.27 0 0 0 1.114-2.275 2.24 2.24 0 0 0-.848-1.491 2.24 2.24 0 0 0-1.654-.455h0z" class="C"/><path d="M91.977 98.636c.067.541-.027 1.09-.271 1.577a2.76 2.76 0 0 1-1.102 1.162c-.474.269-1.017.392-1.561.353a2.76 2.76 0 0 1-2.419-1.88 2.76 2.76 0 0 1-.043-1.6c.144-.526.441-.997.853-1.354a2.76 2.76 0 0 1 1.462-.652 2.77 2.77 0 0 1 3.081 2.395h0z" class="B"/><g class="C"><path d="M89.651 102.228a3.28 3.28 0 0 1-3.255-1.626 3.27 3.27 0 0 1-.422-1.853c.046-.646.282-1.264.678-1.776s.936-.894 1.55-1.099a3.27 3.27 0 0 1 3.509.959c.424.489.695 1.093.776 1.735a3.28 3.28 0 0 1-.662 2.416c-.532.686-1.314 1.133-2.175 1.244h0zm-.664-5.47a2.24 2.24 0 0 0-1.848 2.933 2.24 2.24 0 0 0 1.969 1.526c.442.032.884-.069 1.269-.289a2.24 2.24 0 0 0 1.112-2.23c-.036-.292-.13-.574-.276-.829a2.24 2.24 0 0 0-.573-.66c-.233-.18-.498-.313-.782-.39a2.25 2.25 0 0 0-.872-.061h0zm-52.276 16.58c-.644.082-1.298-.028-1.879-.317a3.28 3.28 0 0 1-1.13-4.946 3.28 3.28 0 0 1 1.555-1.101 3.27 3.27 0 0 1 1.905-.052 3.28 3.28 0 0 1 2.387 2.756 3.29 3.29 0 0 1-2.837 3.66h0zm-.692-5.476a2.28 2.28 0 0 0-1.216.526 2.27 2.27 0 0 0 1.313 3.994 2.27 2.27 0 0 0 2.194-1.266 2.27 2.27 0 0 0 .21-1.308 2.24 2.24 0 0 0-.848-1.491 2.23 2.23 0 0 0-.782-.392 2.25 2.25 0 0 0-.872-.063h0z"/></g></g><g fill="#ffc847"><path d="M59.922 37.766c0-.221-.126-.411-.31-.505l-6.266-4.505-.969.696 5.212 3.748H51.6l.372 1.131h7.373a.57.57 0 0 0 .577-.566zm-6.754-14.053l-1.766 5.377h1.191l2.191-6.673a.57.57 0 0 0-.203-.633c-.197-.145-.466-.146-.665-.003l-5.97 4.292.37 1.128 4.852-3.488zm-14.336 0l4.851 3.488.37-1.128-5.97-4.292c-.2-.144-.467-.143-.665.003s-.28.4-.203.633l2.191 6.673h1.191l-1.765-5.377zM46 45.547l-1.995-6.076-.963.693 2.421 7.373c.076.233.293.39.537.39s.461-.157.538-.39l2.421-7.373-.963-.693L46 45.547zM34.411 37.2l5.212-3.748-.969-.696-6.329 4.551c-.199.143-.283.399-.208.633s.293.392.539.392h7.373l.371-1.131h-5.988 0z"/></g><path d="M50.753 34.619l1.624-1.167.969-.696 5.098-3.665h-5.85-1.191-2.466l-.62-1.888-.37-1.127-1.947-5.931-1.947 5.931-.37 1.127-.62 1.888h-2.465-1.191-5.85l5.098 3.665.969.696 1.624 1.167-.847 2.58-.371 1.132-1.719 5.235 4.732-3.402.963-.693 1.995-1.434 1.995 1.434.963.693 4.733 3.402-1.719-5.235-.372-1.132-.849-2.58zm-.739 3.986L46 35.719l-4.014 2.886 1.533-4.669-4.014-2.886h4.962L46 26.38l1.533 4.67h4.962l-4.014 2.886 1.533 4.669z" fill="#ffdd8d"/><path d="M48.48 33.936l4.014-2.885h-4.962L46 26.381l-1.533 4.669h-4.962l4.014 2.885-1.533 4.669L46 35.719l4.014 2.886-1.534-4.669z" fill="#f4c044"/><g fill="#ffc847"><path d="M46 4.305a.68.68 0 0 0 .679-.679V-.321A.68.68 0 0 0 46-1a.68.68 0 0 0-.679.679v3.947a.68.68 0 0 0 .679.679zm0 10.504a.68.68 0 0 0 .679-.679V6.704A.68.68 0 0 0 46 6.025a.68.68 0 0 0-.679.679v7.426a.68.68 0 0 0 .679.679zm0 48.885a.68.68 0 0 0-.679.679v3.948A.68.68 0 0 0 46 69a.68.68 0 0 0 .679-.679v-3.948a.68.68 0 0 0-.679-.679zm0-10.503a.68.68 0 0 0-.679.679v7.425a.68.68 0 0 0 .679.679.68.68 0 0 0 .679-.679V53.87a.68.68 0 0 0-.679-.679zm-8.231-37.29a.68.68 0 0 0 .627.419.67.67 0 0 0 .26-.052.68.68 0 0 0 .367-.886l-2.842-6.86a.68.68 0 0 0-.887-.367.68.68 0 0 0-.367.886l2.842 6.86zm16.462 36.197c-.144-.346-.541-.513-.887-.367a.68.68 0 0 0-.367.887l2.842 6.86a.68.68 0 0 0 .627.419.67.67 0 0 0 .26-.052.68.68 0 0 0 .367-.886l-2.842-6.86zM24.043 13.002a.68.68 0 0 0 .48.199.68.68 0 0 0 .48-1.159l-2.791-2.791a.68.68 0 0 0-.96 0 .68.68 0 0 0 0 .96l2.791 2.791zm7.426 7.427a.68.68 0 0 0 .48.199c.174 0 .347-.066.48-.199a.68.68 0 0 0 0-.96l-5.25-5.251a.68.68 0 0 0-.96 0 .68.68 0 0 0 0 .96l5.25 5.251zm36.488 34.568a.68.68 0 0 0-.96 0 .68.68 0 0 0 0 .96l2.791 2.792a.68.68 0 0 0 .48.199c.174 0 .347-.066.48-.199a.68.68 0 0 0 0-.96l-2.792-2.792zm-7.426-7.426a.68.68 0 0 0-.96 0 .68.68 0 0 0 0 .96l5.251 5.25a.68.68 0 0 0 .48.199c.174 0 .347-.066.48-.199a.68.68 0 0 0 0-.96l-5.251-5.25zm-40.009-23.39l6.86 2.841a.67.67 0 0 0 .259.052.68.68 0 0 0 .26-1.306l-6.861-2.841a.68.68 0 0 0-.887.367.68.68 0 0 0 .369.887zm50.956 19.638l-6.86-2.842c-.348-.145-.743.021-.887.367a.68.68 0 0 0 .367.887l6.86 2.842a.67.67 0 0 0 .26.052.68.68 0 0 0 .26-1.306z"/><use xlink:href="#Q"/><path d="M26.808 33.999a.68.68 0 0 0-.679-.679h-7.425a.68.68 0 0 0-.679.679.68.68 0 0 0 .679.679h7.425a.68.68 0 0 0 .679-.679zm53.513-.678h-3.948a.68.68 0 0 0-.679.679.68.68 0 0 0 .679.679h3.948A.68.68 0 0 0 81 34a.68.68 0 0 0-.679-.679zm-7.025 0h-7.425a.68.68 0 0 0-.679.679.68.68 0 0 0 .679.679h7.425a.68.68 0 0 0 .679-.679.68.68 0 0 0-.679-.679zm-45.027 8.023c-.143-.346-.54-.513-.887-.367l-6.86 2.842a.68.68 0 0 0 .26 1.306.67.67 0 0 0 .26-.052l6.86-2.842a.68.68 0 0 0 .367-.887zm35.462-14.689a.68.68 0 0 0 .627.419c.087 0 .175-.016.259-.052l6.861-2.841a.68.68 0 0 0 .368-.887.68.68 0 0 0-.887-.367l-6.861 2.841a.68.68 0 0 0-.367.887zM24.043 54.997l-2.791 2.792a.68.68 0 0 0 .48 1.159c.174 0 .347-.066.48-.199l2.791-2.792a.68.68 0 0 0 0-.96.68.68 0 0 0-.961 0zm7.426-7.426l-5.251 5.25a.68.68 0 0 0 .48 1.159c.174 0 .347-.066.48-.199l5.25-5.25a.68.68 0 0 0 0-.96.68.68 0 0 0-.961 0zm36.008-34.369a.68.68 0 0 0 .48-.199l2.791-2.791a.68.68 0 0 0 0-.96.68.68 0 0 0-.96 0l-2.791 2.791a.68.68 0 0 0 0 .96c.132.132.305.199.48.199zm-7.426 7.426c.174 0 .347-.066.48-.199l5.251-5.251a.68.68 0 0 0 0-.96.68.68 0 0 0-.96 0l-5.251 5.251a.68.68 0 0 0 0 .96c.132.133.306.199.48.199zM38.656 51.731c-.348-.145-.743.021-.887.367l-2.842 6.86a.68.68 0 0 0 .367.886.67.67 0 0 0 .26.052.68.68 0 0 0 .627-.419l2.842-6.86a.68.68 0 0 0-.367-.886zm14.688-35.462a.67.67 0 0 0 .26.052.68.68 0 0 0 .627-.419l2.842-6.86a.68.68 0 0 0-.367-.886.68.68 0 0 0-.887.367l-2.842 6.86a.68.68 0 0 0 .367.886z"/></g></g><defs><linearGradient id="A" x1="132.417" y1="176.401" x2="134.642" y2="233.813" xlink:href="#R"><stop offset=".01"/><stop offset=".83" stop-opacity=".07"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="B" x1="77.599" y1="161.478" x2="70.234" y2="208.71" xlink:href="#R"><stop offset=".01"/><stop offset=".83" stop-opacity=".07"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="C" x1="113.034" y1="155.066" x2="120.74" y2="138.214" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="D" x1="134.636" y1="145.272" x2="124.621" y2="142.668" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="E" x1="117.869" y1="121.435" x2="126.102" y2="151.049" xlink:href="#R"><stop offset=".01"/><stop offset=".83" stop-opacity=".07"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="F" x1="124.706" y1="213.17" x2="123.844" y2="142.384" xlink:href="#R"><stop offset=".01"/><stop offset=".83" stop-opacity=".07"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="G" x1="119.032" y1="165.597" x2="144.889" y2="163.861" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="H" x1="150.819" y1="190.252" x2="151.08" y2="178.342" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="I" x1="164.567" y1="148.807" x2="177.573" y2="192.578" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><linearGradient id="J" x1="169.532" y1="197.605" x2="171.297" y2="152.842" xlink:href="#R"><stop offset=".01"/><stop offset=".12" stop-opacity=".75"/><stop offset="1" stop-opacity="0"/></linearGradient><clipPath id="K"><path d="M0 0h256v256H0z" class="C"/></clipPath><clipPath id="L"><path transform="translate(0 39)" d="M0 0h256v192.946H0z" class="C"/></clipPath><path id="M" d="M103.967 68.693H17.713a3.75 3.75 0 0 0-3.751 3.751v58.909a3.75 3.75 0 0 0 3.751 3.751h86.254a3.75 3.75 0 0 0 3.751-3.751V72.444a3.75 3.75 0 0 0-3.751-3.751z"/><path id="N" d="M122.834 187.568h56.208c1.577 0 2.854-1.278 2.854-2.854s-1.277-2.854-2.854-2.854h-56.208c-1.577 0-2.855 1.277-2.855 2.854s1.278 2.854 2.855 2.854z"/><path id="O" d="M144.594 182.092l.936 3.03 39.919 2.446 11.376-28.854c.152-.384.207-.799.162-1.21a2.54 2.54 0 0 0-.423-1.145c-.232-.342-.544-.622-.909-.815a2.52 2.52 0 0 0-1.184-.296h-33.847c-1.64 0-3.241.494-4.596 1.417a8.17 8.17 0 0 0-3.002 3.757l-8.432 21.67z"/><path id="P" d="M144.509 187.602h40.974l10.781-27.407a2.41 2.41 0 0 0-.247-2.237c-.221-.324-.517-.59-.864-.774s-.733-.279-1.125-.28h-32.133a7.76 7.76 0 0 0-4.366 1.345c-1.287.877-2.281 2.12-2.852 3.569l-10.168 25.784z"/><path id="Q" d="M15.627 33.321h-3.948a.68.68 0 0 0-.679.679.68.68 0 0 0 .679.679h3.948a.68.68 0 0 0 .679-.679.68.68 0 0 0-.679-.679z"/><linearGradient id="R" gradientUnits="userSpaceOnUse"/></defs></svg>
            </figure>
            <div class="box__content home-page-el home-page-el--reveal">
                <h4>Regular work</h4>
                <p>We can agree on regular cooperation and monthly or weekly number of hours.</p>
            </div>
        </div>
    </div>
</section>

<?php 
/*
Passing CSS class name as argument to template part and footer to apply reveal on scroll effect.
NOTE: The last style rule hides lazy loaded img in case JavaScript is turned off.
*/
$args = array('class' => 'container--home');
get_template_part('template-parts/call-to-contact', '', $args); 
?>
<?php get_footer(null, $args); ?>

<noscript>
  <style>.lazy { display: none; }</style>
</noscript>