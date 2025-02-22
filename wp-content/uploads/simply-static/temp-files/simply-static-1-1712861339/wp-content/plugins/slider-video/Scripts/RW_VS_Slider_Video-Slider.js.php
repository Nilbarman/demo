<script type="text/javascript"><!--
	(function(k, f, c, j, d, l, h) {

	/*! Jssor */
	new(function() {

	});
	var e = k.$JssorEasing$ = {

			$EaseSwing: function(a) {
				return -c.cos(a * c.PI) / 2 + .5
			},
			$EaseLinear: function(a) {
				return a
			},
			$EaseInQuad: function(a) {
				return a * a
			},
			$EaseOutQuad: function(a) {
				return -a * (a - 2)
			},
			$EaseInOutQuad: function(a) {
				return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1)
			},
			$EaseInCubic: function(a) {
				return a * a * a
			},
			$EaseOutCubic: function(a) {
				return (a -= 1) * a * a + 1
			},
			$EaseInOutCubic: function(a) {
				return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2)
			},
			$EaseInQuart: function(a) {
				return a * a * a * a
			},
			$EaseOutQuart: function(a) {
				return -((a -= 1) * a * a * a - 1)
			},
			$EaseInOutQuart: function(a) {
				return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2)
			},
			$EaseInQuint: function(a) {
				return a * a * a * a * a
			},
			$EaseOutQuint: function(a) {
				return (a -= 1) * a * a * a * a + 1
			},
			$EaseInOutQuint: function(a) {
				return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2)
			},
			$EaseInSine: function(a) {
				return 1 - c.cos(c.PI / 2 * a)
			},
			$EaseOutSine: function(a) {
				return c.sin(c.PI / 2 * a)
			},
			$EaseInOutSine: function(a) {
				return -1 / 2 * (c.cos(c.PI * a) - 1)
			},
			$EaseInExpo: function(a) {
				return a == 0 ? 0 : c.pow(2, 10 * (a - 1))
			},
			$EaseOutExpo: function(a) {
				return a == 1 ? 1 : -c.pow(2, -10 * a) + 1
			},
			$EaseInOutExpo: function(a) {
				return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.pow(2, 10 * (a - 1)) : 1 / 2 * (-c.pow(2, -10 * --a) + 2)
			},
			$EaseInCirc: function(a) {
				return -(c.sqrt(1 - a * a) - 1)
			},
			$EaseOutCirc: function(a) {
				return c.sqrt(1 - (a -= 1) * a)
			},
			$EaseInOutCirc: function(a) {
				return (a *= 2) < 1 ? -1 / 2 * (c.sqrt(1 - a * a) - 1) : 1 / 2 * (c.sqrt(1 - (a -= 2) * a) + 1)
			},
			$EaseInElastic: function(a) {

				if (!a || a == 1) return a;
				var b = .3,
					d = .075;
				return -(c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b))
			},
			$EaseOutElastic: function(a) {

				if (!a || a == 1) return a;
				var b = .3,
					d = .075;
				return c.pow(2, -10 * a) * c.sin((a - d) * 2 * c.PI / b) + 1
			},
			$EaseInOutElastic: function(a) {

				if (!a || a == 1) return a;
				var b = .45,
					d = .1125;
				return (a *= 2) < 1 ? -.5 * c.pow(2, 10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) : c.pow(2, -10 * (a -= 1)) * c.sin((a - d) * 2 * c.PI / b) * .5 + 1
			},
			$EaseInBack: function(a) {
				var b = 1.70158;
				return a * a * ((b + 1) * a - b)
			},
			$EaseOutBack: function(a) {
				var b = 1.70158;
				return (a -= 1) * a * ((b + 1) * a + b) + 1
			},
			$EaseInOutBack: function(a) {
				var b = 1.70158;
				return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2)
			},
			$EaseInBounce: function(a) {
				return 1 - e.$EaseOutBounce(1 - a)
			},
			$EaseOutBounce: function(a) {
				return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375
			},
			$EaseInOutBounce: function(a) {
				return a < 1 / 2 ? e.$EaseInBounce(a * 2) * .5 : e.$EaseOutBounce(a * 2 - 1) * .5 + .5
			},
			$EaseGoBack: function(a) {
				return 1 - c.abs(2 - 1)
			},
			$EaseInWave: function(a) {
				return 1 - c.cos(a * c.PI * 2)
			},
			$EaseOutWave: function(a) {
				return c.sin(a * c.PI * 2)
			},
			$EaseOutJump: function(a) {
				return 1 - ((a *= 2) < 1 ? (a = 1 - a) * a * a : (a -= 1) * a * a)
			},
			$EaseInJump: function(a) {
				return (a *= 2) < 1 ? a * a * a : (a = 2 - a) * a * a
			}
		},
		g = k.$Jease$ = {
			$Swing: e.$EaseSwing,
			$Linear: e.$EaseLinear,
			$InQuad: e.$EaseInQuad,
			$OutQuad: e.$EaseOutQuad,
			$InOutQuad: e.$EaseInOutQuad,
			$InCubic: e.$EaseInCubic,
			$OutCubic: e.$EaseOutCubic,
			$InOutCubic: e.$EaseInOutCubic,
			$InQuart: e.$EaseInQuart,
			$OutQuart: e.$EaseOutQuart,
			$InOutQuart: e.$EaseInOutQuart,
			$InQuint: e.$EaseInQuint,
			$OutQuint: e.$EaseOutQuint,
			$InOutQuint: e.$EaseInOutQuint,
			$InSine: e.$EaseInSine,
			$OutSine: e.$EaseOutSine,
			$InOutSine: e.$EaseInOutSine,
			$InExpo: e.$EaseInExpo,
			$OutExpo: e.$EaseOutExpo,
			$InOutExpo: e.$EaseInOutExpo,
			$InCirc: e.$EaseInCirc,
			$OutCirc: e.$EaseOutCirc,
			$InOutCirc: e.$EaseInOutCirc,
			$InElastic: e.$EaseInElastic,
			$OutElastic: e.$EaseOutElastic,
			$InOutElastic: e.$EaseInOutElastic,
			$InBack: e.$EaseInBack,
			$OutBack: e.$EaseOutBack,
			$InOutBack: e.$EaseInOutBack,
			$InBounce: e.$EaseInBounce,
			$OutBounce: e.$EaseOutBounce,
			$InOutBounce: e.$EaseInOutBounce,
			$GoBack: e.$EaseGoBack,
			$InWave: e.$EaseInWave,
			$OutWave: e.$EaseOutWave,
			$OutJump: e.$EaseOutJump,
			$InJump: e.$EaseInJump
		};
	var b = k.$Jssor$ = new function() {

		var g = this,
			Ab = /\S+/g,
			K = 1,
			ib = 2,
			mb = 3,
			lb = 4,
			qb = 5,
			L, s = 0,
			i = 0,
			t = 0,
			z = 0,
			A = 0,
			D = navigator,
			vb = D.appName,
			o = D.userAgent,
			y = f.documentElement,
			q = parseFloat;

		function Ib() {
			if (!L) {
				L = {
					Wf: "ontouchstart" in k || "createTouch" in f
				};
				var a;
				if (D.pointerEnabled || (a = D.msPointerEnabled)) L.nd = a ? "msTouchAction" : "touchAction"
			}
			return L
		}

		function v(h) {

			if (!s) {

				s = -1;
				if (vb == "Microsoft Internet Explorer" && !!k.attachEvent && !!k.ActiveXObject) {

					var e = o.indexOf("MSIE");
					s = K;
					t = q(o.substring(e + 5, o.indexOf(";", e))); /*@cc_on z=@_jscript_version@*/ ;
					i = f.documentMode || t
				}else {

			var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);
			if (a) {

				s = qb;
				i = q(a[2])
			}
		}
	}
	return h == s
	}

	function r() {
	return v(K)
	}

	function S() {
	return r() && (i < 6 || f.compatMode == "BackCompat")
	}

	function Bb() {
	return v(ib)
	}

	function kb() {
	return v(mb)
	}

	function Eb() {
	return v(lb)
	}

	function pb() {
	return v(qb)
	}

	function fb() {
	return kb() && A > 534 && A < 535
	}

	function H() {
	v();
	return A > 537 || i > 42 || s == K && i >= 11
	}

	function Q() {
	return r() && i < 9
	}

	function gb(a) {

	var b, c;
	return function(f) {

		if (!b) {

			b = d;
			var e = a.substr(0, 1).toUpperCase() + a.substr(1);
			n([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(g, d) {
				var b = a;
				if (d) b = g + e;
				if (f.style[b] != h) return c = b
			})
		}
		return c
	}
	}

	function eb(b) {
	var a;
	return function(c) {
		a = a || gb(b)(c) || b;
		return a
	}
	}
	var M = eb("transform");

	function ub(a) {
	return {

	}.toString.call(a)
	}
	var rb = {

	}; n(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) {
	rb["[object " + a + "]"] = a.toLowerCase()
	});

	function n(b, d) {

	var a, c;
	if (ub(b) == "[object Array]") {

		for (a = 0; a < b.length; a++)
			if (c = d(b[a], a, b)) return c
	} else
		for (a in b)
			if (c = d(b[a], a, b)) return c
	}

	function F(a) {
	return a == j ? String(a) : rb[ub(a)] || "object"
	}

	function sb(a) {
	for (var b in a) return d
	}

	function B(a) {
	try {
		return F(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {

		}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf"))
	} catch (b) {

	}
	}

	function p(a, b) {
	return {
		x: a,
		y: b
	}
	}

	function yb(b, a) {
	setTimeout(b, a || 0)
	}

	function C(b, d, c) {

	var a = !b || b == "inherit" ? "" : b;
	n(d, function(c) {

		var b = c.exec(a);
		if (b) {

			var d = a.substr(0, b.index),
				e = a.substr(b.index + b[0].length + 1, a.length - 1);
			a = d + e
		}
	});
	a = c + (!a.indexOf(" ") ? "" : " ") + a;
	return a
	}

	function T(b, a) {
	if (i < 9) b.style.filter = a
	}
	g.$Device = Ib; g.$IsBrowserIE = r; g.$IsBrowserIeQuirks = S; g.$IsBrowserFireFox = Bb; g.$IsBrowserSafari = kb; g.$IsBrowserChrome = Eb; g.$IsBrowserOpera = pb; g.nf = H; g.gb = Q; gb("transform"); g.$BrowserVersion = function() {
	return i
	}; g.$BrowserEngineVersion = function() {
	return t || i
	}; g.$WebKitVersion = function() {
	v();
	return A
	}; g.$Delay = yb;

	function ab(a) {
	a.constructor === ab.caller && a.Md && a.Md.apply(a, ab.caller.arguments)
	}
	g.Md = ab; g.$GetElement = function(a) {
	if (g.cf(a)) a = f.getElementById(a);
	return a
	};

	function u(a) {
	return a || k.event
	}
	g.Id = u; g.$EvtSrc = function(b) {
	b = u(b);
	var a = b.target || b.srcElement || f;
	if (a.nodeType == 3) a = g.Bd(a);
	return a
	}; g.Ed = function(a) {
	a = u(a);
	return {
		x: a.pageX || a.clientX || 0,
		y: a.pageY || a.clientY || 0
	}
	}; g.$WindowSize = function() {
	var a = f.body;
	return {
		x: a.clientWidth || y.clientWidth,
		y: a.clientHeight || y.clientHeight
	}
	};

	function G(c, d, a) {

	if (a !== h) c.style[d] = a == h ? "" : a;
	else {

		var b = c.currentStyle || c.style;
		a = b[d];
		if (a == "" && k.getComputedStyle) {

			b = c.ownerDocument.defaultView.getComputedStyle(c, j);
			b && (a = b.getPropertyValue(d) || b[d])
		}
		return a
	}
	}

	function cb(b, c, a, d) {

	if (a !== h) {

		if (a == j) a = "";
		else d && (a += "px");
		G(b, c, a)
	} else return q(G(b, c))
	}

	function m(c, a) {

	var d = a ? cb : G,
		b;
	if (a & 4) b = eb(c);
	return function(e, f) {
		return d(e, b ? b(e) : c, f, a & 2)
	}
	}

	function Db(b) {
	if (r() && t < 9) {
		var a = /opacity=([^)]*)/.exec(b.style.filter || "");
		return a ? q(a[1]) / 100 : 1
	} else return q(b.style.opacity || "1")
	}

	function Fb(b, a, f) {

	if (r() && t < 9) {

		var h = b.style.filter || "",
			i = new RegExp(/[\s]*alpha\([^\)]*\)/g),
			e = c.round(100 * a),
			d = "";
		if (e < 100 || f) d = "alpha(opacity=" + e + ") ";
		var g = C(h, [i], d);
		T(b, g)
	} else b.style.opacity = a == 1 ? "" : c.round(a * 100) / 100
	}
	var N = {
	$Rotate: ["rotate"],
	$RotateX: ["rotateX"],
	$RotateY: ["rotateY"],
	$SkewX: ["skewX"],
	$SkewY: ["skewY"]
	};
	if (!H()) N = E(N, {
	$ScaleX: ["scaleX", 2],
	$ScaleY: ["scaleY", 2],
	$TranslateZ: ["translateZ", 1]
	});

	function O(d, a) {

	var c = "";
	if (a) {

		if (r() && i && i < 10) {

			delete a.$RotateX;
			delete a.$RotateY;
			delete a.$TranslateZ
		}
		b.$Each(a, function(d, b) {
			var a = N[b];
			if (a) {
				var e = a[1] || 0;
				if (P[b] != d) c += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")"
			}
		});
		if (H()) {
			if (a.$TranslateX || a.$TranslateY || a.$TranslateZ) c += " translate3d(" + (a.$TranslateX || 0) + "px," + (a.$TranslateY || 0) + "px," + (a.$TranslateZ || 0) + "px)";
			if (a.$ScaleX == h) a.$ScaleX = 1;
			if (a.$ScaleY == h) a.$ScaleY = 1;
			if (a.$ScaleX != 1 || a.$ScaleY != 1) c += " scale3d(" + a.$ScaleX + ", " + a.$ScaleY + ", 1)"
		}
	}
	d.style[M(d)] = c
	}
	g.Ic = m("transformOrigin", 4); g.zf = m("backfaceVisibility", 4); g.yf = m("transformStyle", 4); g.xf = m("perspective", 6); g.qf = m("perspectiveOrigin", 4); g.pf = function(a, b) {

	if (r() && t < 9 || t < 10 && S()) a.style.zoom = b == 1 ? "" : b;
	else {

		var c = M(a),
			f = "scale(" + b + ")",
			e = a.style[c],
			g = new RegExp(/[\s]*scale\(.*?\)/g),
			d = C(e, [g], f);
		a.style[c] = d
	}
	};
	var ob = 0,
	jb = 0; g.$WindowResizeFilter = function(b, a) {

	return Q() ? function() {

		var g = d,
			c = S() ? b.document.body : b.document.documentElement;
		if (c) {

			var f = c.offsetWidth - ob,
				e = c.offsetHeight - jb;
			if (f || e) {

				ob += f;
				jb += e
			} else g = l
		}
		g && a()
	} : a
	}; g.Sb = function(b, a) {

	return function(c) {

		c = u(c);
		var e = c.type,
			d = c.relatedTarget || (e == "mouseout" ? c.toElement : c.fromElement);
		(!d || d !== a && !g.of(a, d)) && b(c)
	}
	}; g.$AddEvent = function(a, c, d, b) {

	a = g.$GetElement(a);
	if (a.addEventListener) {

		c == "mousewheel" && a.addEventListener("DOMMouseScroll", d, b);
		a.addEventListener(c, d, b)
	} else if (a.attachEvent) {

		a.attachEvent("on" + c, d);
		b && a.setCapture && a.setCapture()
	}
	}; g.S = function(a, c, d, b) {

	a = g.$GetElement(a);
	if (a.removeEventListener) {

		c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
		a.removeEventListener(c, d, b)
	} else if (a.detachEvent) {

		a.detachEvent("on" + c, d);
		b && a.releaseCapture && a.releaseCapture()
	}
	}; g.$FireEvent = function(c, b) {

	var a;
	if (f.createEvent) {

		a = f.createEvent("HTMLEvents");
		a.initEvent(b, l, l);
		c.dispatchEvent(a)
	} else {

		var d = "on" + b;
		a = f.createEventObject();
		c.fireEvent(d, a)
	}
	}; g.$CancelEvent = function(a) {

	a = u(a);
	a.preventDefault && a.preventDefault();
	a.cancel = d;
	a.returnValue = l
	}; g.$StopEvent = function(a) {

	a = u(a);
	a.stopPropagation && a.stopPropagation();
	a.cancelBubble = d
	}; g.$CreateCallback = function(d, c) {

	var a = [].slice.call(arguments, 2),
		b = function() {
			var b = a.concat([].slice.call(arguments, 0));
			return c.apply(d, b)
		};
	return b
	}; g.$InnerText = function(a, b) {

	if (b == h) return a.textContent || a.innerText;
	var c = f.createTextNode(b);
	g.qc(a);
	a.appendChild(c)
	}; g.$InnerHtml = function(a, b) {

	if (b == h) return a.innerHTML;
	a.innerHTML = b
	}; g.$ClearInnerHtml = function(a) {
	a.innerHTML = ""
	}; g.$Children = function(d, c) {
	for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a);
	return b
	};

	function tb(a, c, e, b) {

	b = b || "u";
	for (a = a ? a.firstChild : j; a; a = a.nextSibling)
		if (a.nodeType == 1) {
			if (X(a, b) == c) return a;
			if (!e) {
				var d = tb(a, c, e, b);
				if (d) return d
			}
		}
	}
	g.$FindChild = tb;

	function V(a, d, f, b) {

	b = b || "u";
	var c = [];
	for (a = a ? a.firstChild : j; a; a = a.nextSibling)
		if (a.nodeType == 1) {
			X(a, b) == d && c.push(a);
			if (!f) {
				var e = V(a, d, f, b);
				if (e.length) c = c.concat(e)
			}
		}
	return c
	}

	function nb(a, c, d) {

	for (a = a ? a.firstChild : j; a; a = a.nextSibling)
		if (a.nodeType == 1) {
			if (a.tagName == c) return a;
			if (!d) {
				var b = nb(a, c, d);
				if (b) return b
			}
		}
	}
	g.Jg = nb;

	function hb(a, c, e) {

	var b = [];
	for (a = a ? a.firstChild : j; a; a = a.nextSibling)
		if (a.nodeType == 1) {

			(!c || a.tagName == c) && b.push(a);
			if (!e) {
				var d = hb(a, c, e);
				if (d.length) b = b.concat(d)
			}
		}
	return b
	}
	g.Ng = hb; g.Bg = function(b, a) {
	return b.getElementsByTagName(a)
	};

	function E() {

	var e = arguments,
		d, c, b, a, g = 1 & e[0],
		f = 1 + g;
	d = e[f - 1] || {

	};
	for (; f < e.length; f++)
		if (c = e[f])
			for (b in c) {

				a = c[b];
				if (a !== h) {

					a = c[b];
					var i = d[b];
					d[b] = g && (B(i) || B(a)) ? E(g, {

					}, i, a) : a
				}
			}
	return d
	}
	g.o = E;

	function bb(f, g) {

	var d = {

		},
		c, a, b;
	for (c in f) {

		a = f[c];
		b = g[c];
		if (a !== b) {

			var e;
			if (B(a) && B(b)) {

				a = bb(a, b);
				e = !sb(a)
			}!e && (d[c] = a)
		}
	}
	return d
	}
	g.Wc = function(a) {
	return F(a) == "function"
	}; g.cf = function(a) {
	return F(a) == "string"
	}; g.Hb = function(a) {
	return !isNaN(q(a)) && isFinite(a)
	}; g.$Each = n; g.Yc = B;

	function U(a) {
	return f.createElement(a)
	}
	g.$CreateElement = U; g.$CreateDiv = function() {
	return U("DIV")
	}; g.Dg = function() {
	return U("SPAN")
	}; g.Sc = function() {

	};

	function Y(b, c, a) {

	if (a == h) return b.getAttribute(c);
	b.setAttribute(c, a)
	}

	function X(a, b) {
	return Y(a, b) || Y(a, "data-" + b)
	}
	g.$Attribute = Y; g.$AttributeEx = X;

	function x(b, a) {

	if (a == h) return b.className;
	b.className = a
	}
	g.ad = x;

	function xb(b) {

	var a = {

	};
	n(b, function(b) {
		a[b] = b
	});
	return a
	}

	function zb(b, a) {
	return b.match(a || Ab)
	}

	function R(b, a) {
	return xb(zb(b || "", a))
	}
	g.hg = zb;

	function db(b, c) {

	var a = "";
	n(c, function(c) {

		a && (a += b);
		a += c
	});
	return a
	}

	function J(a, c, b) {
	x(a, db(" ", E(bb(R(x(a)), R(c)), R(b))))
	}
	g.Bd = function(a) {
	return a.parentNode
	}; g.P = function(a) {
	g.U(a, "none")
	}; g.r = function(a, b) {
	g.U(a, b ? "none" : "")
	}; g.fg = function(b, a) {
	b.removeAttribute(a)
	}; g.ag = function() {
	return r() && i < 10
	}; g.Zf = function(d, a) {

	if (a) d.style.clip = "rect(" + c.round(a.$Top || a.F || 0) + "px " + c.round(a.$Right) + "px " + c.round(a.$Bottom) + "px " + c.round(a.$Left || a.D || 0) + "px)";
	else if (a !== h) {

		var g = d.style.cssText,
			f = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
			e = C(g, f, "");
		b.$CssCssText(d, e)
	}
	}; g.M = function() {
	return +new Date
	}; g.$AppendChild = function(b, a) {
	b.appendChild(a)
	}; g.Vb = function(b, a, c) {

	(c || a.parentNode).insertBefore(b, a)
	}; g.zb = function(b, a) {

	a = a || b.parentNode;
	a && a.removeChild(b)
	}; g.xg = function(a, b) {
	n(a, function(a) {
		g.zb(a, b)
	})
	}; g.qc = function(a) {
	g.xg(g.$Children(a, d), a)
	}; g.wg = function(a, b) {

	var c = g.Bd(a);
	b & 1 && g.s(a, (g.$CssWidth(c) - g.$CssWidth(a)) / 2);
	b & 2 && g.v(a, (g.$CssHeight(c) - g.$CssHeight(a)) / 2)
	}; g.zc = function(b, a) {
	return parseInt(b, a || 10)
	}; g.rg = q; g.of = function(b, a) {

	var c = f.body;
	while (a && b !== a && c !== a) try {
		a = a.parentNode
	} catch (d) {
		return l
	}
	return b === a
	};

	function Z(d, c, b) {
	var a = d.cloneNode(!c);
	!b && g.fg(a, "id");
	return a
	}
	g.$CloneNode = Z; g.xb = function(e, f) {

	var a = new Image;

	function b(e, d) {

		g.S(a, "load", b);
		g.S(a, "abort", c);
		g.S(a, "error", c);
		f && f(a, d)
	}

	function c(a) {
		b(a, d)
	}
	if (pb() && i < 11.6 || !e) b(!e);
	else {

		g.$AddEvent(a, "load", b);
		g.$AddEvent(a, "abort", c);
		g.$AddEvent(a, "error", c);
		a.src = e
	}
	}; g.af = function(d, a, e) {

	var c = d.length + 1;

	function b(b) {
		c--;
		if (a && b && b.src == a.src) a = b;
		!c && e && e(a)
	}
	n(d, function(a) {
		g.xb(a.src, b)
	});
	b()
	}; g.Gc = function(a, g, i, h) {

	if (h) a = Z(a);
	var c = V(a, g);
	if (!c.length) c = b.Bg(a, g);
	for (var f = c.length - 1; f > -1; f--) {

		var d = c[f],
			e = Z(i);
		x(e, x(d));
		b.$CssCssText(e, d.style.cssText);
		b.Vb(e, d);
		b.zb(d)
	}
	return a
	};

	function Gb(a) {

	var l = this,
		p = "",
		r = ["av", "pv", "ds", "dn"],
		e = [],
		q, k = 0,
		i = 0,
		d = 0;

	function j() {

		J(a, q, e[d || k || i & 2 || i]);
		b.$Css(a, "pointer-events", d ? "none" : "")
	}

	function c() {

		k = 0;
		j();
		g.S(f, "mouseup", c);
		g.S(f, "touchend", c);
		g.S(f, "touchcancel", c)
	}

	function o(a) {

		if (d) g.$CancelEvent(a);
		else {

			k = 4;
			j();
			g.$AddEvent(f, "mouseup", c);
			g.$AddEvent(f, "touchend", c);
			g.$AddEvent(f, "touchcancel", c)
		}
	}
	l.Jc = function(a) {

		if (a === h) return i;
		i = a & 2 || a & 1;
		j()
	};
	l.$Enable = function(a) {

		if (a === h) return !d;
		d = a ? 0 : 3;
		j()
	};
	l.$Elmt = a = g.$GetElement(a);
	var m = b.hg(x(a));
	if (m) p = m.shift();
	n(r, function(a) {
		e.push(p + a)
	});
	q = db(" ", e);
	e.unshift("");
	g.$AddEvent(a, "mousedown", o);
	g.$AddEvent(a, "touchstart", o)
	}
	g.Tb = function(a) {
	return new Gb(a)
	}; g.$Css = G; g.kb = m("overflow"); g.v = m("top", 2); g.s = m("left", 2); g.$CssWidth = m("width", 2); g.$CssHeight = m("height", 2); g.Af = m("marginLeft", 2); g.Qf = m("marginTop", 2); g.A = m("position"); g.U = m("display"); g.I = m("zIndex", 1); g.yb = function(b, a, c) {

	if (a != h) Fb(b, a, c);
	else return Db(b)
	}; g.$CssCssText = function(a, b) {

	if (b != h) a.style.cssText = b;
	else return a.style.cssText
	};
	var W = {
	$Opacity: g.yb,
	$Top: g.v,
	$Left: g.s,
	N: g.$CssWidth,
	R: g.$CssHeight,
	Db: g.A,
	Sh: g.U,
	$ZIndex: g.I
	};

	function w(f, l) {

	var e = Q(),
		b = H(),
		d = fb(),
		i = M(f);

	function k(b, d, a) {

		var e = b.mb(p(-d / 2, -a / 2)),
			f = b.mb(p(d / 2, -a / 2)),
			g = b.mb(p(d / 2, a / 2)),
			h = b.mb(p(-d / 2, a / 2));
		b.mb(p(300, 300));
		return p(c.min(e.x, f.x, g.x, h.x) + d / 2, c.min(e.y, f.y, g.y, h.y) + a / 2)
	}

	function a(d, a) {

		a = a || {

		};
		var n = a.$TranslateZ || 0,
			p = (a.$RotateX || 0) % 360,
			q = (a.$RotateY || 0) % 360,
			u = (a.$Rotate || 0) % 360,
			l = a.$ScaleX,
			m = a.$ScaleY,
			f = a.Th;
		if (l == h) l = 1;
		if (m == h) m = 1;
		if (f == h) f = 1;
		if (e) {

			n = 0;
			p = 0;
			q = 0;
			f = 0
		}
		var c = new Cb(a.$TranslateX, a.$TranslateY, n);
		c.$RotateX(p);
		c.$RotateY(q);
		c.Yd(u);
		c.Vd(a.$SkewX, a.$SkewY);
		c.$Scale(l, m, f);
		if (b) {

			c.$Move(a.D, a.F);
			d.style[i] = c.Ne()
		} else if (!z || z < 9) {

			var o = "",
				j = {
					x: 0,
					y: 0
				};
			if (a.$OriginalWidth) j = k(c, a.$OriginalWidth, a.$OriginalHeight);
			g.Qf(d, j.y);
			g.Af(d, j.x);
			o = c.Qe();
			var s = d.style.filter,
				t = new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),
				r = C(s, [t], o);
			T(d, r)
		}
	}
	w = function(e, c) {

		c = c || {

		};
		var i = c.D,
			k = c.F,
			f;
		n(W, function(a, b) {

			f = c[b];
			f !== h && a(e, f)
		});
		g.Zf(e, c.$Clip);
		if (!b) {

			i != h && g.s(e, (c.gd || 0) + i);
			k != h && g.v(e, (c.Uc || 0) + k)
		}
		if (c.Re)
			if (d) yb(g.$CreateCallback(j, O, e, c));
			else a(e, c)
	};
	g.Eb = O;
	if (d) g.Eb = w;
	if (e) g.Eb = a;
	else if (!b) a = O;
	g.K = w;
	w(f, l)
	}
	g.Eb = w; g.K = w;

	function Cb(i, k, o) {

	var d = this,
		b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, i || 0, k || 0, o || 0, 1],
		h = c.sin,
		g = c.cos,
		l = c.tan;

	function f(a) {
		return a * c.PI / 180
	}

	function n(a, b) {
		return {
			x: a,
			y: b
		}
	}

	function m(b, c, f, g, i, l, n, o, q, t, u, w, y, A, C, F, a, d, e, h, j, k, m, p, r, s, v, x, z, B, D, E) {
		return [b * a + c * j + f * r + g * z, b * d + c * k + f * s + g * B, b * e + c * m + f * v + g * D, b * h + c * p + f * x + g * E, i * a + l * j + n * r + o * z, i * d + l * k + n * s + o * B, i * e + l * m + n * v + o * D, i * h + l * p + n * x + o * E, q * a + t * j + u * r + w * z, q * d + t * k + u * s + w * B, q * e + t * m + u * v + w * D, q * h + t * p + u * x + w * E, y * a + A * j + C * r + F * z, y * d + A * k + C * s + F * B, y * e + A * m + C * v + F * D, y * h + A * p + C * x + F * E]
	}

	function e(c, a) {
		return m.apply(j, (a || b).concat(c))
	}
	d.$Scale = function(a, c, d) {
		if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1])
	};
	d.$Move = function(a, c, d) {

		b[12] += a || 0;
		b[13] += c || 0;
		b[14] += d || 0
	};
	d.$RotateX = function(c) {

		if (c) {

			a = f(c);
			var d = g(a),
				i = h(a);
			b = e([1, 0, 0, 0, 0, d, i, 0, 0, -i, d, 0, 0, 0, 0, 1])
		}
	};
	d.$RotateY = function(c) {

		if (c) {

			a = f(c);
			var d = g(a),
				i = h(a);
			b = e([d, 0, -i, 0, 0, 1, 0, 0, i, 0, d, 0, 0, 0, 0, 1])
		}
	};
	d.Yd = function(c) {

		if (c) {

			a = f(c);
			var d = g(a),
				i = h(a);
			b = e([d, i, 0, 0, -i, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
		}
	};
	d.Vd = function(a, c) {

		if (a || c) {

			i = f(a);
			k = f(c);
			b = e([1, l(k), 0, 0, l(i), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1])
		}
	};
	d.mb = function(c) {
		var a = e(b, [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, c.x, c.y, 0, 1]);
		return n(a[12], a[13])
	};
	d.Ne = function() {
		return "matrix3d(" + b.join(",") + ")"
	};
	d.Qe = function() {
		return "progid:DXImageTransform.Microsoft.Matrix(M11=" + b[0] + ", M12=" + b[4] + ", M21=" + b[1] + ", M22=" + b[5] + ", SizingMethod='auto expand')"
	}
	}
	new(function() {

	var a = this;

	function b(d, g) {

		for (var j = d[0].length, i = d.length, h = g[0].length, f = [], c = 0; c < i; c++)
			for (var k = f[c] = [], b = 0; b < h; b++) {

				for (var e = 0, a = 0; a < j; a++) e += d[c][a] * g[a][b];
				k[b] = e
			}
		return f
	}
	a.$ScaleX = function(b, c) {
		return a.Xc(b, c, 0)
	};
	a.$ScaleY = function(b, c) {
		return a.Xc(b, 0, c)
	};
	a.Xc = function(a, c, d) {

		return b(a, [
			[c, 0],
			[0, d]
		])
	};
	a.mb = function(d, c) {

		var a = b(d, [
			[c.x],
			[c.y]
		]);
		return p(a[0][0], a[1][0])
	}
	});
	var P = {
	gd: 0,
	Uc: 0,
	D: 0,
	F: 0,
	$Zoom: 1,
	$ScaleX: 1,
	$ScaleY: 1,
	$Rotate: 0,
	$RotateX: 0,
	$RotateY: 0,
	$TranslateX: 0,
	$TranslateY: 0,
	$TranslateZ: 0,
	$SkewX: 0,
	$SkewY: 0
	}; g.fc = function(a) {

	var c = a || {

	};
	if (a)
		if (b.Wc(a)) c = {
			hc: c
		};
		else if (b.Wc(a.$Clip)) c.$Clip = {
		hc: a.$Clip
	};
	return c
	};

	function wb(c, a) {

	var b = {

	};
	n(c, function(c, d) {

		var e = c;
		if (a[d] != h)
			if (g.Hb(c)) e = c + a[d];
			else e = wb(c, a[d]);
		b[d] = e
	});
	return b
	}
	g.ze = wb; g.Tc = function(l, m, x, q, z, A, n) {

	var a = m;
	if (l) {

		a = {

		};
		for (var g in m) {

			var B = A[g] || 1,
				w = z[g] || [0, 1],
				f = (x - w[0]) / w[1];
			f = c.min(c.max(f, 0), 1);
			f = f * B;
			var u = c.floor(f);
			if (f != u) f -= u;
			var i = q.hc || e.$EaseSwing,
				k, C = l[g],
				p = m[g];
			if (b.Hb(p)) {

				i = q[g] || i;
				var y = i(f);
				k = C + p * y
			} else {

				k = b.o({
					Jb: {

					}
				}, l[g]);
				var v = q[g] || {

				};
				b.$Each(p.Jb || p, function(d, a) {

					i = v[a] || v.hc || i;
					var c = i(f),
						b = d * c;
					k.Jb[a] = b;
					k[a] += b
				})
			}
			a[g] = k
		}
		var t = b.$Each(m, function(b, a) {
			return P[a] != h
		});
		t && b.$Each(P, function(c, b) {
			if (a[b] == h && l[b] !== h) a[b] = l[b]
		});
		if (t) {

			if (a.$Zoom) a.$ScaleX = a.$ScaleY = a.$Zoom;
			a.$OriginalWidth = n.$OriginalWidth;
			a.$OriginalHeight = n.$OriginalHeight;
			a.Re = d
		}
	}
	if (m.$Clip && n.$Move) {

		var o = a.$Clip.Jb,
			s = (o.$Top || 0) + (o.$Bottom || 0),
			r = (o.$Left || 0) + (o.$Right || 0);
		a.$Left = (a.$Left || 0) + r;
		a.$Top = (a.$Top || 0) + s;
		a.$Clip.$Left -= r;
		a.$Clip.$Right -= r;
		a.$Clip.$Top -= s;
		a.$Clip.$Bottom -= s
	}
	if (a.$Clip && b.ag() && !a.$Clip.$Top && !a.$Clip.$Left && !a.$Clip.F && !a.$Clip.D && a.$Clip.$Right == n.$OriginalWidth && a.$Clip.$Bottom == n.$OriginalHeight) a.$Clip = j;
	return a
	}
	};

	function n() {

	var a = this,
	d = [];

	function h(a, b) {
	d.push({
		pc: a,
		oc: b
	})
	}

	function g(a, c) {
	b.$Each(d, function(b, e) {
		b.pc == a && b.oc === c && d.splice(e, 1)
	})
	}
	a.$On = a.addEventListener = h;
	a.$Off = a.removeEventListener = g;
	a.k = function(a) {

	var c = [].slice.call(arguments, 1);
	b.$Each(d, function(b) {
		b.pc == a && b.oc.apply(k, c)
	})
	}
	}
	var m = function(z, C, h, L, O, J) {

	z = z || 0;
	var a = this,
	q, n, o, v, A = 0,
	H, I, G, B, y = 0,
	g = 0,
	m = 0,
	D, i, f, e, p, w = [],
	x;

	function P(a) {

	f += a;
	e += a;
	i += a;
	g += a;
	m += a;
	y += a
	}

	function u(o) {

	var j = o;
	if (p && (j >= e || j <= f)) j = ((j - f) % p + p) % p + f;
	if (!D || v || g != j) {

		var k = c.min(j, e);
		k = c.max(k, f);
		if (!D || v || k != m) {

			if (J) {

				var l = (k - i) / (C || 1);
				if (h.$Reverse) l = 1 - l;
				var n = b.Tc(O, J, l, H, G, I, h);
				if (x) b.$Each(n, function(b, a) {
					x[a] && x[a](L, b)
				});
				else b.K(L, n)
			}
			a.nc(m - i, k - i);
			m = k;
			b.$Each(w, function(b, c) {

				var a = o < g ? w[w.length - c - 1] : b;
				a.B(m - y)
			});
			var r = g,
				q = m;
			g = j;
			D = d;
			a.Ub(r, q)
		}
	}
	}

	function E(a, b, d) {

	b && a.$Shift(e);
	if (!d) {

		f = c.min(f, a.jc() + y);
		e = c.max(e, a.Zb() + y)
	}
	w.push(a)
	}
	var r = k.requestAnimationFrame || k.webkitRequestAnimationFrame || k.mozRequestAnimationFrame || k.msRequestAnimationFrame;
	if (b.$IsBrowserSafari() && b.$BrowserVersion() < 7) r = j;
	r = r || function(a) {
	b.$Delay(a, h.$Interval)
	};

	function K() {

	if (q) {

		var d = b.M(),
			e = c.min(d - A, h.Fc),
			a = g + e * o;
		A = d;
		if (a * o >= n * o) a = n;
		u(a);
		if (!v && a * o >= n * o) M(B);
		else r(K)
	}
	}

	function t(h, i, j) {

	if (!q) {

		q = d;
		v = j;
		B = i;
		h = c.max(h, f);
		h = c.min(h, e);
		n = h;
		o = n < g ? -1 : 1;
		a.Qc();
		A = b.M();
		r(K)
	}
	}

	function M(b) {

	if (q) {

		v = q = B = l;
		a.Kc();
		b && b()
	}
	}
	a.$Play = function(a, b, c) {
	t(a ? g + a : e, b, c)
	};
	a.Lc = t;
	a.pb = M;
	a.Oe = function(a) {
	t(a)
	};
	a.cb = function() {
	return g
	};
	a.Hd = function() {
	return n
	};
	a.qb = function() {
	return m
	};
	a.B = u;
	a.$Move = function(a) {
	u(g + a)
	};
	a.$IsPlaying = function() {
	return q
	};
	a.Ae = function(a) {
	p = a
	};
	a.$Shift = P;
	a.wb = function(a, b) {
	E(a, 0, b)
	};
	a.rc = function(a) {
	E(a, 1)
	};
	a.Fe = function(a) {
	e += a
	};
	a.jc = function() {
	return f
	};
	a.Zb = function() {
	return e
	};
	a.Ub = a.Qc = a.Kc = a.nc = b.Sc;
	a.sc = b.M();
	h = b.o({
	$Interval: 16,
	Fc: 50
	}, h);
	p = h.pd;
	x = h.Be;
	f = i = z;
	e = z + C;
	I = h.$Round || {

	};
	G = h.$During || {

	};
	H = b.fc(h.$Easing)
	};
	var p = k.$JssorSlideshowFormations$ = new function() {

	var h = this,
	b = 0,
	a = 1,
	f = 2,
	e = 3,
	s = 1,
	r = 2,
	t = 4,
	q = 8,
	w = 256,
	x = 512,
	v = 1024,
	u = 2048,
	j = u + s,
	i = u + r,
	o = x + s,
	m = x + r,
	n = w + t,
	k = w + q,
	l = v + t,
	p = v + q;

	function y(a) {
	return (a & r) == r
	}

	function z(a) {
	return (a & t) == t
	}

	function g(b, a, c) {

	c.push(a);
	b[a] = b[a] || [];
	b[a].push(c)
	}
	h.$FormationStraight = function(f) {

	for (var d = f.$Cols, e = f.$Rows, s = f.$Assembly, t = f.Ib, r = [], a = 0, b = 0, p = d - 1, q = e - 1, h = t - 1, c, b = 0; b < e; b++)
		for (a = 0; a < d; a++) {

			switch (s) {

				case j:
					c = h - (a * e + (q - b));
					break;
				case l:
					c = h - (b * d + (p - a));
					break;
				case o:
					c = h - (a * e + b);
				case n:
					c = h - (b * d + a);
					break;
				case i:
					c = a * e + b;
					break;
				case k:
					c = b * d + (p - a);
					break;
				case m:
					c = a * e + (q - b);
					break;
				default:
					c = b * d + a
			}
			g(r, c, [b, a])
		}
	return r
	};
	h.$FormationSwirl = function(q) {

	var x = q.$Cols,
		y = q.$Rows,
		B = q.$Assembly,
		w = q.Ib,
		A = [],
		z = [],
		u = 0,
		c = 0,
		h = 0,
		r = x - 1,
		s = y - 1,
		t, p, v = 0;
	switch (B) {

		case j:
			c = r;
			h = 0;
			p = [f, a, e, b];
			break;
		case l:
			c = 0;
			h = s;
			p = [b, e, a, f];
			break;
		case o:
			c = r;
			h = s;
			p = [e, a, f, b];
			break;
		case n:
			c = r;
			h = s;
			p = [a, e, b, f];
			break;
		case i:
			c = 0;
			h = 0;
			p = [f, b, e, a];
			break;
		case k:
			c = r;
			h = 0;
			p = [a, f, b, e];
			break;
		case m:
			c = 0;
			h = s;
			p = [e, b, f, a];
			break;
		default:
			c = 0;
			h = 0;
			p = [b, f, a, e]
	}
	u = 0;
	while (u < w) {

		t = h + "," + c;
		if (c >= 0 && c < x && h >= 0 && h < y && !z[t]) {

			z[t] = d;
			g(A, u++, [h, c])
		} else switch (p[v++ % p.length]) {

			case b:
				c--;
				break;
			case f:
				h--;
				break;
			case a:
				c++;
				break;
			case e:
				h++
		}
		switch (p[v % p.length]) {

			case b:
				c++;
				break;
			case f:
				h++;
				break;
			case a:
				c--;
				break;
			case e:
				h--
		}
	}
	return A
	};
	h.$FormationZigZag = function(p) {

	var w = p.$Cols,
		x = p.$Rows,
		z = p.$Assembly,
		v = p.Ib,
		t = [],
		u = 0,
		c = 0,
		d = 0,
		q = w - 1,
		r = x - 1,
		y, h, s = 0;
	switch (z) {

		case j:
			c = q;
			d = 0;
			h = [f, a, e, a];
			break;
		case l:
			c = 0;
			d = r;
			h = [b, e, a, e];
			break;
		case o:
			c = q;
			d = r;
			h = [e, a, f, a];
			break;
		case n:
			c = q;
			d = r;
			h = [a, e, b, e];
			break;
		case i:
			c = 0;
			d = 0;
			h = [f, b, e, b];
			break;
		case k:
			c = q;
			d = 0;
			h = [a, f, b, f];
			break;
		case m:
			c = 0;
			d = r;
			h = [e, b, f, b];
			break;
		default:
			c = 0;
			d = 0;
			h = [b, f, a, f]
	}
	u = 0;
	while (u < v) {

		y = d + "," + c;
		if (c >= 0 && c < w && d >= 0 && d < x && typeof t[y] == "undefined") {

			g(t, u++, [d, c]);
			switch (h[s % h.length]) {

				case b:
					c++;
					break;
				case f:
					d++;
					break;
				case a:
					c--;
					break;
				case e:
					d--
			}
		} else {

			switch (h[s++ % h.length]) {

				case b:
					c--;
					break;
				case f:
					d--;
					break;
				case a:
					c++;
					break;
				case e:
					d++
			}
			switch (h[s++ % h.length]) {

				case b:
					c++;
					break;
				case f:
					d++;
					break;
				case a:
					c--;
					break;
				case e:
					d--
			}
		}
	}
	return t
	};
	h.$FormationStraightStairs = function(q) {

	var u = q.$Cols,
		v = q.$Rows,
		e = q.$Assembly,
		t = q.Ib,
		r = [],
		s = 0,
		c = 0,
		d = 0,
		f = u - 1,
		h = v - 1,
		x = t - 1;
	switch (e) {

		case j:
		case m:
		case o:
		case i:
			var a = 0,
				b = 0;
			break;
		case k:
		case l:
		case n:
		case p:
			var a = f,
				b = 0;
			break;
		default:
			e = p;
			var a = f,
				b = 0
	}
	c = a;
	d = b;
	while (s < t) {

		if (z(e) || y(e)) g(r, x - s++, [d, c]);
		else g(r, s++, [d, c]);
		switch (e) {

			case j:
			case m:
				c--;
				d++;
				break;
			case o:
			case i:
				c++;
				d--;
				break;
			case k:
			case l:
				c--;
				d--;
				break;
			case p:
			case n:
			default:
				c++;
				d++
		}
		if (c < 0 || d < 0 || c > f || d > h) {

			switch (e) {

				case j:
				case m:
					a++;
					break;
				case k:
				case l:
				case o:
				case i:
					b++;
					break;
				case p:
				case n:
				default:
					a--
			}
			if (a < 0 || b < 0 || a > f || b > h) {

				switch (e) {

					case j:
					case m:
						a = f;
						b++;
						break;
					case o:
					case i:
						b = h;
						a++;
						break;
					case k:
					case l:
						b = h;
						a--;
						break;
					case p:
					case n:
					default:
						a = 0;
						b++
				}
				if (b > h) b = h;
				else if (b < 0) b = 0;
				else if (a > f) a = f;
				else if (a < 0) a = 0
			}
			d = b;
			c = a
		}
	}
	return r
	};
	h.$FormationSquare = function(i) {

	var a = i.$Cols || 1,
		b = i.$Rows || 1,
		j = [],
		d, e, f, h, k;
	f = a < b ? (b - a) / 2 : 0;
	h = a > b ? (a - b) / 2 : 0;
	k = c.round(c.max(a / 2, b / 2)) + 1;
	for (d = 0; d < a; d++)
		for (e = 0; e < b; e++) g(j, k - c.min(d + 1 + f, e + 1 + h, a - d + f, b - e + h), [e, d]);
	return j
	};
	h.$FormationRectangle = function(f) {

	var d = f.$Cols || 1,
		e = f.$Rows || 1,
		h = [],
		a, b, i;
	i = c.round(c.min(d / 2, e / 2)) + 1;
	for (a = 0; a < d; a++)
		for (b = 0; b < e; b++) g(h, i - c.min(a + 1, b + 1, d - a, e - b), [b, a]);
	return h
	};
	h.$FormationRandom = function(d) {

	for (var e = [], a, b = 0; b < d.$Rows; b++)
		for (a = 0; a < d.$Cols; a++) g(e, c.ceil(1e5 * c.random()) % 13, [b, a]);
	return e
	};
	h.$FormationCircle = function(d) {

	for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
		for (a = 0; a < f; a++) g(h, c.round(c.sqrt(c.pow(b - i, 2) + c.pow(a - j, 2))), [a, b]);
	return h
	};
	h.$FormationCross = function(d) {

	for (var e = d.$Cols || 1, f = d.$Rows || 1, h = [], a, i = e / 2 - .5, j = f / 2 - .5, b = 0; b < e; b++)
		for (a = 0; a < f; a++) g(h, c.round(c.min(c.abs(b - i), c.abs(a - j))), [a, b]);
	return h
	};
	h.$FormationRectangleCross = function(f) {

	for (var h = f.$Cols || 1, i = f.$Rows || 1, j = [], a, d = h / 2 - .5, e = i / 2 - .5, k = c.max(d, e) + 1, b = 0; b < h; b++)
		for (a = 0; a < i; a++) g(j, c.round(k - c.max(d - c.abs(b - d), e - c.abs(a - e))) - 1, [a, b]);
	return j
	}
	};
	k.$JssorSlideshowRunner$ = function(k, s, q, u, z) {

	var f = this,
	v, g, a, y = 0,
	x = u.$TransitionsOrder,
	r, h = 8;

	function t(a) {

	if (a.$Top) a.F = a.$Top;
	if (a.$Left) a.D = a.$Left;
	b.$Each(a, function(a) {
		b.Yc(a) && t(a)
	})
	}

	function i(g, f) {

	var a = {
		$Interval: f,
		$Duration: 1,
		$Delay: 0,
		$Cols: 1,
		$Rows: 1,
		$Opacity: 0,
		$Zoom: 0,
		$Clip: 0,
		$Move: l,
		$SlideOut: l,
		$Reverse: l,
		$Formation: p.$FormationRandom,
		$Assembly: 1032,
		$ChessMode: {
			$Column: 0,
			$Row: 0
		},
		$Easing: e.$EaseSwing,
		$Round: {

		},
		Kb: [],
		$During: {

		}
	};
	b.o(a, g);
	t(a);
	a.Ib = a.$Cols * a.$Rows;
	a.$Easing = b.fc(a.$Easing);
	a.Ud = c.ceil(a.$Duration / a.$Interval);
	a.Od = function(c, b) {

		c /= a.$Cols;
		b /= a.$Rows;
		var f = c + "x" + b;
		if (!a.Kb[f]) {

			a.Kb[f] = {
				N: c,
				R: b
			};
			for (var d = 0; d < a.$Cols; d++)
				for (var e = 0; e < a.$Rows; e++) a.Kb[f][e + "," + d] = {
					$Top: e * b,
					$Right: d * c + c,
					$Bottom: e * b + b,
					$Left: d * c
				}
		}
		return a.Kb[f]
	};
	if (a.$Brother) {

		a.$Brother = i(a.$Brother, f);
		a.$SlideOut = d
	}
	return a
	}

	function o(B, h, a, w, o, m) {

	var z = this,
		u, v = {

		},
		i = {

		},
		n = [],
		f, e, s, q = a.$ChessMode.$Column || 0,
		r = a.$ChessMode.$Row || 0,
		g = a.Od(o, m),
		p = C(a),
		D = p.length - 1,
		t = a.$Duration + a.$Delay * D,
		x = w + t,
		k = a.$SlideOut,
		y;
	x += 50;

	function C(a) {
		var b = a.$Formation(a);
		return a.$Reverse ? b.reverse() : b
	}
	z.vd = x;
	z.dc = function(d) {

		d -= w;
		var e = d < t;
		if (e || y) {

			y = e;
			if (!k) d = t - d;
			var f = c.ceil(d / a.$Interval);
			b.$Each(i, function(a, e) {

				var d = c.max(f, a.ke);
				d = c.min(d, a.length - 1);
				if (a.ud != d) {

					if (!a.ud && !k) b.r(n[e]);
					else d == a.ee && k && b.P(n[e]);
					a.ud = d;
					b.K(n[e], a[d])
				}
			})
		}
	};
	h = b.$CloneNode(h);
	b.Eb(h, j);
	if (b.gb()) {

		var E = !h["no-image"],
			A = b.Ng(h);
		b.$Each(A, function(a) {

			(E || a["jssor-slider"]) && b.yb(a, b.yb(a), d)
		})
	}
	b.$Each(p, function(h, j) {

		b.$Each(h, function(G) {

			var K = G[0],
				J = G[1],
				t = K + "," + J,
				n = l,
				p = l,
				x = l;
			if (q && J % 2) {
				if (q & 3) n = !n;
				if (q & 12) p = !p;
				if (q & 16) x = !x
			}
			if (r && K % 2) {
				if (r & 3) n = !n;
				if (r & 12) p = !p;
				if (r & 16) x = !x
			}
			a.$Top = a.$Top || a.$Clip & 4;
			a.$Bottom = a.$Bottom || a.$Clip & 8;
			a.$Left = a.$Left || a.$Clip & 1;
			a.$Right = a.$Right || a.$Clip & 2;
			var C = p ? a.$Bottom : a.$Top,
				z = p ? a.$Top : a.$Bottom,
				B = n ? a.$Right : a.$Left,
				A = n ? a.$Left : a.$Right;
			a.$Clip = C || z || B || A;
			s = {

			};
			e = {
				F: 0,
				D: 0,
				$Opacity: 1,
				N: o,
				R: m
			};
			f = b.o({

			}, e);
			u = b.o({

			}, g[t]);
			if (a.$Opacity) e.$Opacity = 2 - a.$Opacity;
			if (a.$ZIndex) {

				e.$ZIndex = a.$ZIndex;
				f.$ZIndex = 0
			}
			var I = a.$Cols * a.$Rows > 1 || a.$Clip;
			if (a.$Zoom || a.$Rotate) {

				var H = d;
				if (b.gb())
					if (a.$Cols * a.$Rows > 1) H = l;
					else I = l;
				if (H) {

					e.$Zoom = a.$Zoom ? a.$Zoom - 1 : 1;
					f.$Zoom = 1;
					if (b.gb() || b.$IsBrowserOpera()) e.$Zoom = c.min(e.$Zoom, 2);
					var N = a.$Rotate || 0;
					e.$Rotate = N * 360 * (x ? -1 : 1);
					f.$Rotate = 0
				}
			}
			if (I) {

				var h = u.Jb = {

				};
				if (a.$Clip) {

					var w = a.$ScaleClip || 1;
					if (C && z) {

						h.$Top = g.R / 2 * w;
						h.$Bottom = -h.$Top
					} else if (C) h.$Bottom = -g.R * w;
					else if (z) h.$Top = g.R * w;
					if (B && A) {

						h.$Left = g.N / 2 * w;
						h.$Right = -h.$Left
					} else if (B) h.$Right = -g.N * w;
					else if (A) h.$Left = g.N * w
				}
				s.$Clip = u;
				f.$Clip = g[t]
			}
			var L = n ? 1 : -1,
				M = p ? 1 : -1;
			if (a.x) e.D += o * a.x * L;
			if (a.y) e.F += m * a.y * M;
			b.$Each(e, function(a, c) {

				if (b.Hb(a))
					if (a != f[c]) s[c] = a - f[c]
			});
			v[t] = k ? f : e;
			var D = a.Ud,
				y = c.round(j * a.$Delay / a.$Interval);
			i[t] = new Array(y);
			i[t].ke = y;
			i[t].ee = y + D - 1;
			for (var F = 0; F <= D; F++) {

				var E = b.Tc(f, s, F / D, a.$Easing, a.$During, a.$Round, {
					$Move: a.$Move,
					$OriginalWidth: o,
					$OriginalHeight: m
				});
				E.$ZIndex = E.$ZIndex || 1;
				i[t].push(E)
			}
		})
	});
	p.reverse();
	b.$Each(p, function(a) {

		b.$Each(a, function(c) {

			var f = c[0],
				e = c[1],
				d = f + "," + e,
				a = h;
			if (e || f) a = b.$CloneNode(h);
			b.K(a, v[d]);
			b.kb(a, "hidden");
			b.A(a, "absolute");
			B.pe(a);
			n[d] = a;
			b.r(a, !k)
		})
	})
	}

	function w() {

	var b = this,
		c = 0;
	m.call(b, 0, v);
	b.Ub = function(d, b) {

		if (b - c > h) {

			c = b;
			a && a.dc(b);
			g && g.dc(b)
		}
	};
	b.yc = r
	}
	f.le = function() {

	var a = 0,
		b = u.$Transitions,
		d = b.length;
	if (x) a = y++ % d;
	else a = c.floor(c.random() * d);
	b[a] && (b[a].ob = a);
	return b[a]
	};
	f.ge = function(w, x, l, m, b) {

	r = b;
	b = i(b, h);
	var j = m.zd,
		e = l.zd;
	j["no-image"] = !m.Mb;
	e["no-image"] = !l.Mb;
	var n = j,
		p = e,
		u = b,
		d = b.$Brother || i({

		}, h);
	if (!b.$SlideOut) {

		n = e;
		p = j
	}
	var t = d.$Shift || 0;
	g = new o(k, p, d, c.max(t - d.$Interval, 0), s, q);
	a = new o(k, n, u, c.max(d.$Interval - t, 0), s, q);
	g.dc(0);
	a.dc(0);
	v = c.max(g.vd, a.vd);
	f.ob = w
	};
	f.tb = function() {

	k.tb();
	g = j;
	a = j
	};
	f.Je = function() {
	var b = j;
	if (a) b = new w;
	return b
	};
	if (b.gb() || b.$IsBrowserOpera() || z && b.$WebKitVersion() < 537) h = 16;
	n.call(f);
	m.call(f, -1e7, 1e7)
	};
	var i = k.$JssorSlider$ = function(p, hc) {

	var g = this;

	function Fc() {

	var a = this;
	m.call(a, -1e8, 2e8);
	a.Le = function() {

		var b = a.qb(),
			d = c.floor(b),
			f = t(d),
			e = b - c.floor(b);
		return {
			ob: f,
			Xe: d,
			Db: e
		}
	};
	a.Ub = function(b, a) {

		var e = c.floor(a);
		if (e != a && a > b) e++;
		Wb(e, d);
		g.k(i.$EVT_POSITION_CHANGE, t(a), t(b), a, b)
	}
	}

	function Ec() {

	var a = this;
	m.call(a, 0, 0, {
		pd: r
	});
	b.$Each(C, function(b) {

		D & 1 && b.Ae(r);
		a.rc(b);
		b.$Shift(gb / dc)
	})
	}

	function Dc() {

	var a = this,
		b = Vb.$Elmt;
	m.call(a, -1, 2, {
		$Easing: e.$EaseLinear,
		Be: {
			Db: bc
		},
		pd: r
	}, b, {
		Db: 1
	}, {
		Db: -2
	});
	a.Yb = b
	}

	function rc(o, n) {

	var b = this,
		e, f, h, k, c;
	m.call(b, -1e8, 2e8, {
		Fc: 100
	});
	b.Qc = function() {

		O = d;
		R = j;
		g.k(i.$EVT_SWIPE_START, t(w.cb()), w.cb())
	};
	b.Kc = function() {

		O = l;
		k = l;
		var a = w.Le();
		g.k(i.$EVT_SWIPE_END, t(w.cb()), w.cb());
		!a.Db && Hc(a.Xe, s)
	};
	b.Ub = function(i, g) {

		var b;
		if (k) b = c;
		else {

			b = f;
			if (h) {

				var d = g / h;
				b = a.$SlideEasing(d) * (f - e) + e
			}
		}
		w.B(b)
	};
	b.Ob = function(a, d, c, g) {

		e = a;
		f = d;
		h = c;
		w.B(a);
		b.B(0);
		b.Lc(c, g)
	};
	b.ve = function(a) {

		k = d;
		c = a;
		b.$Play(a, j, d)
	};
	b.ue = function(a) {
		c = a
	};
	w = new Fc;
	w.wb(o);
	w.wb(n)
	}

	function sc() {

	var c = this,
		a = Zb();
	b.I(a, 0);
	b.$Css(a, "pointerEvents", "none");
	c.$Elmt = a;
	c.pe = function(c) {

		b.$AppendChild(a, c);
		b.r(a)
	};
	c.tb = function() {

		b.P(a);
		b.qc(a)
	}
	}

	function Bc(k, f) {

	var e = this,
		q, H, x, o, y = [],
		w, B, W, G, Q, F, h, v, p;
	m.call(e, -u, u + 1, {

	});

	function E(a) {

		q && q.Cd();
		T(k, a, 0);
		F = d;
		q = new I.$Class(k, I, b.rg(b.$AttributeEx(k, "idle")) || qc);
		q.B(0)
	}

	function Y() {
		q.sc < I.sc && E()
	}

	function N(p, r, n) {

		if (!G) {

			G = d;
			if (o && n) {

				var h = n.width,
					c = n.height,
					m = h,
					k = c;
				if (h && c && a.$FillMode) {

					if (a.$FillMode & 3 && (!(a.$FillMode & 4) || h > K || c > J)) {

						var j = l,
							q = K / J * c / h;
						if (a.$FillMode & 1) j = q > 1;
						else if (a.$FillMode & 2) j = q < 1;
						m = j ? h * J / c : K;
						k = j ? J : c * K / h
					}
					b.$CssWidth(o, m);
					b.$CssHeight(o, k);
					b.v(o, (J - k) / 2);
					b.s(o, (K - m) / 2)
				}
				b.A(o, "absolute");
				g.k(i.$EVT_LOAD_END, f)
			}
		}
		b.P(r);
		p && p(e)
	}

	function X(b, c, d, g) {

		if (g == R && s == f && P)
			if (!Gc) {

				var a = t(b);
				A.ge(a, f, c, e, d);
				c.Ye();
				U.$Shift(a - U.jc() - 1);
				U.B(a);
				z.Ob(b, b, 0)
			}
	}

	function ab(b) {

		if (b == R && s == f) {

			if (!h) {

				var a = j;
				if (A)
					if (A.ob == f) a = A.Je();
					else A.tb();
				Y();
				h = new zc(k, f, a, q);
				h.Fd(p)
			}!h.$IsPlaying() && h.tc()
		}
	}

	function S(d, g, l) {

		if (d == f) {

			if (d != g) C[g] && C[g].De();
			else !l && h && h.Ke();
			p && p.$Enable();
			var m = R = b.M();
			e.xb(b.$CreateCallback(j, ab, m))
		} else {

			var k = c.min(f, d),
				i = c.max(f, d),
				o = c.min(i - k, k + r - i),
				n = u + a.$LazyLoading - 1;
			(!Q || o <= n) && e.xb()
		}
	}

	function bb() {

		if (s == f && h) {

			h.pb();
			p && p.$Quit();
			p && p.$Disable();
			h.fd()
		}
	}

	function eb() {
		s == f && h && h.pb()
	}

	function Z(a) {
		!M && g.k(i.$EVT_CLICK, f, a)
	}

	function O() {

		p = v.pInstance;
		h && h.Fd(p)
	}
	e.xb = function(c, a) {

		a = a || x;
		if (y.length && !G) {

			b.r(a);
			if (!W) {

				W = d;
				g.k(i.$EVT_LOAD_START, f);
				b.$Each(y, function(a) {

					if (!b.$Attribute(a, "src")) {

						a.src = b.$AttributeEx(a, "src2");
						b.U(a, a["display-origin"])
					}
				})
			}
			b.af(y, o, b.$CreateCallback(j, N, c, a))
		} else N(c, a)
	};
	e.Sd = function() {

		var h = f;
		if (a.$AutoPlaySteps < 0) h -= r;
		var d = h + a.$AutoPlaySteps * xc;
		if (D & 2) d = t(d);
		if (!(D & 1) && !db) d = c.max(0, c.min(d, r - u));
		if (d != f) {

			if (A) {

				var e = A.le(r);
				if (e) {

					var i = R = b.M(),
						g = C[t(d)];
					return g.xb(b.$CreateCallback(j, X, d, g, e, i), x)
				}
			}
			ob(d)
		}
	};
	e.Bc = function() {
		S(f, f, d)
	};
	e.De = function() {

		p && p.$Quit();
		p && p.$Disable();
		e.Hc();
		h && h.de();
		h = j;
		E()
	};
	e.Ye = function() {
		b.P(k)
	};
	e.Hc = function() {
		b.r(k)
	};
	e.fe = function() {
		p && p.$Enable()
	};

	function T(a, c, e) {

		if (b.$Attribute(a, "jssor-slider")) return;
		if (!F) {

			if (a.tagName == "IMG") {

				y.push(a);
				if (!b.$Attribute(a, "src")) {

					Q = d;
					a["display-origin"] = b.U(a);
					b.P(a)
				}
			}
			b.gb() && b.I(a, (b.I(a) || 0) + 1)
		}
		var f = b.$Children(a);
		b.$Each(f, function(f) {

			var h = f.tagName,
				i = b.$AttributeEx(f, "u");
			if (i == "player" && !v) {

				v = f;
				if (v.pInstance) O();
				else b.$AddEvent(v, "dataavailable", O)
			}
			if (i == "caption") {

				if (c) {

					b.Ic(f, b.$AttributeEx(f, "to"));
					b.zf(f, b.$AttributeEx(f, "bf"));
					b.$AttributeEx(f, "3d") && b.yf(f, "preserve-3d")
				} else if (!b.$IsBrowserIE()) {

					var g = b.$CloneNode(f, l, d);
					b.Vb(g, f, a);
					b.zb(f, a);
					f = g;
					c = d
				}
			} else if (!F && !e && !o) {

				if (h == "A") {

					if (b.$AttributeEx(f, "u") == "image") o = b.Jg(f, "IMG");
					else o = b.$FindChild(f, "image", d);
					if (o) {

						w = f;
						b.U(w, "block");
						b.K(w, V);
						B = b.$CloneNode(w, d);
						b.A(w, "relative");
						b.yb(B, 0);
						b.$Css(B, "backgroundColor", "#000")
					}
				} else if (h == "IMG" && b.$AttributeEx(f, "u") == "image") o = f;
				if (o) {

					o.border = 0;
					b.K(o, V)
				}
			}
			T(f, c, e + 1)
		})
	}
	e.nc = function(c, b) {

		var a = u - b;
		bc(H, a)
	};
	e.ob = f;
	n.call(e);
	b.xf(k, b.$AttributeEx(k, "p"));
	b.qf(k, b.$AttributeEx(k, "po"));
	var L = b.$FindChild(k, "thumb", d);
	if (L) {

		e.re = b.$CloneNode(L);
		b.P(L)
	}
	b.r(k);
	x = b.$CloneNode(cb);
	b.I(x, 1e3);
	b.$AddEvent(k, "click", Z);
	E(d);
	e.Mb = o;
	e.Pc = B;
	e.zd = k;
	e.Yb = H = k;
	b.$AppendChild(H, x);
	g.$On(203, S);
	g.$On(28, eb);
	g.$On(24, bb)
	}

	function zc(y, f, p, q) {

	var a = this,
		n = 0,
		u = 0,
		h, j, e, c, k, t, r, o = C[f];
	m.call(a, 0, 0);

	function v() {

		b.qc(N);
		fc && k && o.Pc && b.$AppendChild(N, o.Pc);
		b.r(N, !k && o.Mb)
	}

	function w() {
		a.tc()
	}

	function x(b) {

		r = b;
		a.pb();
		a.tc()
	}
	a.tc = function() {

		var b = a.qb();
		if (!B && !O && !r && s == f) {

			if (!b) {

				if (h && !k) {

					k = d;
					a.fd(d);
					g.k(i.$EVT_SLIDESHOW_START, f, n, u, h, c)
				}
				v()
			}
			var l, p = i.$EVT_STATE_CHANGE;
			if (b != c)
				if (b == e) l = c;
				else if (b == j) l = e;
			else if (!b) l = j;
			else l = a.Hd();
			g.k(p, f, b, n, j, e, c);
			var m = P && (!E || F);
			if (b == c)(e != c && !(E & 12) || m) && o.Sd();
			else(m || b != e) && a.Lc(l, w)
		}
	};
	a.Ke = function() {
		e == c && e == a.qb() && a.B(j)
	};
	a.de = function() {

		A && A.ob == f && A.tb();
		var b = a.qb();
		b < c && g.k(i.$EVT_STATE_CHANGE, f, -b - 1, n, j, e, c)
	};
	a.fd = function(a) {
		p && b.kb(ib, a && p.yc.$Outside ? "" : "hidden")
	};
	a.nc = function(b, a) {

		if (k && a >= h) {

			k = l;
			v();
			o.Hc();
			A.tb();
			g.k(i.$EVT_SLIDESHOW_END, f, n, u, h, c)
		}
		g.k(i.$EVT_PROGRESS_CHANGE, f, a, n, j, e, c)
	};
	a.Fd = function(a) {

		if (a && !t) {

			t = a;
			a.$On($JssorPlayer$.se, x)
		}
	};
	p && a.rc(p);
	h = a.Zb();
	a.rc(q);
	j = h + q.bd;
	e = h + q.hd;
	c = a.Zb()
	}

	function Mb(a, c, d) {

	b.s(a, c);
	b.v(a, d)
	}

	function bc(c, b) {

	var a = x > 0 ? x : hb,
		d = Bb * b * (a & 1),
		e = Cb * b * (a >> 1 & 1);
	Mb(c, d, e)
	}

	function Rb() {

	qb = O;
	Kb = z.Hd();
	G = w.cb()
	}

	function ic() {

	Rb();
	if (B || !F && E & 12) {

		z.pb();
		g.k(i.gg)
	}
	}

	function gc(f) {

	if (!B && (F || !(E & 12)) && !z.$IsPlaying()) {

		var d = w.cb(),
			b = c.ceil(G);
		if (f && c.abs(H) >= a.$MinDragOffsetToSlide) {

			b = c.ceil(d);
			b += fb
		}
		if (!(D & 1)) b = c.min(r - u, c.max(b, 0));
		var e = c.abs(b - d);
		e = 1 - c.pow(1 - e, 5);
		if (!M && qb) z.Oe(Kb);
		else if (d == b) {

			ub.fe();
			ub.Bc()
		} else z.Ob(d, b, e * Xb)
	}
	}

	function Ib(a) {
	!b.$AttributeEx(b.$EvtSrc(a), "nodrag") && b.$CancelEvent(a)
	}

	function vc(a) {
	ac(a, 1)
	}

	function ac(a, c) {

	a = b.Id(a);
	var k = b.$EvtSrc(a);
	if (!L && !b.$AttributeEx(k, "nodrag") && wc() && (!c || a.touches.length == 1)) {

		B = d;
		Ab = l;
		R = j;
		b.$AddEvent(f, c ? "touchmove" : "mousemove", Db);
		b.M();
		M = 0;
		ic();
		if (!qb) x = 0;
		if (c) {

			var h = a.touches[0];
			vb = h.clientX;
			wb = h.clientY
		} else {

			var e = b.Ed(a);
			vb = e.x;
			wb = e.y
		}
		H = 0;
		bb = 0;
		fb = 0;
		g.k(i.$EVT_DRAG_START, t(G), G, a)
	}
	}

	function Db(e) {

	if (B) {

		e = b.Id(e);
		var f;
		if (e.type != "mousemove") {

			var l = e.touches[0];
			f = {
				x: l.clientX,
				y: l.clientY
			}
		} else f = b.Ed(e);
		if (f) {

			var j = f.x - vb,
				k = f.y - wb;
			if (c.floor(G) != G) x = x || hb & L;
			if ((j || k) && !x) {

				if (L == 3)
					if (c.abs(k) > c.abs(j)) x = 2;
					else x = 1;
				else x = L;
				if (kb && x == 1 && c.abs(k) - c.abs(j) > 3) Ab = d
			}
			if (x) {

				var a = k,
					i = Cb;
				if (x == 1) {

					a = j;
					i = Bb
				}
				if (!(D & 1)) {

					if (a > 0) {

						var g = i * s,
							h = a - g;
						if (h > 0) a = g + c.sqrt(h) * 5
					}
					if (a < 0) {

						var g = i * (r - u - s),
							h = -a - g;
						if (h > 0) a = -g - c.sqrt(h) * 5
					}
				}
				if (H - bb < -2) fb = 0;
				else if (H - bb > 2) fb = -1;
				bb = H;
				H = a;
				tb = G - H / i / (Z || 1);
				if (H && x && !Ab) {

					b.$CancelEvent(e);
					if (!O) z.ve(tb);
					else z.ue(tb)
				}
			}
		}
	}
	}

	function nb() {

	tc();
	if (B) {

		B = l;
		b.M();
		b.S(f, "mousemove", Db);
		b.S(f, "touchmove", Db);
		M = H;
		z.pb();
		var a = w.cb();
		g.k(i.$EVT_DRAG_END, t(a), a, t(G), G);
		E & 12 && Rb();
		gc(d)
	}
	}

	function mc(c) {
	if (M) {
		b.$StopEvent(c);
		var a = b.$EvtSrc(c);
		while (a && v !== a) {
			a.tagName == "A" && b.$CancelEvent(c);
			try {
				a = a.parentNode
			} catch (d) {
				break
			}
		}
	}
	}

	function Lb(a) {

	C[s];
	s = t(a);
	ub = C[s];
	Wb(a);
	return s
	}

	function Hc(a, b) {

	x = 0;
	Lb(a);
	g.k(i.$EVT_PARK, t(a), b)
	}

	function Wb(a, c) {

	yb = a;
	b.$Each(S, function(b) {
		b.Ec(t(a), a, c)
	})
	}

	function wc() {

	var b = i.Zc || 0,
		a = Y;
	if (kb) a & 1 && (a &= 1);
	i.Zc |= a;
	return L = a & ~b
	}

	function tc() {

	if (L) {

		i.Zc &= ~Y;
		L = 0
	}
	}

	function Zb() {

	var a = b.$CreateDiv();
	b.K(a, V);
	b.A(a, "absolute");
	return a
	}

	function t(a) {
	return (a % r + r) % r
	}

	function nc(b, d) {

	if (d)
		if (!D) {

			b = c.min(c.max(b + yb, 0), r - u);
			d = l
		} else if (D & 2) {

		b = t(b + yb);
		d = l
	}
	ob(b, a.$SlideDuration, d)
	}

	function zb() {
	b.$Each(S, function(a) {
		a.gc(a.Nb.$ChanceToShow <= F)
	})
	}

	function kc() {

	if (!F) {

		F = 1;
		zb();
		if (!B) {

			E & 12 && gc();
			E & 3 && C[s].Bc()
		}
	}
	}

	function jc() {

	if (F) {

		F = 0;
		zb();
		B || !(E & 12) || ic()
	}
	}

	function lc() {

	V = {
		N: K,
		R: J,
		$Top: 0,
		$Left: 0
	};
	b.$Each(T, function(a) {

		b.K(a, V);
		b.A(a, "absolute");
		b.kb(a, "hidden");
		b.P(a)
	});
	b.K(cb, V)
	}

	function mb(b, a) {
	ob(b, a, d)
	}

	function ob(g, f, k) {

	if (Tb && (!B && (F || !(E & 12)) || a.$NaviQuitDrag)) {

		O = d;
		B = l;
		z.pb();
		if (f == h) f = Xb;
		var e = Eb.qb(),
			b = g;
		if (k) {

			b = e + g;
			if (g > 0) b = c.ceil(b);
			else b = c.floor(b)
		}
		if (D & 2) b = t(b);
		if (!(D & 1)) b = c.max(0, c.min(b, r - u));
		var j = (b - e) % r;
		b = e + j;
		var i = e == b ? 0 : f * c.abs(j);
		i = c.min(i, f * u * 1.5);
		z.Ob(e, b, i || 1)
	}
	}
	g.$PlayTo = ob;
	g.$GoTo = function(a) {
	w.B(Lb(a))
	};
	g.$Next = function() {
	mb(1)
	};
	g.$Prev = function() {
	mb(-1)
	};
	g.$Pause = function() {
	P = l
	};
	g.$Play = function() {

	if (!P) {

		P = d;
		C[s] && C[s].Bc()
	}
	};
	g.$SetSlideshowTransitions = function(b) {
	a.$SlideshowOptions.$Transitions = b
	};
	g.$SetCaptionTransitions = function(a) {

	I.$Transitions = a;
	I.sc = b.M()
	};
	g.$SlidesCount = function() {
	return T.length
	};
	g.$CurrentIndex = function() {
	return s
	};
	g.$IsAutoPlaying = function() {
	return P
	};
	g.$IsDragging = function() {
	return B
	};
	g.$IsSliding = function() {
	return O
	};
	g.$IsMouseOver = function() {
	return !F
	};
	g.$LastDragSucceded = function() {
	return M
	};

	function X() {
	return b.$CssWidth(y || p)
	}

	function jb() {
	return b.$CssHeight(y || p)
	}
	g.$OriginalWidth = g.$GetOriginalWidth = X;
	g.$OriginalHeight = g.$GetOriginalHeight = jb;

	function Gb(c, d) {

	if (c == h) return b.$CssWidth(p);
	if (!y) {

		var a = b.$CreateDiv(f);
		b.ad(a, b.ad(p));
		b.$CssCssText(a, b.$CssCssText(p));
		b.U(a, "block");
		b.A(a, "relative");
		b.v(a, 0);
		b.s(a, 0);
		b.kb(a, "visible");
		y = b.$CreateDiv(f);
		b.A(y, "absolute");
		b.v(y, 0);
		b.s(y, 0);
		b.$CssWidth(y, b.$CssWidth(p));
		b.$CssHeight(y, b.$CssHeight(p));
		b.Ic(y, "0 0");
		b.$AppendChild(y, a);
		var i = b.$Children(p);
		b.$AppendChild(p, y);
		b.$Css(p, "backgroundImage", "");
		b.$Each(i, function(c) {

			b.$AppendChild(b.$AttributeEx(c, "noscale") ? p : a, c);
			b.$AttributeEx(c, "autocenter") && Nb.push(c)
		})
	}
	Z = c / (d ? b.$CssHeight : b.$CssWidth)(y);
	b.pf(y, Z);
	var g = d ? Z * X() : c,
		e = d ? c : Z * jb();
	b.$CssWidth(p, g);
	b.$CssHeight(p, e);
	b.$Each(Nb, function(a) {

		var c = b.zc(b.$AttributeEx(a, "autocenter"));
		b.wg(a, c)
	})
	}
	g.$ScaleHeight = g.$GetScaleHeight = function(a) {

	if (a == h) return b.$CssHeight(p);
	Gb(a, d)
	};
	g.$ScaleWidth = g.$SetScaleWidth = g.$GetScaleWidth = Gb;
	g.kd = function(a) {

	var d = c.ceil(t(gb / dc)),
		b = t(a - s + d);
	if (b > u) {

		if (a - s > r / 2) a -= r;
		else if (a - s <= -r / 2) a += r
	} else a = s + b - d;
	return a
	};
	n.call(g);
	g.$Elmt = p = b.$GetElement(p);
	var a = b.o({
	$FillMode: 0,
	$LazyLoading: 1,
	$ArrowKeyNavigation: 1,
	$StartIndex: 0,
	$AutoPlay: l,
	$Loop: 1,
	$HWA: d,
	$NaviQuitDrag: d,
	$AutoPlaySteps: 1,
	$AutoPlayInterval: 3e3,
	$PauseOnHover: 1,
	$SlideDuration: 500,
	$SlideEasing: e.$EaseOutQuad,
	$MinDragOffsetToSlide: 20,
	$SlideSpacing: 0,
	$Cols: 1,
	$Align: 0,
	$UISearchMode: 1,
	$PlayOrientation: 1,
	$DragOrientation: 1
	}, hc);
	a.$HWA = a.$HWA && b.nf();
	if (a.$Idle != h) a.$AutoPlayInterval = a.$Idle;
	if (a.$ParkingPosition != h) a.$Align = a.$ParkingPosition;
	var hb = a.$PlayOrientation & 3,
	xc = (a.$PlayOrientation & 4) / -4 || 1,
	eb = a.$SlideshowOptions,
	I = b.o({
		$Class: q,
		$PlayInMode: 1,
		$PlayOutMode: 1,
		$HWA: a.$HWA
	}, a.$CaptionSliderOptions);
	I.$Transitions = I.$Transitions || I.$CaptionTransitions;
	var rb = a.$BulletNavigatorOptions,
	W = a.$ArrowNavigatorOptions,
	ab = a.$ThumbnailNavigatorOptions,
	Q = !a.$UISearchMode,
	y, v = b.$FindChild(p, "slides", Q),
	cb = b.$FindChild(p, "loading", Q) || b.$CreateDiv(f),
	Jb = b.$FindChild(p, "navigator", Q),
	ec = b.$FindChild(p, "arrowleft", Q),
	cc = b.$FindChild(p, "arrowright", Q),
	Hb = b.$FindChild(p, "thumbnavigator", Q),
	pc = b.$CssWidth(v),
	oc = b.$CssHeight(v),
	V, T = [],
	yc = b.$Children(v);
	b.$Each(yc, function(a) {

	if (a.tagName == "DIV" && !b.$AttributeEx(a, "u")) T.push(a);
	else b.gb() && b.I(a, (b.I(a) || 0) + 1)
	});
	var s = -1,
	yb, ub, r = T.length,
	K = a.$SlideWidth || pc,
	J = a.$SlideHeight || oc,
	Yb = a.$SlideSpacing,
	Bb = K + Yb,
	Cb = J + Yb,
	dc = hb & 1 ? Bb : Cb,
	u = c.min(a.$Cols, r),
	ib, x, L, Ab, S = [],
	Sb, Ub, Qb, fc, Gc, P, E = a.$PauseOnHover,
	qc = a.$AutoPlayInterval,
	Xb = a.$SlideDuration,
	sb, db, gb, Tb = u < r,
	D = Tb ? a.$Loop : 0,
	Y, M, F = 1,
	O, B, R, vb = 0,
	wb = 0,
	H, bb, fb, Eb, w, U, z, Vb = new sc,
	Z, Nb = [];
	if (r) {

	if (a.$HWA) Mb = function(a, c, d) {
		b.Eb(a, {
			$TranslateX: c,
			$TranslateY: d
		})
	};
	P = a.$AutoPlay;
	g.Nb = hc;
	lc();
	b.$Attribute(p, "jssor-slider", d);
	b.I(v, b.I(v) || 0);
	b.A(v, "absolute");
	ib = b.$CloneNode(v, d);
	b.Vb(ib, v);
	if (eb) {

		fc = eb.$ShowLink;
		sb = eb.$Class;
		db = u == 1 && r > 1 && sb && (!b.$IsBrowserIE() || b.$BrowserVersion() >= 8)
	}
	gb = db || u >= r || !(D & 1) ? 0 : a.$Align;
	Y = (u > 1 || gb ? hb : -1) & a.$DragOrientation;
	var xb = v,
		C = [],
		A, N, Fb = b.$Device(),
		kb = Fb.Wf,
		G, qb, Kb, tb;
	Fb.nd && b.$Css(xb, Fb.nd, ([j, "pan-y", "pan-x", "none"])[Y] || "");
	U = new Dc;
	if (db) A = new sb(Vb, K, J, eb, kb);
	b.$AppendChild(ib, U.Yb);
	b.kb(v, "hidden");
	N = Zb();
	b.$Css(N, "backgroundColor", "#000");
	b.yb(N, 0);
	b.Vb(N, xb.firstChild, xb);
	for (var pb = 0; pb < T.length; pb++) {

		var Ac = T[pb],
			Cc = new Bc(Ac, pb);
		C.push(Cc)
	}
	b.P(cb);
	Eb = new Ec;
	z = new rc(Eb, U);
	b.$AddEvent(v, "click", mc, d);
	b.$AddEvent(p, "mouseout", b.Sb(kc, p));
	b.$AddEvent(p, "mouseover", b.Sb(jc, p));
	if (Y) {

		b.$AddEvent(v, "mousedown", ac);
		b.$AddEvent(v, "touchstart", vc);
		b.$AddEvent(v, "dragstart", Ib);
		b.$AddEvent(v, "selectstart", Ib);
		b.$AddEvent(f, "mouseup", nb);
		b.$AddEvent(f, "touchend", nb);
		b.$AddEvent(f, "touchcancel", nb);
		b.$AddEvent(k, "blur", nb)
	}
	E &= kb ? 10 : 5;
	if (Jb && rb) {

		Sb = new rb.$Class(Jb, rb, X(), jb());
		S.push(Sb)
	}
	if (W && ec && cc) {

		W.$Loop = D;
		W.$Cols = u;
		Ub = new W.$Class(ec, cc, W, X(), jb());
		S.push(Ub)
	}
	if (Hb && ab) {

		ab.$StartIndex = a.$StartIndex;
		Qb = new ab.$Class(Hb, ab);
		S.push(Qb)
	}
	b.$Each(S, function(a) {

		a.wc(r, C, cb);
		a.$On(o.Lb, nc)
	});
	b.$Css(p, "visibility", "visible");
	Gb(X());
	zb();
	a.$ArrowKeyNavigation && b.$AddEvent(f, "keydown", function(b) {

		if (b.keyCode == 37) mb(-a.$ArrowKeyNavigation);
		else b.keyCode == 39 && mb(a.$ArrowKeyNavigation)
	});
	var lb = a.$StartIndex;
	if (!(D & 1)) lb = c.max(0, c.min(lb, r - u));
	z.Ob(lb, lb, 0)
	}
	};
	i.$EVT_CLICK = 21;
	i.$EVT_DRAG_START = 22;
	i.$EVT_DRAG_END = 23;
	i.$EVT_SWIPE_START = 24;
	i.$EVT_SWIPE_END = 25;
	i.$EVT_LOAD_START = 26;
	i.$EVT_LOAD_END = 27;
	i.gg = 28;
	i.$EVT_POSITION_CHANGE = 202;
	i.$EVT_PARK = 203;
	i.$EVT_SLIDESHOW_START = 206;
	i.$EVT_SLIDESHOW_END = 207;
	i.$EVT_PROGRESS_CHANGE = 208;
	i.$EVT_STATE_CHANGE = 209;
	var o = {
	Lb: 1
	};
	k.$JssorBulletNavigator$ = function(e, C) {

	var f = this;
	n.call(f);
	e = b.$GetElement(e);
	var s, A, z, r, k = 0,
	a, m, i, w, x, h, g, q, p, B = [],
	y = [];

	function v(a) {
	a != -1 && y[a].Jc(a == k)
	}

	function t(a) {
	f.k(o.Lb, a * m)
	}
	f.$Elmt = e;
	f.Ec = function(a) {

	if (a != r) {

		var d = k,
			b = c.floor(a / m);
		k = b;
		r = a;
		v(d);
		v(b)
	}
	};
	f.gc = function(a) {
	b.r(e, a)
	};
	var u;
	f.wc = function(E) {

	if (!u) {

		s = c.ceil(E / m);
		k = 0;
		var o = q + w,
			r = p + x,
			n = c.ceil(s / i) - 1;
		A = q + o * (!h ? n : i - 1);
		z = p + r * (h ? n : i - 1);
		b.$CssWidth(e, A);
		b.$CssHeight(e, z);
		for (var f = 0; f < s; f++) {

			var C = b.Dg();
			b.$InnerText(C, f + 1);
			var l = b.Gc(g, "numbertemplate", C, d);
			b.A(l, "absolute");
			var v = f % (n + 1);
			b.s(l, !h ? o * v : f % i * o);
			b.v(l, h ? r * v : c.floor(f / (n + 1)) * r);
			b.$AppendChild(e, l);
			B[f] = l;
			a.$ActionMode & 1 && b.$AddEvent(l, "click", b.$CreateCallback(j, t, f));
			a.$ActionMode & 2 && b.$AddEvent(l, "mouseover", b.Sb(b.$CreateCallback(j, t, f), l));
			y[f] = b.Tb(l)
		}
		u = d
	}
	};
	f.Nb = a = b.o({
	$SpacingX: 10,
	$SpacingY: 10,
	$Orientation: 1,
	$ActionMode: 1
	}, C);
	g = b.$FindChild(e, "prototype");
	q = b.$CssWidth(g);
	p = b.$CssHeight(g);
	b.zb(g, e);
	m = a.$Steps || 1;
	i = a.$Rows || 1;
	w = a.$SpacingX;
	x = a.$SpacingY;
	h = a.$Orientation - 1;
	a.$Scale == l && b.$Attribute(e, "noscale", d);
	a.$AutoCenter && b.$Attribute(e, "autocenter", a.$AutoCenter)
	};
	k.$JssorArrowNavigator$ = function(a, g, h) {

	var c = this;
	n.call(c);
	var r, q, e, f, i;
	b.$CssWidth(a);
	b.$CssHeight(a);

	function k(a) {
	c.k(o.Lb, a, d)
	}

	function p(c) {

	b.r(a, c || !h.$Loop && e == 0);
	b.r(g, c || !h.$Loop && e >= q - h.$Cols);
	r = c
	}
	c.Ec = function(b, a, c) {

	if (c) e = a;
	else {

		e = b;
		p(r)
	}
	};
	c.gc = p;
	var m;
	c.wc = function(c) {

	q = c;
	e = 0;
	if (!m) {

		b.$AddEvent(a, "click", b.$CreateCallback(j, k, -i));
		b.$AddEvent(g, "click", b.$CreateCallback(j, k, i));
		b.Tb(a);
		b.Tb(g);
		m = d
	}
	};
	c.Nb = f = b.o({
	$Steps: 1
	}, h);
	i = f.$Steps;
	if (f.$Scale == l) {

	b.$Attribute(a, "noscale", d);
	b.$Attribute(g, "noscale", d)
	}
	if (f.$AutoCenter) {

	b.$Attribute(a, "autocenter", f.$AutoCenter);
	b.$Attribute(g, "autocenter", f.$AutoCenter)
	}
	};
	k.$JssorThumbnailNavigator$ = function(g, B) {

	var h = this,
	y, p, a, v = [],
	z, x, e, q, r, u, t, m, s, f, k;
	n.call(h);
	g = b.$GetElement(g);

	function A(n, f) {

	var g = this,
		c, m, l;

	function q() {
		m.Jc(p == f)
	}

	function i(d) {

		if (d || !s.$LastDragSucceded()) {

			var a = e - f % e,
				b = s.kd((f + a) / e - 1),
				c = b * e + e - a;
			h.k(o.Lb, c)
		}
	}
	g.ob = f;
	g.qd = q;
	l = n.re || n.Mb || b.$CreateDiv();
	g.Yb = c = b.Gc(k, "thumbnailtemplate", l, d);
	m = b.Tb(c);
	a.$ActionMode & 1 && b.$AddEvent(c, "click", b.$CreateCallback(j, i, 0));
	a.$ActionMode & 2 && b.$AddEvent(c, "mouseover", b.Sb(b.$CreateCallback(j, i, 1), c))
	}
	h.Ec = function(b, d, f) {

	var a = p;
	p = b;
	a != -1 && v[a].qd();
	v[b].qd();
	!f && s.$PlayTo(s.kd(c.floor(d / e)))
	};
	h.gc = function(a) {
	b.r(g, a)
	};
	var w;
	h.wc = function(F, D) {

	if (!w) {

		y = F;
		c.ceil(y / e);
		p = -1;
		m = c.min(m, D.length);
		var h = a.$Orientation & 1,
			n = u + (u + q) * (e - 1) * (1 - h),
			k = t + (t + r) * (e - 1) * h,
			B = n + (n + q) * (m - 1) * h,
			o = k + (k + r) * (m - 1) * (1 - h);
		b.A(f, "absolute");
		b.kb(f, "hidden");
		a.$AutoCenter & 1 && b.s(f, (z - B) / 2);
		a.$AutoCenter & 2 && b.v(f, (x - o) / 2);
		b.$CssWidth(f, B);
		b.$CssHeight(f, o);
		var j = [];
		b.$Each(D, function(l, g) {

			var i = new A(l, g),
				d = i.Yb,
				a = c.floor(g / e),
				k = g % e;
			b.s(d, (u + q) * k * (1 - h));
			b.v(d, (t + r) * k * h);
			if (!j[a]) {

				j[a] = b.$CreateDiv();
				b.$AppendChild(f, j[a])
			}
			b.$AppendChild(j[a], d);
			v.push(i)
		});
		var E = b.o({
			$AutoPlay: l,
			$NaviQuitDrag: l,
			$SlideWidth: n,
			$SlideHeight: k,
			$SlideSpacing: q * h + r * (1 - h),
			$MinDragOffsetToSlide: 12,
			$SlideDuration: 200,
			$PauseOnHover: 1,
			$PlayOrientation: a.$Orientation,
			$DragOrientation: a.$NoDrag || a.$DisableDrag ? 0 : a.$Orientation
		}, a);
		s = new i(g, E);
		w = d
	}
	};
	h.Nb = a = b.o({
	$SpacingX: 0,
	$SpacingY: 0,
	$Cols: 1,
	$Orientation: 1,
	$AutoCenter: 3,
	$ActionMode: 1
	}, B);
	z = b.$CssWidth(g);
	x = b.$CssHeight(g);
	f = b.$FindChild(g, "slides", d);
	k = b.$FindChild(f, "prototype");
	u = b.$CssWidth(k);
	t = b.$CssHeight(k);
	b.zb(k, f);
	e = a.$Rows || 1;
	q = a.$SpacingX;
	r = a.$SpacingY;
	m = a.$Cols;
	a.$Scale == l && b.$Attribute(g, "noscale", d)
	};

	function q(e, d, c) {

	var a = this;
	m.call(a, 0, c);
	a.Cd = b.Sc;
	a.bd = 0;
	a.hd = c
	}
	k.$JssorCaptionSlideo$ = function(n, f, l) {

	var a = this,
	o, h = {

	},
	i = f.$Transitions,
	c = new m(0, 0);
	m.call(a, 0, 0);

	function j(d, c) {

	var a = {

	};
	b.$Each(d, function(d, f) {

	var e = h[f];
	if (e) {

		if (b.Yc(d)) d = j(d, c || f == "e");
		else if (c)
			if (b.Hb(d)) d = o[d];
		a[e] = d
	}
	});
	return a
	}

	function k(e, c) {

	var a = [],
	d = b.$Children(e);
	b.$Each(d, function(d) {

	var h = b.$AttributeEx(d, "u") == "caption";
	if (h) {

		var e = b.$AttributeEx(d, "t"),
			g = i[b.zc(e)] || i[e],
			f = {
				$Elmt: d,
				yc: g
			};
		a.push(f)
	}
	if (c < 5) a = a.concat(k(d, c + 1))
	});
	return a
	}

	function r(e, f, a) {

	b.$Each(f, function(h) {

	var f = b.o(d, {

		}, j(h)),
		g = b.fc(f.$Easing);
	delete f.$Easing;
	if (f.$Left) {

		f.D = f.$Left;
		g.D = g.$Left;
		delete f.$Left
	}
	if (f.$Top) {

		f.F = f.$Top;
		g.F = g.$Top;
		delete f.$Top
	}
	var i = {
			$Easing: g,
			$OriginalWidth: a.N,
			$OriginalHeight: a.R
		},
		k = new m(h.b, h.d, i, e, a, f);
	c.wb(k);
	a = b.ze(a, f)
	});
	return a
	}

	function q(a) {

	b.$Each(a, function(f) {

	var a = f.$Elmt,
		e = b.$CssWidth(a),
		d = b.$CssHeight(a),
		c = {
			$Left: b.s(a),
			$Top: b.v(a),
			D: 0,
			F: 0,
			$Opacity: 1,
			$ZIndex: b.I(a) || 0,
			$Rotate: 0,
			$RotateX: 0,
			$RotateY: 0,
			$ScaleX: 1,
			$ScaleY: 1,
			$TranslateX: 0,
			$TranslateY: 0,
			$TranslateZ: 0,
			$SkewX: 0,
			$SkewY: 0,
			N: e,
			R: d,
			$Clip: {
				$Top: 0,
				$Right: e,
				$Bottom: d,
				$Left: 0
			}
		};
	c.gd = c.$Left;
	c.Uc = c.$Top;
	r(a, f.yc, c)
	})
	}

	function t(g, f, h) {

	var e = g.b - f;
	if (e) {

	var b = new m(f, e);
	b.wb(c, d);
	b.$Shift(h);
	a.wb(b)
	}
	a.Fe(g.d);
	return e
	}

	function s(f) {

	var d = c.jc(),
	e = 0;
	b.$Each(f, function(c, f) {

	c = b.o({
		d: l
	}, c);
	t(c, d, e);
	d = c.b;
	e += c.d;
	if (!f || c.t == 2) {

		a.bd = d;
		a.hd = d + c.d
	}
	})
	}
	a.Cd = function() {
	a.B(-1, d)
	};
	o = [g.$Swing, g.$Linear, g.$InQuad, g.$OutQuad, g.$InOutQuad, g.$InCubic, g.$OutCubic, g.$InOutCubic, g.$InQuart, g.$OutQuart, g.$InOutQuart, g.$InQuint, g.$OutQuint, g.$InOutQuint, g.$InSine, g.$OutSine, g.$InOutSine, g.$InExpo, g.$OutExpo, g.$InOutExpo, g.$InCirc, g.$OutCirc, g.$InOutCirc, g.$InElastic, g.$OutElastic, g.$InOutElastic, g.$InBack, g.$OutBack, g.$InOutBack, g.$InBounce, g.$OutBounce, g.$InOutBounce, g.$GoBack, g.$InWave, g.$OutWave, g.$OutJump, g.$InJump];
	var u = {
	$Top: "y",
	$Left: "x",
	$Bottom: "m",
	$Right: "t",
	$Rotate: "r",
	$RotateX: "rX",
	$RotateY: "rY",
	$ScaleX: "sX",
	$ScaleY: "sY",
	$TranslateX: "tX",
	$TranslateY: "tY",
	$TranslateZ: "tZ",
	$SkewX: "kX",
	$SkewY: "kY",
	$Opacity: "o",
	$Easing: "e",
	$ZIndex: "i",
	$Clip: "c"
	};
	b.$Each(u, function(b, a) {
	h[b] = a
	});
	q(k(n, 1));
	c.B(-1);
	var p = f.$Breaks || [],
	e = [].concat(p[b.zc(b.$AttributeEx(n, "b"))] || []);
	e.push({
	b: c.Zb(),
	d: e.length ? 0 : l
	});
	s(e);
	a.B(-1)
	}
	})(window, document, Math, null, true, false);
	//--></script>
<script>
	<!--
	Rich_Web_VSVT</script>