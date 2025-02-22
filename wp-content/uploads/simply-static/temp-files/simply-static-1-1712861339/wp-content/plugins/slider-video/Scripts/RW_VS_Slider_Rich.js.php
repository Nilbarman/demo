<script type="text/javascript"><!--
	/*!
	 * Responsive Video Gallery - A jQuery plugin that provides a slider with horizontal and vertical thumb layouts for video galleries.
	 * @version 1.0.9
	 * @link http://fooplugins.github.io/rvslider/
	 * @copyright Steven Usher & Brad Vincent 2015
	 * @license Released under the GPLv3 license.
	 */
	var Rich_Web_VSlider_ID = jQuery('.Rich_Web_VSlider_ID').val();
	! function(a, b) {
	    function c(a) { if ("undefined" != typeof e.style[a]) return !0; for (var b = 0, c = d.length; c > b; b++) { var f = d[b] + a.charAt(0).toUpperCase() + a.substr(1); if ("undefined" != typeof e.style[f]) return !0 } return !1 }
	    a.fn.rvslider1 = function(c) {
	        return this.each(function() {
	            var d = a(this).data("__RVSlider__");
	            d instanceof b.RVSlider && d.destroy(), b.RVSlider(this, c)
	        })
	    }, b.RVSlider = function(c, d) {
	        if (!(this instanceof b.RVSlider)) return new b.RVSlider(c, d);
	        var e = a(c);
	        this.$ = { el: e, empty: e.find(".rvs-empty") }, this.o = a.extend(!0, {}, b.RVSlider.defaults, d), this.index = this.o.selected, this.breakpoints = "[object Array]" === Object.prototype.toString.call(this.o.breakpoints) ? this.o.breakpoints : [
	            [480, "rvs-xs", 2],
	            [768, "rvs-xs rvs-sm", 3],
	            [1024, "rvs-xs rvs-sm rvs-md", 4],
	            [1280, "rvs-xs rvs-sm rvs-md rvs-lg", 5],
	            [1600, "rvs-xs rvs-sm rvs-md rvs-lg rvs-xl", 6]
	        ], this.breakpoint = null, this.useViewport = this.$.el.hasClass("rvs-use-viewport"), this.items = new b.RVSliderItems(this), this.nav = new b.RVSliderNav(this), this.player = new b.RVSliderPlayer(this), this.resize(), this.setActive(this.index), this.$.el.addClass("rvs-animate").data("__RVSlider__", this), a(window).on("resize.rvs", { self: this }, this.onWindowResize)
	    }, b.RVSlider.defaults = { selected: 0, swipe: { deadzone: 10, items: .05, nav: .1, touches: 1 }, breakpoints: null };
	    var d = ["Webkit", "Moz", "ms", "O", "Khtml"],
	        e = document.createElement("div");
	    b.RVSlider.supportsTransitions = c("transition"), b.RVSlider.prototype.destroy = function() { a(window).off("resize.rvs", this.onWindowResize), this.$.el.removeClass("rvs-animate").removeData("__RVSlider__"), this.player.destroy(), this.nav.destroy(), this.items.destroy() }, b.RVSlider.prototype._breakpoint = function() {
	        var a, b = "devicePixelRatio" in window && "number" == typeof window.devicePixelRatio ? window.devicePixelRatio : 1,
	            c = 0,
	            d = this.breakpoints.length,
	            e = this.useViewport ? (window.innerWidth || document.documentElement.clientWidth || (document.body ? document.body.offsetWidth : 0)) / b : this.$.el.parent().innerWidth();
	        for (this.breakpoints.sort(function(a, b) { return a[0] - b[0] }); d > c; c++)
	            if (this.breakpoints[c][0] >= e) { a = this.breakpoints[c]; break }
	        return a || (a = this.breakpoints[d - 1]), a
	    }, b.RVSlider.prototype.preresize = function() { this.$.el.removeClass("rvs-animate") }, b.RVSlider.prototype.resize = function() { this.breakpoint = this._breakpoint(), this.$.el.removeClass(this.breakpoints[this.breakpoints.length - 1][1]).addClass(this.breakpoint[1]), this.items.resize(), this.nav.resize(), this.$.el.addClass("rvs-animate") }, b.RVSlider.prototype.setActive = function(a) { 0 == this.items.count ? this.$.empty.show() : (this.$.empty.hide(), this.items.setActive(a), this.nav.setActive(a), this.player.setActive(a), this.index = a) }, b.RVSlider.prototype.onWindowResize = function(a) {
	        var b = a.data.self;
	        b.__resize__ && clearTimeout(b.__resize__), b.preresize(), b.__resize__ = setTimeout(function() { b.__resize__ = !1, b.resize() }, 50)
	    }
	}(jQuery, window.FooPlugins = window.FooPlugins || {}),
	function(a, b) {
	    b.RVSliderItems = function(a) {
	        if (!(this instanceof b.RVSliderItems)) return new b.RVSliderItems(a);
	        this.rvs = a;
	        var c = this;
	        this.$ = { container: c.rvs.$.el.find(".rvs-item-container"), stage: c.rvs.$.el.find(".rvs-item-stage").on("touchstart.rvs", { self: c }, c.onTouchStart), items: c.rvs.$.el.find(".rvs-item") }, this.count = c.$.items.length, this.touched = !1, this.start = [0, 0], this.diff = [0, 0], this.width = 0, this.height = 0
	    }, b.RVSliderItems.prototype.destroy = function() { this.$.stage.off("touchstart.rvs", this.onTouchStart).off("touchmove.rvs", this.onTouchMove).off("touchend.rvs", this.onTouchEnd), this.$.stage.css({ width: "", transform: "" }), this.$.items.css({ width: "", left: "" }).removeClass("rvs-active") }, b.RVSliderItems.prototype.resize = function() {
	        var b = this;
	        b.width = b.$.container.width(), b.height = b.$.container.height(), b.$.items.each(function(c) { a(this).css({ width: b.width, left: c * b.width }) }), b.$.stage.css({ width: b.width * b.count, transform: "translateX(-" + b.rvs.index * b.width + "px)" })
	    };
	    var c = a("<div/>").css({ position: "absolute", top: -9999, left: -9999, visibility: "hidden" }),
	        d = function(a, b) { return c.appendTo("body").css("transform", "translateX(-" + a * b + "px)"), c.css("transform") };
	    b.RVSliderItems.prototype.setActive = function(a) {
	        if (a >= 0 && a < this.count) {
	            var c = this,
	                e = this.$.stage.css("transform"),
	                f = d(a, this.width);
	            this.$.stage.one("transitionend", function() { c.$.items.removeClass("rvs-active").eq(a).addClass("rvs-active") }).css("transform", "translateX(-" + a * this.width + "px)"), b.RVSlider.supportsTransitions && e !== f || this.$.stage.trigger("transitionend")
	        } else this.$.stage.css("transform", "translateX(-" + this.rvs.index * this.width + "px)")
	    }, b.RVSliderItems.prototype.onTouchStart = function(a) {
	        var b = a.data.self,
	            c = a.originalEvent.touches || a.touches;
	        c.length == b.rvs.o.swipe.touches && (b.touched = !0, b.start = [c[0].pageX, c[0].pageY], b.$.stage.on("touchmove.rvs", { self: b }, b.onTouchMove).on("touchend.rvs", { self: b }, b.onTouchEnd))
	    }, b.RVSliderItems.prototype.onTouchMove = function(a) {
	        var b = a.data.self,
	            c = a.originalEvent.touches || a.touches;
	        b.touched && c.length == b.rvs.o.swipe.touches && (b.diff = [b.start[0] - c[0].pageX, b.start[1] - c[0].pageY], Math.abs(b.diff[0]) > b.rvs.o.swipe.deadzone && a.preventDefault())
	    }, b.RVSliderItems.prototype.onTouchEnd = function(a) {
	        var b = a.data.self;
	        b.$.stage.off("touchmove.rvs touchend.rvs"), Math.abs(b.diff[0]) > b.width * b.rvs.o.swipe.items && (b.diff[0] > 0 ? b.rvs.setActive(b.rvs.index + 1) : b.diff[0] < 0 && b.rvs.setActive(b.rvs.index - 1)), b.diff = [0, 0], b.start = [0, 0], b.touched = !1
	    }
	}(jQuery, window.FooPlugins = window.FooPlugins || {}),
	function(a, b) {
	    b.RVSliderNav = function(a) {
	        if (!(this instanceof b.RVSliderNav)) return new b.RVSliderNav(a);
	        this.rvs = a;
	        var c = this;
	        this.$ = { container: c.rvs.$.el.find(".rvs-nav-container"), stage: c.rvs.$.el.find(".rvs-nav-stage").on("touchstart.rvs", { self: c }, c.onTouchStart).on("DOMMouseScroll.rvs mousewheel.rvs", { self: c }, c.onMouseWheel), items: c.rvs.$.el.find(".rvs-nav-item").on("click.rvs", { self: c }, c.onItemClick), prev: c.rvs.$.el.find(".rvs-nav-prev").on("click.rvs", { self: c }, c.onPrevClick), next: c.rvs.$.el.find(".rvs-nav-next").on("click.rvs", { self: c }, c.onNextClick) }, this.horizontal = c.rvs.$.el.hasClass("rvs-horizontal"), this.thumbPlay = c.rvs.$.el.hasClass("rvs-thumb-play"), this.touchable = "ontouchstart" in document.documentElement, this.count = c.$.items.length, this.touched = !1, this.start = [0, 0], this.diff = [0, 0], this.height = 0, this.width = 0, this.visible = { max: 0, first: 0, last: 0 }
	    }, b.RVSliderNav.prototype.destroy = function() {
	        this.$.stage.off("touchstart.rvs", this.onTouchStart).off("touchmove.rvs", this.onTouchMove).off("touchend.rvs", this.onTouchEnd).off("DOMMouseScroll.rvs mousewheel.rvs", this.onMouseWheel), this.$.items.off("click.rvs", this.onItemClick), this.$.prev.off("click.rvs", this.onPrevClick), this.$.next.off("click.rvs", this.onNextClick), this.$.stage.css({ width: "", transform: "" }), this.$.items.css({ width: "", left: "" }).removeClass("rvs-active")
	    }, b.RVSliderNav.prototype.resize = function() {
	        var b = this;
	        b.horizontal ? (b.visible.max = b.rvs.breakpoint[2], b.width = Math.floor(b.rvs.items.width / b.visible.max) + 1, b.$.stage.css("width", b.width * b.count), b.$.items.each(function(c) { a(this).css({ width: b.width, left: c * b.width }) })) : (b.height = b.$.items.first().outerHeight(), b.visible.max = Math.ceil(b.rvs.items.height / b.height)), b.setVisible(b.visible.first)
	    }, b.RVSliderNav.prototype.setVisible = function(a, b) {
	        if (a = 0 > a ? 0 : a >= this.count ? this.count - 1 : a, b && (a -= this.visible.max - 1), a >= 0 && a + (this.visible.max - 1) < this.count) {
	            var c = this.horizontal ? "translateX(-" + (a * this.width + 1) + "px) translateY(-1px)" : "translateX(0px) translateY(-" + (a * (this.height + (25 - a)) + 2) + "px)";
	            this.$.stage.css("transform", c), this.visible.first = a, this.visible.last = a + (this.visible.max - 1)
	        }
	        this.touchable || 0 == this.visible.first ? this.$.prev.detach() : 0 == this.$.prev.parent().length && this.$.container.prepend(this.$.prev), this.touchable || this.visible.last == this.count - 1 || this.visible.max > this.count - 1 ? this.$.next.detach() : 0 == this.$.next.parent().length && this.$.container.append(this.$.next)
	    }, b.RVSliderNav.prototype.setActive = function(a) {
	        a >= 0 && a < this.count && (this.$.items.removeClass("rvs-active").eq(a).addClass("rvs-active"), a <= this.visible.first ? this.setVisible(a - 1) : a >= this.visible.last && this.setVisible(a + 1, !0))
	    }, b.RVSliderNav.prototype.onItemClick = function(b) {
	        b.preventDefault();
	        var c = b.data.self,
	            d = a(this),
	            e = d.find(".rvs-nav-item-thumb");
	        c.rvs.setActive(d.index()), c.thumbPlay && e.length && (e.is(b.target) || a.contains(e[0], b.target)) && c.rvs.player.toggle()
	    }, b.RVSliderNav.prototype.onPrevClick = function(a) {
	        a.preventDefault(), a.data.self.setVisible(a.data.self.visible.first - Math.floor(a.data.self.visible.max / 2))
	    }, b.RVSliderNav.prototype.onNextClick = function(a) { a.preventDefault(), a.data.self.setVisible(a.data.self.visible.last + Math.floor(a.data.self.visible.max / 2), !0) }, b.RVSliderNav.prototype.onMouseWheel = function(a) {
	        var b, c = a.data.self;
	        c.count > c.visible.max && ((a.originalEvent.wheelDelta > 0 || a.originalEvent.detail < 0) && 0 !== c.visible.first ? b = c.visible.first - 1 : (a.originalEvent.wheelDelta < 0 || a.originalEvent.detail < 0) && c.visible.last !== c.count - 1 && (b = c.visible.first + 1), "number" != typeof b || isNaN(b) || (a.preventDefault(), c.setVisible(b)))
	    }, b.RVSliderNav.prototype.onTouchStart = function(a) {
	        var b = a.data.self,
	            c = a.originalEvent.touches || a.touches;
	        c.length == b.rvs.o.swipe.touches && (b.touched = !0, b.start = [c[0].pageX, c[0].pageY], b.$.stage.on("touchmove.rvs", { self: b }, b.onTouchMove).on("touchend.rvs", { self: b }, b.onTouchEnd))
	    }, b.RVSliderNav.prototype.onTouchMove = function(a) {
	        var b = a.data.self,
	            c = a.originalEvent.touches || a.touches;
	        b.touched && c.length == b.rvs.o.swipe.touches && (b.diff = [b.start[0] - c[0].pageX, b.start[1] - c[0].pageY], this.horizontal || a.preventDefault())
	    }, b.RVSliderNav.prototype.onTouchEnd = function(a) {
	        var b = a.data.self,
	            c = Math.abs(b.diff[0]),
	            d = Math.abs(b.diff[1]);
	        b.$.stage.off("touchmove.rvs touchend.rvs"), b.horizontal ? c > b.width * b.rvs.o.swipe.nav && (b.diff[0] > 0 ? b.setVisible(b.visible.last + Math.ceil(c / b.width), !0) : b.diff[0] < 0 && b.setVisible(b.visible.first - Math.ceil(c / b.width))) : d >= b.height * b.rvs.o.swipe.nav && (b.diff[1] > 0 ? b.setVisible(b.visible.last + Math.ceil(d / b.width), !0) : b.diff[1] < 0 && b.setVisible(b.visible.first - Math.ceil(d / b.width))), b.diff = [0, 0], b.start = [0, 0], b.touched = !1
	    }
	}(jQuery, window.FooPlugins = window.FooPlugins || {}),
	function(a, b) {
	    b.RVSliderVideoUrl = function(c) {
	        if (!(this instanceof b.RVSliderVideoUrl)) return new b.RVSliderVideoUrl(c);
	        var d = c.split("#");
	        this.hash = 2 == d.length ? "#" + d[1] : "", d = d[0].split("?"), this.url = d[0];
	        var e = this.url.match(/.*\/(.*)$/);
	        this.id = e && e.length >= 2 ? e[1] : null, this.protocol = "https:" === window.location.protocol ? "https:" : "https" == c.substring(0, 5) ? "https:" : "http:", this.params = [];
	        for (var f, g = (2 == d.length ? d[1] : "").split(/[&;]/g), h = 0, i = g.length; i > h; h++) f = g[h].split("="), 2 == f.length && this.params.push({ key: decodeURIComponent(f[0]), value: decodeURIComponent(f[1]) });
	        this.mimeTypes = { "video/youtube": /(www.)?youtube|youtu\.be/i, "video/vimeo": /(player.)?vimeo\.com/i, "video/wistia": /(.+)?(wistia\.(com|net)|wi\.st)\/.*/i, "video/daily": /(www.)?dailymotion\.com|dai\.ly/i, "video/mp4": /\.mp4/i, "video/webm": /\.webm/i, "video/wmv": /\.wmv/i, "video/ogg": /\.ogv/i }, this.mimeType = null;
	        for (var j in this.mimeTypes) this.mimeTypes.hasOwnProperty(j) && this.mimeTypes[j].test(c) && (this.mimeType = j);
	        var k = navigator.userAgent.toLowerCase(),
	            l = k.indexOf("msie ") > -1 || k.indexOf("trident/") > -1 || k.indexOf("edge/") > -1,
	            m = !document.addEventListener;
	        if (this.isDirectLink = -1 !== a.inArray(this.mimeType, ["video/mp4", "video/wmv", "video/ogg", "video/webm"]), this.isBrowserSupported = this.isDirectLink ? -1 !== a.inArray(this.mimeType, l ? m ? [] : ["video/mp4", "video/wmv"] : ["video/mp4", "video/ogg", "video/webm"]) : !0, "video/youtube" == this.mimeType) this.id = /embed\//i.test(this.url) ? this.url.split(/embed\//i)[1].split(/[?&]/)[0] : c.split(/v\/|v=|youtu\.be\//i)[1].split(/[?&]/)[0], this.url = this.protocol + "//www.youtube.com/embed/" + this.id, this.param("autoplay", "1"), this.param("modestbranding", "1"), this.param("rel", "0"), this.param("wmode", "transparent"), this.param("showinfo", "0");
	        else if ("video/vimeo" == this.mimeType) this.id = this.url.substr(this.url.lastIndexOf("/") + 1), this.url = this.protocol + "//player.vimeo.com/video/" + this.id, this.param("autoplay", "1"), this.param("badge", "0"), this.param("portrait", "0");
	        else if ("video/wistia" == this.mimeType) {
	            this.id = /embed\//i.test(this.url) ? this.url.split(/embed\/.*?\//i)[1].split(/[?&]/)[0] : this.url.split(/medias\//)[1].split(/[?&]/)[0];
	            var n = /playlists\//i.test(this.url);
	            this.url = this.protocol + "//fast.wistia.net/embed/" + (n ? "playlists" : "iframe") + "/" + this.id, n ? this.param("media_0_0[autoPlay]", "1") : this.param("autoPlay", "1"), this.param("theme", "")
	        } else "video/daily" == this.mimeType && (this.id = /\/video\//i.test(this.url) ? this.url.split(/\/video\//i)[1].split(/[?&]/)[0].split(/[_]/)[0] : c.split(/dai\.ly/i)[1].split(/[?&]/)[0], this.url = this.protocol + "//www.dailymotion.com/embed/video/" + this.id, this.param("autoplay", "1"), this.param("wmode", "opaque"), this.param("info", "0"), this.param("logo", "0"), this.param("related", "0"))
	    }, b.RVSliderVideoUrl.prototype.param = function(a, b) {
	        for (var c = "undefined" == typeof b, d = "string" == typeof b && "" === b, e = this.params.length; e-- > 0;)
	            if (this.params[e].key == a) return c ? this.params[e].value : void(d ? this.params.splice(e, 1) : this.params[e].value = b);
	        c || d || this.params.push({ key: a, value: b })
	    }, b.RVSliderVideoUrl.prototype.toString = function() {
	        for (var a = this.params.length > 0 ? "?" : "", b = 0, c = this.params.length; c > b; b++) 0 != b && (a += "&"), a += encodeURIComponent(this.params[b].key) + "=" + encodeURIComponent(this.params[b].value);
	        return this.url + a + this.hash
	    }
	}(jQuery, window.FooPlugins = window.FooPlugins || {}),
	function(a, b) {
	    b.RVSliderPlayer = function(c) {
	        if (!(this instanceof b.RVSliderPlayer)) return new b.RVSliderPlayer(c);
	        var d = this;
	        this.rvs = c, this.rvs.items.$.stage.on("click.rvs", ".rvs-play-video", { self: d }, d.onPlayClick), this.$ = { container: a("<div/>", { "class": "rvs-player" }), close: a("<a/>", { "class": "rw_rvs-close rich_web " + jQuery('.Rich_Web_RVVS_DelIc_T').val() + "" }).on("click.rvs", { self: d }, d.onCloseClick), player: null }, this.$.close.appendTo(d.$.container), this.continuousPlay = d.rvs.$.el.hasClass("rvs-continuous-play"), this.attached = !1
	    }, b.RVSliderPlayer.prototype.destroy = function() { this.rvs.items.$.stage.off("click.rvs", ".rvs-play-video", self.onPlayClick), this.rvs.items.$.items.add(this.rvs.nav.$.items).removeClass("rvs-video-active"), this.$.close.off("click.rvs", self.onCloseClick), this.$.container.remove() }, b.RVSliderPlayer.prototype._parse = function(c) { if ("string" == typeof c) { c = c.split(","); for (var d = 0, e = c.length; e > d; d++) c[d] = new b.RVSliderVideoUrl(a.trim(c[d])); return c } return [] }, b.RVSliderPlayer.prototype._error = function() {
	        this.$.player instanceof jQuery && this.$.player.remove(), this.$.player = a("<div/>", { "class": "rvs-player-error" }).append(a("<span/>", { "class": "rvs-error-icon" })), this.$.container.append(this.$.player).appendTo(this.rvs.items.$.items.filter(".rvs-active")), this.$.close.detach(), this.$.container.empty().append(this.$.player), this.$.close.appendTo(this.$.container)
	    }, b.RVSliderPlayer.prototype._direct = function(b) {
	        function c() {
	            for (var a = 0, b = h.length; b > a; a++) h[0].removeEventListener("error", c, !1);
	            g.removeEventListener("error", c, !1), g.removeEventListener("loadeddata", d, !1), f._error()
	        }

	        function d() {
	            for (var a = 0, b = h.length; b > a; a++) h[0].removeEventListener("error", c, !1);
	            g.removeEventListener("loadeddata", d, !1), g.removeEventListener("error", c, !1), g.play()
	        }
	        this.$.player = a("<video/>", { controls: 1, preload: 1 }).css({ width: "100%", height: "100%" });
	        for (var e, f = this, g = this.$.player[0], h = [], i = 0, j = b.length; j > i; i++) b[i].isDirectLink && (e = a("<source/>", { type: b[i].mimeType, src: b[i].toString() }), e[0].addEventListener("error", c, !1), h.push(e[0]), this.$.player.append(e));
	        g.addEventListener("error", c, !1), g.addEventListener("loadeddata", d, !1), this.$.container.append(this.$.player).appendTo(this.rvs.items.$.items.filter(".rvs-active")), g.readyState < 4 ? g.load() : d()
	    }, b.RVSliderPlayer.prototype._embed = function(b) {
	        this.$.player = a("<iframe/>", { src: b, frameborder: "no", width: this.rvs.items.width, height: this.rvs.items.height, webkitallowfullscreen: !0, mozallowfullscreen: !0, allowfullscreen: !0 }).css({ width: "100%", height: "100%" }), this.$.container.append(this.$.player).appendTo(this.rvs.items.$.items.filter(".rvs-active"))
	    }, b.RVSliderPlayer.prototype.setActive = function(a) {!this.continuousPlay && this.rvs.index != a && this.attached && this.close() }, b.RVSliderPlayer.prototype.isDirectLink = function(a) {
	        if (!document.addEventListener) return !1;
	        for (var b = 0, c = a.length; c > b; b++)
	            if (a[b].isDirectLink && a[b].isBrowserSupported) return !0;
	        return !1
	    }, b.RVSliderPlayer.prototype.play = function(a, b) {
	        a.length && (this.attached && this.close(), this.isDirectLink(a) ? this._direct(a, b) : a.length > 0 && !a[0].isDirectLink ? this._embed(a[0]) : this._error(), this.rvs.items.$.items.add(this.rvs.nav.$.items).filter(".rvs-active").addClass("rvs-video-active"), this.attached = !0)
	    }, b.RVSliderPlayer.prototype.close = function() { this.attached && (this.$.close.detach(), this.$.container.empty().detach(), this.$.close.appendTo(this.$.container), this.rvs.items.$.items.add(this.rvs.nav.$.items).removeClass("rvs-video-active"), this.attached = !1) }, b.RVSliderPlayer.prototype.toggle = function() {
	        var a = this.rvs.items.$.items.filter(".rvs-active"),
	            b = a.find(".rvs-play-video");
	        a.length && !a.hasClass("rvs-video-active") ? this.play(this._parse(b.attr("href")), b.data("options") || {}) : this.close()
	    }, b.RVSliderPlayer.prototype.onPlayClick = function(b) {
	        b.preventDefault();
	        var c = a(this),
	            d = b.data.self;
	        d.play(d._parse(c.attr("href")), c.data("options") || {})
	    }, b.RVSliderPlayer.prototype.onCloseClick = function(a) { a.preventDefault(), a.data.self.close() }
	}(jQuery, window.FooPlugins = window.FooPlugins || {});
	//--></script>

<script type="text/javascript">
	<!--
	jQuery(document).ready(function(){
		jQuery('.rvs-play-video').on('click',function(){
			setTimeout(function(){
					  var w = jQuery('.rvs-player').find('video').attr('controlsList','nodownload');
					},1500);
		});
		function resp(){
			if(jQuery(".rvs-container</script>