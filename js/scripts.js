$(document).ready(function($){
  document.getElementById('preloader')&&$("#preloader").fadeOut("slow");
  mediaQueryBind();
  delegateEvents();
  //inicia_galeria();
  //unsliderInit();
  galleryInit();

});

var panel = document.getElementById('panel');
var galeria = document.getElementsByClassName('galeria')[0];
var pswpElement = document.querySelectorAll('.pswp')[0];
var pswpGalleries = [];

function mediaQueryBind() {
  document.addEventListener('animationend', function(event){
    //console.log(event.animationName);

    switch (event.animationName){
      case "large":
        console.log('large detected');
        break;
      case "small":
        console.log('small to medium detected');
        break;
    }
  }, false);
}

function delegateEvents(){
  $("form").submit(function(event){
      event.preventDefault();
  });

    //port touch events to click events
    document.addEventListener('touchend', function(e) {
      /* prevent delay and simulated mouse events */
      //console.log(e);

      if (e.classList.contains( "m-nav-toggler" ) ){
        e.stopPropagation();
        e.preventDefault();
      }
      /* trigger the actual behavior we bound to the 'click' event */
      e.target.click();
    });

    document.addEventListener('click', function (event) {
        var e = event.target;
        //e.preventDefault
        //console.log(e);

        if (e.classList.contains( "m-nav-toggler" ) ) { // botones en formas de contacto
            e.preventDefault;
            togglenav();
        }
        else if (e.classList.contains( 'send' ) ) { //envíos de formas
            e.preventDefault;
            var forma = e.form;
            checkvals(forma);
        }
        else if(e.getAttribute("data-target")){// objetos que disparan navegación
            e.preventDefault;
            navegar(e);
          }
        else if($(e).parents().hasClass('accordion')){
          var parent = findAncestor(e,"accordion"),
              granpa = findAncestor(parent,"container"),
              contentNodes = granpa.getElementsByClassName('content'),
              content = parent.getElementsByClassName('content')[0],
              el;

          if(content.classList.contains('closed')){
            for(i=0; i<contentNodes.length;i++){
              contentNodes[i].classList.add('closed');
            }
            content.classList.toggle("closed");
          }
          else {content.classList.add("closed");}
        }
        else if($(e).children().hasClass('accordion')){
          var content = e.getElementsByClassName('content')[0],
              granpa = findAncestor(e,"container"),
              contentNodes = granpa.getElementsByClassName('content');

          if(content.classList.contains('closed')){
            for(i=0; i<contentNodes.length;i++){
              contentNodes[i].classList.add('closed');
            }
            content.classList.toggle("closed");
          }
          else {content.classList.add("closed");}

        }


    }, false);
}

function navegar(e){
    var t = e.getAttribute('data-target'),
        at;

    if( t.startsWith("#")){
        //if(document.getElementsByClassName("m-nav-toggler").length>0)togglenav();
        togglers= document.getElementsByClassName("m-nav-toggler");
        toggler_v = (togglers[0].offsetParent === null);

        if(toggler_v == false){
          window.location = t;
          togglenav();

          /* Listen for a transition! */
          /*var transitionEvent = whichTransitionEvent();
          transitionEvent && panel.addEventListener(transitionEvent, function() {
          	console.log('Transition complete!  let´s scroll!');
          });*/

        }
        else{
          $('html, body').animate({scrollTop: $(t).offset().top}, 1000);
        }
        //console.log(toggler_v);

    }
    else if(t.startsWith("http")) {  window.location = t;}
    else if(t.startsWith("?")){  window.location = rootpath+'/'+e.getAttribute('data-target');}
    else if(t=="home"){  window.location = rootpath;}
    else if(t=="contacto"){ window.location = rootpath+'/#contacto';}
    console.log(t);
    //window.location=at;
}
function togglenav(){
    console.log('toggle!');
    if(panel)panel.classList.toggle("sliding");
}

