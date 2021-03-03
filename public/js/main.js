

//javascript Preloader function
$(document).ready(function() {
	
	setTimeout(function(){
		$('body').addClass('loaded');
		
	}, 3000);
	
});


//Javascript Navigation scroll bar
$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

//Javascript Text effect function

var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};


$(document).ready(function() {
    // executes when HTML-Document is loaded and DOM is ready
   console.log("document is ready");
     
   
     $( ".card" ).hover(
     function() {
       $(this).addClass('shadow-lg').css('cursor', 'pointer'); 
     }, function() {
       $(this).removeClass('shadow-lg');
     }
   );
     
   // document ready  
   });

   

   function showModal(data)
{

    var data="Camera Installation";
    var body ="With decades of experience in the design, supply and installation of CCTV systems for both domestic and commercial clients, the fully qualified and trained team at our company are on hand to tailor a surveillance solution that suits your exact requirements. With wireless CCTV systems and free internet connection for remote monitoring available, you can be sure your home or business is in the best hands possible with us.";
  
   //you can do anything with data, or pass more data to this function. i set this data to modal header for example
   $("#myModal .modal-title").html(data);
   $("#myModal .modal-body").html(body);
   $("#myModal").modal();

}


function clickModal(variable) {
    var variable ="Camera Repairing";
    var body = "Every CCTV system we install comes with 12 months of free servicing and maintenance cover, with our expert engineers on hand to carry out repairs as soon as any issues arise. Our team  provide maintenance assistance to a number of high profile businesses, and our reputation for being at the forefront of surveillance maintenance has been developed over decades in the industry."

    $("#myModal .modal-title").html(variable);
    $("#myModal .modal-body").html(body);
    $("#myModal").modal();
}

function seeModal(data) {
    var data ="Survillence Camera";
    var body ="In the past, a surveillance security system typically consisted of several cameras connected—either hardwired or wireless— to a digital video recorder (DVR), which recorded the images and displayed them on a closed circuit television (CCTV) or monitor. Nowadays, it's much easier to have a standalone security camera. Whether you have one camera or several, they work with your home's internet network to send footage right to your computer or mobile device. Most consumer cameras store data internally, on a removable microSD card, or remotely on the cloud."
 

    $("#myModal .modal-title").html(data);
    $("#myModal .modal-body").html(body);
    $("#myModal").modal();
}

function createModal(data){
    var data ="CCTV Camera Service";
    var body ="We are accomplished to provide CCTV Camera Installation Services. These services are rendered by capable experts who have years of practice of his area. These services are widely used for CCTV camera installation purposes. Moreover, we render this service at nominal rates."
   
    $("#myModal .modal-title").html(data);
    $("#myModal .modal-body").html(body);
    $("#myModal").modal();
}




function displayModal(data) {
    var data ="DVR Repairs";
    var body ="A digital video recorder (DVR) is an electronic device that records video in a digital format to a disk drive, USB flash drive, SD memory card, SSD or other local or networked mass storage device. The term includes set-top boxes with direct to disk recording, portable media players and TV gateways with recording capability, and digital camcorders.[1] Personal computers are often connected to video capture devices and used as DVRs; in such cases the application software used to record video is an integral part of the DVR. Many DVRs are classified as consumer electronic devices.We also look into the DVR repairs and will try to ensure the best service so as to avoide next time fault isssue";

    $("#myModal .modal-title").html(data);
    $("#myModal .modal-body").html(body);
    $("#myModal").modal();
}

function myModal(data) {
    var data = "Configuration Of Ip Camera";
    var body =" IP camera, is a type of digital video camera that receives control data and sends image data via an IP network. They are commonly used for surveillance but unlike analog closed-circuit television (CCTV) cameras, they require no local recording device, only a local area network. Most IP cameras are webcams, but the term IP camera or netcam usually applies only to those that can be directly accessed over a network connection, usually used for surveillance.Some IP cameras require support of a central network video recorder (NVR) to handle the recording, video and alarm management. Others are able to operate in a decentralized manner with no NVR needed, as the camera is able to record directly to any local or remote storage media. We also help in mainitaining and configuring IP camera.";

    $("#myModal .modal-title").html(data);
    $("#myModal .modal-body").html(body);
    $("#myModal").modal();
}





  