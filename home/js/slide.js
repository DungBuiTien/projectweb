! function(g, i, m, f, d, k, e) { new(function() {}); var c = { C: m.PI, D: m.max, s: m.min, rb: m.ceil, Y: m.floor, pb: m.abs, qb: m.sin, hc: m.cos, gd: m.tan, Re: m.atan, lc: m.sqrt, o: m.pow, G: m.round },
        h = { Pe: function(a) { return -c.hc(a * c.C) / 2 + .5 }, ac: function(a) { return a }, Ne: function(a) { return a * a }, Sd: function(a) { return -a * (a - 2) }, jf: function(a) { return (a *= 2) < 1 ? 1 / 2 * a * a : -1 / 2 * (--a * (a - 2) - 1) }, mf: function(a) { return a * a * a }, If: function(a) { return (a -= 1) * a * a + 1 }, Hf: function(a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a : 1 / 2 * ((a -= 2) * a * a + 2) }, Gf: function(a) { return a * a * a * a }, Ff: function(a) { return -((a -= 1) * a * a * a - 1) }, Ef: function(a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a * a : -1 / 2 * ((a -= 2) * a * a * a - 2) }, yf: function(a) { return a * a * a * a * a }, lg: function(a) { return (a -= 1) * a * a * a * a + 1 }, gf: function(a) { return (a *= 2) < 1 ? 1 / 2 * a * a * a * a * a : 1 / 2 * ((a -= 2) * a * a * a * a + 2) }, nf: function(a) { return 1 - c.hc(c.C / 2 * a) }, of: function(a) { return c.qb(c.C / 2 * a) }, pf: function(a) { return -1 / 2 * (c.hc(c.C * a) - 1) }, qf: function(a) { return a == 0 ? 0 : c.o(2, 10 * (a - 1)) }, rf: function(a) { return a == 1 ? 1 : -c.o(2, -10 * a) + 1 }, sf: function(a) { return a == 0 || a == 1 ? a : (a *= 2) < 1 ? 1 / 2 * c.o(2, 10 * (a - 1)) : 1 / 2 * (-c.o(2, -10 * --a) + 2) }, tf: function(a) { return -(c.lc(1 - a * a) - 1) }, uf: function(a) { return c.lc(1 - (a -= 1) * a) }, vf: function(a) { return (a *= 2) < 1 ? -1 / 2 * (c.lc(1 - a * a) - 1) : 1 / 2 * (c.lc(1 - (a -= 2) * a) + 1) }, wf: function(a) { if (!a || a == 1) return a; var b = .3,
                    d = .075; return -(c.o(2, 10 * (a -= 1)) * c.qb((a - d) * 2 * c.C / b)) }, Jf: function(a) { if (!a || a == 1) return a; var b = .3,
                    d = .075; return c.o(2, -10 * a) * c.qb((a - d) * 2 * c.C / b) + 1 }, zf: function(a) { if (!a || a == 1) return a; var b = .45,
                    d = .1125; return (a *= 2) < 1 ? -.5 * c.o(2, 10 * (a -= 1)) * c.qb((a - d) * 2 * c.C / b) : c.o(2, -10 * (a -= 1)) * c.qb((a - d) * 2 * c.C / b) * .5 + 1 }, Af: function(a) { var b = 1.70158; return a * a * ((b + 1) * a - b) }, Bf: function(a) { var b = 1.70158; return (a -= 1) * a * ((b + 1) * a + b) + 1 }, Cf: function(a) { var b = 1.70158; return (a *= 2) < 1 ? 1 / 2 * a * a * (((b *= 1.525) + 1) * a - b) : 1 / 2 * ((a -= 2) * a * (((b *= 1.525) + 1) * a + b) + 2) }, ld: function(a) { return 1 - h.ad(1 - a) }, ad: function(a) { return a < 1 / 2.75 ? 7.5625 * a * a : a < 2 / 2.75 ? 7.5625 * (a -= 1.5 / 2.75) * a + .75 : a < 2.5 / 2.75 ? 7.5625 * (a -= 2.25 / 2.75) * a + .9375 : 7.5625 * (a -= 2.625 / 2.75) * a + .984375 }, Df: function(a) { return a < 1 / 2 ? h.ld(a * 2) * .5 : h.ad(a * 2 - 1) * .5 + .5 }, lf: c.rb, kf: c.Y }; var b = new function() { var j = this,
            vb = /\S+/g,
            G = 1,
            pb = 2,
            sb = 3,
            rb = 4,
            Z = 5,
            H, r = 0,
            n = 0,
            B = 0,
            A = navigator,
            fb = A.appName,
            p = A.userAgent,
            q = parseFloat;

        function Eb() { if (!H) { H = { Qc: "ontouchstart" in g || "createTouch" in i }; var a; if (A.pointerEnabled || (a = A.msPointerEnabled)) H.Wd = a ? "msTouchAction" : "touchAction" } return H }

        function u(h) { if (!r) { r = -1; if (fb == "Microsoft Internet Explorer" && !!g.attachEvent && !!g.ActiveXObject) { var e = p.indexOf("MSIE");
                    r = G;
                    n = q(p.substring(e + 5, p.indexOf(";", e))); /*@cc_on@*/ } else if (fb == "Netscape" && !!g.addEventListener) { var d = p.indexOf("Firefox"),
                        b = p.indexOf("Safari"),
                        f = p.indexOf("Chrome"),
                        c = p.indexOf("AppleWebKit"); if (d >= 0) { r = pb;
                        n = q(p.substring(d + 8)) } else if (b >= 0) { var i = p.substring(0, b).lastIndexOf("/");
                        r = f >= 0 ? rb : sb;
                        n = q(p.substring(i + 1, b)) } else { var a = /Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(p); if (a) { r = G;
                            n = q(a[1]) } } if (c >= 0) B = q(p.substring(c + 12)) } else { var a = /(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(p); if (a) { r = Z;
                        n = q(a[2]) } } } return h == r }

        function v() { return u(G) }

        function qb() { return u(sb) }

        function ub() { return u(Z) }

        function mb() { return qb() && B > 534 && B < 535 }

        function I() { u(); return B > 537 || n > 42 || r == G && n >= 11 }

        function nb(a) { var b, c; return function(g) { if (!b) { b = d; var f = a.substr(0, 1).toUpperCase() + a.substr(1);
                    l([a].concat(["WebKit", "ms", "Moz", "O", "webkit"]), function(h, d) { var b = a; if (d) b = h + f; if (g.style[b] != e) return c = b }) } return c } }

        function lb(b) { var a; return function(c) { a = a || nb(b)(c) || b; return a } } var L = lb("transform");

        function eb(a) { return {}.toString.call(a) } var bb = {};
        l(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object"], function(a) { bb["[object " + a + "]"] = a.toLowerCase() });

        function l(b, d) { var a, c; if (eb(b) == "[object Array]") { for (a = 0; a < b.length; a++)
                    if (c = d(b[a], a, b)) return c } else
                for (a in b)
                    if (c = d(b[a], a, b)) return c }

        function F(a) { return a == f ? String(a) : bb[eb(a)] || "object" }

        function cb(a) { for (var b in a) return d }

        function C(a) { try { return F(a) == "object" && !a.nodeType && a != a.window && (!a.constructor || {}.hasOwnProperty.call(a.constructor.prototype, "isPrototypeOf")) } catch (b) {} }

        function jb(b, a) { setTimeout(b, a || 0) }

        function ab(b, d, c) { var a = !b || b == "inherit" ? "" : b;
            l(d, function(c) { var b = c.exec(a); if (b) { var d = a.substr(0, b.index),
                        e = a.substr(b.index + b[0].length + 1, a.length - 1);
                    a = d + e } });
            a && (c += (!a.indexOf(" ") ? "" : " ") + a); return c }

        function gb(a, b) { if (a === e) a = b; return a } j.Sc = Eb;
        j.Rd = v;
        j.xg = qb;
        j.ug = I;
        nb("transform");
        j.Xc = function() { return n };
        j.Ub = jb;
        j.I = gb;
        j.X = function(a, b) { b.call(a); return z({}, a) };

        function U(a) { a.constructor === U.caller && a.p && a.p.apply(a, U.caller.arguments) } j.p = U;
        j.Fb = function(a) { if (j.pg(a)) a = i.getElementById(a); return a };

        function t(a) { return a || g.event } j.sg = t;
        j.Gb = function(b) { b = t(b); var a = b.target || b.srcElement || i; if (a.nodeType == 3) a = j.cd(a); return a };
        j.Vd = function(a) { a = t(a); return a.relatedTarget || a.toElement };
        j.hd = function(a) { a = t(a); return a.which || ([0, 1, 3, 0, 2])[a.button] || a.charCode || a.keyCode };
        j.Lc = function(a) { a = t(a); return { x: a.clientX || 0, y: a.clientY || 0 } };
        j.tg = function(b, a) { return b.x >= a.x && b.x <= a.x + a.w && b.y >= a.y && b.y <= a.y + a.h };
        j.ae = function(c, e) { var a = b.mg(e),
                d = b.Lc(c); return j.tg(d, a) };

        function w(c, d, a) { if (a !== e) c.style[d] = a == e ? "" : a;
            else { var b = c.currentStyle || c.style;
                a = b[d]; if (a == "" && g.getComputedStyle) { b = c.ownerDocument.defaultView.getComputedStyle(c, f);
                    b && (a = b.getPropertyValue(d) || b[d]) } return a } }

        function X(b, c, a, d) { if (a === e) { a = q(w(b, c));
                isNaN(a) && (a = f); return a } if (a == f) a = "";
            else d && (a += "px");
            w(b, c, a) }

        function m(c, a) { var d = a ? X : w,
                b; if (a & 4) b = lb(c); return function(e, f) { return d(e, b ? b(e) : c, f, a & 2) } }

        function zb(a) { return q(a.style.opacity || "1") }

        function Bb(b, a) { b.style.opacity = a == 1 || a == f ? "" : c.G(a * 100) / 100 } var N = { Z: ["rotate"], kb: ["rotateX"], cb: ["rotateY"], dc: ["skewX"], cc: ["skewY"] }; if (!I()) N = z(N, { U: ["scaleX", 2], T: ["scaleY", 2], db: ["translateZ", 1] });

        function M(c, a) { var b = ""; if (a) { if (v() && n && n < 10) { delete a.kb;
                    delete a.cb;
                    delete a.db } l(a, function(d, c) { var a = N[c]; if (a) { var e = a[1] || 0; if (O[c] != d) b += " " + a[0] + "(" + d + (["deg", "px", ""])[e] + ")" } }); if (I()) { if (a.sb || a.Eb || a.db != e) b += " translate3d(" + (a.sb || 0) + "px," + (a.Eb || 0) + "px," + (a.db || 0) + "px)"; if (a.U == e) a.U = 1; if (a.T == e) a.T = 1; if (a.U != 1 || a.T != 1) b += " scale3d(" + a.U + ", " + a.T + ", 1)" } } c.style[L(c)] = b } j.yg = m("transformOrigin", 4);
        j.Bg = m("backfaceVisibility", 4);
        j.jc = m("transformStyle", 4);
        j.Cg = m("perspective", 6);
        j.rg = m("perspectiveOrigin", 4);
        j.Nd = function(b, a) { if (v() && n < 9) b.style.zoom = a == 1 ? "" : a;
            else { var c = L(b),
                    f = a == 1 ? "" : "scale(" + a + ")",
                    e = b.style[c],
                    g = new RegExp(/[\s]*scale\(.*?\)/g),
                    d = ab(e, [g], f);
                b.style[c] = d } };
        j.eb = function(a, d, b, c) { a = j.Fb(a); if (a.addEventListener) { d == "mousewheel" && a.addEventListener("DOMMouseScroll", b, c);
                a.addEventListener(d, b, c) } else if (a.attachEvent) { a.attachEvent("on" + d, b);
                c && a.setCapture && a.setCapture() } };
        j.Cb = function(a, c, d, b) { a = j.Fb(a); if (a.removeEventListener) { c == "mousewheel" && a.removeEventListener("DOMMouseScroll", d, b);
                a.removeEventListener(c, d, b) } else if (a.detachEvent) { a.detachEvent("on" + c, d);
                b && a.releaseCapture && a.releaseCapture() } };
        j.Ab = function(a) { a = t(a);
            a.preventDefault && a.preventDefault();
            a.cancel = d;
            a.returnValue = k };
        j.Mf = function(a) { a = t(a);
            a.stopPropagation && a.stopPropagation();
            a.cancelBubble = d };
        j.ab = function(d, c) { var a = [].slice.call(arguments, 2),
                b = function() { var b = a.concat([].slice.call(arguments, 0)); return c.apply(d, b) }; return b };
        j.Nf = function(a, b) { if (b == e) return a.textContent || a.innerText; var c = i.createTextNode(b);
            j.Wb(a);
            a.appendChild(c) };
        j.mg = function(b) { var a = b.getBoundingClientRect(); return { x: a.left, y: a.top, w: a.right - a.left, h: a.bottom - a.top } };
        j.Ib = function(d, c) { for (var b = [], a = d.firstChild; a; a = a.nextSibling)(c || a.nodeType == 1) && b.push(a); return b };

        function db(a, c, e, b) { b = b || "u"; for (a = a ? a.firstChild : f; a; a = a.nextSibling)
                if (a.nodeType == 1) { if (D(a, b) == c) return a; if (!e) { var d = db(a, c, e, b); if (d) return d } } } j.ge = db;

        function S(a, d, g, b) { b = b || "u"; var c = []; for (a = a ? a.firstChild : f; a; a = a.nextSibling)
                if (a.nodeType == 1) { D(a, b) == d && c.push(a); if (!g) { var e = S(a, d, g, b); if (e.length) c = c.concat(e) } } return c } j.Uf = function(b, a) { return b.getElementsByTagName(a) };
        j.bb = function(a, f, d, g) { d = d || "u"; var e;
            do { if (a.nodeType == 1) { var c;
                    d && (c = D(a, d)); if (c && c == gb(f, c) || g == a.tagName) { e = a; break } } a = b.cd(a) } while (a && a != i.body); return e };
        j.Vf = function(a) { return W(["INPUT", "TEXTAREA", "SELECT"])[a.tagName] };

        function z() { var f = arguments,
                d, c, b, a, h = 1 & f[0],
                g = 1 + h;
            d = f[g - 1] || {}; for (; g < f.length; g++)
                if (c = f[g])
                    for (b in c) { a = c[b]; if (a !== e) { a = c[b]; var i = d[b];
                            d[b] = h && (C(i) || C(a)) ? z(h, {}, i, a) : a } }
            return d } j.jb = z;

        function V(f, g) { var d = {},
                c, a, b; for (c in f) { a = f[c];
                b = g[c]; if (a !== b) { var e; if (C(a) && C(b)) { a = V(a, b);
                        e = !cb(a) }!e && (d[c] = a) } } return d } j.Fd = function(a) { return F(a) == "function" };
        j.Xf = function(a) { return F(a) == "array" };
        j.pg = function(a) { return F(a) == "string" };
        j.Ec = function(a) { return !isNaN(q(a)) && isFinite(a) };
        j.f = l;
        j.af = C;

        function Q(a) { return i.createElement(a) } j.xc = function() { return Q("DIV") };
        j.jg = function() { return Q("SPAN") };
        j.Le = function() {};

        function E(b, c, a) { if (a == e) return b.getAttribute(c);
            b.setAttribute(c, a) }

        function D(a, b) { return E(a, b) || E(a, "data-" + b) } j.k = E;
        j.N = D;
        j.l = function(d, b, c) { var a = j.bg(D(d, b)); if (isNaN(a)) a = c; return a };

        function x(b, a) { return E(b, "class", a) || "" }

        function W(b) { var a = {};
            l(b, function(b) { if (b != e) a[b] = b }); return a }

        function kb(b, a) { return b.match(a || vb) }

        function P(b, a) { return W(kb(b || "", a)) } j.kd = W;
        j.dg = kb;
        j.eg = function(a) { a && (a = a.toLowerCase()); return a };

        function Y(b, c) { var a = "";
            l(c, function(c) { a && (a += b);
                a += c }); return a }

        function J(a, c, b) { x(a, Y(" ", z(V(P(x(a)), P(c)), P(b)))) } j.cd = function(a) { return a.parentNode };
        j.Mb = function(a) { j.mb(a, "none") };
        j.Pb = function(a, b) { j.mb(a, b ? "none" : "") };
        j.gg = function(b, a) { b.removeAttribute(a) };
        j.hg = function(d, a) { if (a) d.style.clip = "rect(" + c.G(a.g || a.A || 0) + "px " + c.G(a.u) + "px " + c.G(a.q) + "px " + c.G(a.i || a.H || 0) + "px)";
            else if (a !== e) { var h = d.style.cssText,
                    g = [new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i), new RegExp(/[\s]*cliptop: .*?[;]?/i), new RegExp(/[\s]*clipright: .*?[;]?/i), new RegExp(/[\s]*clipbottom: .*?[;]?/i), new RegExp(/[\s]*clipleft: .*?[;]?/i)],
                    f = ab(h, g, "");
                b.Bd(d, f) } };
        j.ig = function(b, a) { if (a) b.style.backgroundColor = "rgba(" + c.G(a.Cd) + "," + c.G(a.Dd) + "," + c.G(a.Ed) + "," + a.Q + ")" };
        j.Nb = function() { return +new Date };
        j.V = function(b, a) { b.appendChild(a) };
        j.nb = function(b, a, c) {
            (c || a.parentNode).insertBefore(b, a) };
        j.Rb = function(b, a) { a = a || b.parentNode;
            a && a.removeChild(b) };
        j.Te = function(a, b) { l(a, function(a) { j.Rb(a, b) }) };
        j.Wb = function(a) { j.Te(j.Ib(a, d), a) };

        function hb() { l([].slice.call(arguments, 0), function(a) { if (j.Xf(a)) hb.apply(f, a);
                else a && a.n() }) } j.n = hb;
        j.fd = function(a, b) { var c = j.cd(a); if (b & 1) { j.O(a, (j.F(c) - j.F(a)) / 2);
                j.Td(a, f) } if (b & 2) { j.M(a, (j.B(c) - j.B(a)) / 2);
                j.td(a, f) } }; var R = { g: f, u: f, q: f, i: f, R: f, S: f };
        j.Ee = function(a) { var b = j.xc();
            s(b, { ud: "block", yb: j.tb(a), g: 0, i: 0, R: 0, S: 0 }); var d = j.md(a, R);
            j.nb(b, a);
            j.V(b, a); var e = j.md(a, R),
                c = {};
            l(d, function(b, a) { if (b == e[a]) c[a] = b });
            s(b, R);
            s(b, c);
            s(a, { g: 0, i: 0 }); return c };
        j.ye = function(b, a) { return parseInt(b, a || 10) };
        j.bg = q;
        j.Pd = function(b, a) { var c = i.body; while (a && b !== a && c !== a) a = a.parentNode; return b === a };

        function T(d, c, b) { var a = d.cloneNode(!c);!b && j.gg(a, "id"); return a } j.gc = T;
        j.ub = function(e, f) { var a = new Image;

            function b(e, d) { j.Cb(a, "load", b);
                j.Cb(a, "abort", c);
                j.Cb(a, "error", c);
                f && f(a, d) }

            function c(a) { b(a, d) } if (ub() && n < 11.6 || !e) b(!e);
            else { j.eb(a, "load", b);
                j.eb(a, "abort", c);
                j.eb(a, "error", c);
                a.src = e } };
        j.we = function(e, a, d) { var b = 1;

            function c(c) { b--; if (a && c && c.src == a.src) a = c;!b && d && d(a) } l(e, function(a) { if (a.src) { b++;
                    j.ub(a.src, c) } });
            c() };
        j.ve = function(a, g, i, h) { if (h) a = T(a); var c = S(a, g); if (!c.length) c = b.Uf(a, g); for (var f = c.length - 1; f > -1; f--) { var d = c[f],
                    e = T(i);
                x(e, x(d));
                b.Bd(e, d.style.cssText);
                b.nb(e, d);
                b.Rb(d) } return a };

        function Cb() { var a = this;
            b.X(a, o); var d, q = "",
                s = ["av", "pv", "ds", "dn"],
                f = [],
                r, n = 0,
                k = 0,
                h = 0;

            function m() { J(d, r, (f[h || k & 2 || k] || "") + " " + (f[n] || ""));
                j.kc(d, h ? "none" : "") }

            function c() { n = 0;
                a.L(g, "mouseup", c);
                a.L(i, "mouseup", c);
                a.L(i, "touchend", c);
                a.L(i, "touchcancel", c);
                a.L(g, "blur", c);
                m() }

            function p(b) { if (h) j.Ab(b);
                else { n = 4;
                    m();
                    a.a(g, "mouseup", c);
                    a.a(i, "mouseup", c);
                    a.a(i, "touchend", c);
                    a.a(i, "touchcancel", c);
                    a.a(g, "blur", c) } } a.re = function(a) { if (a === e) return k;
                k = a & 2 || a & 1;
                m() };
            a.Bc = function(a) { if (a === e) return !h;
                h = a ? 0 : 3;
                m() };
            a.p = function(e) { a.P = d = j.Fb(e);
                E(d, "data-jssor-button", "1"); var c = b.dg(x(d)); if (c) q = c.shift();
                l(s, function(a) { f.push(q + a) });
                r = Y(" ", f);
                f.unshift("");
                a.a(d, "mousedown", p);
                a.a(d, "touchstart", p) };
            b.p(a) } j.zc = function(a) { return new Cb(a) };
        j.E = w;
        m("backgroundColor");
        j.Nc = m("overflow");
        j.kc = m("pointerEvents");
        j.M = m("top", 2);
        j.Td = m("right", 2);
        j.td = m("bottom", 2);
        j.O = m("left", 2);
        j.F = m("width", 2);
        j.B = m("height", 2);
        m("marginLeft", 2);
        m("marginTop", 2);
        j.tb = m("position");
        j.mb = m("display");
        j.J = m("zIndex", 1);
        j.Fe = function(b, a, c) { if (a !== e) Bb(b, a, c);
            else return zb(b) };
        j.Bd = function(a, b) { if (b != e) a.style.cssText = b;
            else return a.style.cssText };
        j.Ge = function(b, a) { if (a === e) { a = w(b, "backgroundImage") || ""; var c = /\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a) || []; return c[1] } w(b, "backgroundImage", a ? "url('" + a + "')" : "") }; var K;
        j.Ie = K = { Q: j.Fe, g: j.M, u: j.Td, q: j.td, i: j.O, R: j.F, S: j.B, yb: j.tb, ud: j.mb, Db: j.J };
        j.md = function(c, b) { var a = {};
            l(b, function(d, b) { if (K[b]) a[b] = K[b](c) }); return a };

        function s(b, h) { var a = I(),
                d = mb(),
                g = L(b);

            function c(l, a) { a = a || {}; var h = a.db || 0,
                    i = (a.kb || 0) % 360,
                    j = (a.cb || 0) % 360,
                    k = (a.Z || 0) % 360,
                    c = a.U,
                    d = a.T,
                    f = a.Lg; if (c == e) c = 1; if (d == e) d = 1; if (f == e) f = 1; var b = new yb(a.sb, a.Eb, h);
                b.Fc(c, d, f);
                b.pe(a.dc, a.cc);
                b.kb(i);
                b.cb(j);
                b.Ke(k);
                b.ic(a.H, a.A);
                l.style[g] = b.ne() } s = function(g, b) { b = b || {}; var i = b.H,
                    k = b.A,
                    h;
                l(K, function(a, c) { h = b[c];
                    h !== e && a(g, h) });
                j.hg(g, b.c);
                j.ig(g, b.ob); if (!a) { i != e && j.O(g, (b.Xd || 0) + i);
                    k != e && j.M(g, (b.Ld || 0) + k) } if (b.Ce)
                    if (d) jb(j.ab(f, M, g, b));
                    else if (a) c(g, b);
                else M(g, b) };
            j.W = s;
            s(b, h) } j.W = s;

        function yb(j, k, n) { var d = this,
                b = [1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, j || 0, k || 0, n || 0, 1],
                i = c.qb,
                h = c.hc,
                l = c.gd;

            function g(a) { return a * c.C / 180 }

            function m(c, e, l, m, o, r, t, u, w, z, A, C, E, b, f, k, a, g, i, n, p, q, s, v, x, y, B, D, F, d, h, j) { return [c * a + e * p + l * x + m * F, c * g + e * q + l * y + m * d, c * i + e * s + l * B + m * h, c * n + e * v + l * D + m * j, o * a + r * p + t * x + u * F, o * g + r * q + t * y + u * d, o * i + r * s + t * B + u * h, o * n + r * v + t * D + u * j, w * a + z * p + A * x + C * F, w * g + z * q + A * y + C * d, w * i + z * s + A * B + C * h, w * n + z * v + A * D + C * j, E * a + b * p + f * x + k * F, E * g + b * q + f * y + k * d, E * i + b * s + f * B + k * h, E * n + b * v + f * D + k * j] }

            function e(c, a) { return m.apply(f, (a || b).concat(c)) } d.Fc = function(a, c, d) { if (a != 1 || c != 1 || d != 1) b = e([a, 0, 0, 0, 0, c, 0, 0, 0, 0, d, 0, 0, 0, 0, 1]) };
            d.ic = function(a, c, d) { b[12] += a || 0;
                b[13] += c || 0;
                b[14] += d || 0 };
            d.kb = function(c) { if (c) { a = g(c); var d = h(a),
                        f = i(a);
                    b = e([1, 0, 0, 0, 0, d, f, 0, 0, -f, d, 0, 0, 0, 0, 1]) } };
            d.cb = function(c) { if (c) { a = g(c); var d = h(a),
                        f = i(a);
                    b = e([d, 0, -f, 0, 0, 1, 0, 0, f, 0, d, 0, 0, 0, 0, 1]) } };
            d.Ke = function(c) { if (c) { a = g(c); var d = h(a),
                        f = i(a);
                    b = e([d, f, 0, 0, -f, d, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } };
            d.pe = function(a, c) { if (a || c) { j = g(a);
                    k = g(c);
                    b = e([1, l(k), 0, 0, l(j), 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1]) } };
            d.ne = function() { return "matrix3d(" + b.join(",") + ")" } } var O = { Xd: 0, Ld: 0, H: 0, A: 0, zb: 1, U: 1, T: 1, Z: 0, kb: 0, cb: 0, sb: 0, Eb: 0, db: 0, dc: 0, cc: 0 };
        j.ce = function(c, d) { var a = c || {}; if (c)
                if (b.Fd(c)) a = { I: a };
                else if (b.Fd(c.c)) a.c = { I: c.c };
            a.I = a.I || d; if (a.c) a.c.I = a.c.I || d; if (a.ob) a.ob.I = a.ob.I || d; return a };

        function ib(c, a) { var b = {};
            l(c, function(c, d) { var f = c; if (a[d] != e)
                    if (j.Ec(c)) f = c + a[d];
                    else f = ib(c, a[d]);
                b[d] = f }); return b } j.De = ib;
        j.ue = function(o, j, s, t, E, F, p) { var a = j; if (o) { a = {}; for (var i in j) { var G = F[i] || 1,
                        B = E[i] || [0, 1],
                        g = (s - B[0]) / B[1];
                    g = c.s(c.D(g, 0), 1);
                    g = g * G; var y = c.Y(g); if (g != y) g -= y; var k = t.I || h.ac,
                        m, C = o[i],
                        r = j[i]; if (b.Ec(r)) { k = t[i] || k; var D = k(g);
                        m = C + r * D } else { m = z({ bc: {} }, o[i]); var A = t[i] || {};
                        l(r.bc || r, function(d, a) { k = A[a] || A.I || k; var c = k(g),
                                b = d * c;
                            m.bc[a] = b;
                            m[a] += b }) } a[i] = m } var x = l(j, function(b, a) { return O[a] != e });
                x && l(O, function(c, b) { if (a[b] == e && o[b] !== e) a[b] = o[b] }); if (x) { if (a.zb) a.U = a.T = a.zb;
                    a.xb = p.xb;
                    a.Kb = p.Kb; if (v() && n >= 11 && (j.H || j.A) && s != 0 && s != 1) a.Z = a.Z || 1e-8;
                    a.Ce = d } } if (j.c && p.ic) { var q = a.c.bc,
                    w = (q.g || 0) + (q.q || 0),
                    u = (q.i || 0) + (q.u || 0);
                a.i = (a.i || 0) + u;
                a.g = (a.g || 0) + w;
                a.c.i -= u;
                a.c.u -= u;
                a.c.g -= w;
                a.c.q -= w } if (a.c && !a.c.g && !a.c.i && !a.c.A && !a.c.H && a.c.u == p.xb && a.c.q == p.Kb) a.c = f; return a } };

    function o() { var a = this,
            f, e = [],
            c = [];

        function k(a, b) { e.push({ wb: a, vb: b }) }

        function j(a, c) { b.f(e, function(b, d) { b.wb == a && b.vb === c && e.splice(d, 1) }) }

        function i() { e = [] }

        function h() { b.f(c, function(a) { b.Cb(a.dd, a.wb, a.vb, a.ed) });
            c = [] } a.Pc = function() { return f };
        a.a = function(e, a, d, f) { b.eb(e, a, d, f);
            c.push({ dd: e, wb: a, vb: d, ed: f }) };
        a.L = function(e, a, d, f) { b.f(c, function(g, h) { if (g.dd === e && g.wb == a && g.vb === d && g.ed == f) { b.Cb(e, a, d, f);
                    c.splice(h, 1) } }) };
        a.pd = h;
        a.Rc = a.addEventListener = k;
        a.removeEventListener = j;
        a.j = function(a) { var c = [].slice.call(arguments, 1);
            b.f(e, function(b) { b.wb == a && b.vb.apply(g, c) }) };
        a.n = function() { if (!f) { f = d;
                h();
                i() } } } var l = function(C, D, i, m, R, Q) { C = C || 0; var a = this,
            p, n, o, s, F = 0,
            O = 1,
            L, M, K, G, B = 0,
            j = 0,
            r = 0,
            A, l, f, h, q, z, u = [],
            y, I = k,
            J, H = k;

        function T(a) { f += a;
            h += a;
            l += a;
            j += a;
            r += a;
            B += a }

        function x(C) { var k = C; if (q)
                if (!z && (k >= h || k < f) || z && k >= f) k = ((k - f) % q + q) % q + f; if (!A || s || j != k) { var g = c.s(k, h);
                g = c.D(g, f); if (i.Tc) g = h - g + f; if (!A || s || g != r) { if (Q) { var x = (g - l) / (D || 1),
                            o = b.ue(R, Q, x, L, K, M, i); if (y) b.f(o, function(b, a) { y[a] && y[a](m, b) });
                        else b.W(m, o); var n; if (J) { var p = g > f && g < h; if (p != H) n = H = p } if (!n && o.Q != e) { var t = o.Q < .001; if (t != I) n = I = t } if (n != e) { n && b.kc(m, "none");!n && b.kc(m, b.k(m, "data-events")) } } var w = r,
                        v = r = g;
                    b.f(u, function(b, c) { var a = !A && z || k <= j ? u[u.length - c - 1] : b;
                        a.v(g - B) });
                    j = k;
                    A = d;
                    a.Uc(w - l, v - l);
                    a.Jb(w, v) } } }

        function E(a, b, d) { b && a.Sb(h); if (!d) { f = c.s(f, a.Xb() + B);
                h = c.D(h, a.ib() + B) } u.push(a) } var v = g.requestAnimationFrame || g.webkitRequestAnimationFrame || g.mozRequestAnimationFrame || g.msRequestAnimationFrame; if (b.xg() && b.Xc() < 7 || !v) v = function(a) { b.Ub(a, i.rd) };

        function N() { if (p) { var d = b.Nb(),
                    e = c.s(d - F, i.sd),
                    a = j + e * o * O;
                F = d; if (a * o >= n * o) a = n;
                x(a); if (!s && a * o >= n * o) P(G);
                else v(N) } }

        function w(e, g, i) { if (!p) { p = d;
                s = i;
                G = g;
                e = c.D(e, f);
                e = c.s(e, h);
                n = e;
                o = n < j ? -1 : 1;
                a.Wc();
                F = b.Nb();
                v(N) } }

        function P(b) { if (p) { s = p = G = k;
                a.Yc();
                b && b() } } a.wd = function(a, b, c) { w(a ? j + a : h, b, c) };
        a.mc = w;
        a.se = function(a, b) { w(h, a, b) };
        a.z = P;
        a.yd = function() { return j };
        a.zd = function() { return n };
        a.m = function() { return r };
        a.v = x;
        a.Je = function() { x(h, d) };
        a.Zc = function() { return p };
        a.nd = function(a) { O = a };
        a.Sb = T;
        a.K = function(a, b) { E(a, 0, b) };
        a.pc = function(a) { E(a, 1) };
        a.Mc = function(a) { h += a };
        a.Xb = function() { return f };
        a.ib = function() { return h };
        a.Jb = a.Wc = a.Yc = a.Uc = b.Le;
        a.Vc = b.Nb();
        i = b.jb({ rd: 16, sd: 50 }, i);
        m && (J = b.k(m, "data-inactive"));
        q = i.fc;
        z = i.xe;
        y = i.Ae;
        f = l = C;
        h = C + D;
        M = i.G || {};
        K = i.Be || {};
        L = b.ce(i.fb) }; var n = { oe: "data-scale", Hb: "data-autocenter", uc: "data-nofreeze", Md: "data-nodrag" },
        q = new function() { var a = this;
            a.tc = function(c, a, e, d) {
                (d || !b.k(c, a)) && b.k(c, a, e) };
            a.qc = function(a) { var c = b.l(a, n.Hb);
                b.fd(a, c) } };
    new(function() {}); var r = { yc: 1 },
        t = function() { var a = this,
                D = b.X(a, o),
                h, v, C, B, m, l = 0,
                g, s, p, z, A, i, k, u, t, x, j;

            function y(a) { j[a] && j[a].re(a == l) }

            function w(b) { a.j(r.yc, b * s) } a.Dc = function(a) { if (a != m) { var d = l,
                        b = c.Y(a / s);
                    l = b;
                    m = a;
                    y(d);
                    y(b) } };
            a.Hc = function(a) { b.Pb(h, a) };
            a.Cc = function(I) { b.n(j);
                m = e;
                a.pd();
                x = [];
                j = [];
                b.Wb(h);
                v = c.rb(I / s);
                l = 0; var H = u + z,
                    y = t + A,
                    r = c.rb(v / p) - 1;
                C = u + H * (!i ? r : p - 1);
                B = t + y * (i ? r : p - 1);
                b.F(h, C);
                b.B(h, B); for (var n = 0; n < v; n++) { var D = b.jg();
                    b.Nf(D, n + 1); var o = b.ve(k, "numbertemplate", D, d);
                    b.tb(o, "absolute"); var G = n % (r + 1),
                        E = c.Y(n / (r + 1)),
                        F = g.Yb && !i ? r - G : G;
                    b.O(o, (!i ? F : E) * H);
                    b.M(o, (i ? F : E) * y);
                    b.V(h, o);
                    x[n] = o;
                    g.Kc & 1 && a.a(o, "click", b.ab(f, w, n));
                    g.Kc & 2 && a.a(o, "mouseenter", b.ab(f, w, n));
                    j[n] = b.zc(o) } q.qc(h) };
            a.p = function(d, c) { a.P = h = b.Fb(d);
                a.bd = g = b.jb({ Kd: 10, Jd: 10, Kc: 1 }, c);
                k = b.ge(h, "prototype");
                u = b.F(k);
                t = b.B(k);
                b.Rb(k, h);
                s = g.xd || 1;
                p = g.be || 1;
                z = g.Kd;
                A = g.Jd;
                i = g.He & 2;
                g.lb && q.tc(h, n.Hb, g.lb) };
            a.n = function() { b.n(j, D) };
            b.p(a) },
        u = function() { var a = this,
                v = b.X(a, o),
                e, c, g, l, s, k, h, m, j, i;

            function p(b) { a.j(r.yc, b, d) }

            function u(a) { b.Pb(e, a);
                b.Pb(c, a) }

            function t() { j.Bc((g.Ob || !l.ke(h)) && k > 1);
                i.Bc((g.Ob || !l.me(h)) && k > 1) } a.Dc = function(c, a, b) { h = a;!b && t() };
            a.Hc = u;
            a.Cc = function(g) { k = g;
                h = 0; if (!s) { a.a(e, "click", b.ab(f, p, -m));
                    a.a(c, "click", b.ab(f, p, m));
                    j = b.zc(e);
                    i = b.zc(c);
                    b.k(e, n.uc, 1);
                    b.k(c, n.uc, 1);
                    s = d } };
            a.p = function(f, d, h, i) { a.bd = g = b.jb({ xd: 1 }, h);
                e = f;
                c = d; if (g.Yb) { e = d;
                    c = f } m = g.xd;
                l = i; if (g.lb) { q.tc(e, n.Hb, g.lb);
                    q.tc(c, n.Hb, g.lb) } q.qc(e);
                q.qc(c) };
            a.n = function() { b.n(j, i, v) };
            b.p(a) };

    function p(e, d, c) { var a = this;
        b.X(a, o);
        l.call(a, 0, c.Lb);
        a.nc = 0;
        a.Ic = c.Lb } p.Jc = 21;
    p.ec = 24; var v = function() { var a = this,
                hb = b.X(a, o);
            l.call(a, 0, 0); var e, s, gb = [h.ac, h.Pe, h.Ne, h.Sd, h.jf, h.mf, h.If, h.Hf, h.Gf, h.Ff, h.Ef, h.yf, h.lg, h.gf, h.nf, h.of, h.pf, h.qf, h.rf, h.sf, h.tf, h.uf, h.vf, h.wf, h.Jf, h.zf, h.Af, h.Bf, h.Cf, h.ld, h.ad, h.Df, h.lf, h.kf],
                P = {},
                S, C, t = new l(0, 0),
                T = [],
                x = [],
                E, q = 0;

            function G(d, c) { var a = {};
                b.f(d, function(d, f) { var e = P[f]; if (e) { if (b.af(d)) d = G(d, c || f == "e");
                        else if (c)
                            if (b.Ec(d)) d = gb[d];
                        a[e] = d } }); return a }

            function I(c, f) { var e = [],
                    d = b.l(c, "play"); if (f && d) { var g = new v(c, s, { fg: d });
                    N.push(g);
                    a.a(g, p.Jc, Z);
                    a.a(g, p.ec, U) } else b.f(b.Ib(c), function(a) { e = e.concat(I(a, f + 1)) }); if (!f && (!j || j & 16) || f && (!d || !(d & 16))) { var h = S[b.l(c, "t")];
                    h && e.push({ P: c, sc: h }) } return e }

            function O(c, e) { var a = T[c]; if (a == f) { a = T[c] = { hb: c, Gc: [], od: [] }; var d = 0;!b.f(x, function(a, b) { d = b; return a.hb > c }) && d++;
                    x.splice(d, 0, a) } return a }

            function db(o, p, g) { var a, e; if (C) { var k = C[b.l(o, "c")]; if (k) { a = O(k.r, 0);
                        a.Zf = k.e || 0 } } b.f(p, function(h) { var f = b.jb(d, {}, G(h)),
                        i = b.ce(f.fb);
                    delete f.fb; if (f.i) { f.H = f.i;
                        i.H = i.i;
                        delete f.i } if (f.g) { f.A = f.g;
                        i.A = i.g;
                        delete f.g } var m = { fb: i, xb: g.R, Kb: g.S },
                        j = new l(h.b, h.d, m, o, g, f);
                    q = c.D(q, h.b + h.d); if (a) { if (!e) e = new l(h.b, 0);
                        e.K(j) } else { var k = O(h.b, h.b + h.d);
                        k.Gc.push(j) } if (f.ob) g.ob = { Cd: 0, Dd: 0, Ed: 0, Q: 0 };
                    g = b.De(g, f) }); if (a && e) { e.Je(); var h = e,
                        i, j = e.Xb(),
                        m = e.ib(),
                        n = c.D(m, a.Zf); if (a.hb < m) { if (a.hb > j) { h = new l(j, a.hb - j);
                            h.K(e, d) } else h = f;
                        i = new l(a.hb, n - j, { fc: n - a.hb, xe: d });
                        i.K(e, d) } h && a.Gc.push(h);
                    i && a.od.push(i) } return g }

            function cb(a) { b.f(a, function(d) { var a = d.P,
                        f = b.F(a),
                        e = b.B(a),
                        c = { i: b.O(a), g: b.M(a), H: 0, A: 0, Q: 1, Db: b.J(a) || 0, Z: 0, kb: 0, cb: 0, U: 1, T: 1, sb: 0, Eb: 0, db: 0, dc: 0, cc: 0, R: f, S: e, c: { g: 0, u: f, q: e, i: 0 } };
                    c.Xd = c.i;
                    c.Ld = c.g;
                    db(a, d.sc, c) }) }

            function fb(f, e, g) { var c = f.b - e; if (c) { var b = new l(e, c);
                    b.K(t, d);
                    b.Sb(g);
                    a.K(b) } a.Mc(f.d); return c }

            function eb(e) { var c = t.Xb(),
                    d = 0;
                b.f(e, function(e, f) { e = b.jb({ d: 3e3 }, e);
                    fb(e, c, d);
                    c = e.b;
                    d += e.d; if (!f || e.t == 2) { a.nc = c;
                        a.Ic = c + e.d } }) }

            function B(g, e, d) { var f = e.length; if (f > 4)
                    for (var j = c.rb(f / 4), a = 0; a < j; a++) { var h = e.slice(a * 4, c.s(a * 4 + 4, f)),
                            i = new l(h[0].hb, 0);
                        B(i, h, d);
                        g.K(i) } else b.f(e, function(a) { b.f(d ? a.od : a.Gc, function(a) { d && a.Mc(q - a.ib());
                            g.K(a) }) }) } var j, F, u = 0,
                g, z, K, J, A, N = [],
                H = [],
                r, D, m;

            function y(a) { return a & 2 || a & 4 && b.Sc().Qc }

            function ab() { if (!A) { g & 8 && a.a(i, "keydown", Q); if (g & 32) { a.a(i, "mousedown", w);
                        a.a(i, "touchstart", w) } A = d } }

            function Y() { a.L(i, "keydown", Q);
                a.L(i, "mousedown", w);
                a.L(i, "touchstart", w);
                A = k }

            function L(b) { if (!r || b) { r = d;
                    a.z();
                    b && u && a.v(0);
                    a.nd(1);
                    a.se();
                    ab();
                    a.j(p.Jc, a) } }

            function n() { if (!D && (r || a.m())) { D = d;
                    a.z();
                    a.yd() > a.nc && a.v(a.nc);
                    a.nd(K || 1);
                    a.mc(0) } }

            function V() {!m && n() }

            function M(c) { var b = c; if (c < 0 && a.m()) b = 1; if (b != u) { u = b;
                    F && a.j(p.ec, a, u) } }

            function Q(a) { g & 8 && b.hd(a) == 27 && n() }

            function X(a) { if (m && b.Vd(a) !== f) { m = k;
                    g & 16 && b.Ub(V, 160) } }

            function w(a) { g & 32 && !b.Pd(e, b.Gb(a)) && n() }

            function W(a) { if (!m) { m = d; if (j & 1) b.ae(a, e) && L() } }

            function bb(i) { var h = b.Gb(i),
                    a = b.bb(h, f, f, "A"),
                    c = a && (b.Vf(a) || a === e || b.Pd(e, a)); if (r && y(g)) !c && n();
                else if (y(j)) !c && L(d) }

            function Z(b) { var c = b.Wf(),
                    a = H[c];
                a !== b && a && a.Tf();
                H[c] = b }

            function U(b, c) { a.j(p.ec, b, c) } a.Wf = function() { return J || "" };
            a.Tf = n;
            a.Wc = function() { M(1) };
            a.Yc = function() { r = k;
                D = k;
                M(-1);!a.m() && Y() };
            a.Jb = function() {!m && z && a.yd() > a.Ic && n() };
            a.p = function(m, i, f) { e = m;
                s = i;
                j = f.fg;
                E = f.Sf;
                S = s.jd;
                C = s.Hg; var l = { g: "y", i: "x", q: "m", u: "t", Z: "r", kb: "rX", cb: "rY", U: "sX", T: "sY", sb: "tX", Eb: "tY", db: "tZ", dc: "kX", cc: "kY", Q: "o", fb: "e", Db: "i", c: "c", ob: "bc", Cd: "re", Dd: "gr", Ed: "bl" };
                b.f(l, function(b, a) { P[b] = a });
                cb(I(e, 0));
                B(t, x); if (j) { a.K(t);
                    E = d;
                    z = b.l(e, "idle");
                    g = b.l(e, "rollback");
                    K = b.l(e, "speed", 1);
                    J = b.N(e, "group");
                    (y(j) || y(g)) && a.a(e, "click", bb); if ((j & 1 || z) && !b.Sc().Qc) { a.a(e, "mouseenter", W);
                        a.a(e, "mouseleave", X) } F = b.l(e, "pause") } var k = s.Ig || [],
                    c = k[b.l(e, "b")] || [],
                    h = { b: q, d: c.length ? 0 : f.Lb || z || 0 };
                c = c.concat([h]);
                eb(c);
                a.ib();
                E && a.Mc(1e8);
                q = a.ib();
                B(a, x, d);
                a.v(-1);
                a.v(b.l(e, "initial") || 0) };
            a.n = function() { b.n(hb, N);
                a.z();
                a.v(-1) };
            b.p(a) },
        j = (g.module || {}).exports = function() { var a = this,
                xc = b.X(a, o),
                Kb = "data-jssor-slider",
                Cc = "data-jssor-thumb",
                t, m, R, Hb, cb, tb, Z, M, K, P, Ub, zc = 1,
                qc = 1,
                Gc = 1,
                hc = 1,
                cc = {},
                w, U, Vb, Zb, Yb, Ib, Gb, Fb, gb, E = [],
                fc, u = -1,
                jc, q, I, H, L, kb, lb, F, J, hb, S, A, W, jb, Y = [],
                lc, nc, dc, s, sb, Cb, nb, eb, X, ic, Bb, Mb, Nb, G, ac = 0,
                bb = 0,
                Q = Number.MAX_VALUE,
                N = Number.MIN_VALUE,
                C, ib, db, T = 1,
                Sb = 0,
                mb, B, Ab, zb, O, xb, yb, z, V, ob, y, Jb, Xb = b.Sc(),
                Qb = Xb.Qc,
                x = [],
                D, ub, ab, bc, Ac, Ic, vb;

            function Eb() { return !T && X & 12 }

            function Bc() { return Sb || !T && X & 3 }

            function Db() { return !B && !Eb() && !y.Zc() }

            function Rc() { return !Bc() && Db() }

            function Ec() { return A || R }

            function Kc() { return Ec() & 2 ? lb : kb }

            function Hc(a, c, d) { b.O(a, c);
                b.M(a, d) }

            function vc(c, b) { var a = Ec(),
                    d = (kb * b + ac) * (a & 1),
                    e = (lb * b + ac) * (a & 2) / 2;
                Hc(c, d, e) }

            function sc(b, f) { if (B && !(C & 1)) { var e = b,
                        d; if (b < N) { e = N;
                        d = -1 } if (b > Q) { e = Q;
                        d = 1 } if (d) { var a = b - e; if (f) { a = c.Re(a) * 2 / c.C;
                            a = c.o(a * d, 1.6) } else { a = c.o(a * d, .625);
                            a = c.gd(a * c.C / 2) } b = e + a * d } } return b }

            function Mc(a) { return sc(a, d) }

            function dd(a) { return sc(a) }

            function wb(a, b) { if (!(C & 1)) { var c = a - Q + (b || 0),
                        d = N - a + (b || 0); if (c > 0 && c > d) a = Q;
                    else if (d > 0) a = N } return a }

            function oc(a) { return !(C & 1) && a - N < .0001 }

            function mc(a) { return !(C & 1) && Q - a < .0001 }

            function pb(a) { return !(C & 1) && (a - N < .0001 || Q - a < .0001) }

            function Ob(c, a, d) {!vb && b.f(Y, function(b) { b.Dc(c, a, d) }) }

            function uc(b) { var a = b,
                    d = pb(b); if (d) a = wb(a);
                else { b = v(b);
                    a = b } a = c.Y(a);
                a = c.D(a, 0); return a }

            function ad(a) { x[u];
                fc = u;
                u = a;
                jc = x[u] }

            function Pc() { A = 0; var b = z.m(),
                    d = uc(b);
                Ob(d, b); if (pb(b) || b == c.Y(b)) { if (s & 2 && (eb > 0 && d == q - 1 || eb < 0 && !d)) s = 0;
                    ad(d);
                    a.j(j.Of, u, fc) } }

            function ec(a, b) { if (q && (!b || !y.Zc())) { y.z();
                    y.wc(a, a) } }

            function rb(a) { if (q) { a = v(a);
                    a = wb(a);
                    ec(a) } else Ob(0, 0) }

            function Uc() { var b = j.Id || 0,
                    a = ib;
                j.Id |= a; return W = a & ~b }

            function Qc() { if (W) { j.Id &= ~ib;
                    W = 0 } }

            function Tb(c) { var a = b.xc();
                b.W(a, gb);
                c && b.Nc(a, "hidden"); return a }

            function v(b, a) { a = a || q || 1; return (b % a + a) % a }

            function wc(c, a, b) { s & 8 && (s = 0);
                qb(c, Bb, a, b) }

            function Pb() { b.f(Y, function(a) { a.Hc(a.bd.Jg <= T) }) }

            function cd(c) { if (!T && (b.Vd(c) || !b.ae(c, t))) { T = 1;
                    Pb(); if (!B) { X & 12 && Dc();
                        x[u] && x[u].oc() } a.j(j.wg) } }

            function bd() { if (T) { T = 0;
                    Pb();
                    B || !(X & 12) || Fc() } a.j(j.Dg) }

            function Jc() { b.W(U, gb) }

            function Rb(b, a) { qb(b, a, d) }

            function qb(g, h, l, p) { if (q && (!B || m.Ud) && !Eb() && !isNaN(g)) { var f = z.m(),
                        a = g; if (l) { a = f + g; if (C & 2) { if (oc(f) && g < 0) a = Q; if (mc(f) && g > 0) a = N } } if (!(C & 1))
                        if (p) a = v(a);
                        else a = wb(a, .5); if (l && !pb(a)) a = c.G(a); var j = (a - f) % q;
                    a = f + j; if (h == e) h = Bb; var b = c.pb(j),
                        i = 0; if (b) { if (b < 1) b = c.o(b, .5); if (b > 1) { var o = Kc(),
                                n = (R & 1 ? Gb : Fb) / o;
                            b = c.s(b, n * 1.5) } i = h * b } vb = d;
                    y.z();
                    vb = k;
                    y.wc(f, a, i) } }

            function Nc(e, h, o) { var l = this,
                    i = { g: 2, u: 1, q: 2, i: 1 },
                    m = { g: "top", u: "right", q: "bottom", i: "left" },
                    g, a, f, j, k = {};
                l.P = e;
                l.Vb = function(q, l, u) { var p, s = q,
                        r = l; if (!f) { f = b.Ee(e);
                        g = e.parentNode;
                        j = { Fc: b.l(e, n.oe, 1), lb: b.l(e, n.Hb) };
                        b.f(m, function(c, a) { k[a] = b.l(e, "data-scale-" + c, 1) });
                        a = e; if (h) { a = b.gc(g, d);
                            b.W(a, { g: 0, i: 0 });
                            b.V(a, e);
                            b.V(g, a) } } if (o) { p = c.D(q, l); if (h)
                            if (u >= 0 && u < 1) { var w = c.s(q, l);
                                p = c.s(p / w, 1 / (1 - u)) * w } } else s = r = p = c.o(K < P ? l : q, j.Fc); var x = h ? 1.001 : 1,
                        t = p * x;
                    h && (hc = t);
                    b.Nd(a, t);
                    b.F(g, f.R * s);
                    b.B(g, f.S * r); var v = b.Rd() && b.Xc() < 9 ? t : 1,
                        y = (s - v) * f.R / 2,
                        z = (r - v) * f.S / 2;
                    b.O(a, y);
                    b.M(a, z);
                    b.f(f, function(d, a) { if (i[a] && d) { var e = (i[a] & 1) * c.o(q, k[a]) * d + (i[a] & 2) * c.o(l, k[a]) * d / 2;
                            b.Ie[a](g, e) } });
                    b.fd(g, j.lb) } }

            function Yc() { var a = this;
                l.call(a, 0, 0, { fc: q });
                b.f(x, function(b) { a.pc(b);
                    b.Sb(G / F) }) }

            function Xc() { var a = this,
                    b = Jb.P;
                l.call(a, -1, 2, { fb: h.ac, Ae: { yb: vc }, fc: q, Tc: Cb }, b, { yb: 1 }, { yb: -2 }) }

            function Zc() { var b = this;
                l.call(b, -1e8, 2e8);
                b.Jb = function(e, b) { if (c.pb(b - e) > 1e-5) { var g = b,
                            f = b; if (c.Y(b) != b && b > e && (C & 1 || b > bb)) f++; var h = uc(f);
                        Ob(h, g, d);
                        a.j(j.og, v(g), v(e), b, e) } } }

            function Oc(o, n) { var b = this,
                    g, i, e, c, h;
                l.call(b, -1e8, 2e8, { sd: 100 });
                b.Wc = function() { mb = d;
                    a.j(j.ng, v(z.m()), V.m()) };
                b.Yc = function() { mb = k;
                    c = k;
                    a.j(j.vg, v(z.m()), V.m());!B && Pc() };
                b.Jb = function(f, b) { var a = b; if (c) a = h;
                    else if (e) { var d = b / e;
                        a = m.Od(d) * (i - g) + g } a = Mc(a);
                    V.v(a) };
                b.wc = function(a, c, h, f) { B = k;
                    e = h || 1;
                    g = a;
                    i = c;
                    vb = d;
                    V.v(a);
                    vb = k;
                    b.v(0);
                    b.mc(e, f) };
                b.qg = function() { c = d;
                    c && b.wd(f, f, d) };
                b.zg = function(a) { h = a };
                V = new Zc;
                V.K(o);
                Nb && V.K(n) }

            function Lc() { var c = this,
                    a = Tb();
                b.J(a, 0);
                c.P = a;
                c.Zb = function() { b.Mb(a);
                    b.Wb(a) } }

            function Wc(w, h) { var g = this,
                    ib = b.X(g, o),
                    y, G = 0,
                    P, t, F, B, K, i, E = [],
                    V, N, R, n, r, A, S;
                l.call(g, -J, J + 1, { fc: C & 1 ? q : e, Tc: Cb });

                function L() { y && y.n();
                    Sb -= G;
                    G = 0;
                    y = new cb.gb(t, cb, { Lb: b.l(t, "idle", ic), Sf: !s });
                    y.Rc(p.ec, Y) }

                function Z() { y.Vc < cb.Vc && L() }

                function Y(b, a) { G += a;
                    Sb += a; if (h == u) !G && g.oc() }

                function Q(p, s, o) { if (!N) { N = d; if (i && o) { var q = b.l(i, "data-expand", 0) * 2,
                                f = o.width,
                                e = o.height,
                                m = f,
                                l = e; if (f && e) { if (B) { if (B & 3 && (!(B & 4) || f > I || e > H)) { var n = k,
                                            r = I / H * e / f; if (B & 1) n = r > 1;
                                        else if (B & 2) n = r < 1;
                                        m = n ? f * H / e : I;
                                        l = n ? H : e * I / f } b.F(i, m);
                                    b.B(i, l);
                                    b.M(i, (H - l) / 2);
                                    b.O(i, (I - m) / 2) } b.Nd(i, c.D((m + q) / m, (l + q) / l)) } b.tb(i, "absolute") } a.j(j.Ag, h) } s.de(k);
                    p && p(g) }

                function X(f, b, c, e) { if (e == A && u == h && s && Db() && !g.Pc()) { var a = v(f);
                        D.le(a, h, b, g, c, H / I);
                        b.Yf();
                        ob.Sb(a - ob.Xb() - 1);
                        ob.v(a);
                        ec(a, d) } }

                function bb(b) { if (b == A && u == h && Db() && !g.Pc()) { if (!n) { var a = f; if (D)
                                if (D.Qb == h) a = D.te();
                                else D.Zb();
                            Z();
                            n = new Vc(w, h, a, y);
                            n.Kf(r) }!n.Zc() && n.Oc() } }

                function M(a, d, j) { if (a == h) { if (a != d) x[d] && x[d].Zd();
                        else !j && n && n.xf();
                        r && r.Bc();
                        A = b.Nb();
                        g.ub(b.ab(f, bb, A)) } else { var i = c.s(h, a),
                            e = c.D(h, a),
                            l = c.s(e - i, i + q - e),
                            k = J + m.hf - 1;
                        (!R || l <= k) && g.ub() } }

                function fb() { if (u == h && n) { n.z();
                        r && r.Lf();
                        r && r.ff();
                        n.vd() } }

                function hb() { u == h && n && n.z() }

                function ab(b) {!db && a.j(j.ef, h, b) } g.de = function(a) { if (S != a) { S = a;
                        a && b.V(w, K);!a && b.Rb(K) } };
                g.ub = function(e, c) { c = c || g; if (E.length && !N) { c.de(d); if (!V) { V = d;
                            a.j(j.df, h);
                            b.f(E, function(a) { if (!b.k(a, "src")) { var c = b.N(a, "src") || b.N(a, "src2") || ""; if (c) { a.src = c;
                                        b.mb(a, b.k(a, "data-display")) } } }) } b.we(E, i, b.ab(f, Q, e, c)) } else Q(e, c) };
                g.cf = function() { if (Rc())
                        if (q == 1) { g.Zd();
                            M(h, h) } else { var a; if (D) a = D.je(q); if (a) { A = b.Nb(); var c = h + eb,
                                    d = x[v(c)]; return d.ub(b.ab(f, X, c, d, a, A), g) } else(C || !pb(z.m()) || !pb(z.m() + eb)) && Rb(eb) } };
                g.oc = function() { M(h, h, d) };
                g.Zd = function() { r && r.Lf();
                    r && r.ff();
                    g.Hd();
                    n && n.bf();
                    n = f;
                    L() };
                g.Yf = function() { b.Mb(w) };
                g.Hd = function() { b.Pb(w) };

                function T(a, k, e) { if (b.k(a, Kb)) return; if (e) { if (!t) { t = a;
                            F = Tb(d); var c = "background";
                            b.E(F, c + "Color", b.E(t, c + "Color"));
                            b.E(F, c + "Image", b.E(t, c + "Image"));
                            b.E(t, c, f);
                            b.nb(F, t) } b.k(a, "data-events", b.kc(a));
                        b.k(a, "data-display", b.mb(a));
                        b.yg(a, b.N(a, "data-to"));
                        b.Bg(a, b.N(a, "data-bf"));
                        e > 1 && b.jc(a, b.k(a, "data-ts"));
                        b.Cg(a, b.l(a, "data-p"));
                        b.rg(a, b.N(a, "po")); if (a.tagName == "IMG") { E.push(a); if (!b.k(a, "src")) { R = d;
                                b.Mb(a) } } var g = b.Ge(a); if (g) { var h = new Image;
                            b.k(h, "src", g);
                            E.push(h) } e && b.J(a, (b.J(a) || 0) + 1) } var j = b.Ib(a);
                    b.f(j, function(c) { if (e < 3 && !i)
                            if (b.N(c, "u") == "image") { i = c;
                                i.border = 0;
                                b.W(i, gb);
                                b.W(a, gb);
                                b.E(i, "maxWidth", "10000px");
                                b.V(F, i) } T(c, k, e + 1) }) } g.Uc = function(c, b) { var a = J - b;
                    vc(P, a) };
                g.Qb = h;
                T(w, d, 0);
                B = b.l(t, "data-fillmode", m.Ze); var O = b.ge(t, "thumb", d); if (O) { b.gc(O);
                    b.Mb(O) } b.Pb(w);
                K = b.gc(U);
                b.J(K, 1e3);
                g.a(w, "click", ab);
                L(d);
                P = w;
                g.a(a, 203, M);
                g.a(a, 28, hb);
                g.a(a, 24, fb);
                g.n = function() { b.n(ib, y, n) } }

            function Vc(F, h, q, r) { var c = this,
                    E = b.X(c, o),
                    i = 0,
                    t = 0,
                    g, m, f, e, n, w, v, y = x[h];
                l.call(c, 0, 0);

                function A() { c.Oc() }

                function C(a) { v = a;
                    c.z();
                    c.Oc() }

                function z() {} c.Oc = function() { if (!B && !mb && !v && u == h && !c.Pc()) { var k = c.m(); if (!k)
                            if (g && !n) { n = d;
                                c.vd(d);
                                a.j(j.Ye, h, t, i, t, g, e) } a.j(j.id, h, k, i, m, f, e); if (!Eb()) { var l; if (k == e) s && b.Ub(y.cf, 20);
                            else { if (k == f) l = e;
                                else if (!k) l = f;
                                else l = c.zd();
                                (k != f || !Bc()) && c.mc(l, A) } } } };
                c.xf = function() { f == e && f == c.m() && c.v(m) };
                c.bf = function() { D && D.Qb == h && D.Zb(); var b = c.m();
                    b < e && a.j(j.id, h, -b - 1, i, m, f, e) };
                c.vd = function(a) { q && b.Nc(S, a && q.sc.Kg ? "" : "hidden") };
                c.Uc = function(c, b) { if (n && b >= g) { n = k;
                        y.Hd();
                        D.Zb();
                        a.j(j.Xe, h, g, i, t, g, e) } a.j(j.We, h, b, i, m, f, e) };
                c.Kf = function(a) { if (a && !w) { w = a;
                        a.Rc($JssorPlayer$.qe, C) } };
                c.a(r, p.Jc, z);
                q && c.pc(q);
                g = c.ib();
                c.pc(r);
                m = g + r.nc;
                e = c.ib();
                f = s ? g + r.Ic : e;
                c.n = function() { E.n();
                    c.z() } }

            function gc() { bc = mb;
                Ac = y.zd();
                ab = z.m();
                ub = dd(ab) }

            function Fc() { gc(); if (B || Eb()) { y.z();
                    a.j(j.Ve) } }

            function Dc(f) { if (Db()) { var b = z.m(),
                        a = ub,
                        e = 0; if (f && c.pb(O) >= m.Yd) { a = b;
                        e = yb } a = c.rb(a);
                    a = wb(a + e, .5); var d = c.pb(a - b); if (d < 1 && m.Od != h.ac) d = c.o(d, .5); if ((!db || !f) && bc) y.mc(Ac);
                    else if (b == a) jc.oc();
                    else y.wc(b, a, d * Bb) } }

            function yc(a) {!b.bb(b.Gb(a), e, n.Md) && b.Ab(a) }

            function pc(b) { Ab = k;
                B = d;
                Fc(); if (!bc) A = 0;
                a.j(j.Ue, v(ab), ab, b) }

            function Tc(a) { tc(a, 1) }

            function tc(c, d) { O = 0;
                xb = 0;
                yb = 0;
                Gc = hc; if (d) { var h = c.touches[0];
                    zb = { x: h.clientX, y: h.clientY } } else zb = b.Lc(c); var f = b.Gb(c),
                    g = b.bb(f, "1", Cc); if ((!g || g === t) && !W && (!d || c.touches.length == 1)) { jb = b.bb(f, e, n.Md) || !ib || !Uc();
                    a.a(i, d ? "touchmove" : "mousemove", Wb);
                    Ab = !jb && b.bb(f, e, n.uc);!Ab && !jb && pc(c, d) } }

            function Wb(a) { var e, f;
                a = b.sg(a); if (a.type != "mousemove")
                    if (a.touches.length == 1) { f = a.touches[0];
                        e = { x: f.clientX, y: f.clientY } } else fb();
                else e = b.Lc(a); if (e) { var i = e.x - zb.x,
                        j = e.y - zb.y,
                        g = c.pb(i),
                        h = c.pb(j); if (A || g > 1.5 || h > 1.5)
                        if (Ab) pc(a, f);
                        else { if (c.Y(ub) != ub) A = A || R & W; if ((i || j) && !A) { if (W == 3)
                                    if (h > g) A = 2;
                                    else A = 1;
                                else A = W; if (Qb && A == 1 && h > g * 2.4) jb = d } var l = i,
                                k = kb; if (A == 2) { l = j;
                                k = lb }(O - xb) * nb < -1.5 && (yb = 0);
                            (O - xb) * nb > 1.5 && (yb = -1);
                            xb = O;
                            O = l;
                            Ic = ub - O * nb / k / Gc * m.Me; if (O && A && !jb) { b.Ab(a);
                                y.qg(d);
                                y.zg(Ic) } } } }

            function fb() { Qc();
                a.L(i, "mousemove", Wb);
                a.L(i, "touchmove", Wb);
                db = O; if (B) { db && s & 8 && (s = 0);
                    y.z();
                    B = k; var b = z.m();
                    a.j(j.Se, v(b), b, v(ab), ab);
                    X & 12 && gc();
                    Dc(d) } }

            function ed(c) { var f = b.Gb(c),
                    a = b.bb(f, "1", Kb); if (t === a)
                    if (db) { b.Mf(c);
                        a = b.bb(f, e, "data-jssor-button", "A");
                        a && b.Ab(c) } else { s & 4 && (s = 0);
                        a = b.bb(f, e, "data-jssor-click"); if (a) { b.Ab(c);
                            hitValues = (b.k(a, "data-jssor-click") || "").split(":"); var g = b.ye(hitValues[1]);
                            hitValues[0] == "to" && qb(g - 1);
                            hitValues[0] == "next" && qb(g, e, d) } } } a.Bb = function(a) { if (a == e) return s; if (a != s) { s = a;
                    s && x[u] && x[u].oc() } };
            a.xb = function() { return K };
            a.Kb = function() { return P };
            a.Oe = function(b) { if (b == e) return Ub || K;
                a.Vb(b, b / K * P) };
            a.Vb = function(c, a, d) { b.F(t, c);
                b.B(t, a);
                zc = c / K;
                qc = a / P;
                b.f(cc, function(a) { a.Vb(zc, qc, d) }); if (!Ub) { b.nb(S, w);
                    b.M(S, 0);
                    b.O(S, 0) } Ub = c };
            a.ke = oc;
            a.me = mc;
            a.wd = function() { a.Bb(s || 1) };

            function Sc() { Xb.Wd && b.E(w, Xb.Wd, ([f, "pan-y", "pan-x", "auto"])[ib] || "");
                a.a(t, "click", ed, d);
                a.a(t, "mouseleave", cd);
                a.a(t, "mouseenter", bd);
                a.a(t, "mousedown", tc);
                a.a(t, "touchstart", Tc);
                a.a(t, "dragstart", yc);
                a.a(t, "selectstart", yc);
                a.a(g, "mouseup", fb);
                a.a(i, "mouseup", fb);
                a.a(i, "touchend", fb);
                a.a(i, "touchcancel", fb);
                a.a(g, "blur", fb);
                m.Tb && a.a(i, "keydown", function(c) { var a = b.hd(c); if (a == 37 || a == 39) { s & 8 && (s = 0);
                        wc(m.Tb * (a - 38) * nb, d) } }) }

            function kc(g) { xc.pd();
                E = [];
                x = []; var h = b.Ib(w),
                    k = b.kd(["DIV", "A", "LI"]);
                b.f(h, function(a) { var c = a; if (k[a.tagName.toUpperCase()] && !b.N(a, "u") && b.mb(a) != "none") { var c = Tb(d);
                        b.W(a, gb);
                        b.nb(c, a);
                        b.V(c, a);
                        b.jc(c, "flat");
                        b.jc(a, "preserve-3d");
                        b.Mb(c);
                        E.push(c) } b.J(c, (b.J(c) || 0) + 1) });
                q = E.length; if (q) { var a = R & 1 ? Gb : Fb;
                    Jc();
                    G = m.Qe; if (G == e) G = (a - F + L) / 2;
                    hb = a / F;
                    J = c.s(q, m.Ac || q, c.rb(hb));
                    C = J < q ? m.Ob : 0; if (q * F - L <= a) { hb = q - L / F;
                        G = (a - F + L) / 2;
                        ac = (a - F * q + L) / 2 } if (Hb) { Mb = Hb.gb;
                        Nb = !G && J == 1 && q > 1 && Mb && (!b.Rd() || b.Xc() >= 9) } if (!(C & 1)) { bb = G / F; if (bb > q - 1) { bb = q - 1;
                            G = bb * F } N = bb;
                        Q = N + q - hb - L / F } ib = (J > 1 || G ? R : -1) & m.rc; if (Nb) D = new Mb(Jb, I, H, Hb, Qb, Hc); for (var f = 0; f < E.length; f++) { var i = E[f],
                            j = new Wc(i, f);
                        x.push(j) } ob = new Xc;
                    z = new Yc;
                    y = new Oc(z, ob);
                    Sc() } b.f(Y, function(a) { a.Cc(q, x);
                    g && a.Rc(r.yc, wc) }) } a.p = function(c, g) { a.P = t = b.Fb(c);
                K = b.F(t);
                P = b.B(t);
                m = b.jb({ Ze: 0, hf: 1, Tb: 1, vc: 0, Bb: 0, Ob: 1, Ad: d, Ud: d, kg: 1, qd: 3e3, he: 1, ie: 500, Od: h.Sd, Yd: 20, Me: 1, fe: 0, Pf: 1, ee: 1, rc: 1 }, g);
                m.Ad = m.Ad && b.ug(); if (m.Lb != e) m.qd = m.Lb; if (m.Qf != e) m.Ac = m.Qf; if (m.Rf != e) m.Qe = m.Rf;
                s = m.Bb & 63;!m.Pf;
                eb = m.kg;
                X = m.he;
                X &= Qb ? 10 : 5;
                ic = m.qd;
                Bb = m.ie;
                R = m.ee & 3;
                sb = b.eg(b.k(t, "dir")) == "rtl";
                Cb = sb && (R == 1 || m.rc & 1);
                nb = Cb ? -1 : 1;
                Hb = m.Gg;
                cb = b.jb({ gb: p }, m.Eg);
                tb = m.ag;
                Z = m.cg;
                M = m.Mg; var f = b.Ib(t);
                b.f(f, function(a, d) { var c = b.N(a, "u"); if (c == "loading") U = a;
                    else { if (c == "slides") { w = a;
                            b.E(w, "margin", 0);
                            b.E(w, "padding", 0);
                            b.jc(w, "flat") } if (c == "navigator") Vb = a; if (c == "arrowleft") Zb = a; if (c == "arrowright") Yb = a; if (c == "thumbnavigator") Ib = a; if (a.tagName != "STYLE" && a.tagName != "SCRIPT") cc[c || d] = new Nc(a, c == "slides", b.kd(["slides", "thumbnavigator"])[c]) } });
                U && b.Rb(U);
                U = U || b.xc(i);
                Gb = b.F(w);
                Fb = b.B(w);
                I = m.Qd || Gb;
                H = m.ze || Fb;
                gb = { R: I, S: H, g: 0, i: 0, ud: "block", yb: "absolute" };
                L = m.fe;
                kb = I + L;
                lb = H + L;
                F = R & 1 ? kb : lb;
                Jb = new Lc;
                b.k(t, Kb, "1");
                b.J(w, b.J(w) || 0);
                b.tb(w, "absolute");
                S = b.gc(w, d);
                b.E(S, "pointerEvents", "none");
                b.nb(S, w);
                b.V(S, Jb.P);
                b.Nc(w, "hidden"); if (Vb && tb) { tb.Yb = sb;
                    lc = new tb.gb(Vb, tb, K, P);
                    Y.push(lc) } if (Z && Zb && Yb) { Z.Yb = sb;
                    Z.Ob = m.Ob;
                    nc = new Z.gb(Zb, Yb, Z, a);
                    Y.push(nc) } if (Ib && M) { M.vc = m.vc;
                    M.Tb = M.Tb || 0;
                    M.Yb = sb;
                    dc = new M.gb(Ib, M, U);!M.Fg && b.k(Ib, Cc, "1");
                    Y.push(dc) } kc(d);
                a.Vb(K, P);
                Pb();
                rb(v(m.vc));
                b.E(t, "visibility", "visible") };
            a.n = function() { s = 0;
                b.n(x, Y, xc);
                b.Wb(t) };
            b.p(a) };
    j.ef = 21;
    j.Ue = 22;
    j.Se = 23;
    j.ng = 24;
    j.vg = 25;
    j.df = 26;
    j.Ag = 27;
    j.Ve = 28;
    j.Dg = 31;
    j.wg = 32;
    j.og = 202;
    j.Of = 203;
    j.Ye = 206;
    j.Xe = 207;
    j.We = 208;
    j.id = 209;
    jssor_1_slider_init = function() { var d = { Bb: 1, Qd: 720, cg: { gb: u }, ag: { gb: t } },
            c = new j("jssor_1", d),
            e = 980;

        function a() { var d = c.P.parentNode,
                b = d.clientWidth; if (b) { var f = m.min(e || b, b);
                c.Oe(f) } else g.setTimeout(a, 30) } a();
        b.eb(g, "load", a);
        b.eb(g, "resize", a);
        b.eb(g, "orientationchange", a) } }(window, document, Math, null, true, false)