function socialFeedInit(){
  $('.social-feed-container').socialfeed({
    // FACEBOOK
    facebook:{
        accounts: ['@leticiaCalderonR'],  //Array: Specify a list of accounts from which to pull wall posts
        limit: 2,                                   //Integer: max number of posts to load
        access_token: '167165777296908|0_gajIP189C4Zz9TrIt80oywol8'  //String: "APP_ID|APP_SECRET"
    },

    // TWITTER
    twitter:{
        accounts: ['@leticiaCalderonR'],                       //Array: Specify a list of accounts from which to pull tweets
        limit: 2,                                    //Integer: max number of tweets to load
        consumer_key: 'YOUR_CONSUMER_KEY',           //String: consumer key. make sure to have your app read-only
        consumer_secret: 'YOUR_CONSUMER_SECRET_KEY', //String: consumer secret key. make sure to have your app read-only
        tweet_mode: 'compatibility'                  //String: change to "extended" to show the whole tweet
     },

    // INSTAGRAM
    instagram:{
        accounts: ['@leticiaCalderonR'],  //Array: Specify a list of accounts from which to pull posts
        limit: 2,                                   //Integer: max number of posts to load
        client_id: 'YOUR_INSTAGRAM_CLIENT_ID',       //String: Instagram client id (option if using access token)
        access_token: 'YOUR_INSTAGRAM_ACCESS_TOKEN' //String: Instagram access token
    },

    // GENERAL SETTINGS
    length:400,                                     //Integer: For posts with text longer than this length, show an ellipsis.
    show_media:true,                                //Boolean: if false, doesn't display any post images
    media_min_width: 300,                           //Integer: Only get posts with images larger than this value
    update_period: 5000,                            //Integer: Number of seconds before social-feed will attempt to load new posts.
    template: "bower_components/social-feed/template.html",                         //String: Filename used to get the post template.
    template_html:                                  //String: HTML used for each post. This overrides the 'template' filename option
    '<article class="twitter-post"> \
    <h4>{{=it.author_name}}</h4><p>{{=it.text}}  \
    <a href="{{=it.link}}" target="_blank">read more</a> \
    </p> \
    </article>',
    date_format: "ll",                              //String: Display format of the date attribute (see http://momentjs.com/docs/#/displaying/format/)
    date_locale: "en",                              //String: The locale of the date (see: http://momentjs.com/docs/#/i18n/changing-locale/)
    moderation: function(content) {                 //Function: if returns false, template will have class hidden
        return  (content.text) ? content.text.indexOf('fuck') == -1 : true;
    },
    callback: function() {                          //Function: This is a callback function which is evoked when all the posts are collected and displayed
        console.log("All posts collected!");
    }
});
}

function modalInit(){
    // Get the modal
    var modal = document.getElementById('modal_contacto');

    if(!modal || modal == null) return;

    // Get the button that opens the modal
    var btn = document.getElementById("contacto_head");

    if(!btn || btn == null) return;


    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}
function unsliderInit(){
    // evaluate if there's an unslider
    var unslider = document.getElementsByClassName("unslider");

    if(!unslider[0] || unslider[0] == null) return;
    for(var i = 0; i < unslider.length; i++){
        var options = unslider[i].dataset.unslider_options;
        if(!options || options == null) {
            jQuery(unslider[i]).unslider();
        }else{
            options = JSON.parse(options);
            jQuery(unslider[i]).unslider(options);
        };

    }
}

function inicia_galeria(){
  if(!galeria)return false;
  var content = "";
  for(i=0; i<10;i++){
    content+="<a href='#'> <figure> <figcaption> </figcaption> </figure> </a>";
  }
  $(galeria).html(content)
}

function findAncestor (el, cls) {
    while ((el = el.parentElement) && !el.classList.contains(cls));
    return el;
}
function findDescendant (el, cls) {
    while ((el = el.childElements) && !el.classList.contains(cls));
    return el;
}

function galleryInit(){
  var gallery = document.getElementById('pswpGal'),
      repo = "photoLibrary",
      mediaFiles,
      mediaFolders;
  if(!gallery)return false;

  $.ajax({
      url: 'p/services/dirmedia.php',
      data: {"dir":repo},
      error: function() {
          throw "galleryInit ajax failed, callback function not initiated";
      },
      dataType: 'json',
      success: function(galleryItems) {
          if(typeof galleryItems === 'undefined' || galleryItems === null){
              throw "no diritems returned, callback not initiated";
          }
          try{
              mediaFiles = galleryItems.mediaFiles;
              mediaFolders = galleryItems.mediaFolders;
              //console.log(mediaFolders);
              if(typeof mediaFiles != 'undefined' || mediaFiles != null){
                photoswipe_GalleryBuilder(mediaFiles,'galeria-DOM');
              }

              if(typeof mediaFolders != 'undefined' || mediaFolders != null){
                var mediaFolder,
                    files=[];
                var i = 0;
                while(i<mediaFolders.length){
                  mediaFolder = mediaFolders[i];

                  $.ajax({
                      url: 'p/services/dirmedia.php',
                      data: {"dir":mediaFolder.dir},
                      error: function() {
                          throw "galleryInit ajax failed, callback function not initiated";
                      },
                      dataType: 'json',
                      async:false,
                      // timeout: 300000,
                      success: function(newgalleryItems) {
                          if(typeof newgalleryItems === 'undefined' || newgalleryItems === null){
                              throw "no diritems returned, callback not initiated";
                          }
                          files = newgalleryItems.mediaFiles;

                      },
                      type: 'GET'
                  });
                  mediaFolder.mediaFiles=files;
                  photoswipe_NestedGalleryBuilder(mediaFolder.name,files, 'pswpGal')
                  //console.log(mediaFolder);
                  i++
                }
              }


          }catch(e){
              throw (e);
              return false;
          }
      },
      type: 'GET'
  });
}


