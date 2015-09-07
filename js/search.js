var sticker = $("#sticker_panel");
var pos_stk = sticker.position();
ms.refinecallafter();

/*
$(function() {
	$(document).on('click','#home1', function() {
		console.log(this);
	)};
		if ($('#home1').is(':checked')) {
			console.log($('#home1'));
			$('#homeTutionPinCode').show();
		};
});
*/

/* Scroll to top Button on search page */
if (window.location.href.indexOf("/search") > -1) {
	$('#top_arrow').hide();
	var scroll_offset = 0;
	var sideBar = $('#sideBar').offset().top+$('#sideBar').outerHeight();
	$(document).scroll(function () {
		if ($(this).scrollTop() > sideBar) {
			$('#top_arrow').fadeIn();
		} else {
			$('#top_arrow').fadeOut();
		}
	});

	$('#top_arrow').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
}

$(function() {
	$('#home1').click(function() {
		var $this = $(this);
		if ($this.is(':checked')) {
			// the checkbox was checked
			$('#homeTutionPinCode').show(500,'swing');
		} else {
			// the checkbox was unchecked
			$('#homeTutionPinCode').hide(200,'swing');
		}
	})
});

$(function () {
	$(document).ready(function() {
		$(document).on({
			// Handles the mouseover
			mouseenter: function() {
				if ($(this).find('.card-reveal').length) {
					$(this).find('.card-reveal').css({ display: 'block'}).velocity("stop", false).velocity({translateY: '-100%'}, {duration: 500, queue: false, easing: 'easeInOutQuad'});
				};
			},
			// Handles the mouseout
			mouseleave: function() {
				$(this).find('.card-reveal').velocity(
					{translateY: 0}, {
						duration: 325,
						queue: false,
						easing: 'easeInOutQuad',
						complete: function() { $(this).css({ display: 'none'}); }
					}
				);
			}
		},'.card.teacherlistelm');
	});
});

var search = {

	filterDefaults : {
		search: "",
		topic: "",
		timeslot: "1-2-3-4-25-26-27-28-5-6-7-8-29-30-31-32-9-10-11-12-33-34-35-36-13-14-15-16-37-38-39-40-17-18-19-20-41-42-43-44-21-22-23-24-45-46-47-48",
		lang: "1-2-3-4-5-6-7-8-9-10-11-12-13-14",
		price: "",
		timer: "",
		home: "",
		pincode: "",
		class: "",
		subject: "",
		orderby: ""
	},

	filterNames : {
		search: "Search Query",
		topic: "Topic",
		timeslot: "Time",
		lang: "Language",
		price: "Price",
		timer: "Duration",
		home: "Home Tution",
		pincode: "Pincode",
		class: "Class",
		subject: "Subject",
		orderby: "Sort"
	},

	filterList : function(filter){
		selected = searchform();
		filters = {};
		for (list in selected) {
			if (selected.hasOwnProperty(list)) {
				if(selected[list] !== this.filterDefaults[list])
					filters[list] = true;
			}
		}
		if (filter !== undefined) {
			delete filters[filter];
			// reset the filter in searchbar
			this.resetSidebar(filter);
		};
		this.displayFilters(filters);
	},

	displayFilters : function(filters){
		filterUl = $('#filterClear').find('ul');
		li = "";
		for(filter in filters){
			if (filters.hasOwnProperty(filter)) {
				li += "<li>"+this.filterNames[filter]+"&nbsp;<i class=\"material-icons\" onclick=\"ms.refinesearch('"+filter+"')\">clear</i></li>";
			}
		}
		filterUl.html(li);
	},

	resetSidebar : function(filter){
		if (filter === 'class' || filter === 'subject' || filter === 'orderby') {
			$('[name="'+filter+'"]').find("option:first").prop("selected", true);
		} else if(filter === 'pincode'){
			$('[name="pincode"]').val("");
		} else{
			$('[name="'+filter+'"]').each(function(){
				$(this)[0].checked = $(this)[0].defaultChecked;
			});
		}
	}
}