/*** initialize and build photoswipe galleries from directory items ****/
function getFolderItems(){
    var library = document.querySelectorAll("[data-sourcedir]"),
        datareferer,
        sourcedir,
        callback;

    for (i = 0 ; i < datareferers.length ; i ++ ){
        datareferer = datareferers[i];
        sourcedir = datareferer.getAttribute('data-sourcedir');
        callback = datareferer.getAttribute('data-callback');

        if(!callback ) {
            if(!datareferer.classList.contains('portfolio-item')){
                throw "no callback function declared for datasource";
            }
            callback = 'photoSwipeFromDIR';
        }

        if(typeof sourcedir=== 'undefined' || sourcedir === null){throw "data-source tag with no value available";}
        try {
            getMediaItems(datareferer,sourcedir);
        } catch (e){
            console.log(e);
            return false;
        }
    }
}

function photoSwipeFromDIR(datareferer,diritems){
    if(typeof pswpElement === 'undefined' || !pswpElement){ throw "no pswpElement found";}
    // build items array
    var items = [],
        item = [],
        pic,
        gal;

    for(var i = 0; i < diritems.length; i++) {
        pic = diritems[i];
        switch (pic.type){
            case "image":
                item = {
                    src     :   "assets/images/"+pic.dir,
                    w       :   pic.width,
                    h       :   pic.height,
                    title   :   pic.title,
                    desc    :   pic.description,
                    tags    :   pic.tag
                }
                break;
            case "video":
                var video = '<div class="wrapper"><div class="video-wrapper"><video width="'+pic.width+'" height="'+pic.height+' class="pswp__video" src="'+pic.dir+'" controls></video></div></div>'
                item = {html: video}
                break;
        }
        items.push(item);
    }

    // define options (if needed)


    var n = pswpGalleries.length, gal;
    var name = 'pswipe'+n;
    var options = {
        history: true,
        focus: true,
        showAnimationDuration: 0,
        hideAnimationDuration: 0,
        name : name
    };

    datareferer.addEventListener('click', function() {
        datareferer.preventDefault;
        pswpGalleries[n] = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gal = pswpGalleries[n]
        gal.init();

        gal.listen('beforeChange', function() {
            var currItem = $(gal.currItem.container);
            $('.pswp__video').removeClass('active');
            $('.pswp__video').trigger('pause');
            var currItemIframe = currItem.find('.pswp__video').addClass('active');
            var videos = document.getElementsByTagName("video");
            for (i=0; i<videos.length; i++){
                videos[i].pause();
            }
            //console.log(videos);
            $('.pswp__video').each(function() {
                //console.log( $(this));

                if (!$(this).hasClass('active')) {
                    $(this).attr('src', $(this).attr('src'));
                }
            });
        });

        gal.listen('close', function() {
            var videos = document.getElementsByTagName("video");
            for (i=0; i<videos.length; i++){
                videos[i].pause();
            }
            $('.pswp__video').each(function() {
                console.log( $(this));

                $(this).attr('src', $(this).attr('src'));
            });
        });
    });
}

function getMediaItems(datareferer,sourcedir){
    $.ajax({
        url: 'php/services/dirmedia.php',
        data: {"dir":sourcedir},
        error: function() {
            throw "ajax failed, callback function not initiated";
        },
        dataType: 'json',
        success: function(diritems) {
            if(typeof diritems === 'undefined' || diritems === null){
                throw "no diritems returned, callback not initiated";
            }
            try{
                photoSwipeFromDIR(datareferer,diritems);
            }catch(e){
                throw (e);
                return false;
            }
        },
        type: 'GET'
    });
}

function photoswipe_GalleryBuilder(images, parentID) {
    //console.log(images);
    var container = document.getElementById(parentID);
    if(!container || container == null) return;

    //For each image,
    for(var i = 0; i < images.length; i++) {
        var imageName = images[i].dir.split('/').pop();
        var path=images[i].dir;
        //var imgDims=(images[i].substring(images[i].lastIndexOf("dims-")+5,images[i].lastIndexOf("."))).replace(/\s/g,'');

        //        console.log("imageName = "+imageName + " | path = "+path + " | dims = "+imgDims);

        //Make a new image element, setting the source to the source in the array
        var newFig = document.createElement("figure");
        newFig.setAttribute("class", "swipe_element");
        newFig.setAttribute("itemprop", "associatedMedia");
        newFig.setAttribute("itemscope", "");
        newFig.setAttribute("itemtype","http://schema.org/ImageObject");
        //        console.log(newFig);

        var newAnchor = document.createElement("a");
        newAnchor.setAttribute("href", "assets/images/"+images[i].dir);
        newAnchor.setAttribute("itemprop", "contentUrl");
        newAnchor.setAttribute("data-size", images[i].width+'x'+images[i].height);


        var newFigInt = document.createElement("figure");

        newFigInt.setAttribute("style","background-image:url(assets/images/"+images[i].dir+")");
        newFigInt.setAttribute("data-src","assets/images/"+images[i].dir);
        newFigInt.setAttribute("itemprop", "thumbnail");
        newFigInt.setAttribute("class", "thumb");



        //        var captionText = imageName.substring(0, imageName.lastIndexOf("."));
        var captionText = imageName.substring(imageName.lastIndexOf("/"),imageName.lastIndexOf("dims-")-1).replace(/[_-]|\s/g,' ');
        var newCaption = document.createElement("figcaption");
        newCaption.setAttribute("itemprop", "caption description");
        newCaption.innerHTML= captionText;

        newAnchor.appendChild(newFigInt);
        newFig.appendChild(newAnchor);
        newFig.appendChild(newCaption);
        container.appendChild(newFig);
    }
    photoSwipeFromDOM(".galeria-DOM");
}

function photoswipe_NestedGalleryBuilder(galleryName,images, parentID) {
    //console.log(images);
    var container = document.getElementById(parentID);
    if(!container || container == null) return;

    //For each poster image,
    var posterImage =images[0];
    var imageName = galleryName;
    var path=encodeURI(posterImage.dir);
    //var imgDims=(images[i].substring(images[i].lastIndexOf("dims-")+5,images[i].lastIndexOf("."))).replace(/\s/g,'');

    //        console.log("imageName = "+imageName + " | path = "+path + " | dims = "+imgDims);

    //Make a new image element, setting the source to the source in the array
    var newFig = document.createElement("figure");
    newFig.setAttribute("class", "swipe_element");
    newFig.setAttribute("itemprop", "associatedMedia");
    newFig.setAttribute("itemscope", "");
    newFig.setAttribute("itemtype","http://schema.org/ImageObject");
    //        console.log(newFig);

    var newAnchor = document.createElement("a");
    newAnchor.setAttribute("href", "assets/images/"+path);
    newAnchor.setAttribute("itemprop", "contentUrl");
    newAnchor.setAttribute("data-size", posterImage.width+'x'+posterImage.height);


    var newFigInt = document.createElement("figure");

    newFigInt.setAttribute("style","background-image:url(assets/images/"+path+")");
    newFigInt.setAttribute("data-src","assets/images/"+path);
    newFigInt.setAttribute("itemprop", "thumbnail");
    newFigInt.setAttribute("class", "thumb");



    //        var captionText = imageName.substring(0, imageName.lastIndexOf("."));
    var captionText = imageName;
    var newCaption = document.createElement("figcaption");
    newCaption.setAttribute("itemprop", "caption description");

    var newText = document.createElement("p");
    newText.innerHTML= captionText;

    newCaption.appendChild(newText)
    newFigInt.appendChild(newCaption);
    newAnchor.appendChild(newFigInt);
    newFig.appendChild(newAnchor);
    container.appendChild(newFig);

    photoSwipeFromDIR(newFig,images)
}

function photoSwipeFromDOM(gallerySelector){

    // parse slide data (url, title, size ...) from DOM elements
    // (children of gallerySelector)
    var parseThumbnailElements = function(el) {
        var thumbElements = el.childNodes,
            numNodes = thumbElements.length,
            items = [],
            figureEl,
            linkEl,
            size,
            item;

        for(var i = 0; i < numNodes; i++) {

            figureEl = thumbElements[i]; // <figure> element

            // include only element nodes
            if(figureEl.nodeType !== 1) {
                continue;
            }

            linkEl = figureEl.children[0]; // <a> element

            size = linkEl.getAttribute('data-size').split('x');

            // create slide object
            item = {
                src: linkEl.getAttribute('href'),
                w: parseInt(size[0], 10),
                h: parseInt(size[1], 10)
            };



            if(figureEl.children.length > 1) {
                // <figcaption> content
                item.title = figureEl.children[1].innerHTML;
            }

            if(linkEl.children.length > 0) {
                // <img> thumbnail element, retrieving thumbnail url
                item.msrc = linkEl.children[0].getAttribute('data-src');
                console.log(item.msrc);
            }

            item.el = figureEl; // save link to element for getThumbBoundsFn
            items.push(item);
        }

        return items;
    };

    // find nearest parent element
    var closest = function closest(el, fn) {
        return el && ( fn(el) ? el : closest(el.parentNode, fn) );
    };

    // triggers when user clicks on thumbnail
    var onThumbnailsClick = function(e) {
        e = e || window.event;
        e.preventDefault ? e.preventDefault() : e.returnValue = false;

        var eTarget = e.target || e.srcElement;

        // find root element of slide
        var clickedListItem = closest(eTarget, function(el) {
            return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
        });

        if(!clickedListItem) {
            return;
        }

        // find index of clicked item by looping through all child nodes
        // alternatively, you may define index via data- attribute
        var clickedGallery = clickedListItem.parentNode,
            childNodes = clickedListItem.parentNode.childNodes,
            numChildNodes = childNodes.length,
            nodeIndex = 0,
            index;

        for (var i = 0; i < numChildNodes; i++) {
            if(childNodes[i].nodeType !== 1) {
                continue;
            }

            if(childNodes[i] === clickedListItem) {
                index = nodeIndex;
                break;
            }
            nodeIndex++;
        }



        if(index >= 0) {
            // open PhotoSwipe if valid index found
            openPhotoSwipe( index, clickedGallery );
        }
        return false;
    };

    // parse picture index and gallery index from URL (#&pid=1&gid=2)
    var photoswipeParseHash = function() {
        var hash = window.location.hash.substring(1),
            params = {};

        if(hash.length < 5) {
            return params;
        }

        var vars = hash.split('&');
        for (var i = 0; i < vars.length; i++) {
            if(!vars[i]) {
                continue;
            }
            var pair = vars[i].split('=');
            if(pair.length < 2) {
                continue;
            }
            params[pair[0]] = pair[1];
        }

        if(params.gid) {
            params.gid = parseInt(params.gid, 10);
        }

        return params;
    };

    var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
        var pswpElement = document.querySelectorAll('.pswp')[0],
            gallery,
            options,
            items;

        items = parseThumbnailElements(galleryElement);

        // define options (if needed)
        options = {

            // define gallery index (for URL)
            galleryUID: galleryElement.getAttribute('data-pswp-uid'),

            getThumbBoundsFn: function(index) {
                // See Options -> getThumbBoundsFn section of documentation for more info
                var thumbnail = items[index].el.getElementsByTagName('figure')[0], // find thumbnail
                    pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                    rect = thumbnail.getBoundingClientRect();

                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
            }

        };

        // PhotoSwipe opened from URL
        if(fromURL) {
            if(options.galleryPIDs) {
                // parse real index when custom PIDs are used
                // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                for(var j = 0; j < items.length; j++) {
                    if(items[j].pid == index) {
                        options.index = j;
                        break;
                    }
                }
            } else {
                // in URL indexes start from 1
                options.index = parseInt(index, 10) - 1;
            }
        } else {
            options.index = parseInt(index, 10);
        }

        // exit if index not found
        if( isNaN(options.index) ) {
            return;
        }

        if(disableAnimation) {
            options.showAnimationDuration = 0;
        }

        // Pass data to PhotoSwipe and initialize it
        gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // loop through all gallery elements and bind events
    var galleryElements = document.querySelectorAll( gallerySelector );

    for(var i = 0, l = galleryElements.length; i < l; i++) {
        galleryElements[i].setAttribute('data-pswp-uid', i+1);
        galleryElements[i].onclick = onThumbnailsClick;
    }

    // Parse URL and open gallery if it contains #&pid=3&gid=1
    var hashData = photoswipeParseHash();
    if(hashData.pid && hashData.gid) {
        openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
    }
}
