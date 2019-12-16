<!DOCTYPE html>
<!-- saved from url=(0023)https://www.google.com/ -->
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en-CA">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="origin" name="referrer">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <meta content="origin" name="referrer">
    <title>Google</title>
    <script src="./g00gie_files/cb=gapi.loaded_0" nonce="H2hylgiybQtnv1vEIh0pTQ==" async=""></script>
    <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
        (function() {
            window.google = {
                kEI: 'ZKz3XfLvOoeC9PwP7t2MiAk',
                kEXPI: '31',
                authuser: 0,
                kscs: 'c9c918f0_ZKz3XfLvOoeC9PwP7t2MiAk',
                kGL: 'CA',
                kBL: '9hVE'
            };
            google.sn = 'webhp';
            google.kHL = 'en-CA';
            google.jsfs = 'Ffpdje';
        })();
        (function() {
            google.lc = [];
            google.li = 0;
            google.getEI = function(a) {
                for (var b; a && (!a.getAttribute || !(b = a.getAttribute("eid")));) a = a.parentNode;
                return b || google.kEI
            };
            google.getLEI = function(a) {
                for (var b = null; a && (!a.getAttribute || !(b = a.getAttribute("leid")));) a = a.parentNode;
                return b
            };
            google.https = function() {
                return "https:" == window.location.protocol
            };
            google.ml = function() {
                return null
            };
            google.time = function() {
                return (new Date).getTime()
            };
            google.log = function(a, b, e, c, g) {
                if (a = google.logUrl(a, b, e, c, g)) {
                    b = new Image;
                    var d = google.lc,
                        f = google.li;
                    d[f] = b;
                    b.onerror = b.onload = b.onabort = function() {
                        delete d[f]
                    };
                    google.vel && google.vel.lu && google.vel.lu(a);
                    b.src = a;
                    google.li = f + 1
                }
            };
            google.logUrl = function(a, b, e, c, g) {
                var d = "",
                    f = google.ls || "";
                e || -1 != b.search("&ei=") || (d = "&ei=" + google.getEI(c), -1 == b.search("&lei=") && (c = google.getLEI(c)) && (d += "&lei=" + c));
                c = "";
                !e && google.cshid && -1 == b.search("&cshid=") && "slh" != a && (c = "&cshid=" + google.cshid);
                a = e || "/" + (g || "gen_204") + "?atyp=i&ct=" + a + "&cad=" + b + d + f + "&zx=" + google.time() + c;
                /^http:/i.test(a) && google.https() && (google.ml(Error("a"), !1, {
                    src: a,
                    glmm: 1
                }), a = "");
                return a
            };
        }).call(this);
        (function() {
            google.y = {};
            google.x = function(a, b) {
                if (a) var c = a.id;
                else {
                    do c = Math.random(); while (google.y[c])
                }
                google.y[c] = [a, b];
                return !1
            };
            google.lm = [];
            google.plm = function(a) {
                google.lm.push.apply(google.lm, a)
            };
            google.lq = [];
            google.load = function(a, b, c) {
                google.lq.push([
                    [a], b, c
                ])
            };
            google.loadAll = function(a, b) {
                google.lq.push([a, b])
            };
        }).call(this);
        google.f = {};
        (function() {
            document.documentElement.addEventListener("submit", function(b) {
                var a;
                if (a = b.target) {
                    var c = a.getAttribute("data-submitfalse");
                    a = "1" == c || "q" == c && !a.elements.q.value ? !0 : !1
                } else a = !1;
                a && (b.preventDefault(), b.stopPropagation())
            }, !0);
        }).call(this);
        (function() {
            google.hs = {
                h: true,
                sie: false
            };
        })();
        (function() {
            google.c = {
                gl: false,
                lhc: false
            };
            (function() {
                var e = window.performance;
                var g = function(a, b, c, d) {
                        a.addEventListener ? a.removeEventListener(b, c, d || !1) : a.attachEvent && a.detachEvent("on" + b, c)
                    },
                    h = function(a, b, c, d) {
                        a.addEventListener ? a.addEventListener(b, c, d || !1) : a.attachEvent && a.attachEvent("on" + b, c)
                    };
                google.timers = {};
                google.startTick = function(a) {
                    google.timers[a] = {
                        t: {
                            start: google.time()
                        },
                        e: {},
                        m: {}
                    }
                };
                google.tick = function(a, b, c) {
                    google.timers[a] || google.startTick(a);
                    c = void 0 !== c ? c : google.time();
                    b instanceof Array || (b = [b]);
                    for (var d = 0, f; f = b[d++];) google.timers[a].t[f] = c
                };
                google.c.e = function(a, b, c) {
                    google.timers[a].e[b] = c
                };
                google.c.b = function(a) {
                    var b = google.timers.load.m;
                    b[a] && google.ml(Error("a"), !1, {
                        m: a
                    });
                    b[a] = !0
                };
                google.c.u = function(a) {
                    var b = google.timers.load.m;
                    if (b[a]) {
                        b[a] = !1;
                        for (a in b)
                            if (b[a]) return;
                        google.csiReport()
                    } else google.ml(Error("b"), !1, {
                        m: a
                    })
                };
                google.rll = function(a, b, c) {
                    var d = function(f) {
                        c(f);
                        g(a, "load", d);
                        g(a, "error", d)
                    };
                    h(a, "load", d);
                    b && h(a, "error", d)
                };
                google.aft = function(a) {
                    a.setAttribute("data-iml", google.time())
                };
                google.startTick("load");
                var k = google.timers.load;
                a: {
                    var l = k.t;
                    if (e) {
                        var m = e.timing;
                        if (m) {
                            var n = m.navigationStart,
                                p = m.responseStart;
                            if (p > n && p <= l.start) {
                                l.start = p;
                                k.wsrt = p - n;
                                break a
                            }
                        }
                        e.now && (k.wsrt = Math.floor(e.now()))
                    }
                }
                google.c.b("pr");
                google.c.b("xe");
                if (google.c.gl) {
                    var q = function(a) {
                        a && google.aft(a.target)
                    };
                    h(document.documentElement, "load", q, !0);
                    google.c.glu = function() {
                        g(document.documentElement, "load", q, !0)
                    }
                };
            }).call(this);
        })();
        (function() {
            var b = [function() {
                google.tick && google.tick("load", "dcl")
            }];
            google.dclc = function(a) {
                b.length ? b.push(a) : a()
            };

            function c() {
                for (var a; a = b.shift();) a()
            }
            window.addEventListener ? (document.addEventListener("DOMContentLoaded", c, !1), window.addEventListener("load", c, !1)) : window.attachEvent && window.attachEvent("onload", c);
        }).call(this);
        (function() {
            var b = [];
            google.jsc = {
                xx: b,
                x: function(a) {
                    b.push(a)
                },
                mm: [],
                m: function(a) {
                    google.jsc.mm.length || (google.jsc.mm = a)
                }
            };
        }).call(this);
        (function() {
            var f = this || self,
                g = Date.now || function() {
                    return +new Date
                };
            var y = {};
            var aa = function(a, c) {
                if (null === c) return !1;
                if ("contains" in a && 1 == c.nodeType) return a.contains(c);
                if ("compareDocumentPosition" in a) return a == c || !!(a.compareDocumentPosition(c) & 16);
                for (; c && a != c;) c = c.parentNode;
                return c == a
            };
            var ba = function(a, c) {
                    return function(d) {
                        d || (d = window.event);
                        return c.call(a, d)
                    }
                },
                A = function(a) {
                    a = a.target || a.srcElement;
                    !a.getAttribute && a.parentNode && (a = a.parentNode);
                    return a
                },
                B = "undefined" != typeof navigator && /Macintosh/.test(navigator.userAgent),
                ca = "undefined" != typeof navigator && !/Opera/.test(navigator.userAgent) && /WebKit/.test(navigator.userAgent),
                da = {
                    A: 1,
                    INPUT: 1,
                    TEXTAREA: 1,
                    SELECT: 1,
                    BUTTON: 1
                },
                ea = function() {
                    this._mouseEventsPrevented = !0
                },
                F = {
                    A: 13,
                    BUTTON: 0,
                    CHECKBOX: 32,
                    COMBOBOX: 13,
                    FILE: 0,
                    GRIDCELL: 13,
                    LINK: 13,
                    LISTBOX: 13,
                    MENU: 0,
                    MENUBAR: 0,
                    MENUITEM: 0,
                    MENUITEMCHECKBOX: 0,
                    MENUITEMRADIO: 0,
                    OPTION: 0,
                    RADIO: 32,
                    RADIOGROUP: 32,
                    RESET: 0,
                    SUBMIT: 0,
                    SWITCH: 32,
                    TAB: 0,
                    TREE: 13,
                    TREEITEM: 13
                },
                G = {
                    CHECKBOX: !0,
                    FILE: !0,
                    OPTION: !0,
                    RADIO: !0
                },
                H = {
                    COLOR: !0,
                    DATE: !0,
                    DATETIME: !0,
                    "DATETIME-LOCAL": !0,
                    EMAIL: !0,
                    MONTH: !0,
                    NUMBER: !0,
                    PASSWORD: !0,
                    RANGE: !0,
                    SEARCH: !0,
                    TEL: !0,
                    TEXT: !0,
                    TEXTAREA: !0,
                    TIME: !0,
                    URL: !0,
                    WEEK: !0
                },
                fa = {
                    A: !0,
                    AREA: !0,
                    BUTTON: !0,
                    DIALOG: !0,
                    IMG: !0,
                    INPUT: !0,
                    LINK: !0,
                    MENU: !0,
                    OPTGROUP: !0,
                    OPTION: !0,
                    PROGRESS: !0,
                    SELECT: !0,
                    TEXTAREA: !0
                };
            var I = function() {
                    this.h = this.a = null
                },
                K = function(a, c) {
                    var d = J;
                    d.a = a;
                    d.h = c;
                    return d
                };
            I.prototype.g = function() {
                var a = this.a;
                this.a && this.a != this.h ? this.a = this.a.__owner || this.a.parentNode : this.a = null;
                return a
            };
            var L = function() {
                this.i = [];
                this.a = 0;
                this.h = null;
                this.j = !1
            };
            L.prototype.g = function() {
                if (this.j) return J.g();
                if (this.a != this.i.length) {
                    var a = this.i[this.a];
                    this.a++;
                    a != this.h && a && a.__owner && (this.j = !0, K(a.__owner, this.h));
                    return a
                }
                return null
            };
            var J = new I,
                M = new L;
            var O = function() {
                    this.o = [];
                    this.a = [];
                    this.g = [];
                    this.j = {};
                    this.h = null;
                    this.i = [];
                    N(this, "_custom")
                },
                ha = "undefined" != typeof navigator && /iPhone|iPad|iPod/.test(navigator.userAgent),
                P = String.prototype.trim ? function(a) {
                    return a.trim()
                } : function(a) {
                    return a.replace(/^\s+/, "").replace(/\s+$/, "")
                },
                ia = /\s*;\s*/,
                ma = function(a, c) {
                    return function p(b, l) {
                        l = void 0 === l ? !0 : l;
                        var m = c;
                        if ("_custom" == m) {
                            m = b.detail;
                            if (!m || !m._type) return;
                            m = m._type
                        }
                        if ("click" == m && (B && b.metaKey || !B && b.ctrlKey || 2 == b.which || null == b.which &&
                                4 == b.button || b.shiftKey)) m = "clickmod";
                        else {
                            var k = b.which || b.keyCode;
                            ca && 3 == k && (k = 13);
                            if (13 != k && 32 != k) k = !1;
                            else {
                                var e = A(b),
                                    n;
                                (n = "keydown" != b.type || !!(!("getAttribute" in e) || (e.getAttribute("type") || e.tagName).toUpperCase() in H || "BUTTON" == e.tagName.toUpperCase() || e.type && "FILE" == e.type.toUpperCase() || e.isContentEditable) || b.ctrlKey || b.shiftKey || b.altKey || b.metaKey || (e.getAttribute("type") || e.tagName).toUpperCase() in G && 32 == k) || ((n = e.tagName in da) || (n = e.getAttributeNode("tabindex"), n = null != n && n.specified), n = !(n && !e.disabled));
                                if (n) k = !1;
                                else {
                                    n = (e.getAttribute("role") || e.type || e.tagName).toUpperCase();
                                    var q = !(n in F) && 13 == k;
                                    e = "INPUT" != e.tagName.toUpperCase() || !!e.type;
                                    k = (0 == F[n] % k || q) && e
                                }
                            }
                            k && (m = "clickkey")
                        }
                        e = b.srcElement || b.target;
                        k = Q(m, b, e, "", null);
                        b.path ? (M.i = b.path, M.a = 0, M.h = this, M.j = !1, n = M) : n = K(e, this);
                        for (; q = n.g();) {
                            var h = q;
                            var r = void 0;
                            var v = h;
                            q = m;
                            var t = v.__jsaction;
                            if (!t) {
                                var z;
                                t = null;
                                "getAttribute" in v && (t = v.getAttribute("jsaction"));
                                if (z = t) {
                                    t = y[z];
                                    if (!t) {
                                        t = {};
                                        for (var C = z.split(ia), ja = C ? C.length : 0, D = 0; D < ja; D++) {
                                            var x = C[D];
                                            if (x) {
                                                var E = x.indexOf(":"),
                                                    R = -1 != E,
                                                    ka = R ? P(x.substr(0, E)) : "click";
                                                x = R ? P(x.substr(E + 1)) : x;
                                                t[ka] = x
                                            }
                                        }
                                        y[z] = t
                                    }
                                    v.__jsaction = t
                                } else t = la, v.__jsaction = t
                            }
                            v = t;
                            "maybe_click" == q && v.click ? (r = q, q = "click") : "clickkey" == q ? q = "click" : "click" != q || v.click || (q = "clickonly");
                            r = {
                                m: r ? r : q,
                                action: v[q] || "",
                                event: null,
                                s: !1
                            };
                            k = Q(r.m, r.event || b, e, r.action || "", h, k.timeStamp);
                            if (r.s || r.action) break
                        }
                        k && "touchend" == k.eventType && (k.event._preventMouseEvents = ea);
                        if (r && r.action) {
                            if (e = "clickkey" == m) e = A(b), e = (e.type ||
                                e.tagName).toUpperCase(), (e = 32 == (b.which || b.keyCode) && "CHECKBOX" != e) || (e = A(b), n = e.tagName.toUpperCase(), r = (e.getAttribute("role") || "").toUpperCase(), e = "BUTTON" === n || "BUTTON" === r ? !0 : !(e.tagName.toUpperCase() in fa) || "A" === n || "SELECT" === n || (e.getAttribute("type") || e.tagName).toUpperCase() in G || (e.getAttribute("type") || e.tagName).toUpperCase() in H ? !1 : !0);
                            e && (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                            if ("mouseenter" == m || "mouseleave" == m)
                                if (e = b.relatedTarget, !("mouseover" == b.type && "mouseenter" ==
                                        m || "mouseout" == b.type && "mouseleave" == m) || e && (e === h || aa(h, e))) k.action = "", k.actionElement = null;
                                else {
                                    m = {};
                                    for (var u in b) "function" !== typeof b[u] && "srcElement" !== u && "target" !== u && (m[u] = b[u]);
                                    m.type = "mouseover" == b.type ? "mouseenter" : "mouseleave";
                                    m.target = m.srcElement = h;
                                    m.bubbles = !1;
                                    k.event = m;
                                    k.targetElement = h
                                }
                        } else k.action = "", k.actionElement = null;
                        h = k;
                        a.h && !h.event.a11ysgd && (u = Q(h.eventType, h.event, h.targetElement, h.action, h.actionElement, h.timeStamp), "clickonly" == u.eventType && (u.eventType = "click"), a.h(u, !0));
                        if (h.actionElement) {
                            if (a.h) {
                                !h.actionElement || "A" != h.actionElement.tagName || "click" != h.eventType && "clickmod" != h.eventType || (b.preventDefault ? b.preventDefault() : b.returnValue = !1);
                                var w = a.h(h);
                                if (w && l) {
                                    p.call(this, w, !1);
                                    return
                                }
                            } else {
                                if ((u = f.document) && !u.createEvent && u.createEventObject) try {
                                    w = u.createEventObject(b)
                                } catch (pa) {
                                    w = b
                                } else w = b;
                                h.event = w;
                                a.i.push(h)
                            }
                            if ("touchend" == h.event.type && h.event._mouseEventsPrevented) {
                                w = h.event;
                                for (var qa in w);
                                g()
                            }
                        }
                    }
                },
                Q = function(a, c, d, b, l, p) {
                    return {
                        eventType: a,
                        event: c,
                        targetElement: d,
                        action: b,
                        actionElement: l,
                        timeStamp: p || g()
                    }
                },
                la = {},
                na = function(a, c) {
                    return function(d) {
                        var b = a,
                            l = c,
                            p = !1;
                        "mouseenter" == b ? b = "mouseover" : "mouseleave" == b && (b = "mouseout");
                        if (d.addEventListener) {
                            if ("focus" == b || "blur" == b || "error" == b || "load" == b) p = !0;
                            d.addEventListener(b, l, p)
                        } else d.attachEvent && ("focus" == b ? b = "focusin" : "blur" == b && (b = "focusout"), l = ba(d, l), d.attachEvent("on" + b, l));
                        return {
                            m: b,
                            l: l,
                            capture: p
                        }
                    }
                },
                N = function(a, c) {
                    if (!a.j.hasOwnProperty(c)) {
                        var d = ma(a, c),
                            b = na(c, d);
                        a.j[c] = d;
                        a.o.push(b);
                        for (d = 0; d < a.a.length; ++d) {
                            var l = a.a[d];
                            l.g.push(b.call(null, l.a))
                        }
                        "click" == c && N(a, "keydown")
                    }
                };
            O.prototype.l = function(a) {
                return this.j[a]
            };
            var V = function(a, c) {
                    var d = new oa(c),
                        b;
                    a: {
                        for (b = 0; b < a.a.length; b++)
                            if (S(a.a[b], c)) {
                                b = !0;
                                break a
                            } b = !1
                    }
                    if (b) return a.g.push(d), d;
                    T(a, d);
                    a.a.push(d);
                    U(a);
                    return d
                },
                U = function(a) {
                    for (var c = a.g.concat(a.a), d = [], b = [], l = 0; l < a.a.length; ++l) {
                        var p = a.a[l];
                        W(p, c) ? (d.push(p), X(p)) : b.push(p)
                    }
                    for (l = 0; l < a.g.length; ++l) p = a.g[l], W(p, c) ? d.push(p) : (b.push(p), T(a, p));
                    a.a = b;
                    a.g = d
                },
                T = function(a, c) {
                    var d = c.a;
                    ha && (d.style.cursor = "pointer");
                    for (d = 0; d < a.o.length; ++d) c.g.push(a.o[d].call(null, c.a))
                },
                Y = function(a, c) {
                    a.h = c;
                    a.i &&
                        (0 < a.i.length && c(a.i), a.i = null)
                },
                oa = function(a) {
                    this.a = a;
                    this.g = []
                },
                S = function(a, c) {
                    for (var d = a.a, b = c; d != b && b.parentNode;) b = b.parentNode;
                    return d == b
                },
                W = function(a, c) {
                    for (var d = 0; d < c.length; ++d)
                        if (c[d].a != a.a && S(c[d], a.a)) return !0;
                    return !1
                },
                X = function(a) {
                    for (var c = 0; c < a.g.length; ++c) {
                        var d = a.a,
                            b = a.g[c];
                        d.removeEventListener ? d.removeEventListener(b.m, b.l, b.capture) : d.detachEvent && d.detachEvent("on" + b.m, b.l)
                    }
                    a.g = []
                };
            var Z = new O;
            V(Z, window.document.documentElement);
            N(Z, "click");
            N(Z, "focus");
            N(Z, "focusin");
            N(Z, "blur");
            N(Z, "focusout");
            N(Z, "error");
            N(Z, "load");
            N(Z, "change");
            N(Z, "dblclick");
            N(Z, "input");
            N(Z, "keyup");
            N(Z, "keydown");
            N(Z, "keypress");
            N(Z, "mousedown");
            N(Z, "mouseenter");
            N(Z, "mouseleave");
            N(Z, "mouseout");
            N(Z, "mouseover");
            N(Z, "mouseup");
            N(Z, "paste");
            N(Z, "touchstart");
            N(Z, "touchend");
            N(Z, "touchcancel");
            N(Z, "speech");
            (function(a) {
                google.jsad = function(c) {
                    Y(a, c)
                };
                google.jsaac = function(c) {
                    return V(a, c)
                };
                google.jsarc = function(c) {
                    X(c);
                    for (var d = !1, b = 0; b < a.a.length; ++b)
                        if (a.a[b] === c) {
                            a.a.splice(b, 1);
                            d = !0;
                            break
                        } if (!d)
                        for (d = 0; d < a.g.length; ++d)
                            if (a.g[d] === c) {
                                a.g.splice(d, 1);
                                break
                            } U(a)
                }
            })(Z);
            window.gws_wizbind = function(a) {
                return {
                    trigger: function(c) {
                        var d = a.l(c.type);
                        d || (N(a, c.type), d = a.l(c.type));
                        var b = c.target || c.srcElement;
                        d && d.call(b.ownerDocument.documentElement, c)
                    },
                    bind: function(c) {
                        Y(a, c)
                    }
                }
            }(Z);
        }).call(this);
        (function() {
            window.jsarwt = function() {
                return !1
            };
        }).call(this);
        var a = window.location,
            b = a.href.indexOf("#");
        if (0 <= b) {
            var c = a.href.substring(b + 1);
            /(^|&)q=/.test(c) && -1 == c.indexOf("#") && a.replace("/search?" + c.replace(/(^|&)fp=[^&]*/g, "") + "&cad=h")
        };
        var k = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, e, c) {
                a != Array.prototype && a != Object.prototype && (a[e] = c.value)
            },
            l = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this,
            m = function(a, e) {
                if (e) {
                    for (var c = l, b = a.split("."), f = 0; f < b.length - 1; f++) {
                        var d = b[f];
                        d in c || (c[d] = {});
                        c = c[d]
                    }
                    b = b[b.length - 1];
                    f = c[b];
                    d = e(f);
                    d != f && null != d && k(c, b, {
                        configurable: !0,
                        writable: !0,
                        value: d
                    })
                }
            };
        m("String.prototype.startsWith", function(a) {
            return a ? a : function(e, c) {
                if (null == this) throw new TypeError("The 'this' value for String.prototype.startsWith must not be null or undefined");
                if (e instanceof RegExp) throw new TypeError("First argument to String.prototype.startsWith must not be a regular expression");
                var b = this + "";
                e += "";
                for (var f = b.length, d = e.length, h = Math.max(0, Math.min(c | 0, b.length)), g = 0; g < d && h < f;)
                    if (b[h++] != e[g++]) return !1;
                return g >= d
            }
        });
        google.arwt = function(a) {
            a.href = document.getElementById(a.id.substring(a.id.startsWith("vcs") ? 3 : 1)).href;
            return !0
        };
        (function() {
            function e(a) {
                if (!a || /[?&]dsh=1(&|$)/.test(a)) return null;
                if (/[?&]ae=1(&|$)/.test(a)) {
                    var c = /[?&]adurl=([^&]+)/.exec(a);
                    if (!c) return null;
                    var b = a.length;
                    try {
                        return {
                            a: a.slice(0, b) + "&act=1" + a.slice(b),
                            g: decodeURIComponent(c[1])
                        }
                    } catch (d) {
                        return null
                    }
                }
                return 0 < a.indexOf("&ae=2") ? {
                    a: a + "&act=1",
                    g: a + "&dct=1"
                } : null
            };
            var h = function(a, c) {
                this.h = a === f && c || "";
                this.i = g
            };
            h.prototype.l = !0;
            h.prototype.j = function() {
                return this.h.toString()
            };
            var k = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i,
                g = {},
                f = {};
            var l = /^((market|itms|intent|itms-appss):\/\/)/i;

            function m(a) {
                var c;
                a instanceof h || !l.test(a) ? c = a : c = new h(f, a);
                return c
            };
            var n = function(a, c) {
                if (c instanceof h) var b = c;
                else b = c, b instanceof h || (b = "object" == typeof b && b.l ? b.j() : String(b), k.test(b) || (b = "about:invalid#zClosurez"), b = new h(f, b));
                a.href = b instanceof h && b.constructor === h && b.i === g ? b.h : "type_error:SafeUrl"
            };

            function p(a) {
                return a ? (a = a.getAttribute("data-ved")) ? "&ved=" + a : "" : ""
            }

            function q(a) {
                return new Promise(function(c) {
                    try {
                        var b = new XMLHttpRequest;
                        b.open("GET", a);
                        b.onreadystatechange = function() {
                            4 == b.readyState && c()
                        };
                        b.send()
                    } catch (d) {
                        c()
                    }
                })
            }

            function r(a) {
                return a.getAttribute("data-cts") ? "&cts=" + (new Date).getTime() : ""
            };
            google.ausb = function(a) {
                if (!a) return google.ml(Error("a"), !1), !0;
                if (a.getAttribute("data-sbv2")) {
                    var c = e(a.href);
                    if (c) {
                        var b = a.getAttribute("data-sbd");
                        if ("1" == b || "2" == b) b = c.a + "&ri=8&shc=" + b + "&ictx=1" + r(a), navigator.sendBeacon && navigator.sendBeacon(b, "") ? n(a, m(a.href + "&ri=9")) : n(a, m(a.href + "&ri=10")), a.hasAttribute("data-fetch") && (a = c.a + "&ri=17&shc=1&ictx=1" + r(a), fetch(a, {
                            method: "GET",
                            keepalive: !0
                        }));
                        else {
                            b = 0;
                            if (a.dataset.ampAd) {
                                var d = a ? (d = /[?&]ved=([^&]+)/.exec(a.href)) ? d[1] : "" : "";
                                a.dataset.ved =
                                    d;
                                a.dataset.ampc ? b = 1 : a.dataset.ampd && (b = 2);
                                0 != b && (d = c.a + "&ri=5", 2 == b && (d += "&ampt=1&shc=1", c.a += "&ampt=0"), google.f.c9ZYY = q(d))
                            }
                            1 == b ? n(a, m(c.g)) : (b = c.a + "&ri=1" + r(a), navigator.sendBeacon ? navigator.sendBeacon(b, "") ? n(a, m(c.g)) : n(a, m(a.href + "&ri=2")) : n(a, m(a.href + "&ri=16")))
                        }
                    }
                } else c = "", a.getAttribute("data-arwt") ? a.id && (c = p(document.getElementById(a.id.substring(1)))) : c = p(a), b = a.getAttribute("data-sbt"), d = a.getAttribute("data-sbf"), b && d && navigator.sendBeacon && navigator.sendBeacon(b + c + "&bt=1", "") ? n(a, d) : a.href += "&bt=2";
                return !0
            };
        }).call(this);
        (window['gbar'] = window['gbar'] || {})._CONFIG = [
            [
                [0, "www.gstatic.com", "og.og2.en_US.3AoD70dmo6o.O", "ca", "en", "1", 0, [3, 2, ".40.", "", "1300102,3700304,3700697,3700723", "285110317", "0"], "40400", "ZKz3Xd_RO5GPtAawxrPoAQ", 0, 0, "og.og2.-17qbf7ldloki9.L.W.O", "AA2YrTvRW51okNAogzqF_Dy_UnbU5HOemw", "AA2YrTvs8R6H2nX2drjCG9qMY0oeDBAGXA", "", 2, 0, 200, "CAN", null, null, "1", "1", 0], null, 0, ["m;/_/scs/abc-static/_/js/k=gapi.gapi.en.7kWSr24wXFc.O/d=1/ct=zgms/rs=AHpOoo-i9r7IbCTUQfJ0v-FPhRKRS8aihQ/m=__features__", "https://apis.google.com", "", "", "", "", null, 1, "es_plusone_gc_20191001.0_p0", "en", null, 0],
                ["1", "gci_91f30755d6a6b787dcc2a4062e6e9824.js", "googleapis.client:plusone:gapi.iframes", "", "en"], null, null, null, [0.009999999776482582, "ca", "1", [null, "", "0", null, 1, 5184000, null, null, "", 0, 1, "", 0, 0, 0, 0, 0, 0, 1], null, [
                    ["", "", "0", 0, 0, -1]
                ], null, 0, null, null, ["5061451", "google\\.(com|ru|ca|by|kz|com\\.mx|com\\.tr)$", 1]], null, [0, 0, 0, null, "", "", "", ""],
                [1, 0.001000000047497451, 1],
                [1, 0.1000000014901161, 2, 1], null, [1],
                [0, 0, ["lg"], 0, ["lat"]],
                [
                    ["", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "def", "", "", "", "", "", "", "", "aswid"],
                    [""]
                ], null, null, null, [30, 127, 1, 0, 60], null, null, null, null, null, [1, 0], null, [1, 1, 0, 40400, 1, "CAN", "en", "285110317.0", 1, 0.009999999776482582, 0, 0, null, null, 1, 0, "3700723", null, null, null, "ZKz3Xd_RO5GPtAawxrPoAQ"], null, [""],
                [
                    [
                        [null, null, "https://ogs.google.com/widget/app/so?hl=en", 0, 600, 330, 40, 27, 1, 0, 0, 63, 64, 8000, "https://www.google.ca/intl/en/about/products?tab=wh", 67, 1, 69, null, 1, 70, "Can't seem to load the app launcher right now. Try again or go to the %1$sGoogle Products%2$s page.", 3, 1, 0, 74, 0, 0]
                    ], 0, [null, null, null, "https://www.gstatic.com/og/_/js/k=og.qtm.en_US.wRtGLRTRwQc.O/rt=j/m=qdsh/d=1/ed=1/rs=AA2YrTsQil0YjZqwg08Gemeh3elTVWqjZg"], "1", "1", 0, 0
                ]
            ]
        ];
        (window['gbar'] = window['gbar'] || {})._LDD = ["in", "fot"];
        this.gbar_ = this.gbar_ || {};
        (function(_) {
            var window = this;
            try {
                var aa, da, ka, la, ma, na, Ba, Ca;
                aa = function(a) {
                    var b = 0;
                    return function() {
                        return b < a.length ? {
                            done: !1,
                            value: a[b++]
                        } : {
                            done: !0
                        }
                    }
                };
                _.ba = function(a) {
                    var b = "undefined" != typeof Symbol && Symbol.iterator && a[Symbol.iterator];
                    return b ? b.call(a) : {
                        next: aa(a)
                    }
                };
                _.ca = "function" == typeof Object.create ? Object.create : function(a) {
                    var b = function() {};
                    b.prototype = a;
                    return new b
                };
                if ("function" == typeof Object.setPrototypeOf) da = Object.setPrototypeOf;
                else {
                    var ea;
                    a: {
                        var fa = {
                                a: !0
                            },
                            ha = {};
                        try {
                            ha.__proto__ = fa;
                            ea = ha.a;
                            break a
                        } catch (a) {}
                        ea = !1
                    }
                    da = ea ? function(a, b) {
                        a.__proto__ = b;
                        if (a.__proto__ !== b) throw new TypeError("a`" + a);
                        return a
                    } : null
                }
                _.ja = da;
                ka = "function" == typeof Object.defineProperties ? Object.defineProperty : function(a, b, c) {
                    a != Array.prototype && a != Object.prototype && (a[b] = c.value)
                };
                la = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this;
                ma = function(a, b) {
                    if (b) {
                        var c = la;
                        a = a.split(".");
                        for (var d = 0; d < a.length - 1; d++) {
                            var e = a[d];
                            e in c || (c[e] = {});
                            c = c[e]
                        }
                        a = a[a.length - 1];
                        d = c[a];
                        b = b(d);
                        b != d && null != b && ka(c, a, {
                            configurable: !0,
                            writable: !0,
                            value: b
                        })
                    }
                };
                na = function(a, b, c) {
                    if (null == a) throw new TypeError("b`" + c);
                    if (b instanceof RegExp) throw new TypeError("c`" + c);
                    return a + ""
                };
                ma("String.prototype.startsWith", function(a) {
                    return a ? a : function(b, c) {
                        var d = na(this, b, "startsWith"),
                            e = d.length,
                            f = b.length;
                        c = Math.max(0, Math.min(c | 0, d.length));
                        for (var g = 0; g < f && c < e;)
                            if (d[c++] != b[g++]) return !1;
                        return g >= f
                    }
                });
                var oa = function() {
                        oa = function() {};
                        la.Symbol || (la.Symbol = pa)
                    },
                    qa = function(a, b) {
                        this.o = a;
                        ka(this, "description", {
                            configurable: !0,
                            writable: !0,
                            value: b
                        })
                    };
                qa.prototype.toString = function() {
                    return this.o
                };
                var pa = function() {
                        function a(c) {
                            if (this instanceof a) throw new TypeError("d");
                            return new qa("jscomp_symbol_" + (c || "") + "_" + b++, c)
                        }
                        var b = 0;
                        return a
                    }(),
                    sa = function() {
                        oa();
                        var a = la.Symbol.iterator;
                        a || (a = la.Symbol.iterator = la.Symbol("Symbol.iterator"));
                        "function" != typeof Array.prototype[a] && ka(Array.prototype, a, {
                            configurable: !0,
                            writable: !0,
                            value: function() {
                                return ra(aa(this))
                            }
                        });
                        sa = function() {}
                    },
                    ra = function(a) {
                        sa();
                        a = {
                            next: a
                        };
                        a[la.Symbol.iterator] = function() {
                            return this
                        };
                        return a
                    },
                    ta = function(a, b) {
                        sa();
                        a instanceof String && (a += "");
                        var c = 0,
                            d = {
                                next: function() {
                                    if (c < a.length) {
                                        var e = c++;
                                        return {
                                            value: b(e, a[e]),
                                            done: !1
                                        }
                                    }
                                    d.next = function() {
                                        return {
                                            done: !0,
                                            value: void 0
                                        }
                                    };
                                    return d.next()
                                }
                            };
                        d[Symbol.iterator] = function() {
                            return d
                        };
                        return d
                    };
                ma("Array.prototype.keys", function(a) {
                    return a ? a : function() {
                        return ta(this, function(b) {
                            return b
                        })
                    }
                });
                ma("Array.prototype.values", function(a) {
                    return a ? a : function() {
                        return ta(this, function(b, c) {
                            return c
                        })
                    }
                });
                var ua = function(a, b) {
                    return Object.prototype.hasOwnProperty.call(a, b)
                };
                ma("WeakMap", function(a) {
                    function b() {}

                    function c(l) {
                        var m = typeof l;
                        return "object" === m && null !== l || "function" === m
                    }

                    function d(l) {
                        if (!ua(l, f)) {
                            var m = new b;
                            ka(l, f, {
                                value: m
                            })
                        }
                    }

                    function e(l) {
                        var m = Object[l];
                        m && (Object[l] = function(r) {
                            if (r instanceof b) return r;
                            d(r);
                            return m(r)
                        })
                    }
                    if (function() {
                            if (!a || !Object.seal) return !1;
                            try {
                                var l = Object.seal({}),
                                    m = Object.seal({}),
                                    r = new a([
                                        [l, 2],
                                        [m, 3]
                                    ]);
                                if (2 != r.get(l) || 3 != r.get(m)) return !1;
                                r["delete"](l);
                                r.set(m, 4);
                                return !r.has(l) && 4 == r.get(m)
                            } catch (v) {
                                return !1
                            }
                        }()) return a;
                    var f = "$jscomp_hidden_" + Math.random();
                    e("freeze");
                    e("preventExtensions");
                    e("seal");
                    var g = 0,
                        h = function(l) {
                            this.ea = (g += Math.random() + 1).toString();
                            if (l) {
                                l = _.ba(l);
                                for (var m; !(m = l.next()).done;) m = m.value, this.set(m[0], m[1])
                            }
                        };
                    h.prototype.set = function(l, m) {
                        if (!c(l)) throw Error("e");
                        d(l);
                        if (!ua(l, f)) throw Error("f`" + l);
                        l[f][this.ea] = m;
                        return this
                    };
                    h.prototype.get = function(l) {
                        return c(l) && ua(l, f) ? l[f][this.ea] : void 0
                    };
                    h.prototype.has = function(l) {
                        return c(l) && ua(l, f) && ua(l[f], this.ea)
                    };
                    h.prototype["delete"] =
                        function(l) {
                            return c(l) && ua(l, f) && ua(l[f], this.ea) ? delete l[f][this.ea] : !1
                        };
                    return h
                });
                ma("Map", function(a) {
                    if (function() {
                            if (!a || "function" != typeof a || !a.prototype.entries || "function" != typeof Object.seal) return !1;
                            try {
                                var h = Object.seal({
                                        x: 4
                                    }),
                                    l = new a(_.ba([
                                        [h, "s"]
                                    ]));
                                if ("s" != l.get(h) || 1 != l.size || l.get({
                                        x: 4
                                    }) || l.set({
                                        x: 4
                                    }, "t") != l || 2 != l.size) return !1;
                                var m = l.entries(),
                                    r = m.next();
                                if (r.done || r.value[0] != h || "s" != r.value[1]) return !1;
                                r = m.next();
                                return r.done || 4 != r.value[0].x || "t" != r.value[1] || !m.next().done ? !1 : !0
                            } catch (v) {
                                return !1
                            }
                        }()) return a;
                    sa();
                    var b = new WeakMap,
                        c = function(h) {
                            this.w = {};
                            this.o = f();
                            this.size = 0;
                            if (h) {
                                h = _.ba(h);
                                for (var l; !(l = h.next()).done;) l = l.value, this.set(l[0], l[1])
                            }
                        };
                    c.prototype.set = function(h, l) {
                        h = 0 === h ? 0 : h;
                        var m = d(this, h);
                        m.list || (m.list = this.w[m.id] = []);
                        m.Pa ? m.Pa.value = l : (m.Pa = {
                            next: this.o,
                            Cb: this.o.Cb,
                            head: this.o,
                            key: h,
                            value: l
                        }, m.list.push(m.Pa), this.o.Cb.next = m.Pa, this.o.Cb = m.Pa, this.size++);
                        return this
                    };
                    c.prototype["delete"] = function(h) {
                        h = d(this, h);
                        return h.Pa && h.list ? (h.list.splice(h.index, 1), h.list.length || delete this.w[h.id], h.Pa.Cb.next = h.Pa.next, h.Pa.next.Cb =
                            h.Pa.Cb, h.Pa.head = null, this.size--, !0) : !1
                    };
                    c.prototype.clear = function() {
                        this.w = {};
                        this.o = this.o.Cb = f();
                        this.size = 0
                    };
                    c.prototype.has = function(h) {
                        return !!d(this, h).Pa
                    };
                    c.prototype.get = function(h) {
                        return (h = d(this, h).Pa) && h.value
                    };
                    c.prototype.entries = function() {
                        return e(this, function(h) {
                            return [h.key, h.value]
                        })
                    };
                    c.prototype.keys = function() {
                        return e(this, function(h) {
                            return h.key
                        })
                    };
                    c.prototype.values = function() {
                        return e(this, function(h) {
                            return h.value
                        })
                    };
                    c.prototype.forEach = function(h, l) {
                        for (var m = this.entries(),
                                r; !(r = m.next()).done;) r = r.value, h.call(l, r[1], r[0], this)
                    };
                    c.prototype[Symbol.iterator] = c.prototype.entries;
                    var d = function(h, l) {
                            var m = l && typeof l;
                            "object" == m || "function" == m ? b.has(l) ? m = b.get(l) : (m = "" + ++g, b.set(l, m)) : m = "p_" + l;
                            var r = h.w[m];
                            if (r && ua(h.w, m))
                                for (h = 0; h < r.length; h++) {
                                    var v = r[h];
                                    if (l !== l && v.key !== v.key || l === v.key) return {
                                        id: m,
                                        list: r,
                                        index: h,
                                        Pa: v
                                    }
                                }
                            return {
                                id: m,
                                list: r,
                                index: -1,
                                Pa: void 0
                            }
                        },
                        e = function(h, l) {
                            var m = h.o;
                            return ra(function() {
                                if (m) {
                                    for (; m.head != h.o;) m = m.Cb;
                                    for (; m.next != m.head;) return m =
                                        m.next, {
                                            done: !1,
                                            value: l(m)
                                        };
                                    m = null
                                }
                                return {
                                    done: !0,
                                    value: void 0
                                }
                            })
                        },
                        f = function() {
                            var h = {};
                            return h.Cb = h.next = h.head = h
                        },
                        g = 0;
                    return c
                });
                ma("Set", function(a) {
                    if (function() {
                            if (!a || "function" != typeof a || !a.prototype.entries || "function" != typeof Object.seal) return !1;
                            try {
                                var c = Object.seal({
                                        x: 4
                                    }),
                                    d = new a(_.ba([c]));
                                if (!d.has(c) || 1 != d.size || d.add(c) != d || 1 != d.size || d.add({
                                        x: 4
                                    }) != d || 2 != d.size) return !1;
                                var e = d.entries(),
                                    f = e.next();
                                if (f.done || f.value[0] != c || f.value[1] != c) return !1;
                                f = e.next();
                                return f.done || f.value[0] == c || 4 != f.value[0].x || f.value[1] != f.value[0] ? !1 : e.next().done
                            } catch (g) {
                                return !1
                            }
                        }()) return a;
                    sa();
                    var b = function(c) {
                        this.o = new Map;
                        if (c) {
                            c = _.ba(c);
                            for (var d; !(d = c.next()).done;) this.add(d.value)
                        }
                        this.size = this.o.size
                    };
                    b.prototype.add = function(c) {
                        c = 0 === c ? 0 : c;
                        this.o.set(c, c);
                        this.size = this.o.size;
                        return this
                    };
                    b.prototype["delete"] = function(c) {
                        c = this.o["delete"](c);
                        this.size = this.o.size;
                        return c
                    };
                    b.prototype.clear = function() {
                        this.o.clear();
                        this.size = 0
                    };
                    b.prototype.has = function(c) {
                        return this.o.has(c)
                    };
                    b.prototype.entries = function() {
                        return this.o.entries()
                    };
                    b.prototype.values = function() {
                        return this.o.values()
                    };
                    b.prototype.keys = b.prototype.values;
                    b.prototype[Symbol.iterator] = b.prototype.values;
                    b.prototype.forEach = function(c, d) {
                        var e = this;
                        this.o.forEach(function(f) {
                            return c.call(d, f, f, e)
                        })
                    };
                    return b
                });
                ma("Object.entries", function(a) {
                    return a ? a : function(b) {
                        var c = [],
                            d;
                        for (d in b) ua(b, d) && c.push([d, b[d]]);
                        return c
                    }
                });
                ma("Object.is", function(a) {
                    return a ? a : function(b, c) {
                        return b === c ? 0 !== b || 1 / b === 1 / c : b !== b && c !== c
                    }
                });
                ma("Array.prototype.includes", function(a) {
                    return a ? a : function(b, c) {
                        var d = this;
                        d instanceof String && (d = String(d));
                        var e = d.length;
                        c = c || 0;
                        for (0 > c && (c = Math.max(c + e, 0)); c < e; c++) {
                            var f = d[c];
                            if (f === b || Object.is(f, b)) return !0
                        }
                        return !1
                    }
                });
                ma("String.prototype.includes", function(a) {
                    return a ? a : function(b, c) {
                        return -1 !== na(this, b, "includes").indexOf(b, c || 0)
                    }
                });
                ma("Array.from", function(a) {
                    return a ? a : function(b, c, d) {
                        c = null != c ? c : function(h) {
                            return h
                        };
                        var e = [],
                            f = "undefined" != typeof Symbol && Symbol.iterator && b[Symbol.iterator];
                        if ("function" == typeof f) {
                            b = f.call(b);
                            for (var g = 0; !(f = b.next()).done;) e.push(c.call(d, f.value, g++))
                        } else
                            for (f = b.length, g = 0; g < f; g++) e.push(c.call(d, b[g], g));
                        return e
                    }
                });
                _.va = _.va || {};
                _.n = this || self;
                _.p = function(a, b) {
                    a = a.split(".");
                    b = b || _.n;
                    for (var c = 0; c < a.length; c++)
                        if (b = b[a[c]], null == b) return null;
                    return b
                };
                _.wa = function() {};
                _.xa = function(a) {
                    a.he = void 0;
                    a.V = function() {
                        return a.he ? a.he : a.he = new a
                    }
                };
                _.ya = function(a) {
                    var b = typeof a;
                    if ("object" == b)
                        if (a) {
                            if (a instanceof Array) return "array";
                            if (a instanceof Object) return b;
                            var c = Object.prototype.toString.call(a);
                            if ("[object Window]" == c) return "object";
                            if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice")) return "array";
                            if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("call")) return "function"
                        } else return "null";
                    else if ("function" == b && "undefined" == typeof a.call) return "object";
                    return b
                };
                _.za = function(a) {
                    return "array" == _.ya(a)
                };
                _.Aa = "closure_uid_" + (1E9 * Math.random() >>> 0);
                Ba = function(a, b, c) {
                    return a.call.apply(a.bind, arguments)
                };
                Ca = function(a, b, c) {
                    if (!a) throw Error();
                    if (2 < arguments.length) {
                        var d = Array.prototype.slice.call(arguments, 2);
                        return function() {
                            var e = Array.prototype.slice.call(arguments);
                            Array.prototype.unshift.apply(e, d);
                            return a.apply(b, e)
                        }
                    }
                    return function() {
                        return a.apply(b, arguments)
                    }
                };
                _.q = function(a, b, c) {
                    Function.prototype.bind && -1 != Function.prototype.bind.toString().indexOf("native code") ? _.q = Ba : _.q = Ca;
                    return _.q.apply(null, arguments)
                };
                _.Da = Date.now || function() {
                    return +new Date
                };
                _.t = function(a, b) {
                    a = a.split(".");
                    var c = _.n;
                    a[0] in c || "undefined" == typeof c.execScript || c.execScript("var " + a[0]);
                    for (var d; a.length && (d = a.shift());) a.length || void 0 === b ? c[d] && c[d] !== Object.prototype[d] ? c = c[d] : c = c[d] = {} : c[d] = b
                };
                _.u = function(a, b) {
                    function c() {}
                    c.prototype = b.prototype;
                    a.N = b.prototype;
                    a.prototype = new c;
                    a.prototype.constructor = a
                };
                var Ea = function(a, b, c) {
                    this.B = a;
                    this.w = !1;
                    this.o = b;
                    this.A = c
                };
                Ea.prototype.Oa = function(a) {
                    if (this.w) throw Error("g`" + this.o);
                    try {
                        a.apply(this.B, this.A), this.w = !0
                    } catch (b) {}
                };
                _.w = function() {
                    this.Aa = this.Aa;
                    this.kb = this.kb
                };
                _.w.prototype.Aa = !1;
                _.w.prototype.ga = function() {
                    this.Aa || (this.Aa = !0, this.S())
                };
                _.w.prototype.S = function() {
                    if (this.kb)
                        for (; this.kb.length;) this.kb.shift()()
                };
                var Fa = function(a) {
                    _.w.call(this);
                    this.A = a;
                    this.o = [];
                    this.w = {}
                };
                _.u(Fa, _.w);
                Fa.prototype.B = function(a) {
                    var b = (0, _.q)(function() {
                        this.o.push(new Ea(this.A, a, Array.prototype.slice.call(arguments)))
                    }, this);
                    return this.w[a] = b
                };
                Fa.prototype.Oa = function() {
                    for (var a = this.o.length, b = this.o, c = [], d = 0; d < a; ++d) {
                        var e = b[d].o;
                        a: {
                            var f = this.A;
                            for (var g = e.split("."), h = g.length, l = 0; l < h; ++l)
                                if (f[g[l]]) f = f[g[l]];
                                else {
                                    f = null;
                                    break a
                                } f = f instanceof Function ? f : null
                        }
                        if (f && f != this.w[e]) try {
                            b[d].Oa(f)
                        } catch (m) {} else c.push(b[d])
                    }
                    this.o = c.concat(b.slice(a))
                };
                _.Ga = function(a) {
                    if (Error.captureStackTrace) Error.captureStackTrace(this, _.Ga);
                    else {
                        var b = Error().stack;
                        b && (this.stack = b)
                    }
                    a && (this.message = String(a))
                };
                _.u(_.Ga, Error);
                _.Ga.prototype.name = "CustomError";
                _.Ha = Array.prototype.indexOf ? function(a, b) {
                    return Array.prototype.indexOf.call(a, b, void 0)
                } : function(a, b) {
                    if ("string" === typeof a) return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
                    for (var c = 0; c < a.length; c++)
                        if (c in a && a[c] === b) return c;
                    return -1
                };
                _.Ia = Array.prototype.forEach ? function(a, b, c) {
                    Array.prototype.forEach.call(a, b, c)
                } : function(a, b, c) {
                    for (var d = a.length, e = "string" === typeof a ? a.split("") : a, f = 0; f < d; f++) f in e && b.call(c, e[f], f, a)
                };
                _.Ja = Array.prototype.filter ? function(a, b, c) {
                    return Array.prototype.filter.call(a, b, c)
                } : function(a, b, c) {
                    for (var d = a.length, e = [], f = 0, g = "string" === typeof a ? a.split("") : a, h = 0; h < d; h++)
                        if (h in g) {
                            var l = g[h];
                            b.call(c, l, h, a) && (e[f++] = l)
                        } return e
                };
                _.Ka = Array.prototype.map ? function(a, b, c) {
                    return Array.prototype.map.call(a, b, c)
                } : function(a, b, c) {
                    for (var d = a.length, e = Array(d), f = "string" === typeof a ? a.split("") : a, g = 0; g < d; g++) g in f && (e[g] = b.call(c, f[g], g, a));
                    return e
                };
                _.La = Array.prototype.reduce ? function(a, b, c) {
                    return Array.prototype.reduce.call(a, b, c)
                } : function(a, b, c) {
                    var d = c;
                    (0, _.Ia)(a, function(e, f) {
                        d = b.call(void 0, d, e, f, a)
                    });
                    return d
                };
                _.Ma = Array.prototype.some ? function(a, b) {
                    return Array.prototype.some.call(a, b, void 0)
                } : function(a, b) {
                    for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)
                        if (e in d && b.call(void 0, d[e], e, a)) return !0;
                    return !1
                };
                var Ua;
                _.Na = function() {
                    this.o = {};
                    this.w = {}
                };
                _.xa(_.Na);
                _.Qa = function(a, b) {
                    a.V = function() {
                        return _.Oa(_.Na.V(), b)
                    };
                    a.mj = function() {
                        return _.Pa(_.Na.V(), b)
                    }
                };
                _.Sa = function(a, b) {
                    var c = _.Na.V();
                    if (a in c.o) {
                        if (c.o[a] != b) throw new Ra(a);
                    } else {
                        c.o[a] = b;
                        if (b = c.w[a])
                            for (var d = 0, e = b.length; d < e; d++) b[d].o(c.o, a);
                        delete c.w[a]
                    }
                };
                _.Oa = function(a, b) {
                    if (b in a.o) return a.o[b];
                    throw new Ta(b);
                };
                _.Pa = function(a, b) {
                    return a.o[b] || null
                };
                Ua = function(a) {
                    _.Ga.call(this);
                    this.ea = a
                };
                _.u(Ua, _.Ga);
                var Ra = function(a) {
                    Ua.call(this, a)
                };
                _.u(Ra, Ua);
                var Ta = function(a) {
                    Ua.call(this, a)
                };
                _.u(Ta, Ua);
                var Wa;
                _.Va = "bbh bbr bbs has prm sngw so".split(" ");
                Wa = new Fa(_.n);
                _.Sa("api", Wa);
                for (var Xa = "addExtraLink addLink aomc asmc close cp.c cp.l cp.me cp.ml cp.rc cp.rel ela elc elh gpca gpcr lGC lPWF ldb mls noam paa pc pca pcm pw.clk pw.hvr qfaae qfaas qfaau qfae qfas qfau qfhi qm qs qsi rtl sa setContinueCb snaw sncw som sp spd spn spp sps tsl tst up.aeh up.aop up.dpc up.iic up.nap up.r up.sl up.spd up.tp upel upes upet".split(" ").concat(_.Va), Ya = (0, _.q)(Wa.B, Wa), Za = 0; Za < Xa.length; Za++) {
                    var $a = "gbar." + Xa[Za];
                    null == _.p($a, window) && _.t($a, Ya($a))
                }
                _.t("gbar.up.gpd", function() {
                    return ""
                });
                var ab;
                _.cb = function(a, b) {
                    this.o = a === ab && b || "";
                    this.w = _.bb
                };
                _.cb.prototype.Ab = !0;
                _.cb.prototype.lb = function() {
                    return this.o
                };
                _.db = function(a) {
                    return new _.cb(ab, a)
                };
                _.bb = {};
                ab = {};
                _.eb = _.db("");
                /*

                 Copyright The Closure Library Authors.
                 SPDX-License-Identifier: Apache-2.0
                */
                var gb;
                _.fb = String.prototype.trim ? function(a) {
                    return a.trim()
                } : function(a) {
                    return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]
                };
                _.hb = function(a, b) {
                    var c = 0;
                    a = (0, _.fb)(String(a)).split(".");
                    b = (0, _.fb)(String(b)).split(".");
                    for (var d = Math.max(a.length, b.length), e = 0; 0 == c && e < d; e++) {
                        var f = a[e] || "",
                            g = b[e] || "";
                        do {
                            f = /(\d*)(\D*)(.*)/.exec(f) || ["", "", "", ""];
                            g = /(\d*)(\D*)(.*)/.exec(g) || ["", "", "", ""];
                            if (0 == f[0].length && 0 == g[0].length) break;
                            c = gb(0 == f[1].length ? 0 : parseInt(f[1], 10), 0 == g[1].length ? 0 : parseInt(g[1], 10)) || gb(0 == f[2].length, 0 == g[2].length) || gb(f[2], g[2]);
                            f = f[3];
                            g = g[3]
                        } while (0 == c)
                    }
                    return c
                };
                gb = function(a, b) {
                    return a < b ? -1 : a > b ? 1 : 0
                };
                var jb;
                _.kb = function(a, b) {
                    this.w = a === _.ib && b || "";
                    this.A = jb
                };
                _.kb.prototype.Ab = !0;
                _.kb.prototype.lb = function() {
                    return this.w.toString()
                };
                _.kb.prototype.fe = !0;
                _.kb.prototype.o = function() {
                    return 1
                };
                _.lb = function(a) {
                    if (a instanceof _.kb && a.constructor === _.kb && a.A === jb) return a.w;
                    _.ya(a);
                    return "type_error:SafeUrl"
                };
                _.mb = /^(?:(?:https?|mailto|ftp):|[^:/?#]*(?:[/?#]|$))/i;
                jb = {};
                _.ib = {};
                _.ob = function() {
                    this.o = "";
                    this.w = _.nb
                };
                _.ob.prototype.Ab = !0;
                _.nb = {};
                _.ob.prototype.lb = function() {
                    return this.o
                };
                _.pb = function(a) {
                    var b = new _.ob;
                    b.o = a;
                    return b
                };
                _.qb = _.pb("");
                a: {
                    var sb = _.n.navigator;
                    if (sb) {
                        var tb = sb.userAgent;
                        if (tb) {
                            _.rb = tb;
                            break a
                        }
                    }
                    _.rb = ""
                }
                _.x = function(a) {
                    return -1 != _.rb.indexOf(a)
                };
                var wb;
                _.ub = function() {
                    return _.x("Trident") || _.x("MSIE")
                };
                _.vb = function() {
                    return _.x("Firefox") || _.x("FxiOS")
                };
                wb = function() {
                    return (_.x("Chrome") || _.x("CriOS")) && !_.x("Edge")
                };
                var xb;
                _.yb = function() {
                    this.w = "";
                    this.B = xb;
                    this.A = null
                };
                _.yb.prototype.fe = !0;
                _.yb.prototype.o = function() {
                    return this.A
                };
                _.yb.prototype.Ab = !0;
                _.yb.prototype.lb = function() {
                    return this.w.toString()
                };
                _.zb = function(a) {
                    if (a instanceof _.yb && a.constructor === _.yb && a.B === xb) return a.w;
                    _.ya(a);
                    return "type_error:SafeHtml"
                };
                xb = {};
                _.Ab = function(a, b) {
                    var c = new _.yb;
                    c.w = a;
                    c.A = b;
                    return c
                };
                _.Ab("<!DOCTYPE html>", 0);
                _.Bb = _.Ab("", 0);
                _.Db = _.Ab("<br>", 0);
                _.Eb = function(a) {
                    var b = !1,
                        c;
                    return function() {
                        b || (c = a(), b = !0);
                        return c
                    }
                }(function() {
                    var a = document.createElement("div"),
                        b = document.createElement("div");
                    b.appendChild(document.createElement("div"));
                    a.appendChild(b);
                    b = a.firstChild.firstChild;
                    a.innerHTML = _.zb(_.Bb);
                    return !b.parentElement
                });
                var Fb;
                Fb = function() {
                    return _.x("iPhone") && !_.x("iPod") && !_.x("iPad")
                };
                _.Gb = function() {
                    return Fb() || _.x("iPad") || _.x("iPod")
                };
                _.Hb = function(a) {
                    _.Hb[" "](a);
                    return a
                };
                _.Hb[" "] = _.wa;
                var Jb = function(a, b) {
                    var c = Ib;
                    return Object.prototype.hasOwnProperty.call(c, a) ? c[a] : c[a] = b(a)
                };
                var Qb, Zb, $b, Ib, hc;
                _.Kb = _.x("Opera");
                _.y = _.ub();
                _.Lb = _.x("Edge");
                _.Mb = _.Lb || _.y;
                _.Nb = _.x("Gecko") && !(-1 != _.rb.toLowerCase().indexOf("webkit") && !_.x("Edge")) && !(_.x("Trident") || _.x("MSIE")) && !_.x("Edge");
                _.Ob = -1 != _.rb.toLowerCase().indexOf("webkit") && !_.x("Edge");
                Qb = _.n.navigator || null;
                _.Pb = Qb && Qb.platform || "";
                _.Rb = _.x("Macintosh");
                _.Sb = _.x("Windows");
                _.Tb = _.x("Linux") || _.x("CrOS");
                _.Ub = _.x("Android");
                _.Vb = Fb();
                _.Wb = _.x("iPad");
                _.Xb = _.x("iPod");
                _.Yb = _.Gb();
                Zb = function() {
                    var a = _.n.document;
                    return a ? a.documentMode : void 0
                };
                a: {
                    var ac = "",
                        bc = function() {
                            var a = _.rb;
                            if (_.Nb) return /rv:([^\);]+)(\)|;)/.exec(a);
                            if (_.Lb) return /Edge\/([\d\.]+)/.exec(a);
                            if (_.y) return /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
                            if (_.Ob) return /WebKit\/(\S+)/.exec(a);
                            if (_.Kb) return /(?:Version)[ \/]?(\S+)/.exec(a)
                        }();bc && (ac = bc ? bc[1] : "");
                    if (_.y) {
                        var cc = Zb();
                        if (null != cc && cc > parseFloat(ac)) {
                            $b = String(cc);
                            break a
                        }
                    }
                    $b = ac
                }
                _.dc = $b;
                Ib = {};
                _.ec = function(a) {
                    return Jb(a, function() {
                        return 0 <= _.hb(_.dc, a)
                    })
                };
                _.gc = function(a) {
                    return Number(fc) >= a
                };
                hc = _.n.document && _.y ? Zb() : void 0;
                var fc = hc;
                _.ic = _.vb();
                _.jc = Fb() || _.x("iPod");
                _.kc = _.x("iPad");
                _.lc = _.x("Android") && !(wb() || _.vb() || _.x("Opera") || _.x("Silk"));
                _.mc = wb();
                _.nc = _.x("Safari") && !(wb() || _.x("Coast") || _.x("Opera") || _.x("Edge") || _.x("Edg/") || _.x("OPR") || _.vb() || _.x("Silk") || _.x("Android")) && !_.Gb();
                var oc = {},
                    pc = null;
                _.qc = function(a) {
                    this.o = 0;
                    this.w = a
                };
                _.qc.prototype.next = function() {
                    return this.o < this.w.length ? {
                        done: !1,
                        value: this.w[this.o++]
                    } : {
                        done: !0,
                        value: void 0
                    }
                };
                "undefined" != typeof Symbol && (_.qc.prototype[Symbol.iterator] = function() {
                    return this
                });
                var rc, tc, vc, yc;
                _.z = function() {};
                rc = "function" == typeof Uint8Array;
                _.A = function(a, b, c, d, e, f) {
                    a.o = null;
                    b || (b = c ? [c] : []);
                    a.J = c ? String(c) : void 0;
                    a.C = 0 === c ? -1 : 0;
                    a.A = b;
                    a: {
                        c = a.A.length;b = -1;
                        if (c && (b = c - 1, c = a.A[b], !(null === c || "object" != typeof c || _.za(c) || rc && c instanceof Uint8Array))) {
                            a.D = b - a.C;
                            a.B = c;
                            break a
                        } - 1 < d ? (a.D = Math.max(d, b + 1 - a.C), a.B = null) : a.D = Number.MAX_VALUE
                    }
                    a.H = {};
                    if (e)
                        for (d = 0; d < e.length; d++) b = e[d], b < a.D ? (b += a.C, a.A[b] = a.A[b] || _.sc) : (tc(a), a.B[b] = a.B[b] || _.sc);
                    if (f && f.length)
                        for (d = 0; d < f.length; d++) _.uc(a, f[d])
                };
                _.sc = [];
                tc = function(a) {
                    var b = a.D + a.C;
                    a.A[b] || (a.B = a.A[b] = {})
                };
                _.B = function(a, b) {
                    if (b < a.D) {
                        b += a.C;
                        var c = a.A[b];
                        return c === _.sc ? a.A[b] = [] : c
                    }
                    if (a.B) return c = a.B[b], c === _.sc ? a.B[b] = [] : c
                };
                _.C = function(a, b) {
                    a = _.B(a, b);
                    return null == a ? a : !!a
                };
                _.D = function(a, b, c) {
                    a = _.B(a, b);
                    return null == a ? c : a
                };
                _.E = function(a, b, c) {
                    b < a.D ? a.A[b + a.C] = c : (tc(a), a.B[b] = c);
                    return a
                };
                _.uc = function(a, b) {
                    for (var c, d, e = 0; e < b.length; e++) {
                        var f = b[e],
                            g = _.B(a, f);
                        null != g && (c = f, d = g, _.E(a, f, void 0))
                    }
                    return c ? (_.E(a, c, d), c) : 0
                };
                _.H = function(a, b, c) {
                    a.o || (a.o = {});
                    if (!a.o[c]) {
                        var d = _.B(a, c);
                        d && (a.o[c] = new b(d))
                    }
                    return a.o[c]
                };
                vc = function(a) {
                    if (a.o)
                        for (var b in a.o) {
                            var c = a.o[b];
                            if (_.za(c))
                                for (var d = 0; d < c.length; d++) c[d] && c[d].Na();
                            else c && c.Na()
                        }
                };
                _.z.prototype.Na = function() {
                    vc(this);
                    return this.A
                };
                _.z.prototype.w = rc ? function() {
                    var a = Uint8Array.prototype.toJSON;
                    Uint8Array.prototype.toJSON = function() {
                        var b;
                        void 0 === b && (b = 0);
                        if (!pc) {
                            pc = {};
                            for (var c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789".split(""), d = ["+/=", "+/", "-_=", "-_.", "-_"], e = 0; 5 > e; e++) {
                                var f = c.concat(d[e].split(""));
                                oc[e] = f;
                                for (var g = 0; g < f.length; g++) {
                                    var h = f[g];
                                    void 0 === pc[h] && (pc[h] = g)
                                }
                            }
                        }
                        b = oc[b];
                        c = [];
                        for (d = 0; d < this.length; d += 3) {
                            var l = this[d],
                                m = (e = d + 1 < this.length) ? this[d + 1] : 0;
                            h = (f = d + 2 < this.length) ? this[d + 2] : 0;
                            g =
                                l >> 2;
                            l = (l & 3) << 4 | m >> 4;
                            m = (m & 15) << 2 | h >> 6;
                            h &= 63;
                            f || (h = 64, e || (m = 64));
                            c.push(b[g], b[l], b[m] || "", b[h] || "")
                        }
                        return c.join("")
                    };
                    try {
                        return JSON.stringify(this.A && this.Na(), wc)
                    } finally {
                        Uint8Array.prototype.toJSON = a
                    }
                } : function() {
                    return JSON.stringify(this.A && this.Na(), wc)
                };
                var wc = function(a, b) {
                    return "number" !== typeof b || !isNaN(b) && Infinity !== b && -Infinity !== b ? b : String(b)
                };
                _.z.prototype.toString = function() {
                    vc(this);
                    return this.A.toString()
                };
                _.z.prototype.clone = function() {
                    return _.xc(this)
                };
                _.xc = function(a) {
                    return new a.constructor(yc(a.Na()))
                };
                yc = function(a) {
                    if (_.za(a)) {
                        for (var b = Array(a.length), c = 0; c < a.length; c++) {
                            var d = a[c];
                            null != d && (b[c] = "object" == typeof d ? yc(d) : d)
                        }
                        return b
                    }
                    if (rc && a instanceof Uint8Array) return new Uint8Array(a);
                    b = {};
                    for (c in a) d = a[c], null != d && (b[c] = "object" == typeof d ? yc(d) : d);
                    return b
                };
                _.zc = function(a) {
                    _.A(this, a, 0, -1, null, null)
                };
                _.u(_.zc, _.z);
                _.I = function(a, b) {
                    return null != a ? !!a : !!b
                };
                _.J = function(a, b) {
                    void 0 == b && (b = "");
                    return null != a ? a : b
                };
                _.L = function(a, b) {
                    void 0 == b && (b = 0);
                    return null != a ? a : b
                };
                var Ac = function(a) {
                    _.A(this, a, 0, -1, null, null)
                };
                _.u(Ac, _.z);
                var Bc = function(a) {
                    _.A(this, a, 0, -1, null, null)
                };
                _.u(Bc, _.z);
                var Cc = new Bc(window.gbar && window.gbar._CONFIG ? window.gbar._CONFIG[0] : [
                        [, , , , , , , []],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        [],
                        []
                    ]),
                    Dc;
                Dc = _.C(Cc, 3);
                _.Ec = _.I(Dc);
                _.Fc = function() {};
                _.t("gbar_._DumpException", function(a) {
                    _.Fc(a)
                });
                var Gc = function() {
                    _.w.call(this);
                    this.o = Cc
                };
                _.u(Gc, _.w);
                _.Qa(Gc, "cs");
                _.M = function() {
                    return Gc.V().o
                };
                _.Hc = function() {
                    return _.H(_.M(), Ac, 1) || new Ac
                };
                _.Sa("cs", new Gc);
                var Ic = new function() {
                    this.o = _.H(_.Hc(), _.zc, 8) || new _.zc
                };
                _.t("gbar.bv", {
                    n: _.L(_.B(Ic.o, 2)),
                    r: _.J(_.B(Ic.o, 4)),
                    f: _.J(_.B(Ic.o, 3)),
                    e: _.J(_.B(Ic.o, 5)),
                    m: _.L(_.D(Ic.o, 1, 1), 1)
                });
                _.t("gbar.kn", function() {
                    return !0
                });
                _.t("gbar.sb", function() {
                    return !1
                });
                _.Jc = !_.y || _.gc(9);
                _.Kc = !_.Nb && !_.y || _.y && _.gc(9) || _.Nb && _.ec("1.9.1");
                _.Lc = _.y && !_.ec("9");
                _.Mc = _.y || _.Kb || _.Ob;

            } catch (e) {
                _._DumpException(e)
            }
            try {
                _.t("gbar.elr", function() {
                    return {
                        es: {
                            f: 152,
                            h: 60,
                            m: 30
                        },
                        mo: "md",
                        vh: window.innerHeight || 0,
                        vw: window.innerWidth || 0
                    }
                });

            } catch (e) {
                _._DumpException(e)
            }
        })(this.gbar_);
        // Google Inc.
    </script>
    <style>
        @-webkit-keyframes gb__a {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }
        }

        @keyframes gb__a {
            0% {
                opacity: 0
            }

            50% {
                opacity: 1
            }
        }

        .gb_dd {
            display: inline-block;
            padding: 0 0 0 15px;
            vertical-align: middle
        }

        .gb_dd:first-child,
        #gbsfw:first-child+.gb_dd {
            padding-left: 0
        }

        .gb_Ff {
            position: relative
        }

        .gb_D {
            display: inline-block;
            outline: none;
            vertical-align: middle;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            height: 30px;
            width: 30px;
            color: #000;
            cursor: pointer;
            text-decoration: none
        }

        #gb#gb a.gb_D {
            color: #000;
            cursor: pointer;
            text-decoration: none
        }

        .gb_1a {
            border-color: transparent;
            border-bottom-color: #fff;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 6.5px;
            top: 37px;
            z-index: 1;
            height: 0;
            width: 0;
            -webkit-animation: gb__a .2s;
            animation: gb__a .2s
        }

        .gb_2a {
            border-color: transparent;
            border-style: dashed dashed solid;
            border-width: 0 8.5px 8.5px;
            display: none;
            position: absolute;
            left: 6.5px;
            z-index: 1;
            height: 0;
            width: 0;
            -webkit-animation: gb__a .2s;
            animation: gb__a .2s;
            border-bottom-color: #ccc;
            border-bottom-color: rgba(0, 0, 0, .2);
            top: 36px
        }

        x:-o-prefocus,
        div.gb_2a {
            border-bottom-color: #ccc
        }

        .gb_F {
            background: #fff;
            border: 1px solid #ccc;
            border-color: rgba(0, 0, 0, .2);
            color: #000;
            -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            box-shadow: 0 2px 10px rgba(0, 0, 0, .2);
            display: none;
            outline: none;
            overflow: hidden;
            position: absolute;
            right: 0;
            top: 44px;
            -webkit-animation: gb__a .2s;
            animation: gb__a .2s;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -webkit-user-select: text
        }

        .gb_dd.gb_na .gb_1a,
        .gb_dd.gb_na .gb_2a,
        .gb_dd.gb_na .gb_F,
        .gb_na.gb_F {
            display: block
        }

        .gb_dd.gb_na.gb_Hf .gb_1a,
        .gb_dd.gb_na.gb_Hf .gb_2a {
            display: none
        }

        .gb_If {
            position: absolute;
            right: 0;
            top: 44px;
            z-index: -1
        }

        .gb_La .gb_1a,
        .gb_La .gb_2a,
        .gb_La .gb_F {
            margin-top: -10px
        }

        .gb_a-a {
            width: 100%;
            height: 100%;
            border: 0;
            overflow: hidden
        }

        .gb_a.gb_b-b-c {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #fff
        }

        .gb_a.gb_b-b {
            position: absolute;
            top: 0;
            left: 0;
            background-color: #fff;
            border: 1px solid #acacac;
            width: auto;
            padding: 0;
            z-index: 1001;
            overflow: auto;
            -webkit-box-shadow: rgba(0, 0, 0, .2) 0 4px 16px;
            -webkit-box-shadow: rgba(0, 0, 0, .2) 0 4px 16px;
            box-shadow: rgba(0, 0, 0, .2) 0 4px 16px;
            -webkit-transition: top .5s ease-in-out;
            -webkit-transition: top .5s ease-in-out;
            transition: top .5s ease-in-out
        }

        .gb_a-d {
            position: absolute;
            z-index: 1002
        }

        .gb_a.gb_b-b-e {
            font-size: 0;
            padding: 0
        }

        .gb_a.gb_b-b-f {
            height: 0;
            margin: 0
        }

        .gb_a.gb_b-b-f-g,
        .gb_a.gb_b-b-h {
            display: none
        }

        .gb_Ia {
            -webkit-background-size: 32px 32px;
            background-size: 32px 32px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            display: block;
            margin: -1px;
            overflow: hidden;
            position: relative;
            height: 32px;
            width: 32px;
            z-index: 0
        }

        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gb_Ia::before {
                display: inline-block;
                -webkit-transform: scale(.5);
                transform: scale(.5);
                -webkit-transform-origin: left 0;
                transform-origin: left 0
            }

            .gb_Ja::before {
                display: inline-block;
                -webkit-transform: scale(.5);
                transform: scale(.5);
                -webkit-transform-origin: left 0;
                transform-origin: left 0
            }

            .gb_l .gb_Ja::before {
                -webkit-transform: scale(0.416666667);
                transform: scale(0.416666667)
            }
        }

        .gb_Ia:hover,
        .gb_Ia:focus {
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }

        .gb_Ia:active {
            -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15)
        }

        .gb_Ia:active::after {
            background: rgba(0, 0, 0, .1);
            -webkit-border-radius: 50%;
            border-radius: 50%;
            content: '';
            display: block;
            height: 100%
        }

        .gb_Ka {
            cursor: pointer;
            line-height: 30px;
            min-width: 30px;
            opacity: .75;
            overflow: hidden;
            vertical-align: middle;
            text-overflow: ellipsis
        }

        .gb_D.gb_Ka {
            width: auto
        }

        .gb_Ka:hover,
        .gb_Ka:focus {
            opacity: .85
        }

        .gb_La .gb_Ka,
        .gb_La .gb_Ma {
            line-height: 26px
        }

        #gb#gb.gb_La a.gb_Ka,
        .gb_La .gb_Ma {
            font-size: 11px;
            height: auto
        }

        .gb_Na {
            border-top: 4px solid #000;
            border-left: 4px dashed transparent;
            border-right: 4px dashed transparent;
            display: inline-block;
            margin-left: 6px;
            opacity: .75;
            vertical-align: middle
        }

        .gb_Oa:hover .gb_Na {
            opacity: .85
        }

        .gb_ia>.gb_Pa {
            padding: 3px 3px 3px 4px
        }

        .gb_Qa.gb_Ha {
            color: #fff
        }

        .gb_j .gb_Ka,
        .gb_j .gb_Na {
            opacity: 1
        }

        #gb#gb.gb_j.gb_j a.gb_Ka,
        #gb#gb .gb_j.gb_j a.gb_Ka {
            color: #fff
        }

        .gb_j.gb_j .gb_Na {
            border-top-color: #fff;
            opacity: 1
        }

        .gb_E .gb_Ia:hover,
        .gb_j .gb_Ia:hover,
        .gb_E .gb_Ia:focus,
        .gb_j .gb_Ia:focus {
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15), 0 1px 2px rgba(0, 0, 0, .2)
        }

        .gb_Ra .gb_Pa,
        .gb_Sa .gb_Pa {
            position: absolute;
            right: 1px
        }

        .gb_Pa.gb_i,
        .gb_Ta.gb_i,
        .gb_Oa.gb_i {
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-flex: 0 1 main-size;
            flex: 0 1 main-size
        }

        .gb_Ua.gb_Va .gb_Ka {
            width: 30px !important
        }

        .gb_Wa.gb_Ha {
            display: none
        }

        .gb_Xa {
            height: 40px;
            position: absolute;
            right: -5px;
            top: -5px;
            width: 40px
        }

        .gb_Za .gb_Xa,
        .gb_0a .gb_Xa {
            right: 0;
            top: 0
        }

        .gb_Ka~.gb_1a,
        .gb_Ka~.gb_2a {
            left: auto;
            right: 6.5px
        }

        .gb_3a {
            outline: none;
            -webkit-transform: translateZ(0);
            transform: translateZ(0)
        }

        .gb_l.gb_3a {
            -webkit-border-radius: 8px;
            border-radius: 8px;
            margin-left: 12px
        }

        @media screen and (min-width:361px) {
            .gb_l.gb_3a {
                width: 354px
            }
        }

        @media screen and (max-width:361px) {
            .gb_l.gb_3a {
                width: calc(100vw - 12px*2)
            }
        }

        .gb_l.gb_3a.gb_4a {
            max-height: -webkit-calc(100vh - 44px - 100px);
            max-height: calc(100vh - 44px - 100px)
        }

        .gb_l.gb_3a.gb_5a {
            max-height: -webkit-calc(100vh - 44px - 15px - 100px);
            max-height: calc(100vh - 44px - 15px - 100px)
        }

        .gb_l.gb_3a.gb_6a {
            background-color: #2d2e30
        }

        .gb_7a.gb_8a {
            color: #5f6368;
            font: 400 12px/16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif
        }

        .gb_9a.gb_7a.gb_8a {
            background-color: rgba(138, 180, 248, 0.24);
            color: #e8eaed
        }

        .gb_ab,
        #gb a.gb_ab.gb_ab,
        .gb_bb a,
        #gb .gb_bb.gb_bb a {
            color: #36c;
            text-decoration: none
        }

        .gb_7a>.gb_ab,
        #gb .gb_7a>a.gb_ab.gb_ab {
            color: #0070ff;
            font: inherit;
            font-weight: 500;
            outline: 0
        }

        .gb_9a.gb_7a>.gb_ab,
        #gb .gb_9a.gb_7a>a.gb_ab.gb_ab {
            color: #8ab4f8
        }

        .gb_ab:active,
        #gb a.gb_ab.gb_ab:active,
        .gb_ab:hover,
        #gb a.gb_ab.gb_ab:hover,
        .gb_bb a:active,
        #gb .gb_bb a:active,
        .gb_bb a:hover,
        #gb .gb_bb a:hover,
        #gb .gb_7a>a.gb_ab.gb_ab:focus {
            text-decoration: underline
        }

        .gb_cb {
            margin: 20px;
            white-space: nowrap
        }

        .gb_l>.gb_cb {
            margin: 20px 33px
        }

        .gb_db,
        .gb_eb {
            display: inline-block;
            vertical-align: top
        }

        .gb_db.gb_fb,
        .gb_eb.gb_gb {
            vertical-align: middle
        }

        .gb_l .gb_db,
        .gb_l .gb_eb {
            display: block;
            vertical-align: top;
            text-align: center
        }

        .gb_fb {
            cursor: default
        }

        .gb_l .gb_db {
            margin-bottom: 10px;
            position: relative;
            height: 86px;
            width: 86px
        }

        .gb_hb {
            -webkit-border-radius: 50%;
            border-radius: 50%;
            overflow: hidden;
            -webkit-transform: translateZ(0)
        }

        .gb_Ja {
            -webkit-background-size: 96px 96px;
            background-size: 96px 96px;
            border: none;
            vertical-align: top;
            height: 96px;
            width: 96px
        }

        .gb_ib {
            margin-bottom: 11px;
            margin-top: 4px
        }

        @media screen and (min-width:361px) {

            .gb_l .gb_db,
            .gb_ib {
                margin-left: 101px
            }
        }

        @media screen and (max-width:361px) {

            .gb_l .gb_db,
            .gb_ib {
                margin-left: calc((calc(100vw - 12px*2) - 33px*2 - 86px)/2)
            }
        }

        .gb_jb.gb_jb {
            fill: #1a73e8
        }

        .gb_6a .gb_jb {
            fill: #8ab4f8
        }

        .gb_l .gb_Ja {
            -webkit-background-size: 80px 80px;
            background-size: 80px 80px;
            height: 80px;
            width: 80px
        }

        .gb_l .gb_kb.gb_Ja {
            -webkit-background-size: 76px 76px;
            background-size: 76px 76px;
            position: relative;
            left: 2px;
            top: 2px;
            height: 76px;
            width: 76px
        }

        .gb_l .gb_lb {
            background: #fff;
            bottom: 0;
            position: absolute;
            right: 0;
            overflow: visible;
            height: 32px;
            width: 32px
        }

        .gb_l.gb_6a .gb_lb {
            background: #2d2e30
        }

        .gb_mb {
            bottom: 0;
            -webkit-box-shadow: 0 1px 1px 0 rgba(65, 69, 73, 0.3), 0 1px 3px 1px rgba(65, 69, 73, 0.15);
            box-shadow: 0 1px 1px 0 rgba(65, 69, 73, 0.3), 0 1px 3px 1px rgba(65, 69, 73, 0.15);
            margin: 0 2.5px 3px;
            outline: 0;
            position: absolute;
            right: 0;
            height: 26px;
            width: 26px
        }

        .gb_mb:hover {
            background-color: #f8faff
        }

        .gb_mb:focus,
        .gb_mb:hover:focus {
            background-color: #f4f8ff
        }

        .gb_mb:active,
        .gb_mb:focus:active {
            background-color: #f4f8ff;
            -webkit-box-shadow: 0 1px 3px 0 rgba(60, 64, 67, 0.3), 0 4px 8px 3px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 3px 0 rgba(60, 64, 67, 0.3), 0 4px 8px 3px rgba(60, 64, 67, 0.15)
        }

        .gb_mb:hover>svg.gb_nb,
        .gb_mb:focus>svg.gb_nb,
        .gb_mb:active>svg.gb_nb {
            fill: #1a73e8
        }

        .gb_ob {
            font-weight: bold;
            margin: -4px 0 1px 0;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_l .gb_ob {
            color: #202124;
            font: 500 16px/22px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: .29px;
            margin: 0;
            text-align: center;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_l.gb_6a .gb_ob {
            color: #e8eaed
        }

        .gb_qb {
            color: #666;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_l .gb_qb {
            color: #5f6368;
            font: 400 14px/19px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
            text-align: center;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_l.gb_6a .gb_qb {
            color: #e8eaed
        }

        .gb_gb>.gb_qb {
            color: #000;
            font-weight: bold;
            margin: -4px 0 1px 0;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_rb {
            color: #666;
            font-style: italic;
            font-weight: 500;
            margin: 4px 0;
            overflow: hidden
        }

        .gb_sb {
            color: #5f6368;
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 19px;
            margin-top: 4px;
            text-align: center
        }

        .gb_6a .gb_sb {
            color: #9aa0a6
        }

        .gb_tb {
            font-weight: 500
        }

        .gb_ub.gb_ub {
            background-color: #ffffff;
            border: 1px solid #dadce0;
            -webkit-border-radius: 100px;
            border-radius: 100px;
            color: #3c4043;
            display: inline-block;
            font: 500 14px/16px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: .25px;
            margin: 16px 0 0;
            max-width: 254px;
            outline: 0;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_6a .gb_ub.gb_ub {
            background-color: #2d2e30;
            border: 1px solid #5f6368;
            color: #e8eaed
        }

        .gb_ub:hover {
            background-color: #f7f8f8
        }

        .gb_ub:focus,
        .gb_ub:hover:focus {
            background-color: #f4f4f4
        }

        .gb_ub:active,
        .gb_ub:focus:active {
            background-color: #e8e8e9;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
        }

        .gb_vb {
            color: #5f6368;
            margin: 14px 33px;
            text-align: center;
            white-space: normal
        }

        .gb_6a .gb_vb {
            color: #e8eaed
        }

        .gb_wb.gb_wb {
            -webkit-border-radius: 4px;
            border-radius: 4px;
            color: #5f6368;
            display: inline-block;
            font: 400 12px/16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            outline: 0;
            padding: 4px 8px;
            text-decoration: none;
            text-align: center;
            white-space: normal
        }

        .gb_6a .gb_wb.gb_wb {
            border: 1px solid transparent;
            color: #e8eaed
        }

        .gb_wb:hover {
            background-color: #f7f8f8
        }

        .gb_wb:focus,
        .gb_wb:hover:focus {
            background-color: #f4f4f4
        }

        .gb_wb:active,
        .gb_wb:active:focus {
            background-color: #e8e8e9
        }

        .gb_eb .gb_3 {
            background: #4d90fe;
            border-color: #3079ed;
            font-weight: bold;
            margin: 10px 0 0 0;
            color: #fff
        }

        #gb .gb_eb a.gb_3.gb_3 {
            color: #fff
        }

        .gb_eb .gb_3:hover {
            background: #357ae8;
            border-color: #2f5bb7
        }

        .gb_xb .gb_1a {
            border-bottom-color: #fef9db
        }

        .gb_8a {
            background: #fef9db;
            font-size: 11px;
            padding: 10px 20px;
            white-space: normal
        }

        .gb_7a.gb_8a {
            background: #e8f0fe;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            margin: 4px;
            padding: 4px 29px;
            text-align: center
        }

        .gb_7a.gb_8a>#gbpbt>span {
            white-space: nowrap;
            font-weight: 500
        }

        .gb_8a b,
        .gb_ab {
            white-space: nowrap
        }

        .gb_yb.gb_yb {
            background-color: #ffffff;
            color: #3c4043;
            display: table;
            font: 500 14px/16px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: .25px;
            outline: 0;
            padding: 14px 41px;
            text-align: center;
            text-decoration: none;
            width: 100%
        }

        .gb_6a .gb_yb.gb_yb {
            background-color: #2d2e30;
            border: 1px solid transparent;
            color: #e8eaed;
            width: 270px
        }

        .gb_yb:hover {
            background-color: #f7f8f8
        }

        .gb_yb:focus,
        .gb_yb:hover:focus {
            background-color: #f4f4f4
        }

        .gb_yb:active,
        .gb_yb:focus:active {
            background-color: #e8e8e9
        }

        .gb_zb {
            border: none;
            display: table-cell;
            vertical-align: middle;
            height: 20px;
            width: 20px
        }

        .gb_mb>svg.gb_nb,
        .gb_zb>svg.gb_Ab,
        .gb_Bb>svg.gb_Cb {
            color: #5f6368;
            fill: currentColor
        }

        .gb_6a .gb_Bb>svg.gb_Cb {
            fill: #9aa0a6
        }

        .gb_6a .gb_mb {
            border: 1px solid transparent;
            -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.3), 0 4px 8px 3px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.3), 0 4px 8px 3px rgba(0, 0, 0, 0.15)
        }

        .gb_6a .gb_mb>svg.gb_nb,
        .gb_6a .gb_zb>svg.gb_Ab {
            color: #e8eaed;
            fill: currentColor
        }

        .gb_6a .gb_mb:hover>svg.gb_nb,
        .gb_6a .gb_mb:focus>svg.gb_nb,
        .gb_6a .gb_mb:focus:hover>svg.gb_nb,
        .gb_6a .gb_mb:active>svg.gb_nb {
            fill: #8ab4f8
        }

        .gb_6a .gb_mb:hover {
            background-color: #353639;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3), 0 6px 10px 4px rgba(0, 0, 0, 0.15);
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3), 0 6px 10px 4px rgba(0, 0, 0, 0.15)
        }

        .gb_6a .gb_mb:focus,
        .gb_6a .gb_mb:focus:hover {
            background-color: #353639;
            border: 1px solid #5f6368;
            -webkit-box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3), 0 6px 10px 4px rgba(0, 0, 0, 0.15);
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.3), 0 6px 10px 4px rgba(0, 0, 0, 0.15)
        }

        .gb_6a .gb_mb:active {
            background-color: rgba(255, 255, 255, 0.12);
            -webkit-box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.3), 0 8px 12px 6px rgba(0, 0, 0, 0.15);
            box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.3), 0 8px 12px 6px rgba(0, 0, 0, 0.15)
        }

        .gb_Db {
            display: table-cell;
            padding: 0 74px 0 16px;
            text-align: left;
            vertical-align: middle;
            white-space: normal
        }

        .gb_Eb {
            border-bottom: 1px solid #e8eaed;
            border-top: 1px solid #e8eaed;
            padding: 0 17px;
            text-align: center
        }

        .gb_6a .gb_Eb {
            border-bottom: 1px solid #5f6368;
            border-top: 1px solid #5f6368
        }

        .gb_Fb.gb_Fb,
        .gb_Hb.gb_Hb {
            background-color: #ffffff;
            border: 1px solid #dadce0;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            display: inline-block;
            font: 500 14px/16px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: .15px;
            margin: 16px;
            outline: 0;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            white-space: normal
        }

        .gb_Fb.gb_Fb {
            color: #3c4043
        }

        .gb_Hb.gb_Hb {
            color: #1a73e8
        }

        .gb_6a .gb_Hb.gb_Hb,
        .gb_6a .gb_Fb.gb_Fb {
            background-color: #2d2e30;
            border: 1px solid #5f6368;
            color: #e8eaed
        }

        .gb_Fb:hover {
            background-color: #f7f8f8
        }

        .gb_Fb:focus,
        .gb_Fb:hover:focus {
            background-color: #f4f4f4
        }

        .gb_Fb:active,
        .gb_Fb:active:focus {
            background-color: #e8e8e9;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
        }

        .gb_Hb:hover {
            background-color: #f8fbff;
            border-color: #cce0fc
        }

        .gb_Hb:focus,
        .gb_Hb:hover:focus {
            background-color: #f4f8ff;
            border-color: #c9ddfc
        }

        .gb_Hb:active,
        .gb_Hb:active:focus {
            background-color: #ecf3fe;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
        }

        .gb_Lb {
            border-top: 1px solid #e8eaed
        }

        .gb_6a .gb_Lb {
            border-top: 1px solid #5f6368
        }

        .gb_l.gb_3a {
            overflow-y: auto;
            overflow-x: hidden
        }

        .gb_Ob {
            border-top: 1px solid #ccc;
            border-top-color: rgba(0, 0, 0, .2);
            display: block;
            outline-offset: -2px;
            padding: 10px 20px;
            position: relative;
            white-space: nowrap
        }

        .gb_Pb>.gb_Ob {
            border: none;
            cursor: pointer;
            height: 35px;
            outline: 0;
            padding: 12px 33px 13px
        }

        .gb_Qb .gb_Ob:focus .gb_Rb {
            outline: 1px dotted #fff
        }

        .gb_Ob:hover {
            background: #eee
        }

        .gb_Pb>.gb_Ob:hover {
            background-color: #f7f8f8
        }

        .gb_Pb>.gb_Ob:focus,
        .gb_Pb>.gb_Ob:hover:focus {
            background-color: #f4f4f4
        }

        .gb_Pb>.gb_Ob:active,
        .gb_Pb>.gb_Ob:focus:active {
            background-color: #e8e8e9
        }

        .gb_6a .gb_Sb:hover,
        .gb_6a .gb_yb:hover,
        .gb_6a .gb_wb:hover,
        .gb_6a .gb_Pb>.gb_Ob:hover {
            background-color: rgba(255, 255, 255, 0.04);
            border: 1px solid transparent
        }

        .gb_6a .gb_Fb:hover,
        .gb_6a .gb_ub:hover {
            background-color: rgba(232, 234, 237, 0.04);
            border: 1px solid #5f6368
        }

        .gb_6a .gb_Sb:focus,
        .gb_6a .gb_Sb:hover:focus,
        .gb_6a .gb_ub:focus,
        .gb_6a .gb_ub:hover:focus,
        .gb_6a .gb_yb:focus,
        .gb_6a .gb_yb:hover:focus,
        .gb_6a .gb_Fb:focus,
        .gb_6a .gb_Fb:hover:focus,
        .gb_6a .gb_Pb>.gb_Ob:focus,
        .gb_6a .gb_Pb>.gb_Ob:hover:focus {
            background-color: rgba(232, 234, 237, 0.12);
            border: 1px solid #e8eaed
        }

        .gb_6a .gb_wb:focus,
        .gb_6a .gb_wb:hover:focus {
            background-color: rgba(232, 234, 237, 0.12)
        }

        .gb_6a .gb_Sb:active,
        .gb_6a .gb_Sb:focus:active,
        .gb_6a .gb_yb:active,
        .gb_6a .gb_yb:focus:active,
        .gb_6a .gb_wb:active,
        .gb_6a .gb_wb:active:focus,
        .gb_6a .gb_Pb>.gb_Ob:active,
        .gb_6a .gb_Pb>.gb_Ob:focus:active {
            background-color: rgba(232, 234, 237, 0.1);
            border: 1px solid transparent
        }

        .gb_Tb {
            overflow-x: hidden
        }

        .gb_6a .gb_Pb>.gb_Ob {
            border: 1px solid transparent
        }

        .gb_6a .gb_Fb:active,
        .gb_6a .gb_Fb:active:focus,
        .gb_6a .gb_ub:active,
        .gb_6a .gb_ub:focus:active {
            background-color: rgba(232, 234, 237, 0.1);
            border: 1px solid #5f6368
        }

        .gb_Ob[selected="true"] {
            overflow: hidden
        }

        .gb_Pb>.gb_Ob[selected="true"] {
            background-color: rgba(60, 64, 67, 0.1)
        }

        .gb_6a .gb_Pb>.gb_Ob[selected="true"] {
            background-color: rgba(255, 255, 255, 0.12)
        }

        .gb_Ob[selected="true"]>.gb_Ub {
            display: block;
            position: absolute;
            z-index: 2
        }

        .gb_Ub::-moz-focus-inner {
            border: 0
        }

        .gb_Ub {
            background-color: transparent;
            border: none;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .25px;
            line-height: 16px;
            margin-bottom: 1px;
            min-height: 36px;
            min-width: 86px;
            outline: none;
            padding: 10px 24px;
            text-align: center;
            text-decoration: none;
            top: 16px;
            width: auto
        }

        .gb_Vb.gb_Wb {
            background-color: #1a73e8;
            color: #fff;
            margin-left: 0;
            margin-right: 12px;
            margin-top: 14px
        }

        .gb_6a .gb_Vb.gb_Wb {
            background-color: #8ab4f8;
            color: #2d2e30
        }

        .gb_Vb.gb_Xb {
            background-color: #ffffff;
            border: 1px solid #dadce0;
            color: #3c4043;
            margin-left: 0;
            margin-right: 0;
            margin-top: 11px
        }

        .gb_6a .gb_Vb.gb_Xb {
            background-color: rgba(218, 220, 224, 0.01);
            border: 1px solid #5f6368;
            color: #e8eaed
        }

        .gb_Ub.gb_Xb:hover {
            background-color: #f7f8f8
        }

        .gb_Ub.gb_Xb:focus,
        .gb_Ub.gb_Xb:hover:focus {
            background-color: #f4f4f4
        }

        .gb_Ub.gb_Xb:active {
            background-color: #f4f4f4;
            border: 1px solid #5f6368;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
        }

        .gb_Ub.gb_Wb:hover {
            background-color: #2b7de9;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_Ub.gb_Wb:focus,
        .gb_Ub.gb_Wb:hover:focus {
            background-color: #5094ed;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_Ub.gb_Wb:active {
            background-color: #63a0ef;
            -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
            box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
        }

        .gb_6a .gb_Ub.gb_Xb:hover {
            background-color: rgba(232, 234, 237, 0.04)
        }

        .gb_6a .gb_Ub.gb_Xb:focus,
        .gb_6a .gb_Ub.gb_Xb:hover:focus {
            background-color: rgba(232, 234, 237, 0.12);
            border: 1px solid #e8eaed
        }

        .gb_6a .gb_Ub.gb_Xb:active,
        .gb_6a .gb_Ub.gb_Xb:active:focus {
            background-color: rgba(232, 234, 237, 0.1);
            border: 1px solid #5f6368;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15)
        }

        .gb_6a .gb_Ub.gb_Wb:hover {
            background-color: #93b9f8;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 1px 3px 1px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 1px 3px 1px rgba(0, 0, 0, 0.15)
        }

        .gb_6a .gb_Ub.gb_Wb:focus,
        .gb_6a .gb_Ub.gb_Wb:hover:focus {
            background-color: #a5c5f9
        }

        .gb_6a .gb_Ub.gb_Wb:active {
            background-color: #8ab4f8;
            -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3), 0 2px 6px 2px rgba(0, 0, 0, 0.15)
        }

        .gb_Ob[selected="true"]>.gb_Ub:focus {
            background-color: rgba(0, 0, 0, .24);
            -webkit-border-radius: 2px;
            border-radius: 2px;
            outline: 0
        }

        .gb_Ob[selected="true"]>.gb_Ub:hover,
        .gb_Ob[selected="true"]>.gb_Ub:focus:hover {
            background-color: #565656;
            -webkit-border-radius: 2px;
            border-radius: 2px
        }

        .gb_Ob[selected="true"]>.gb_Ub:active {
            -webkit-border-radius: 2px;
            border-radius: 2px;
            background-color: #212121
        }

        .gb_Xb {
            left: 0;
            margin-left: 5%
        }

        .gb_Wb {
            margin-right: 5%;
            right: 0
        }

        .gb_Ob:first-child,
        .gb_Zb:first-child+.gb_Ob {
            border-top: 0
        }

        .gb_6a .gb_Ob:first-child,
        .gb_6a .gb_Zb:first-child+.gb_Ob {
            border-top: 1px solid transparent
        }

        .gb_6a .gb_Ob:first-child:focus:hover,
        .gb_6a .gb_Zb:first-child+.gb_Ob:focus:hover,
        .gb_6a .gb_Ob:first-child:focus,
        .gb_6a .gb_Zb:first-child+.gb_Ob:focus {
            border-top: 1px solid #e8eaed
        }

        .gb_6a .gb_Ob:first-child:active,
        .gb_6a .gb_Zb:first-child+.gb_Ob:active,
        .gb_6a .gb_Ob:first-child:active:focus,
        .gb_6a .gb_Zb:first-child+.gb_Ob:active:focus {
            border-top: 1px solid transparent
        }

        .gb_Zb {
            display: none
        }

        .gb_Pb>.gb_Ob.gb_0b {
            cursor: default;
            opacity: .38
        }

        .gb_Pb>.gb_Ob.gb_0b:hover,
        .gb_Pb>.gb_Ob.gb_0b:focus,
        .gb_Pb>.gb_Ob.gb_0b:active {
            background-color: #fff
        }

        .gb_1b {
            border: none;
            vertical-align: top;
            height: 32px;
            width: 32px
        }

        .gb_Rb {
            display: inline-block;
            margin: 0 0 0 12px
        }

        @media screen and (min-width:361px) {
            .gb_l .gb_Rb {
                width: 244px
            }
        }

        @media screen and (max-width:361px) {
            .gb_l .gb_Rb {
                width: calc(calc(100vw - 12px*2) - 12px - 32px - 33px*2)
            }
        }

        .gb_3a.gb_ta .gb_Rb {
            max-width: 222px
        }

        .gb_2b .gb_Rb {
            margin-top: 9px
        }

        .gb_3b {
            color: #3c4043;
            font: 500 14px/18px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            letter-spacing: .25px;
            text-overflow: ellipsis;
            overflow: hidden
        }

        .gb_6a .gb_3b {
            color: #e8eaed
        }

        .gb_4b .gb_3b {
            font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            font-size: 12px;
            letter-spacing: normal;
            line-height: 16px
        }

        .gb_6a .gb_5b {
            color: #bdc1c6
        }

        .gb_5b {
            color: #5f6368;
            display: inline-block;
            font: 400 12px/16px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            text-overflow: ellipsis;
            overflow: hidden
        }

        @media screen and (min-width:361px) {
            .gb_l .gb_5b {
                max-width: 244px
            }
        }

        @media screen and (max-width:361px) {
            .gb_l .gb_5b {
                max-width: calc(calc(100vw - 12px*2) - 12px - 32px - 33px*2)
            }
        }

        @media screen and (min-width:361px) {
            .gb_Rb>.gb_5b.GZbiPb {
                max-width: 224px
            }
        }

        @media screen and (max-width:361px) {
            .gb_Rb>.gb_5b.GZbiPb {
                max-width: calc(calc(calc(100vw - 12px*2) - 12px - 32px - 33px*2) - 20px)
            }
        }

        .gb_4b .gb_5b {
            margin-top: 2px
        }

        .gb_6b {
            color: #5d6369;
            display: block;
            float: right;
            font: italic 400 12px/14px Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            padding: 3px 0 0 20px;
            text-align: right;
            visibility: visible
        }

        .gb_6a .gb_6b {
            color: #9aa0a6
        }

        .gb_7b {
            background-color: transparent;
            display: none;
            left: 0;
            overflow-wrap: break-word;
            position: relative;
            margin-left: 44px;
            white-space: normal;
            width: 100%;
            word-wrap: break-word;
            z-index: 1
        }

        @media screen and (min-width:361px) {
            .gb_7b {
                max-width: 244px
            }
        }

        @media screen and (max-width:361px) {
            .gb_7b {
                max-width: calc(calc(100vw - 12px*2) - 33px*2 - 44px)
            }
        }

        .gb_Ob[selected="true"]>.gb_7b {
            display: block
        }

        .gb_Pb>.gb_Ob[selected="true"] {
            height: auto;
            min-height: 91px
        }

        .gb_Ub:hover {
            background-color: rgba(100, 100, 100, 0.4)
        }

        .gb_8b {
            display: block;
            padding: 10px 20px
        }

        .gb_Sb {
            outline: 0;
            padding: 14px 41px;
            width: 280px
        }

        .gb_Sb:hover {
            background-color: #f7f8f8
        }

        .gb_Sb:focus,
        .gb_Sb:hover:focus {
            background-color: #f4f4f4
        }

        .gb_Sb:active,
        .gb_Sb:focus:active {
            background-color: #e8e8e9
        }

        .gb_9b {
            display: inline-block;
            vertical-align: middle;
            height: 20px;
            width: 20px
        }

        .gb_e .gb_ac::before {
            left: -244px;
            top: 0
        }

        .gb_bc {
            color: #427fed;
            display: inline-block;
            padding: 0 25px 0 10px;
            vertical-align: middle;
            white-space: normal
        }

        .gb_cc {
            color: #3c4043;
            font: 500 14px/18px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            padding: 0 25px 0 16px;
            text-align: left
        }

        @media screen and (min-width:361px) {
            .gb_cc {
                width: 195px
            }
        }

        @media screen and (max-width:361px) {
            .gb_cc {
                width: calc(calc(calc(100vw - 12px*2) - 12px - 32px - 33px*2) - 24px - 25px)
            }
        }

        .gb_6a .gb_cc {
            color: #e8eaed
        }

        .gb_dc {
            vertical-align: middle
        }

        .gb_ec {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .gb_fc {
            height: 108px;
            position: absolute;
            right: -6px;
            top: -6px;
            width: 108px
        }

        .gb_gc {
            height: 88px;
            position: absolute;
            right: 2px;
            top: -4px;
            width: 88px
        }

        @-webkit-keyframes progressmove {
            0% {
                margin-left: -100%
            }

            to {
                margin-left: 100%
            }
        }

        @keyframes progressmove {
            0% {
                margin-left: -100%
            }

            to {
                margin-left: 100%
            }
        }

        .gb_hc.gb_Fa {
            display: none
        }

        .gb_hc {
            background-color: #d2e3fc;
            height: 3px;
            overflow: hidden
        }

        .gb_6a .gb_hc {
            background-color: rgba(138, 180, 248, 0.24)
        }

        .gb_ic {
            background-color: #1a73e8;
            height: 100%;
            width: 50%;
            -webkit-animation: progressmove 1.5s linear 0s infinite;
            animation: progressmove 1.5s linear 0s infinite
        }

        .gb_6a>.gb_ic {
            background-color: #8ab4f8
        }

        .gb_Cb,
        .gb_jc {
            height: 20px;
            position: absolute;
            top: -2px;
            width: 20px
        }

        .gb_Ob .gb_Bb {
            display: inline-block;
            height: 16px;
            position: relative;
            width: 20px
        }

        .gb_Cb {
            display: inline-block
        }

        .gb_Ob[selected="true"] .gb_Cb {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .gb_Bb {
            display: none
        }

        .gb_3a.gb_l::-webkit-scrollbar {
            width: 16px
        }

        .gb_H.gb_l::-webkit-scrollbar {
            width: 16px
        }

        .gb_3a.gb_l::-webkit-scrollbar-thumb {
            background: #dadce0;
            background-clip: padding-box;
            border: 4px solid transparent;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        .gb_H.gb_l::-webkit-scrollbar-thumb {
            background: #dadce0;
            background-clip: padding-box;
            border: 4px solid transparent;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: none;
            box-shadow: none;
            min-height: 50px
        }

        .gb_6a.gb_l::-webkit-scrollbar-thumb {
            background-color: #5f6368
        }

        .gb_H.gb_l::-webkit-scrollbar-track {
            background: none;
            border: none
        }

        .gb_3a.gb_l::-webkit-scrollbar-track {
            background: none;
            border: none
        }

        .gb_H.gb_l::-webkit-scrollbar-track:hover {
            background: none;
            border: none
        }

        .gb_3a.gb_l::-webkit-scrollbar-track:hover {
            background: none;
            border: none
        }

        .gb_C .gb_D {
            background-position: -132px -38px;
            opacity: .55
        }

        .gb_E .gb_C .gb_D {
            background-position: -132px -38px
        }

        .gb_j .gb_C .gb_D {
            background-position: -463px -35px;
            opacity: 1
        }

        .gb_F.gb_H {
            min-height: 196px;
            overflow-y: auto;
            width: 320px
        }

        .gb_F.gb_H.gb_l {
            -webkit-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 2px 6px 2px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 2px 6px 2px rgba(60, 64, 67, .15);
            width: 328px
        }

        .gb_I {
            -webkit-transition: height .2s ease-in-out;
            transition: height .2s ease-in-out
        }

        .gb_I.gb_H.gb_l {
            -webkit-transition: height 1s ease-in-out;
            transition: height 1s ease-in-out
        }

        .gb_J {
            background: #fff;
            margin: 0;
            padding: 28px;
            padding-right: 27px;
            text-align: left;
            white-space: normal;
            width: 265px
        }

        .gb_J:not(.gb_l) {
            min-height: 100px
        }

        .gb_H.gb_l>.gb_J {
            padding: 12px 14px 20px 14px;
            width: 300px
        }

        .gb_K {
            background: #f5f5f5;
            cursor: pointer;
            height: 40px;
            overflow: hidden
        }

        .gb_L {
            position: relative
        }

        .gb_K {
            display: block;
            line-height: 40px;
            text-align: center;
            width: 320px
        }

        .gb_L {
            display: block;
            line-height: 40px;
            text-align: center
        }

        .gb_L.gb_M {
            line-height: 0
        }

        .gb_K,
        .gb_K:visited,
        .gb_K:active,
        .gb_L,
        .gb_L:visited {
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none
        }

        .gb_L:active {
            color: rgba(0, 0, 0, 0.87)
        }

        #gb a.gb_K,
        #gb a.gb_K:visited,
        #gb a.gb_K:active,
        #gb a.gb_L,
        #gb a.gb_L:visited {
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none
        }

        #gb a.gb_L:active {
            color: rgba(0, 0, 0, 0.87)
        }

        .gb_L:not(.gb_l),
        .gb_J:not(.gb_l) {
            display: none
        }

        .gb_A,
        .gb_J.gb_A:not(.gb_l),
        .gb_A+.gb_L,
        .gb_N .gb_L,
        .gb_N .gb_J {
            display: block
        }

        .gb_l .gb_O,
        .gb_l .gb_P,
        .gb_N .gb_O,
        .gb_N .gb_P {
            display: inline-block
        }

        .gb_L:hover,
        .gb_L:active,
        #gb a.gb_L:hover,
        #gb a.gb_L:active {
            text-decoration: underline
        }

        .gb_L {
            border-bottom: 1px solid #ebebeb;
            left: 28px;
            width: 264px
        }

        .gb_l .gb_L {
            border-bottom: 1px solid #e8eaed;
            left: 0;
            width: 328px
        }

        .gb_Q {
            text-align: center
        }

        a.gb_O,
        a.gb_P {
            background-color: #ffffff;
            border: 1px solid #dadce0;
            -webkit-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #1a73e8;
            display: inline-block;
            font: 500 14px/16px Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
            margin: 16px 0 18px 0;
            max-width: 264px;
            outline: none;
            overflow: hidden;
            padding: 10px 24px;
            position: static;
            text-align: center;
            text-decoration: none;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        a.gb_O:visited,
        a.gb_P:visited {
            color: #1a73e8
        }

        .gb_P:hover,
        .gb_O:hover {
            background-color: #f8fbff;
            border-color: #cce0fc;
            text-decoration: none
        }

        .gb_P:focus,
        .gb_P:hover:focus,
        .gb_O:focus,
        .gb_O:hover:focus {
            background-color: #f4f8ff;
            border-color: #c9ddfc
        }

        .gb_P:active,
        .gb_P:active:focus,
        .gb_O:active,
        .gb_O:active:focus {
            background-color: #ecf3fe;
            border-color: transparent;
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 2px 6px 2px rgba(60, 64, 67, 0.15);
            text-decoration: none
        }

        .gb_N .gb_K {
            display: none
        }

        .gb_L:last-child {
            border-bottom-width: 0
        }

        .gb_o .gb_f {
            display: initial
        }

        .gb_o.gb_R {
            height: 100px;
            text-align: center
        }

        .gb_o.gb_R img {
            padding: 34px 0;
            height: 32px;
            width: 32px
        }

        .gb_o .gb_r+img {
            border: 0;
            margin: 8px;
            height: 48px;
            width: 48px
        }

        .gb_o div.gb_S {
            background: #ffa;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            padding: 5px;
            text-align: center
        }

        .gb_l.gb_o.gb_T,
        .gb_l.gb_o.gb_p,
        .gb_o.gb_T,
        .gb_o.gb_p {
            padding-bottom: 0
        }

        .gb_l.gb_o.gb_q,
        .gb_l.gb_o.gb_p,
        .gb_o.gb_q,
        .gb_o.gb_p {
            padding-top: 0
        }

        .gb_o.gb_p a,
        .gb_o.gb_q a {
            top: 0
        }

        .gb_U .gb_K {
            margin-top: 0;
            position: static
        }

        .gb_V {
            display: inline-block
        }

        .gb_W:hover,
        #gb#gb .gb_W:hover {
            text-decoration: underline
        }

        .gb_X .gb_J {
            position: relative
        }

        .gb_X .gb_l>.gb_f {
            top: 20px;
            left: 20px
        }

        .gb_X .gb_f {
            position: absolute;
            top: 28px;
            left: 28px
        }

        .gb_K.gb_Z {
            display: none;
            height: 0
        }

        .gb_Fa {
            display: none !important
        }

        .gb_Ha {
            visibility: hidden
        }

        #gb#gb a.gb_f,
        #gb#gb a.gb_g,
        #gb#gb span.gb_g {
            color: rgba(0, 0, 0, 0.87);
            text-decoration: none
        }

        #gb#gb a.gb_g:hover,
        #gb#gb a.gb_g:focus {
            opacity: .85;
            text-decoration: underline
        }

        .gb_h.gb_i {
            display: none;
            padding-left: 15px;
            vertical-align: middle
        }

        .gb_h.gb_i:first-child {
            padding-left: 0
        }

        .gb_h .gb_g {
            display: inline-block;
            line-height: 24px;
            outline: none;
            vertical-align: middle
        }

        #gb#gb.gb_j a.gb_g,
        #gb#gb.gb_j span.gb_g,
        #gb#gb .gb_j a.gb_g,
        #gb#gb .gb_j span.gb_g {
            color: #fff
        }

        #gb#gb.gb_j span.gb_g,
        #gb#gb .gb_j span.gb_g {
            opacity: .7
        }

        a.gb_0 {
            border: none;
            color: #4285f4;
            cursor: default;
            font-weight: bold;
            outline: none;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            white-space: nowrap;
            -webkit-user-select: none
        }

        a.gb_0:hover:after,
        a.gb_0:focus:after {
            background-color: rgba(0, 0, 0, .12);
            content: '';
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%
        }

        a.gb_0:hover,
        a.gb_0:focus {
            text-decoration: none
        }

        a.gb_0:active {
            background-color: rgba(153, 153, 153, .4);
            text-decoration: none
        }

        a.gb_1 {
            background-color: #4285f4;
            color: #fff
        }

        a.gb_1:active {
            background-color: #0043b2
        }

        .gb_2 {
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .16);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .16)
        }

        .gb_0,
        .gb_1,
        .gb_3,
        .gb_4 {
            display: inline-block;
            line-height: 28px;
            padding: 0 12px;
            -webkit-border-radius: 2px;
            border-radius: 2px
        }

        .gb_3 {
            background: #f8f8f8;
            border: 1px solid #c6c6c6
        }

        .gb_4 {
            background: #f8f8f8
        }

        .gb_3,
        #gb a.gb_3.gb_3,
        .gb_4 {
            color: #666;
            cursor: default;
            text-decoration: none
        }

        #gb a.gb_4.gb_4 {
            cursor: default;
            text-decoration: none
        }

        .gb_4 {
            border: 1px solid #4285f4;
            font-weight: bold;
            outline: none;
            background: #4285f4;
            background: -webkit-linear-gradient(top, #4387fd, #4683ea);
            background: linear-gradient(top, #4387fd, #4683ea);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#4387fd, endColorstr=#4683ea, GradientType=0)
        }

        #gb a.gb_4.gb_4 {
            color: #fff
        }

        .gb_4:hover {
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, .15);
            box-shadow: 0 1px 0 rgba(0, 0, 0, .15)
        }

        .gb_4:active {
            -webkit-box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            box-shadow: inset 0 2px 0 rgba(0, 0, 0, .15);
            background: #3c78dc;
            background: -webkit-linear-gradient(top, #3c7ae4, #3f76d3);
            background: linear-gradient(top, #3c7ae4, #3f76d3);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#3c7ae4, endColorstr=#3f76d3, GradientType=0)
        }

        .gb_kc {
            min-width: 127px;
            overflow: hidden;
            position: relative;
            z-index: 987
        }

        .gb_lc {
            position: absolute;
            padding: 0 20px 0 15px
        }

        .gb_mc {
            display: inline-block;
            line-height: 0;
            outline: none;
            vertical-align: middle
        }

        .gb_nc .gb_mc {
            position: relative;
            top: 2px
        }

        .gb_mc .gb_oc,
        .gb_ra {
            display: block
        }

        .gb_pc {
            border: none;
            display: block;
            visibility: hidden
        }

        .gb_mc .gb_oc {
            background-position: 0 -35px;
            height: 33px;
            width: 92px
        }

        img.gb_ua {
            border: 0;
            vertical-align: middle
        }

        .gb_j .gb_mc .gb_oc {
            background-position: -296px 0
        }

        .gb_E .gb_mc .gb_oc {
            background-position: -97px 0;
            opacity: .54
        }

        .gb_Jf {
            display: inline-block;
            line-height: normal;
            position: relative;
            z-index: 987
        }

        .gb_sg {
            color: #000;
            font: 13px/27px Arial, sans-serif;
            left: 0;
            min-width: 1002px;
            position: absolute;
            top: 0;
            -webkit-user-select: none;
            width: 100%
        }

        .gb_Rf {
            font: 13px/27px Arial, sans-serif;
            position: relative;
            height: 60px;
            width: 100%
        }

        .gb_La .gb_Rf {
            height: 28px
        }

        #gba {
            height: 60px
        }

        #gba.gb_La {
            height: 28px
        }

        #gba.gb_tg {
            height: 90px
        }

        #gba.gb_ug {
            height: 132px
        }

        #gba.gb_tg.gb_La {
            height: 58px
        }

        .gb_Rf>.gb_i {
            height: 60px;
            line-height: 58px;
            vertical-align: middle
        }

        .gb_La .gb_Rf>.gb_i {
            height: 28px;
            line-height: 26px
        }

        .gb_Rf::before {
            background: #e5e5e5;
            bottom: 0;
            content: '';
            display: none;
            height: 1px;
            left: 0;
            position: absolute;
            right: 0
        }

        .gb_Rf {
            background: #f1f1f1
        }

        .gb_vg .gb_Rf {
            background: #fff
        }

        .gb_vg .gb_Rf::before,
        .gb_La .gb_Rf::before {
            display: none
        }

        .gb_E .gb_Rf,
        .gb_j .gb_Rf,
        .gb_La .gb_Rf {
            background: transparent
        }

        .gb_E .gb_Rf::before {
            background: #e1e1e1;
            background: rgba(0, 0, 0, .12)
        }

        .gb_j .gb_Rf::before {
            background: #333;
            background: rgba(255, 255, 255, .2)
        }

        .gb_i {
            display: inline-block;
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-flex: 0 0 main-size;
            flex: 0 0 main-size
        }

        .gb_i.gb_wg {
            float: right;
            -webkit-order: 1;
            order: 1
        }

        .gb_xg {
            white-space: nowrap
        }

        .gb_Of .gb_xg {
            display: -webkit-flex;
            display: flex
        }

        .gb_xg,
        .gb_i {
            margin-left: 0 !important;
            margin-right: 0 !important
        }

        .gb_oc {
            background-image: url('//ssl.gstatic.com/gb/images/i1_1967ca6a.png');
            -webkit-background-size: 528px 68px;
            background-size: 528px 68px
        }

        @media (min-resolution:1.25dppx),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gb_oc {
                background-image: url('//ssl.gstatic.com/gb/images/i2_2ec824b0.png')
            }
        }

        .gb_Ua {
            min-width: 165px;
            padding-left: 30px;
            padding-right: 30px;
            position: relative;
            text-align: right;
            z-index: 986;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: flex-end;
            justify-content: flex-end;
            -webkit-user-select: none
        }

        .gb_La .gb_Ua {
            min-width: 0
        }

        .gb_Ua.gb_i {
            -webkit-flex: 1 1 auto;
            flex: 1 1 auto;
            -webkit-flex: 1 1 main-size;
            flex: 1 1 main-size
        }

        .gb_Tc {
            line-height: normal;
            position: relative;
            text-align: left
        }

        .gb_Tc.gb_i,
        .gb_8d.gb_i,
        .gb_Ma.gb_i {
            -webkit-flex: 0 1 auto;
            flex: 0 1 auto;
            -webkit-flex: 0 1 main-size;
            flex: 0 1 main-size
        }

        .gb_ig,
        .gb_jg {
            display: inline-block;
            padding: 0 0 0 15px;
            position: relative;
            vertical-align: middle
        }

        .gb_8d {
            line-height: normal;
            padding-right: 15px
        }

        .gb_Ua .gb_8d {
            padding-right: 0
        }

        .gb_Ma {
            color: #404040;
            line-height: 30px;
            min-width: 30px;
            overflow: hidden;
            vertical-align: middle;
            text-overflow: ellipsis
        }

        #gb.gb_La.gb_La .gb_9d,
        #gb.gb_La.gb_La .gb_Tc>.gb_jg .gb_dg {
            background: none;
            border: none;
            color: #36c;
            cursor: pointer;
            filter: none;
            font-size: 11px;
            line-height: 26px;
            padding: 0;
            -webkit-box-shadow: none;
            box-shadow: none
        }

        #gb.gb_La.gb_j .gb_9d,
        #gb.gb_La.gb_j .gb_Tc>.gb_jg .gb_dg {
            color: #fff
        }

        .gb_La .gb_9d {
            text-transform: uppercase
        }

        .gb_Ua.gb_Pf {
            padding-left: 0;
            padding-right: 29px
        }

        .gb_Ua.gb_kg {
            max-width: 400px
        }

        .gb_lg {
            background-clip: content-box;
            background-origin: content-box;
            opacity: .27;
            padding: 22px;
            height: 16px;
            width: 16px
        }

        .gb_lg.gb_i {
            display: none
        }

        .gb_lg:hover,
        .gb_lg:focus {
            opacity: .55
        }

        .gb_mg {
            background-position: -219px -25px
        }

        .gb_ng {
            background-position: -194px 0;
            padding-left: 30px;
            padding-right: 14px;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 990
        }

        .gb_Ra:not(.gb_Sa) .gb_ng,
        .gb_Pf .gb_mg {
            display: inline-block
        }

        .gb_Ra .gb_mg {
            padding-left: 30px;
            padding-right: 0;
            width: 0
        }

        .gb_Ra:not(.gb_Sa) .gb_og {
            display: none
        }

        .gb_Ua.gb_i.gb_Pf,
        .gb_Pf:not(.gb_Sa) .gb_Tc {
            -webkit-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-flex: 0 0 main-size;
            flex: 0 0 main-size
        }

        .gb_lg,
        .gb_Pf .gb_8d,
        .gb_Sa .gb_Tc {
            overflow: hidden
        }

        .gb_Ra .gb_8d {
            padding-right: 0
        }

        .gb_Pf .gb_Tc {
            padding: 1px 1px 1px 0
        }

        .gb_Ra .gb_Tc {
            width: 75px
        }

        .gb_Ua.gb_pg,
        .gb_Ua.gb_pg .gb_mg,
        .gb_Ua.gb_pg .gb_mg::before,
        .gb_Ua.gb_pg .gb_8d,
        .gb_Ua.gb_pg .gb_Tc {
            -webkit-transition: width .5s ease-in-out, min-width .5s ease-in-out, max-width .5s ease-in-out, padding .5s ease-in-out, left .5s ease-in-out;
            transition: width .5s ease-in-out, min-width .5s ease-in-out, max-width .5s ease-in-out, padding .5s ease-in-out, left .5s ease-in-out
        }

        .gb_Of .gb_Ua {
            min-width: 0
        }

        .gb_Ua.gb_Va,
        .gb_Ua.gb_Va .gb_Tc,
        .gb_Ua.gb_qg,
        .gb_Ua.gb_qg .gb_Tc {
            min-width: 0 !important
        }

        .gb_Ua.gb_Va,
        .gb_Ua.gb_Va .gb_i {
            -webkit-flex: 0 0 auto !important;
            -webkit-box-flex: 0 0 auto !important;
            -webkit-flex: 0 0 auto !important;
            flex: 0 0 auto !important
        }

        .gb_Ua.gb_Va .gb_Ma {
            width: 30px !important
        }

        .gb_rg {
            margin-right: 32px
        }

        .gb_Ha {
            display: none
        }

        .gb_Rf ::-webkit-scrollbar {
            height: 15px;
            width: 15px
        }

        .gb_Rf ::-webkit-scrollbar-button {
            height: 0;
            width: 0
        }

        .gb_Rf ::-webkit-scrollbar-thumb {
            background-clip: padding-box;
            background-color: rgba(0, 0, 0, .3);
            border: 5px solid transparent;
            -webkit-border-radius: 10px;
            border-radius: 10px;
            min-height: 20px;
            min-width: 20px;
            height: 5px;
            width: 5px
        }

        .gb_Rf ::-webkit-scrollbar-thumb:hover,
        .gb_Rf ::-webkit-scrollbar-thumb:active {
            background-color: rgba(0, 0, 0, .4)
        }

        #gb.gb_Ag {
            min-width: 980px
        }

        #gb.gb_Ag .gb_Nf {
            min-width: 0;
            position: static;
            width: 0
        }

        .gb_2c {
            display: none
        }

        .gb_Ag .gb_Rf {
            background: transparent;
            border-bottom-color: transparent
        }

        .gb_Ag .gb_Rf::before {
            display: none
        }

        .gb_Ag.gb_Ag .gb_h {
            display: inline-block
        }

        .gb_Ag.gb_Ua .gb_8d {
            padding-right: 15px
        }

        .gb_Ag.gb_Of #gbqf {
            display: block
        }

        .gb_Ag #gbq {
            height: 0;
            position: absolute
        }

        .gb_Ag.gb_Ua {
            z-index: 987
        }

        sentinel {}

        #gbq .gbgt-hvr,
        #gbq .gbgt:focus {
            background-color: transparent;
            background-image: none
        }

        .gbqfh#gbq1 {
            display: none
        }

        .gbxx {
            display: none !important
        }

        #gbq {
            line-height: normal;
            position: relative;
            top: 0px;
            white-space: nowrap
        }

        #gbq {
            left: 0;
            width: 100%
        }

        #gbq2 {
            top: 0px;
            z-index: 986
        }

        #gbq4 {
            display: inline-block;
            max-height: 29px;
            overflow: hidden;
            position: relative
        }

        .gbqfh#gbq2 {
            z-index: 985
        }

        .gbqfh#gbq2 {
            margin: 0;
            margin-left: 0 !important;
            padding-top: 0;
            position: relative;
            top: 310px
        }

        .gbqfh #gbqf {
            margin: auto;
            min-width: 534px;
            padding: 0 !important
        }

        .gbqfh #gbqfbw {
            display: none
        }

        .gbqfh #gbqfbwa {
            display: block
        }

        .gbqfh #gbqf {
            max-width: 572px;
            min-width: 572px
        }

        .gbqfh .gbqfqw {
            border-right-width: 1px
        }

        .gbii::before {
            content: url(https://ssl.gstatic.com/gb/images/silhouette_27.png)
        }

        .gbip::before {
            content: url(https://ssl.gstatic.com/gb/images/silhouette_96.png)
        }

        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gbii::before {
                content: url(https://ssl.gstatic.com/gb/images/silhouette_27.png)
            }

            .gbip::before {
                content: url(https://ssl.gstatic.com/gb/images/silhouette_96.png)
            }
        }

        .gbii {
            background-image: url(https://ssl.gstatic.com/gb/images/silhouette_27.png)
        }

        .gbip {
            background-image: url(https://ssl.gstatic.com/gb/images/silhouette_96.png)
        }

        @media (min-resolution:1.25dppx),
        (-o-min-device-pixel-ratio:5/4),
        (-webkit-min-device-pixel-ratio:1.25),
        (min-device-pixel-ratio:1.25) {
            .gbii {
                background-image: url(https://ssl.gstatic.com/gb/images/silhouette_27.png)
            }

            .gbip {
                background-image: url(https://ssl.gstatic.com/gb/images/silhouette_96.png)
            }
        }

        @-webkit-keyframes qs-timer {
            0% {}
        }
    </style>
    <script async="" type="text/javascript" charset="UTF-8" src="./g00gie_files/rs=AA2YrTvRW51okNAogzqF_Dy_UnbU5HOemw" nonce="H2hylgiybQtnv1vEIh0pTQ=="></script>
    <link crossorigin="use-credentials" rel="prefetch" href="https://ogs.google.com/widget/app/so?hl=en&amp;origin=https%3A%2F%2Fwww.google.com&amp;pid=1&amp;spid=1&amp;usegapi=1">
</head>

<body jsmodel=" " class="hp vasq big" id="gsr">
    <style>
        [dir='ltr'],
        [dir='rtl'] {
            unicode-bidi: -webkit-isolate;
            unicode-bidi: isolate
        }

        bdo[dir='ltr'],
        bdo[dir='rtl'] {
            unicode-bidi: bidi-override;
            unicode-bidi: -webkit-isolate-override;
            unicode-bidi: isolate-override
        }

        #logo {
            display: block;
            overflow: hidden;
            position: relative
        }

        #logo img {
            border: 0;
        }

        #logo span {
            background: url(/g00gies_files/googlelogo_color_272x92dp.png) no-repeat;
            cursor: pointer;
            overflow: hidden
        }

        #logocont {
            z-index: 1;
            padding-left: 13px;
            padding-right: 10px;
            padding-top: 7px
        }

        #logocont.ddl {
            padding-top: 3px
        }

        .big #logocont {
            padding-left: 13px;
            padding-right: 12px
        }

        #searchform #logocont {
            padding-top: 11px;
            padding-right: 28px;
            padding-left: 30px
        }

        .sbibod {
            background-color: #fff;
            height: 44px;
            vertical-align: top;
            border: 1px solid #dfe1e5;
            border-radius: 8px;
            box-shadow: none;
            transition: box-shadow 200ms cubic-bezier(0.4, 0.0, 0.2, 1);
        }

        .lst {
            border: 0;
            margin-top: 5px;
            margin-bottom: 0
        }

        .lst:focus {
            outline: none
        }

        .gsfi,
        .lst {
            font: 16px arial, sans-serif;
            line-height: 34px;
            height: 34px !important
        }

        .lst-c {
            overflow: hidden
        }

        #gs_st0 {
            line-height: 44px;
            padding: 0 8px;
            margin-top: -1px;
            position: static
        }

        .srp #gs_st0 {
            padding: 0 2px 0 8px
        }

        .gsfs {
            font: 16px arial, sans-serif
        }

        .lsb {
            background: transparent;
            border: 0;
            font-size: 0;
            height: 30px;
            outline: 0;
            text-align: left;
            width: 100%
        }

        .sbico {
            display: inline-block;
            height: 0px;
            width: 0px;
            cursor: pointer;
            vertical-align: middle;
            color: #4285f4
        }

        .sbico-c {
            background: transparent;
            border: 0;
            float: right;
            height: 44px;
            line-height: 44px;
            margin-top: -1px;
            outline: 0;
            padding-right: 16px;
            position: relative;
            top: -1px
        }

        .hp .sbico-c {
            display: none
        }

        #sblsbb {
            text-align: center;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            height: 44px;
            margin: 0;
            padding: 0;
        }

        #sbds {
            border: 0;
            margin-left: 0
        }

        .hp .nojsb,
        .srp .jsb {
            display: none
        }

        .kpbb,
        .kprb,
        .kpgb,
        .kpgrb {
            border-radius: 2px;
            border-radius: 2px;
            color: #fff
        }

        .kpbb:hover,
        .kprb:hover,
        .kpgb:hover,
        .kpgrb:hover {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #fff
        }

        .kpbb:active,
        .kprb:active,
        .kpgb:active,
        .kpgrb:active {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
        }

        .kpbb {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#4787ed));
            background-color: #4d90fe;
            background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
            background-image: linear-gradient(top, #4d90fe, #4787ed);
            border: 1px solid #3079ed
        }

        .kpbb:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#4d90fe), to(#357ae8));
            background-color: #357ae8;
            background-image: -webkit-linear-gradient(top, #4d90fe, #357ae8);
            background-image: linear-gradient(top, #4d90fe, #357ae8);
            border: 1px solid #2f5bb7
        }

        a.kpbb:link,
        a.kpbb:visited {
            color: #fff
        }

        .kprb {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#d14836));
            background-color: #dd4b39;
            background-image: -webkit-linear-gradient(top, #dd4b39, #d14836);
            background-image: linear-gradient(top, #dd4b39, #d14836);
            border: 1px solid #dd4b39
        }

        .kprb:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#c53727));
            background-color: #c53727;
            background-image: -webkit-linear-gradient(top, #dd4b39, #c53727);
            background-image: linear-gradient(top, #dd4b39, #c53727);
            border: 1px solid #b0281a;
            border-bottom-color: #af301f
        }

        .kprb:active {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#dd4b39), to(#b0281a));
            background-color: #b0281a;
            background-image: -webkit-linear-gradient(top, #dd4b39, #b0281a);
            background-image: linear-gradient(top, #dd4b39, #b0281a)
        }

        .kpgb {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#3d9400), to(#398a00));
            background-color: #3d9400;
            background-image: -webkit-linear-gradient(top, #3d9400, #398a00);
            background-image: linear-gradient(top, #3d9400, #398a00);
            border: 1px solid #29691d
        }

        .kpgb:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#3d9400), to(#368200));
            background-color: #368200;
            background-image: -webkit-linear-gradient(top, #3d9400, #368200);
            background-image: linear-gradient(top, #3d9400, #368200);
            border: 1px solid #2d6200
        }

        .kpgrb {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#f1f1f1));
            background-color: #f5f5f5;
            background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
            background-image: linear-gradient(top, #f5f5f5, #f1f1f1);
            border: 1px solid #dcdcdc;
            color: #555
        }

        .kpgrb:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f1f1f1));
            background-color: #f8f8f8;
            background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
            background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
            border: 1px solid #dcdcdc;
            color: #333
        }

        a.kpgrb:link,
        a.kpgrb:visited {
            color: #555
        }

        #sfopt {
            display: inline-block;
            float: right;
            line-height: normal
        }

        .lsd {
            font-size: 11px;
            position: absolute;
            top: 3px;
            left: 16px
        }

        .sbsb_g {
            margin: 3px 0 4px
        }

        .jhp input[type="submit"],
        .sbdd_a input,
        .gbqfba {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#f1f1f1));
            background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
            -webkit-border-radius: 2px;
            -webkit-user-select: none;
            background-color: #f2f2f2;
            border: 1px solid #f2f2f2;
            border-radius: 4px;
            color: #5F6368;
            cursor: pointer;
            font-family: arial, sans-serif;
            font-size: 14px;
            margin: 11px 4px;
            min-width: 54px;
            padding: 0 16px;
            text-align: center
        }

        .gbqfba.gbqfba-hvr {
            font-size: 14px
        }

        .jhp input[type="submit"],
        .gbqfba {
            height: 36px;
            line-height: 27px
        }

        .sbdd_a input {
            height: 100%
        }

        .jhp input[type="submit"]:hover,
        .sbdd_a input:hover,
        .gbqfba:hover {
            background-image: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f1f1f1));
            background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            background-color: #f8f8f8;
            background-image: linear-gradient(top, #f8f8f8, #f1f1f1);
            background-image: -o-linear-gradient(top, #f8f8f8, #f1f1f1);
            border: 1px solid #c6c6c6;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            color: #222
        }

        .jhp input[type="submit"]:focus,
        .sbdd_a input:focus {
            border: 1px solid #4d90fe;
            outline: none
        }

        .sbdd_a input {
            margin: 6px;
        }

        span.lsbb,
        .lsb input {
            -webkit-transition: all 0.18s
        }

        @media only screen and (max-height:650px) {
            span.lsbb {
                height: 17px
            }
        }

        .tsf {
            background: none
        }

        #sform {
            height: 65px
        }

        #searchform {
            width: 100%
        }

        .hp #searchform {
            position: absolute;
            top: 311px
        }

        @media only screen and (max-height:768px) {
            .hp #searchform {
                top: 269px
            }
        }

        .srp #searchform {
            position: absolute;
            top: 20px;
        }

        .srp #tsf {
            position: relative;
        }

        .sfbg {
            height: 69px;
            left: 0;
            position: absolute;
            width: 100%
        }

        .sfbgg {
            height: 65px
        }

        #cnt {
            padding-top: 20px;
        }

        #subform_ctrl {
            min-height: 0px
        }
    </style>
    <style data-jiis="cc" id="gstyle">
        html,
        body {
            height: 100%;
            margin: 0
        }

        #viewport {
            min-height: 100%;
            position: relative;
            width: 100%
        }

        .content {
            padding-bottom: 35px
        }

        #footer {
            bottom: 0;
            font-size: 10pt;
            height: 35px;
            position: fixed;
            width: 100%
        }

        #gog {
            padding: 3px 8px 0
        }

        td {
            line-height: .8em
        }

        .gac_m td {
            line-height: 17px
        }

        body,
        td,
        a,
        p,
        .h {
            font-family: arial, sans-serif
        }

        .h {
            color: #1a0dab;
            font-size: 20px
        }

        .q {
            color: #00c
        }

        .ts td {
            padding: 0
        }

        .ts {
            border-collapse: collapse
        }

        em {
            font-weight: bold;
            font-style: normal
        }

        #lst-ib:hover {
            border-color: #a0a0a0 #b9b9b9 #b9b9b9 #b9b9b9 !important
        }

        #lst-ib.lst-d-f,
        #lst-ib:hover.lst-d-f {
            border-color: #4d90fe !important
        }

        .ds {
            display: inline-block;
            margin-left: 4px
        }

        .ctr-p {
            margin: 0 auto;
            min-width: 980px
        }

        .big .ctr-p {
            min-width: 1139px
        }

        a.gb1,
        a.gb2,
        a.gb3,
        a.gb4 {
            color: #11c !important
        }

        body {
            background: #fff;
            color: #222
        }

        a {
            color: #1a0dab;
            text-decoration: none
        }

        a:hover,
        a:active {
            text-decoration: underline
        }

        .fl a {
            color: #1a0dab
        }

        a:visited {
            color: #609
        }

        a.gb1,
        a.gb4 {
            text-decoration: underline
        }

        a.gb3:hover {
            text-decoration: none
        }

        #ghead a.gb2:hover {
            color: #fff !important
        }

        .sblc {
            padding-top: 5px
        }

        .sblc a {
            display: block;
            margin: 2px 0;
            margin-left: 13px;
            font-size: 11px
        }

        .lsbb {
            height: 30px;
            display: block
        }

        .ftl,
        #footer a {
            color: #5f6368;
            margin: 2px 10px 0
        }

        #footer a:active {
            color: #dd4b39
        }

        .lsb {
            border: none;
            color: #000;
            cursor: pointer;
            height: 30px;
            margin: 0;
            outline: 0;
            vertical-align: top
        }

        .lst:focus {
            outline: none
        }

        body,
        html {
            font-size: small
        }

        h1,
        ol,
        ul,
        li {
            margin: 0;
            padding: 0
        }

        .nojsv {
            visibility: hidden
        }

        .hp #logocont.nojsv {
            display: none
        }

        #body,
        #footer {
            display: block
        }

        .gl {
            white-space: nowrap
        }

        .big .tsf-p {
            padding-left: 150px;
            padding-right: 352px
        }

        .hp .tsf-p {
            padding-left: 173px;
            padding-right: 173px
        }

        .hp #tsf {
            margin: 0 auto;
            width: 833px
        }

        #tsf {
            width: 833px
        }

        .big #tsf,
        .hp .big #tsf {
            width: 1139px
        }

        .tsf-p {
            padding-left: 150px;
            padding-right: 46px
        }

        .hp .big .tsf-p {
            padding-left: 284px;
            padding-right: 284px
        }

        #fll {
            float: right;
            text-align: right;
            width: 100%
        }

        #ftby {
            padding-left: 0
        }

        #ftby>div,
        #fll>div,
        #footer a {
            display: inline-block
        }

        @media only screen and (min-width:1222px) {
            #ftby {
                margin: 0 44px
            }
        }

        .logo-subtext {
            color: #4285f4;
            font: 16px/16px roboto-regular, arial, sans-serif;
            left: 215px;
            position: relative;
            top: 76px;
            white-space: nowrap
        }
    </style>
    <style>
        .gl {
            white-space: nowrap
        }

        .big .tsf-p {
            padding-left: 150px;
            padding-right: 352px
        }

        .hp .tsf-p {
            padding-left: 173px;
            padding-right: 173px
        }

        .hp #tsf {
            margin: 0 auto;
            width: 833px
        }

        #tsf {
            width: 833px
        }

        .big #tsf,
        .hp .big #tsf {
            width: 1139px
        }

        .tsf-p {
            padding-left: 150px;
            padding-right: 46px
        }

        .hp .big .tsf-p {
            padding-left: 284px;
            padding-right: 284px
        }
    </style>
    <div class="ctr-p" id="viewport">
        <div id="doc-info"></div>
        <div id="cst">
            <style>
                .y,
                .yp,
                .yf,
                .yi,
                .yl,
                .ye {}

                .z1asCe {
                    display: inline-block;
                    fill: currentColor;
                    height: 24px;
                    line-height: 24px;
                    position: relative;
                    width: 24px
                }

                .z1asCe svg {
                    display: block;
                    height: 100%;
                    width: 100%
                }

                .s2er {}

                .s2ml {}

                .s2ra {}

                .spch {}

                .spchc {}

                .spch-dlg {
                    background: transparent;
                    border: none
                }

                .spch {
                    background: #fff;
                    height: 100%;
                    left: 0;
                    opacity: 0;
                    overflow: hidden;
                    position: fixed;
                    text-align: left;
                    top: 0;
                    visibility: hidden;
                    width: 100%;
                    z-index: 10000;
                    transition: visibility 0s linear 0.218s, background-color 0.218s
                }

                .close-button {
                    background: none;
                    border: none;
                    color: #777;
                    cursor: pointer;
                    font-size: 26px;
                    right: 0;
                    height: 11px;
                    line-height: 15px;
                    margin: 15px;
                    opacity: .6;
                    padding: 0;
                    position: absolute;
                    top: 0;
                    width: 15px;
                    z-index: 10
                }

                .close-button:hover {
                    opacity: .8
                }

                .close-button:active {
                    opacity: 1
                }

                .spchc {
                    display: block;
                    height: 42px;
                    position: absolute;
                    pointer-events: none
                }

                .inner-container {
                    height: 100%;
                    opacity: .1;
                    pointer-events: none;
                    width: 100%;
                    transition: opacity .318s ease-in
                }

                .s2ml .inner-container,
                .s2ra .inner-container,
                .s2er .inner-container {
                    opacity: 1;
                    transition: opacity 0s
                }

                .s2fp {}

                .s2fp-h {}

                .s2fpm {}

                .s2fpm-h {}

                .s2tb {}

                .s2tb-h {}

                .spcht {}

                .spchta {}

                .spch-2l {}

                .spch-3l {}

                .spch-4l {}

                .spch-5l {}

                .text-container {
                    pointer-events: none
                }

                .s2fp-h .text-container,
                .s2fp .text-container,
                .s2fpm-h .text-container,
                .s2fpm .text-container {
                    position: absolute
                }

                .s2tb-h .text-container,
                .s2tb .text-container {
                    position: relative
                }

                .spcht {
                    font-weight: normal;
                    line-height: 1.2;
                    opacity: 0;
                    pointer-events: none;
                    position: absolute;
                    text-align: left;
                    -webkit-font-smoothing: antialiased;
                    transition: opacity .1s ease-in, margin-left .5s ease-in, top 0s linear 0.218s
                }

                .s2fp-h .spcht,
                .s2fpm-h .spcht {
                    margin-left: 44px
                }

                .s2tb-h .spcht {
                    margin-left: 32px
                }

                .s2fp-h .spcht,
                .s2fp .spcht,
                .s2fpm-h .spcht,
                .s2fpm .spcht {
                    left: -44px;
                    top: -.2em
                }

                .s2fp-h .spcht,
                .s2fp .spcht {
                    font-size: 32px;
                    width: 460px
                }

                .s2fpm-h .spcht,
                .s2fpm .spcht {
                    font-size: 28px;
                    width: 300px
                }

                .s2tb-h .spcht,
                .s2tb .spcht {
                    font-size: 27px;
                    left: 7px;
                    top: .2em;
                    width: 490px
                }

                .s2fp .spcht,
                .s2fpm .spcht,
                .s2tb .spcht {
                    margin-left: 0;
                    opacity: 1;
                    transition: opacity .5s ease-out, margin-left .5s ease-out
                }

                .spchta {
                    color: #1155cc;
                    cursor: pointer;
                    font-size: 18px;
                    font-weight: 500;
                    pointer-events: auto;
                    text-decoration: underline
                }

                .spch-2l.spcht,
                .spch-3l.spcht,
                .spch-4l.spcht {
                    transition: top 0.218s ease-out
                }

                .spch-2l.spcht {
                    top: -.6em
                }

                .spch-3l.spcht {
                    top: -1.3em
                }

                .spch-4l.spcht {
                    top: -1.7em
                }

                .s2fp .spch-5l.spcht {
                    top: -2.5em
                }

                .s2tb .spch-5l.spcht {
                    font-size: 24px;
                    top: -1.7em;
                    transition: font-size 0.218s ease-out
                }

                .s2wfp {}

                .permission-bar {
                    margin-top: -100px;
                    opacity: 0;
                    pointer-events: none;
                    position: absolute;
                    width: 500px;
                    transition: opacity 0.218s ease-in, margin-top .4s ease-in
                }

                .s2wfp .permission-bar {
                    margin-top: -300px;
                    opacity: 1;
                    transition: opacity .5s ease-out 0.218s, margin-top 0.218s ease-out 0.218s
                }

                .permission-bar-gradient {
                    box-shadow: 0 1px 0px #4285F4;
                    height: 80px;
                    left: 0;
                    margin: 0;
                    opacity: 0;
                    pointer-events: none;
                    position: fixed;
                    right: 0;
                    top: -80px;
                    transition: opacity 0.218s, box-shadow 0.218s
                }

                .s2wfp .permission-bar-gradient {
                    box-shadow: 0 1px 80px #4285F4;
                    opacity: 1;
                    pointer-events: none;
                    animation: allow-alert .75s 0 infinite;
                    animation-direction: alternate;
                    animation-timing-function: ease-out;
                    transition: opacity 0.218s, box-shadow 0.218s
                }

                @-webkit-keyframes allow-alert {
                    from {
                        opacity: 1
                    }

                    to {
                        opacity: .35
                    }
                }

                .s2fp.spch {
                    opacity: 1;
                    visibility: visible;
                    transition-delay: 0s
                }

                .s2tb-h.spch {
                    background: rgba(255, 255, 255, 0);
                    opacity: 0;
                    visibility: hidden
                }

                .s2tb.spch {
                    background: rgba(255, 255, 255, 0);
                    opacity: 1;
                    visibility: visible;
                    transition-delay: 0s
                }

                .google-logo {
                    background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALwAAABACAQAAAAKENVCAAAI/ElEQVR4Ae3ae3BU5RnH8e/ZTbIhhIRbRIJyCZcEk4ZyE4RBAiRBxRahEZBLQYUZAjIgoLUWB6wjKIK2MtAqOLVUKSqWQW0ZaOQq0IFAIZVrgFQhXAOShITEbHY7407mnPfc8u6ya2f0fN6/9rzvc87Z39nbed/l/8OhIKMDQ+hHKp1JJB6FKq5QQhH72MZ1IsDRhvkU4bds9WxlLNE4wqg9q6jBL9G+4knc/HB9qXmuG4goD89TjT+IVkimE/zt6sYh/EG3WmaiOMGHbgQ38YfY3ibKCV6GMabHWY0bo+Ps5jjnuYlCczrSk8Hcgd5U1rONoDnG48Ova2W8RGeMXAxiHfWakT4mOx81oRiG1/C5vYh47KSx5fZid4JvxxVd7MdIp3EK06kNNXYneIWtutgLaIasQUwkJE7wE3SxbycWR8SD93BOiL2YRBwRDN5FwOPchaqecZQTQQ4XAApz0FrFQSLPwQD8mlZNEt8L5841D62/cJVIi2cgPelEAlBOCYfYSxXymjKAXqSQAFRwloPspRp5dzOMHiTThEqK2c1OvGHIsg/30YUWKHzDKfZwEB+2xBn3gUSSwmA+MpluruYDySMPYD23TOrX0V/q+CPZYai+yHw8wKscbmhMD+IVfyevcMlkuvxXxGOphTD4Gi4iJ40C/DZtM12wk8Lfbes/oSN27mGPZW0RnVmvebxIMng3z1Bluddz5Mh9wm8icqZIzPHfZDxW8qhotL6cUVh5zP74XOBg0MEnsgW/bfMxzyIOYdgSIuV5/JJtPmZmSlb7mI6ZGTLVQQafSKHUvp7BxFxhSD6N8UsH4An5aT+J3mNB1T+K3hj8YQ/ezRbpvY3CYKEwYFLYgvfTkQZ9qTN8nS3lIdJJZwTLDdNztfwUrTTDp+hllmnqrxo+sLqi1dWwuFPKYnK5h0we5c/UhhT8fF1FHWsZTis8dGAyB4S+67RF5wVhwC/DGHxvAqI4Imyv50Vi0YpjsW4l4AAuGii63yE+lhCHVlOW6o79TxRN/ee64y/SHb8TO4MOvq3uYh6iO1oufiP0r0VnjtA9K4zBDzSdgKtjJGbyqBfG5dFguC62sZiZoLt0Qy3qvYzCKIZNQQYvXupdxGO0Rni5dLebl1wexuD7A4DuC+gprMwTxu2hwT+E7c9iZYEw7lMaiBPeczAXT3EQwcdwTbP1Eq3RiyaPvcIe/4igj9C5NYzBpwOQKmzbh4IVF4dMviOShHfCEdxYieKY8M5qCUCy8E4oxIWVnwcRfK4wdhqitiyk1JBHJc3UU4UT+HDRYADR1GEnB2s9WYrqssn41/BjxcdrrEOVzRogS4hqOfVY8fI6qzWXYTAbgRwUVMvwYeUzzpKCnMGobvIeDRTuZyajiMLoMG2oRONfwnV5kNDNFH5ZKAD8SbPtFrHYaSr8+nkLgCXC53sCdloJz+RlAFYJv5bisPOG9Cv+U+F+O6AZM4Sx2iz+QKZxWrgArSmEbiAIpwvQGdV/qMFOFUdRdTbUn6QCO9c4bajvJhy/GjuFyOqEqhhIZyUXWEk6esd4imTyKTIG/1e08kghNNEMR7WfgERUpTTmPKrmIdSXGupbiHu3dQFZCagy2MGXzCAekZcPySKDlVSYTwsf5QB9aeBiCWMJxcO0RPU5AW5UPuyJI9xhr/diz4ssF6ohGJXyFmu42Fj5MrTGMILgKTyHqpoCAipR3YE9cURFWOorUCVhrzWyKrFWwGg68hIXG79uGziG1rt0IFhPcC+qj6gioARVJm7sRPMTVCWG+u54sBNHqm19Ji7sZCDrv5gp53ekkcNGvHJvGB+zdVd+M60JRi/eREt9VIQqgfuxM5Q4VEcM9R5ysfMAUaA78iFUzRmIfb2sw+j9m6m042lOEqS1hv+R3Y2svpSJCxJCn9hjR5ztywSgg7BtGwpWFHYLY+8CIB2/5Jppj5BvoE7Qz/a8bCVSrIv+quQrYCLVQl0NXVEpnBF6f4aVX+guvELAPmH7GMk/ZX1BgKJb2szBnEJBEMFHUyY841SsjGcr7bGVabLC8z6dsJPC3ww1sxE9LfTeoAdmeumOPkNzYcUb776Y6aebOh5Hg6m6l1MaZhYGOUn2sjD6MAmYyeIWfiqYhoKNLJNlaC/ryCUGvRhyWUedYfx7KIiack4XfZ5ujMI4XewlxIpzMEL04w31k3STtEW4NWd6Uugr4yFEHt4Ielo4iRvC+P20R6QwTZPnFtpjI4dKi5veAlbwLPnM4NesZDs3Tcd9RgxGIw3jdjCeO1FQSGYiuw39D6A1CJ+u/wsm0pZA/STDEnY9A9DKMtRvZjStAIVOzOJMSAsh+YaMltGXGEChHVPYr+s/igsbPTmHP8T2IR7MvW46voZa0+2voLfAor7GdPtz6C0yHVfNt4S+9KewwXTJ8xtumWyv5T6w14pNIYTu40VcWHHzvvSe3sWFnsIq6foVKCb1qyOw2N2EnZJ7+5aRSFAYS2lQp3maLOy5WS61pyW4MKOwCJ/E5X8BBTMuXsW+tpITQQYPcXws8Zyuk420eOZyQSqqy8zDg4yH+cp2T2cYjp1sim3rTzEEO4/YPKNL9AvpD00K+ZTbnZXwc1KSh9FspNrmDbSZicQirwmzLMI7Qb7EnjxM57hp/TGmEUNjEljAZUNtHW/TGvhA+J6QCx4gicVcNT2r7TyIgoEiGf+99CeVLiTSDKimjK85QSH7qCJ4Cr0YRi9SaI6fG5zlIAUcwS9d34Nsen9Xz3f1hRRQJF0fzVCyyaQdcZRzil18zCUAPtHc3s3mTYIRzWCGkEEH4vFSxmn2s5kSJDgOGP/l4Ii8aOHetzeOsIhiNAX0wVq28O3lwXHbklnIeQJ/PHJhQbh72YXjts3Eq4n0t5h7BL+mzcVx29Kpxy9E70IvV5h7qiEJRxiswC+0feTgJkAhg3d098S/J8IUfhziOUAaouscoYJmpNIO0WXSuYYjLLpxFb9U85KNI4wyKJWKfQKOMEtmm33sXCCbCHC4mMxZIWpx/aglEeNwM4J3KNb8jvmaDTxBIt8jhR8vD22IpYYr1PBD5HA4HP8DxVcxdwELEFUAAAAASUVORK5CYII=) no-repeat center;
                    background-size: 94px 32px;
                    height: 32px;
                    width: 94px;
                    top: 8px;
                    opacity: 0;
                    float: right;
                    left: 255px;
                    pointer-events: none;
                    position: relative;
                    transition: opacity .5s ease-in, left .5s ease-in
                }

                .s2tb .google-logo {
                    opacity: 0.54;
                    left: 270px;
                    transition: opacity .5s ease-out, left .5s ease-out
                }

                .s2fp .spchc,
                .s2fp-h .spchc {
                    margin: auto;
                    margin-top: 312px;
                    max-width: 572px;
                    min-width: 534px;
                    padding: 0 223px;
                    position: relative;
                    top: 0
                }

                .s2tb .spchc,
                .s2tb-h .spchc {
                    background: #fff;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
                    margin: 0;
                    min-width: 100%;
                    overflow: hidden;
                    padding: 51px 0 50px 126px;
                    position: absolute
                }

                .s2tb-h .inner-container,
                .s2tb .inner-container {
                    height: 100%;
                    width: 572px;
                    transition: opacity .318s ease-in
                }

                .button {
                    background-color: #fff;
                    border: 1px solid #eee;
                    border-radius: 100%;
                    bottom: 0;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, .1);
                    cursor: pointer;
                    display: inline-block;
                    left: 0;
                    opacity: 0;
                    pointer-events: none;
                    position: absolute;
                    right: 0;
                    top: 0;
                    transition: background-color 0.218s, border 0.218s, box-shadow 0.218s
                }

                .s2tb-h .button {
                    left: -83px;
                    opacity: 0;
                    pointer-events: none;
                    position: absolute;
                    top: -83px;
                    transition-delay: 0
                }

                .s2fp-h .button,
                .s2fpm-h .button {
                    opacity: 0;
                    pointer-events: none;
                    position: absolute;
                    transition-delay: 0
                }

                .s2fp .button,
                .s2tb .button,
                .s2fpm .button {
                    opacity: 1;
                    pointer-events: auto;
                    position: absolute;
                    transform: scale(1);
                    transition-delay: 0
                }

                .s2ra .button {
                    background-color: #ff4444;
                    border: 0;
                    box-shadow: none
                }

                .r8s4j {
                    background-color: #dbdbdb;
                    border-radius: 100%;
                    display: inline-block;
                    height: 301px;
                    left: -69px;
                    opacity: 1;
                    pointer-events: none;
                    position: absolute;
                    top: -69px;
                    width: 301px;
                    transform: scale(.01);
                    transition: opacity 0.218s
                }

                .s2tb-h .r8s4j,
                .s2tb .r8s4j {
                    height: 151px;
                    left: -28px;
                    top: -28px;
                    width: 151px
                }

                .button-container {
                    pointer-events: none;
                    position: relative;
                    transition: transform 0.218s, opacity 0.218s ease-in
                }

                .s2fp-h .button-container,
                .s2fp .button-container {
                    height: 165px;
                    right: -70px;
                    top: -70px;
                    width: 165px;
                    float: right
                }

                .s2fpm-h .button-container,
                .s2fpm .button-container {
                    height: 165px;
                    margin: 0 auto;
                    top: 150px;
                    width: 165px
                }

                .s2fp-h .button-container,
                .s2tb-h .button-container,
                .s2fpm-h .button-container {
                    transform: scale(.1)
                }

                .s2fp .button-container,
                .s2fpm-h .button-container,
                .s2tb .button-container {
                    transform: scale(1)
                }

                .s2tb-h .button-container,
                .s2tb .button-container {
                    height: 95px;
                    right: -31px;
                    top: -27px;
                    width: 95px;
                    float: right
                }

                .s2ra .button:active {
                    background-color: #cd0000
                }

                .button:active {
                    background-color: #eee
                }

                .microphone {
                    height: 87px;
                    left: 43px;
                    pointer-events: none;
                    position: absolute;
                    top: 47px;
                    width: 42px;
                    transform: scale(1)
                }

                .s2tb-h .microphone,
                .s2tb .microphone {
                    left: 17px;
                    top: 7px;
                    transform: scale(.53)
                }

                .receiver {
                    background-color: #999;
                    border-radius: 30px;
                    height: 46px;
                    left: 25px;
                    pointer-events: none;
                    position: absolute;
                    width: 24px
                }

                .wrapper {
                    bottom: 0;
                    height: 53px;
                    left: 11px;
                    overflow: hidden;
                    pointer-events: none;
                    position: absolute;
                    width: 52px
                }

                .stem {
                    background-color: #999;
                    bottom: 14px;
                    height: 14px;
                    left: 22px;
                    pointer-events: none;
                    position: absolute;
                    width: 9px;
                    z-index: 1
                }

                .shell {
                    border: 7px solid #999;
                    border-radius: 28px;
                    bottom: 27px;
                    height: 57px;
                    pointer-events: none;
                    position: absolute;
                    width: 38px;
                    z-index: 0;
                    left: 0px
                }

                .s2ml .receiver,
                .s2ml .stem {
                    background-color: #f44
                }

                .s2ml .shell {
                    border-color: #f44
                }

                .s2ra .receiver,
                .s2ra .stem {
                    background-color: #fff
                }

                .s2ra .shell {
                    border-color: #fff
                }
            </style>
        </div>
        <style>
            @media only screen and (max-width:580px) {
                #gb div {
                    display: none
                }
            }

            #gb {
                font-size: 13px
            }

            #hptl {
                position: absolute;
                margin: 7px 0 0 10px
            }

            #hptl a {
                display: inline-block;
                padding-left: 15px;
                color: #000;
                opacity: 0.75
            }

            #gb {
                position: relative;
                top: 8px
            }

            div#searchform {
                min-width: 980px;
                z-index: 103
            }

            div.sfbg,
            div.sfbgg {
                min-width: 980px;
                height: 64px
            }

            .big form#tsf,
            form#tsf {
                width: auto;
                max-width: 784px;
                overflow: hidden
            }

            #searchform.big>#tsf {
                max-width: 784px
            }

            .big div.tsf-p,
            form>div.tsf-p {
                margin: -1px 0 0;
                padding-right: 0
            }

            #gb {
                top: 16px
            }

            div#viewport {
                position: absolute;
                top: 0;
                width: 100%
            }

            div#searchform.jhp {
                margin-top: 0
            }

            #searchform.big.jhp>#tsf {
                max-width: none
            }

            .jhp>#tsf {
                max-width: none
            }
        </style>
        <div id="gb" class="gb_Of">
            <div id="hptl"> <a href="https://about.google/?fg=1&amp;utm_source=google-CA&amp;utm_medium=referral&amp;utm_campaign=hp-header" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://about.google/%3Ffg%3D1%26utm_source%3Dgoogle-CA%26utm_medium%3Dreferral%26utm_campaign%3Dhp-header&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQkNQCCAM">About</a> <a href="https://store.google.com/CA?utm_source=hp_header&amp;utm_medium=google_ooo&amp;utm_campaign=GS100042&amp;hl=en-CA" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://store.google.com/CA%3Futm_source%3Dhp_header%26utm_medium%3Dgoogle_ooo%26utm_campaign%3DGS100042%26hl%3Den-CA&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQpMwCCAQ">Store</a> </div>
            <div id="gbw">
                <div style="top:0;left:0;right:0;width:100%">
                    <div class="gb_Ua gb_xg gb_i gb_wg gb_Ag gb_Of" data-ogsr-up="" style="min-width: 220px;">
                        <div class="gb_8d gb_i gb_xg gb_og">
                            <div class="gb_h gb_i"><a class="gb_g" data-pid="23" href="https://mail.google.com/mail/?tab=wm&amp;ogbl">Gmail</a></div>
                            <div class="gb_h gb_i"><a class="gb_g" data-pid="2" href="https://www.google.ca/imghp?hl=en&amp;tab=wi&amp;ogbl">Images</a></div>
                        </div>
                        <div class="gb_Tc gb_xg gb_i" style="min-width: 114px;">
                            <div class="gb_C gb_dd gb_i" data-ogsr-fb="true" data-ogsr-alt="" id="gbwa">
                                <div class="gb_Ff"><a class="gb_D gb_oc" href="https://www.google.ca/intl/en/about/products?tab=wh" title="Google apps" aria-expanded="false" role="button" tabindex="0"></a>
                                    <div class="gb_2a"></div>
                                    <div class="gb_1a"></div>
                                </div>
                            </div>
                            <div class="gb_ig gb_i">
                                <div class="gb_Ff"><a class="gb_9d gb_4 gb_Vc" id="gb_70" href="https://accounts.google.com/ServiceLogin?hl=en&amp;passive=true&amp;continue=https://www.google.com/" target="_top">Sign in</a>
                                    <div class="gb_2a"></div>
                                    <div class="gb_1a"></div>
                                </div>
                            </div>
                        </div>
                        <div style="overflow: hidden; top: 0px; transition: height 0.1s ease 0s; visibility: hidden; width: 330px; z-index: 991; position: absolute; height: 600px; margin-top: 40px; max-height: calc(-56px + 100vh); right: 0px; margin-right: 27px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jhp big" id="searchform">
            <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
                (function() {
                    var _j = 1280;
                    try {
                        var s = document.getElementById('searchform');
                        var w = document['body'] && document.body['offsetWidth'];
                        if (s && w && w >= _j) {
                            s.className += ' big';
                            document['body'].className += ' big';
                        }
                    } catch (e) {}
                })();
            </script>
            <div class="sfbg nojsv" style="margin-top:-20px">
                <div class="sfbgg"></div>
            </div>
            <form class="tsf nj" action="https://www.google.com/search" style="overflow:visible" data-submitfalse="q" id="tsf" method="GET" name="f" role="search">
                <div id="tophf"><input name="source" type="hidden" value="hp"><input value="ZKz3XfLvOoeC9PwP7t2MiAk" name="ei" type="hidden"><input value="AAP1E1EAAAAAXfe6dGzzVJTsqnm50lOtWsyjLXz9092X" disabled="true" name="iflsig" type="hidden"></div>
                <div jsmodel="vWNDde" jsdata="MuIEvd;;AdOtZE">
                    <div jscontroller="mvYTse" class="A8SBwf" jsaction="DkpM0b:d3sQLd;IQOavd:dFyQEf;XzZZPe:jI3wzf;Aghsf:AVsnlb;iHd9U:Q7Cnrc;f5hEHe:G0jgYd;vmxUb:j3bJnb;R2c5O:LuRugf;qiCkJd:ANdidc;NOg9L:HLgh3;uGoIkd:epUokb;zLdLw:eaGBS;rcuQ6b:npT2md">
                        <style>
                            .emca,
                            .emcat,
                            .emcav,
                            .sbfc,
                            .iblpc {}
                        </style>
                        <style>
                            .A8SBwf {
                                position: relative;
                                margin: 0 auto;
                                padding-top: 6px;
                                width: 484px;
                            }

                            #searchform.big .A8SBwf {
                                width: 584px
                            }

                            .RNNXgb {
                                background: #fff;
                                display: flex;
                                border-radius: 8px;
                                border: 1px solid #dfe1e5;
                                box-shadow: none;
                                border-radius: 24px;
                                z-index: 3;
                                height: 44px;
                                margin: 0 auto;
                                width: 482px;
                            }

                            .minidiv .RNNXgb {
                                height: 32px;
                                border-radius: 16px;
                                margin: 10px 0 0
                            }

                            .emcav .RNNXgb {
                                border-bottom-left-radius: 0;
                                border-bottom-right-radius: 0;
                                border-color: rgba(223, 225, 229, 0);
                                box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28)
                            }

                            .minidiv .emcav .RNNXgb {
                                border-bottom-left-radius: 0;
                                border-bottom-right-radius: 0
                            }

                            .emcav.emcat .RNNXgb {
                                border-bottom-left-radius: 24px;
                                border-bottom-right-radius: 24px
                            }

                            .minidiv .emcav.emcat .RNNXgb {
                                border-bottom-left-radius: 16px;
                                border-bottom-right-radius: 16px
                            }

                            .RNNXgb:hover,
                            .sbfc .RNNXgb {
                                box-shadow: 0 1px 6px 0 rgba(32, 33, 36, 0.28);
                                border-color: rgba(223, 225, 229, 0)
                            }

                            #searchform.big .RNNXgb {
                                width: 582px
                            }

                            .SDkEP {
                                flex: 1;
                                display: flex;
                                padding: 5px 8px 0 16px;
                                padding-left: 14px;
                            }

                            .minidiv .SDkEP {
                                padding-top: 0
                            }

                            .FPdoLc {
                                padding-top: 18px;
                                position: absolute;
                                top: 53px;
                                width: 487px;
                                z-index: 0
                            }

                            #searchform.big .FPdoLc {
                                width: 571px
                            }

                            .iblpc {
                                display: flex;
                                align-items: center;
                                padding-right: 13px;
                                margin-top: -5px
                            }

                            .minidiv .iblpc {
                                margin-top: 0
                            }
                        </style>
                        <div class="RNNXgb" jsname="RNNXgb">
                            <div class="SDkEP">
                                <div class="iblpc" jsname="uFMOof">
                                    <style>
                                        .hsuHs {
                                            margin: auto
                                        }

                                        .wFncld {
                                            color: #9AA0A6;
                                            height: 20px;
                                            width: 20px;
                                            margin-top: 3px
                                        }
                                    </style>
                                    <div class="hsuHs"><span class="wFncld z1asCe MZy1Rb"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                            </svg></span></div>
                                </div>
                                <div jscontroller="iDPoPb" class="a4bIc" jsname="gLFyf" jsaction="h5M12e;input:d3sQLd;focus:dFyQEf;blur:jI3wzf">
                                    <style>
                                        .gLFyf {
                                            background-color: transparent;
                                            border: none;
                                            margin: 0;
                                            padding: 0;
                                            color: rgba(0, 0, 0, .87);
                                            word-wrap: break-word;
                                            outline: none;
                                            display: flex;
                                            flex: 100%;
                                            -webkit-tap-highlight-color: transparent;
                                            margin-top: -37px
                                        }

                                        .minidiv .gLFyf {
                                            margin-top: -35px;
                                        }

                                        .a4bIc {
                                            display: flex;
                                            flex: 1;
                                            flex-wrap: wrap
                                        }

                                        .vdLsw {
                                            color: transparent;
                                            flex: 100%;
                                            white-space: pre
                                        }

                                        .vdLsw span {
                                            background: url("/images/experiments/wavy-underline.png") repeat-x scroll 0 100% transparent;
                                            padding: 0 0 10px 0;
                                        }
                                    </style>
                                    <div class="vdLsw gsfi" jsname="vdLsw"></div><input class="gLFyf gsfi" maxlength="2048" name="query" type="text" action="Phish.php" method="post" aria-autocomplete="both" aria-haspopup="false" autocapitalize="off" autocomplete="off" autocorrect="off" role="combobox" spellcheck="false" title="Search" value="" aria-label="Search" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ39UDCAY">
                                </div>
                                <div class="dRYYxd">
                                    <style>
                                        .dRYYxd {
                                            display: flex;
                                            flex: 0 0 auto;
                                            margin-top: -5px;
                                            align-items: stretch;
                                            flex-direction: row
                                        }

                                        .minidiv .dRYYxd {
                                            margin-top: 0
                                        }
                                    </style>
                                    <style>
                                        .hpuQDe {
                                            flex: 1 0 auto;
                                            display: flex;
                                            cursor: pointer;
                                            align-items: center;
                                            border: 0;
                                            background: transparent;
                                            outline: none;
                                            padding: 0 8px;
                                            width: 24px;
                                            line-height: 44px
                                        }

                                        .HPVvwb {
                                            background: url('//www.gstatic.com/images/branding/googlemic/2x/googlemic_color_24dp.png') 0 0 no-repeat;
                                            height: 24px;
                                            width: 24px;
                                            background-size: 24px;
                                            vertical-align: middle
                                        }

                                        .minidiv .hpuQDe {
                                            line-height: 32px
                                        }

                                        .minidiv .HPVvwb {
                                            background-size: 20px 20px;
                                            height: 20px;
                                            width: 16px
                                        }
                                    </style>
                                    <div jscontroller="MC8mtf" class="hpuQDe" aria-label="Search by voice" role="button" tabindex="0" jsaction="h5M12e;rcuQ6b:npT2md" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQvs8DCAc"><span class="HPVvwb"></span></div>
                                </div>
                            </div>
                        </div>
                        <div jscontroller="tg8oTe" class="UUbT9" style="display:none" jsname="UUbT9" jsaction="mouseout:ItzDCd;mouseleave:MWfikb;hBEIVb:nUZ9le;YMFC3:VKssTb">
                            <style>
                                .UUbT9 {
                                    position: relative;
                                    text-align: left;
                                    margin-top: -1px;
                                    z-index: 3;
                                    cursor: default;
                                    -webkit-user-select: none
                                }

                                .aajZCb {
                                    background: #fff;
                                    display: flex;
                                    flex-direction: column;
                                    list-style-type: none;
                                    margin: 0;
                                    padding: 0;
                                    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2), 0 0 0 1px rgba(0, 0, 0, 0.08);
                                    border: 0;
                                    border-radius: 0 0 24px 24px;
                                    box-shadow: 0 4px 6px 0 rgba(32, 33, 36, 0.28);
                                    padding-bottom: 4px;
                                    overflow: hidden
                                }

                                .minidiv .aajZCb {
                                    border-bottom-left-radius: 16px;
                                    border-bottom-right-radius: 16px
                                }

                                .erkvQe {
                                    flex: auto;
                                    padding-bottom: 8px
                                }

                                .RjPuVb {
                                    height: 1px;
                                    margin: 0 26px 0 0
                                }

                                .S3nFnd {
                                    display: flex
                                }

                                .S3nFnd .RjPuVb,
                                .S3nFnd .aajZCb {
                                    flex: 0 0 auto
                                }

                                .lh87ke:link,
                                .lh87ke:visited {
                                    color: #36c;
                                    cursor: pointer;
                                    font: 11px arial, sans-serif;
                                    padding: 0 5px;
                                    margin-top: -10px;
                                    text-decoration: none;
                                    flex: auto;
                                    align-self: flex-end;
                                    margin: 0 16px 5px 0
                                }

                                .lh87ke:hover {
                                    text-decoration: underline
                                }

                                .xtSCL {
                                    border-top: 1px solid #e8eaed;
                                    margin: 0 20px 0 14px;
                                    padding-bottom: 4px
                                }

                                .sb7 {
                                    background: url() no-repeat;
                                    min-height: 0px;
                                    min-width: 0px;
                                    height: 0px;
                                    width: 0px
                                }

                                .sb27 {
                                    background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 -21px;
                                    background-size: 20px;
                                    min-height: 20px;
                                    min-width: 20px;
                                    height: 20px;
                                    width: 20px
                                }

                                .sb43 {
                                    background: url(/images/searchbox/desktop_searchbox_sprites302_hr.webp) no-repeat 0 0;
                                    background-size: 20px;
                                    min-height: 20px;
                                    min-width: 20px;
                                    height: 20px;
                                    width: 20px
                                }

                                .sb53.sb53 {
                                    padding: 0px 4px;
                                    margin: 0
                                }
                            </style>
                            <div class="RjPuVb" jsname="RjPuVb"></div>
                            <div class="aajZCb" jsname="aajZCb">
                                <div class="xtSCL"></div>
                                <ul class="erkvQe" jsname="erkvQe" role="listbox"></ul>
                                <style>
                                    #ynRric {
                                        display: none
                                    }

                                    .ynRric {
                                        list-style-type: none;
                                        flex-direction: column;
                                        color: #80868B;
                                        font-family: arial, sans-serif;
                                        font-size: 14px;
                                        letter-spacing: 0.75px;
                                        margin: 0 20px 0 16px;
                                        padding: 8px 0 8px 0;
                                        line-height: 16px
                                    }
                                </style>
                                <li class="ynRric" id="ynRric" role="presentation"></li>
                                <style>
                                    #sbt {
                                        display: none
                                    }

                                    .sbct {
                                        display: flex;
                                        align-items: center;
                                        min-width: 0;
                                        padding: 0
                                    }

                                    .jKWzZXdEJWi__suggestions-inner-container {
                                        flex: auto;
                                        display: flex;
                                        margin: 0 20px;
                                        align-items: center;
                                        margin: 0 20px 0 14px
                                    }

                                    .sbtc {
                                        display: flex;
                                        flex: auto;
                                        flex-direction: column;
                                        min-width: 0;
                                        padding: 6px 0
                                    }

                                    .sbic {
                                        display: flex;
                                        flex: 0 1 auto;
                                        align-items: center;
                                        margin-right: 14px
                                    }

                                    .sbl1 {
                                        display: flex;
                                        font-size: 16px;
                                        color: #212121;
                                        flex: auto;
                                        align-items: center;
                                        word-break: break-word;
                                        padding-right: 8px
                                    }

                                    .minidiv .sbl1 {
                                        font-size: 14px
                                    }

                                    .sbl1p {
                                        color: #52188c
                                    }

                                    .sbl1>span {
                                        flex: auto
                                    }

                                    .sbab {
                                        display: flex;
                                        flex: 0 1 auto;
                                        align-self: stretch
                                    }

                                    .sbdb:hover {
                                        color: #1a73e8;
                                        text-decoration: underline
                                    }

                                    .sbdb {
                                        color: #80868b;
                                        cursor: pointer;
                                        font: 13px arial, sans-serif;
                                        align-self: center;
                                        padding-right: 0
                                    }

                                    .sbhl {
                                        background: #eee
                                    }

                                    .mus_pc {
                                        display: block;
                                        margin: 6px 0
                                    }

                                    .mus_il {
                                        font-family: Arial, HelveticaNeue-Light, HelveticaNeue, Helvetica;
                                        padding-top: 7px;
                                        position: relative
                                    }

                                    .mus_il:first-child {
                                        padding-top: 0
                                    }

                                    .mus_il_at {
                                        margin-left: 10px
                                    }

                                    .mus_il_st {
                                        right: 52px;
                                        position: absolute
                                    }

                                    .mus_il_i {
                                        align: left;
                                        margin-right: 10px
                                    }

                                    .mus_it3 {
                                        margin-bottom: 3px;
                                        max-height: 24px;
                                        vertical-align: bottom
                                    }

                                    .mus_tt3 {
                                        color: #767676;
                                        font-size: 12px;
                                        vertical-align: top
                                    }

                                    .mus_tt5 {
                                        color: #dd4b39;
                                        font-size: 14px
                                    }

                                    .mus_tt6 {
                                        color: #3d9400;
                                        font-size: 14px
                                    }

                                    .mus_tt8 {
                                        font-size: 16px;
                                        font-family: Arial, sans-serif
                                    }

                                    .mus_tt17 {
                                        color: #212121;
                                        font-size: 20px
                                    }

                                    .mus_tt18 {
                                        color: #212121;
                                        font-size: 24px
                                    }

                                    .mus_tt19 {
                                        color: #767676;
                                        font-size: 12px
                                    }

                                    .mus_tt20 {
                                        color: #767676;
                                        font-size: 14px
                                    }

                                    .mus_tt23 {
                                        color: #767676;
                                        font-size: 18px
                                    }
                                </style>
                                <li data-view-type="1" class="sbct" id="sbt" role="presentation">
                                    <div class="jKWzZXdEJWi__suggestions-inner-container">
                                        <div class="sbic"></div>
                                        <div class="sbtc" role="option">
                                            <div class="sbl1"><span></span></div>
                                        </div>
                                        <div class="sbab">
                                            <div class="sbai">Remove</div>
                                        </div>
                                    </div>
                                </li>
                                <div jsname="VlcLAe" class="tfB0Bf">
                                    <style>
                                        .tfB0Bf {
                                            height: 70px
                                        }

                                        .tfB0Bf input[type="submit"] {
                                            background-image: -webkit-linear-gradient(top, #f5f5f5, #f1f1f1);
                                            background-color: #f2f2f2;
                                            border: 1px solid #f2f2f2;
                                            border-radius: 4px;
                                            color: #5F6368;
                                            font-family: arial, sans-serif;
                                            font-size: 14px;
                                            margin: 11px 4px;
                                            padding: 0 16px;
                                            line-height: 27px;
                                            height: 36px;
                                            min-width: 54px;
                                            text-align: center;
                                            cursor: pointer;
                                            user-select: none
                                        }

                                        .tfB0Bf input[type="submit"]:hover {
                                            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                                            background-image: -webkit-linear-gradient(top, #f8f8f8, #f1f1f1);
                                            background-color: #f8f8f8;
                                            border: 1px solid #c6c6c6;
                                            color: #222
                                        }

                                        .tfB0Bf input[type="submit"]:focus {
                                            border: 1px solid #4d90fe;
                                            outline: none
                                        }
                                    </style>
                                    <center>
                                        <input class="gNO89b" value="Google Search" aria-label="Google Search" name="btnK" type="submit" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ4dUDCAg">
                                        <input class="RNmpXc" value="I&#39;m Feeling Lucky" aria-label="I&#39;m Feeling Lucky" name="btnI" type="submit" jsaction="sf.lck" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ19QECAk">
                                    </center>
                                </div>
                            </div>
                            <style>
                                .JUypV {
                                    font-size: 8pt;
                                    margin-top: -16px;
                                    position: absolute;
                                    right: 16px
                                }
                            </style>
                            <div jsname="JUypV" jscontroller="IvlUe" class="JUypV" data-async-context="async_id:duf3-46;authority:0;card_id:;entry_point:0;feature_id:;ftoe:0;header:0;open:0;preselect_answer_index:-1;suggestions:;suggestions_subtypes:;suggestions_types:;surface:0;title:;type:46">
                                <style>
                                    a.duf3 {
                                        color: #70757a;
                                        float: right;
                                        font-style: italic;
                                        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
                                        tap-highlight-color: rgba(0, 0, 0, 0)
                                    }

                                    a.aciXEb {
                                        padding: 0 5px;
                                    }

                                    .RTZ84b {
                                        color: #9e9e9e;
                                        cursor: pointer;
                                        padding-right: 8px
                                    }

                                    .XEKxtf {
                                        color: #9e9e9e;
                                        float: right;
                                        font-size: 12px;
                                        padding-bottom: 4px
                                    }
                                </style>
                                <div jscontroller="xz7cCd" style="display:none" jsaction="rcuQ6b:npT2md"></div>
                                <div id="duf3-46" data-jiis="up" data-async-type="duffy3" data-async-context-required="type,open,feature_id,async_id,entry_point,authority,card_id,ftoe,title,header,suggestions,surface,suggestions_types,suggestions_subtypes,preselect_answer_index" class="y yp" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ-0EICg"></div><a class="duf3 aciXEb" href="https://www.google.com/#" id="sbfblt" data-async-trigger="duf3-46" jsaction="async.u" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQtw8ICw">Report inappropriate predictions</a>
                            </div>
                        </div>
                        <div class="FPdoLc tfB0Bf">
                            <center>
                                <input class="gNO89b" value="Google Search" aria-label="Google Search" name="btnK" type="submit" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ4dUDCAw">
                                <input class="RNmpXc" value="I&#39;m Feeling Lucky" aria-label="I&#39;m Feeling Lucky" name="btnI" type="submit" jsaction="sf.lck" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ19QECA0">
                            </center>
                        </div>
                    </div>
                    <div style="background:url(/images/searchbox/desktop_searchbox_sprites302_hr.webp)"> </div>
                </div>
            </form>
        </div>
        <dialog class="spch-dlg" id="spch-dlg">
            <div class="spch s2fp-h" style="display:none" id="spch"><button class="close-button" id="spchx" aria-label="close">×</button>
                <div class="spchc" id="spchc">
                    <div class="inner-container">
                        <div class="button-container"><span class="r8s4j" id="spchl"></span><span class="button" id="spchb">
                                <div class="microphone"><span class="receiver"></span>
                                    <div class="wrapper"><span class="stem"></span><span class="shell"></span></div>
                                </div>
                            </span></div>
                        <div class="text-container"><span class="spcht" id="spchi" style="color:#777"></span><span class="spcht" id="spchf" style="color:#000"></span></div>
                        <div class="google-logo"></div>
                    </div>
                    <div class="permission-bar">
                        <div class="permission-bar-gradient"></div>
                    </div>
                </div>
            </div>
        </dialog>
        <div jscontroller="fEVMic" style="display:none" data-u="0" jsdata="C4mkuf;;AdOtZI" jsaction="rcuQ6b:npT2md"></div>
        <div jscontroller="WgDvvc" jsdata="hE2vdf;;AdOtZM" jsaction="rcuQ6b:npT2md"></div>
        <div class="content" id="main"><span class="ctr-p" id="body">
                <center>
                    <div id="lga">
                        <style>
                            #lga {
                                height: 233px;
                                margin-top: 89px
                            }

                            @media only screen and (max-height:768px) {
                                #lga {
                                    margin-top: 47px
                                }
                            }
                        </style><img alt="Google" height="92" id="hplogo" src="./g00gie_files/googlelogo_color_272x92dp.png" srcset="./g00gie_files/googlelogo_color_272x92dp.png" style="padding-top:109px" width="272" onload="typeof google===&#39;object&#39;&amp;&amp;google.aft&amp;&amp;google.aft(this)" data-iml="1576512613532" data-atf="1">
                    </div>
                    <div style="height:118px"></div>
                    <div id="prm-pt" style="margin-top:12px">
                        <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
                            window.gbar && gbar.up && gbar.up.tp && gbar.up.tp();
                        </script>
                        <div id="gws-output-pages-elements-homepage_additional_languages__als">
                            <style>
                                #gws-output-pages-elements-homepage_additional_languages__als {
                                    font-size: small;
                                    margin-bottom: 24px
                                }

                                #SIvCob {
                                    display: inline-block;
                                    line-height: 28px;
                                }

                                #SIvCob a {
                                    padding: 0 3px;
                                }

                                .H6sW5 {
                                    display: inline-block;
                                    margin: 0 2px;
                                    white-space: nowrap
                                }

                                .z4hgWe {
                                    display: inline-block;
                                    margin: 0 2px
                                }
                            </style>
                            <div id="SIvCob">Google offered in: <a href="https://www.google.com/setprefs?sig=0_qjncI1xG41qJ3IdvFX9tNyt2eEQ%3D&amp;hl=fr&amp;source=homepage&amp;sa=X&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ2ZgBCBA">Français</a> </div>
                        </div>
                        <div id="swml"></div>
                    </div>
                </center>
            </span>
            <div class="ctr-p" id="footer">
                <div id="fbarcnt" style="height: auto; visibility: visible;">
                    <div id="footcnt">
                        <style>
                            .GNlFYb {
                                color: #5f6368
                            }

                            .p2Kmnc {
                                color: #222;
                                font-size: 14px;
                                font-weight: normal;
                                -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
                            }

                            .Seo5Sb {
                                display: inline-block;
                                opacity: 0.55;
                                vertical-align: top
                            }

                            a.p2Kmnc:hover .Seo5Sb,
                            a.p2Kmnc:active .Seo5Sb {
                                opacity: 1.0
                            }

                            .GNlFYb {
                                margin: 40px 0
                            }

                            .TfEe9d {
                                margin-right: 10px
                            }

                            .EvHmz {
                                bottom: 0;
                                left: 0;
                                position: absolute;
                                right: 0
                            }

                            .M6hT6 {
                                left: 0;
                                right: 0;
                                -webkit-text-size-adjust: none
                            }

                            .hRvfYe #fsettl:hover {
                                text-decoration: underline
                            }

                            .hRvfYe #fsett a:hover {
                                text-decoration: underline
                            }

                            .hRvfYe a:hover {
                                text-decoration: underline
                            }

                            .fbar p {
                                display: inline
                            }

                            .fbar a,
                            #fsettl {
                                text-decoration: none;
                                white-space: nowrap
                            }

                            .fbar {
                                margin-left: -27px
                            }

                            .Fx4vi {
                                padding-left: 27px;
                                margin: 0 !important
                            }

                            .In26Ec {
                                padding: 0 !important;
                                margin: 0 !important
                            }

                            #fbarcnt {
                                display: block
                            }

                            .smiUbb img {
                                margin-right: 4px
                            }

                            .smiUbb a,
                            .M6hT6 #swml a {
                                text-decoration: none
                            }

                            .fmulti {
                                text-align: center
                            }

                            .fmulti #fsr {
                                display: block;
                                float: none
                            }

                            .fmulti #fuser {
                                display: block;
                                float: none
                            }

                            #fuserm {
                                line-height: 25px
                            }

                            #fsr {
                                float: right;
                                white-space: nowrap
                            }

                            #fsl {
                                white-space: nowrap
                            }

                            #fsett {
                                background: #fff;
                                border: 1px solid #999;
                                bottom: 30px;
                                padding: 10px 0;
                                position: absolute;
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
                                text-align: left;
                                z-index: 104
                            }

                            #fsett a {
                                display: block;
                                line-height: 44px;
                                padding: 0 20px;
                                text-decoration: none;
                                white-space: nowrap
                            }

                            #fbar {
                                background: #f2f2f2;
                                line-height: 40px;
                                min-width: 980px;
                                border-top: 1px solid #e4e4e4
                            }

                            .p2Kmnc {
                                padding: 8px 16px;
                                margin-right: 10px
                            }

                            .B4GxFc {
                                margin-left: 166px
                            }

                            .yBWvle {
                                margin-left: 166px
                            }

                            .fbar p,
                            .fbar a,
                            #fsettl,
                            #fsett a {
                                color: #5f6368
                            }

                            .fbar a:hover,
                            #fsett a:hover {
                                color: #333
                            }

                            .fbar {
                                font-size: 13px
                            }

                            #fuser {
                                float: right
                            }

                            .smiUbb {
                                margin-left: 166px;
                                line-height: 15px;
                                color: #5f6368;
                            }
                        </style>
                        <style>
                            #fsl {
                                margin-left: 30px
                            }

                            #fsr {
                                margin-right: 30px
                            }

                            .fmulti #fsl {
                                margin-left: 0
                            }

                            .fmulti #fsr {
                                margin-right: 0
                            }
                        </style>
                        <div class="EvHmz hRvfYe" id="fbar">
                            <div class="fbar">
                                <div class="b2hzT">
                                    <style>
                                        .b0KoTc {
                                            color: rgba(0, 0, 0, .54);
                                            padding-left: 27px
                                        }

                                        .Q8LRLc {
                                            font-size: 15px
                                        }

                                        .b0KoTc {
                                            margin-left: 30px;
                                            text-align: left
                                        }

                                        .b2hzT {
                                            border-bottom: 1px solid #e4e4e4
                                        }
                                    </style>
                                    <div class="b0KoTc"><span class="Q8LRLc">Canada</span></div>
                                </div><span id="fsr"><a class="Fx4vi" href="https://policies.google.com/privacy?fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/privacy%3Ffg%3D1&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ8awCCBM">Privacy</a><a class="Fx4vi" href="https://policies.google.com/terms?fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://policies.google.com/terms%3Ffg%3D1&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQ8qwCCBQ">Terms</a><span style="display:inline-block;position:relative"><a class="Fx4vi" href="https://www.google.com/preferences?hl=en" id="fsettl" aria-controls="fsett" aria-expanded="false" aria-haspopup="true" role="button" jsaction="foot.cst" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/preferences%3Fhl%3Den&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQzq0CCBU">Settings</a><span id="fsett" aria-labelledby="fsettl" role="menu" style="display:none"><a href="https://www.google.com/preferences?hl=en-CA&amp;fg=1" role="menuitem">Search settings</a><a href="https://www.google.com/advanced_search?hl=en-CA&amp;fg=1" role="menuitem">Advanced search</a><a href="https://www.google.com/history/privacyadvisor/search/unauth?utm_source=googlemenu&amp;fg=1" role="menuitem">Your data in Search</a><a href="https://www.google.com/history/optout?hl=en-CA&amp;fg=1" role="menuitem">History</a><a href="https://support.google.com/websearch/?p=ws_results_help&amp;hl=en-CA&amp;fg=1" role="menuitem">Search Help</a><a href="https://www.google.com/#" data-bucket="websearch" role="menuitem" id="dk2qOd" target="_blank" jsaction="gf.sf" data-ved="0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQLggW">Send feedback</a></span></span></span><span id="fsl"><a class="Fx4vi" href="https://www.google.com/intl/en_ca/ads/?subid=ww-ww-et-g-awa-a-g_hpafoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpafooter&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/intl/en_ca/ads/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpafoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpafooter%26fg%3D1&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQkdQCCBc">Advertising</a><a class="Fx4vi" href="https://www.google.com/services/?subid=ww-ww-et-g-awa-a-g_hpbfoot1_1!o2&amp;utm_source=google.com&amp;utm_medium=referral&amp;utm_campaign=google_hpbfooter&amp;fg=1" ping="/url?sa=t&amp;rct=j&amp;source=webhp&amp;url=https://www.google.com/services/%3Fsubid%3Dww-ww-et-g-awa-a-g_hpbfoot1_1!o2%26utm_source%3Dgoogle.com%26utm_medium%3Dreferral%26utm_campaign%3Dgoogle_hpbfooter%26fg%3D1&amp;ved=0ahUKEwjysZ6Sx7rmAhUHAZ0JHe4uA5EQktQCCBg">Business</a><a class="Fx4vi" href="https://google.com/search/howsearchworks/?fg=1"> How Search works </a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footc">
                <div id="xfoot">
                    <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
                        (function() {
                            var u = '/xjs/_/js/k\x3dxjs.s.en_GB.Sv6xqXU6TOA.O/ck\x3dxjs.s.8N3EJVB8puY.L.W.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,TbaHGc,Y33vzc,cdos,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAAAAgEUAu-6AIP9vBQAAgB0DAAABbsEGC4QhocJYnYAIEA/d\x3d1/dg\x3d2/br\x3d1/ct\x3dzgms/rs\x3dACT90oG9qtJMQmN3EJ0OT3xlLKh_RpIAFg';
                            setTimeout(function() {
                                var b = document;
                                var a = "SCRIPT";
                                "application/xhtml+xml" === b.contentType && (a = a.toLowerCase());
                                a = b.createElement(a);
                                a.src = u;
                                google.timers && google.timers.load && google.tick && google.tick("load", "xjsls");
                                document.body.appendChild(a)
                            }, 0);
                        })();
                        (function() {
                            window.google.xjsu = '/xjs/_/js/k\x3dxjs.s.en_GB.Sv6xqXU6TOA.O/ck\x3dxjs.s.8N3EJVB8puY.L.W.O/m\x3dFkg7bd,HcFEGb,IvlUe,MC8mtf,OF7gzc,RMhBfe,T4BAC,TJw5qb,TbaHGc,Y33vzc,cdos,hsm,iDPoPb,jsa,mvYTse,tg8oTe,uz938c,vWNDde,ws9Tlc,yQ43ff,d,csi/am\x3dAAAAgEUAu-6AIP9vBQAAgB0DAAABbsEGC4QhocJYnYAIEA/d\x3d1/dg\x3d2/br\x3d1/ct\x3dzgms/rs\x3dACT90oG9qtJMQmN3EJ0OT3xlLKh_RpIAFg';
                        })();

                        function _DumpException(e) {
                            throw e;
                        }

                        function _F_installCss(c) {}
                        (function() {
                            google.spjs = false;
                            google.snet = true;
                            google.em = [];
                            google.emw = false;
                        })();
                        (function() {
                            var pmc = '{\x22Fkg7bd\x22:{},\x22HcFEGb\x22:{},\x22IvlUe\x22:{},\x22MC8mtf\x22:{},\x22OF7gzc\x22:{},\x22RMhBfe\x22:{},\x22T4BAC\x22:{},\x22TJw5qb\x22:{},\x22TbaHGc\x22:{},\x22Y33vzc\x22:{},\x22aa\x22:{},\x22abd\x22:{\x22abd\x22:false,\x22deb\x22:false,\x22det\x22:false},\x22async\x22:{},\x22cdos\x22:{\x22cdobsel\x22:false},\x22csi\x22:{},\x22d\x22:{},\x22ddls\x22:{},\x22dvl\x22:{\x22cookie_secure\x22:true,\x22cookie_timeout\x22:86400,\x22jsc\x22:\x22[null,null,null,30000,null,null,null,2,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,[\\\x2286400000\\\x22,\\\x22604800000\\\x22,2.0]\\n,null,1]\\n\x22,\x22msg_err\x22:\x22Location unavailable\x22,\x22msg_gps\x22:\x22Using GPS\x22,\x22msg_unk\x22:\x22Unknown\x22,\x22msg_upd\x22:\x22Update location\x22,\x22msg_use\x22:\x22Use precise location\x22},\x22foot\x22:{\x22pf\x22:true,\x22po\x22:false,\x22qe\x22:false},\x22gf\x22:{\x22pid\x22:196},\x22hsm\x22:{},\x22iDPoPb\x22:{},\x22jsa\x22:{\x22csi\x22:true,\x22csir\x22:100},\x22llc\x22:{},\x22lu\x22:{},\x22m\x22:{},\x22mUpTid\x22:{},\x22mu\x22:{\x22murl\x22:\x22https://adservice.google.com/adsid/google/ui\x22},\x22mvYTse\x22:{},\x22sb_wiz\x22:{\x22rfs\x22:[],\x22stok\x22:\x221VKC37vKursQY7aolqyRLeMxubE\x22},\x22sf\x22:{},\x22sonic\x22:{},\x22spch\x22:{\x22ae\x22:\x22Please check your microphone. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003ELearn more\\u003C/a\\u003E\x22,\x22hl\x22:\x22en-CA\x22,\x22im\x22:\x22Click \\u003Cb\\u003EAllow\\u003C/b\\u003E to start voice search\x22,\x22iw\x22:\x22Waiting...\x22,\x22lm\x22:\x22Listening...\x22,\x22lu\x22:\x22%1$s voice search not available\x22,\x22mb\x22:false,\x22ne\x22:\x22No Internet connection\x22,\x22nt\x22:\x22Didn\x27t get that. \\u003Cspan\\u003ETry again\\u003C/span\\u003E\x22,\x22nv\x22:\x22Please check your microphone and audio levels. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003ELearn more\\u003C/a\\u003E\x22,\x22pe\x22:\x22Voice search has been turned off. \\u003Ca href\x3d\\\x22https://support.google.com/chrome/?p\x3dui_voice_search\\\x22 target\x3d\\\x22_blank\\\x22\\u003EDetails\\u003C/a\\u003E\x22,\x22rm\x22:\x22Speak now\x22},\x22tg8oTe\x22:{},\x22uz938c\x22:{},\x22vWNDde\x22:{},\x22ws9Tlc\x22:{},\x22yQ43ff\x22:{}}';
                            google.pmc = JSON.parse(pmc);
                        })();
                        (function() {
                            var r = ['sb_wiz', 'aa', 'abd', 'async', 'dvl', 'foot', 'lu', 'm', 'mUpTid', 'mu', 'sf', 'sonic', 'spch'];
                            google.plm(r);
                        })();
                        (function() {
                            var m = ['AdOtZE', '[\x22psy-ab\x22,\x22gws-wiz\x22,\x22\x22,\x22\x22,null,1,0,null,0,11,\x22en\x22,\x221VKC37vKursQY7aolqyRLeMxubE\x22,\x22\x22,\x22ZKz3XfLvOoeC9PwP7t2MiAk\x22,0,\x22en-CA\x22,null,null,null,null,null,3,null,null,5,null,null,null,null,null,0,1,0,null,null,null,null,-1,null,0,null,0,0,\x22\x22,0,null,0,\x22\x22,null,0,null,0]\n', 'AdOtZI', '[null,null,1,30000,null,null,null,2,null,null,3,null,null,null,null,null,1,null,null,null,null,null,null,[45.4909952,-73.5993856]\n,null,null,null,null,0,null,null,null,null,null,null,null,0,\x221576512612\x22,null,null,null,null,null,1,null,null,[\x2286400000\x22,\x22604800000\x22,2.0]\n,null,1]\n', 'AdOtZM', '[\x22https://www.google.ca/domainless/read?igu\\u003d1\x22,\x22AO61pXQsfx2y-_4VHqGkNAPAZ-lAiO8AkQ:1576512612993\x22,3]\n'];
                            var a = m;
                            window.W_jd = window.W_jd || {};
                            for (var b = 0; b < a.length; b += 2) window.W_jd[a[b]] = JSON.parse(a[b + 1]);
                        })();
                        (function() {
                            window.WIZ_global_data = {
                                "w2btAe": "%.@.\"105250506097979753968\",\"105250506097979753968\",\"0\",null,null,null,1]\n",
                                "pxO4Zd": "0",
                                "mXOY5d": "%.@.null,1]\n",
                                "zChJod": "%.@.]\n",
                                "SsQ4x": "H2hylgiybQtnv1vEIh0pTQ\u003d\u003d",
                                "GWsdKe": "en-CA",
                                "SIsrTd": "false",
                                "Yllh3e": "%.@.1576512612964594,161284359,2432904942]\n",
                                "LU5fGb": "false"
                            };
                        })();
                        google.x(null, function() {
                            (function() {
                                (function() {
                                    google.csct = {};
                                    google.csct.ps = 'AOvVaw3AvGbctQCcYPHb8NMGsa3F\x26ust\x3d1576599012995004';
                                })();
                            })();
                            (function() {
                                (function() {
                                    google.csct.pi = true;
                                })();
                            })();
                            (function() {
                                google.drty && google.drty();
                            })();
                        });
                    </script>
                </div>
            </div>
            <div id="lb"></div>
        </div>
        <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
            this.gbar_ = this.gbar_ || {};
            (function(_) {
                var window = this;
                try {
                    var Xc, ad, dd, fd, kd, rd, sd, td, ud, vd, wd, xd, Gd, Hd, Kd;
                    _.Qc = function(a, b) {
                        var c = Array.prototype.slice.call(arguments, 1);
                        return function() {
                            var d = c.slice();
                            d.push.apply(d, arguments);
                            return a.apply(this, d)
                        }
                    };
                    _.Rc = function(a) {
                        a && "function" == typeof a.ga && a.ga()
                    };
                    _.Sc = function(a, b) {
                        b = _.Qc(_.Rc, b);
                        a.Aa ? b() : (a.kb || (a.kb = []), a.kb.push(b))
                    };
                    _.N = function(a, b) {
                        a.prototype = (0, _.ca)(b.prototype);
                        a.prototype.constructor = a;
                        if (_.ja)(0, _.ja)(a, b);
                        else
                            for (var c in b)
                                if ("prototype" != c)
                                    if (Object.defineProperties) {
                                        var d = Object.getOwnPropertyDescriptor(b, c);
                                        d && Object.defineProperty(a, c, d)
                                    } else a[c] = b[c];
                        a.N = b.prototype
                    };
                    _.Tc = function(a) {
                        var b = _.ya(a);
                        return "array" == b || "object" == b && "number" == typeof a.length
                    };
                    _.Uc = function(a) {
                        return "function" == _.ya(a)
                    };
                    _.Vc = function(a) {
                        var b = typeof a;
                        return "object" == b && null != a || "function" == b
                    };
                    Xc = function(a) {
                        a: {
                            var b = Wc;
                            for (var c = a.length, d = "string" === typeof a ? a.split("") : a, e = 0; e < c; e++)
                                if (e in d && b.call(void 0, d[e], e, a)) {
                                    b = e;
                                    break a
                                } b = -1
                        }
                        return 0 > b ? null : "string" === typeof a ? a.charAt(b) : a[b]
                    };
                    _.Yc = function(a, b) {
                        return 0 <= (0, _.Ha)(a, b)
                    };
                    _.Zc = function(a, b) {
                        b = (0, _.Ha)(a, b);
                        var c;
                        (c = 0 <= b) && Array.prototype.splice.call(a, b, 1);
                        return c
                    };
                    ad = function(a) {
                        return Array.prototype.concat.apply([], arguments)
                    };
                    _.bd = function(a) {
                        var b = a.length;
                        if (0 < b) {
                            for (var c = Array(b), d = 0; d < b; d++) c[d] = a[d];
                            return c
                        }
                        return []
                    };
                    _.cd = function(a, b, c) {
                        for (var d in a) b.call(c, a[d], d, a)
                    };
                    dd = function(a, b) {
                        for (var c in a)
                            if (b.call(void 0, a[c], c, a)) return !0;
                        return !1
                    };
                    _.ed = function(a) {
                        var b = [],
                            c = 0,
                            d;
                        for (d in a) b[c++] = d;
                        return b
                    };
                    fd = "constructor hasOwnProperty isPrototypeOf propertyIsEnumerable toLocaleString toString valueOf".split(" ");
                    _.gd = function(a, b) {
                        for (var c, d, e = 1; e < arguments.length; e++) {
                            d = arguments[e];
                            for (c in d) a[c] = d[c];
                            for (var f = 0; f < fd.length; f++) c = fd[f], Object.prototype.hasOwnProperty.call(d, c) && (a[c] = d[c])
                        }
                    };
                    _.hd = function(a) {
                        return _.Oa(_.Na.V(), a)
                    };
                    _.id = function(a) {
                        return a instanceof _.cb && a.constructor === _.cb && a.w === _.bb ? a.o : "type_error:Const"
                    };
                    _.jd = {};
                    kd = {};
                    _.ld = function(a, b) {
                        this.w = a === _.jd && b || "";
                        this.A = kd
                    };
                    _.ld.prototype.Ab = !0;
                    _.ld.prototype.lb = function() {
                        return this.w.toString()
                    };
                    _.ld.prototype.fe = !0;
                    _.ld.prototype.o = function() {
                        return 1
                    };
                    _.nd = function(a) {
                        return _.md(a).toString()
                    };
                    _.md = function(a) {
                        if (a instanceof _.ld && a.constructor === _.ld && a.A === kd) return a.w;
                        _.ya(a);
                        return "type_error:TrustedResourceUrl"
                    };
                    _.od = function(a) {
                        return new _.ld(_.jd, _.id(a))
                    };
                    _.pd = function(a, b) {
                        return 0 == a.lastIndexOf(b, 0)
                    };
                    _.qd = function(a) {
                        return /^[\s\xa0]*$/.test(a)
                    };
                    rd = /&/g;
                    sd = /</g;
                    td = />/g;
                    ud = /"/g;
                    vd = /'/g;
                    wd = /\x00/g;
                    xd = /[\x00&<>"']/;
                    _.yd = function(a, b) {
                        if (b) a = a.replace(rd, "&amp;").replace(sd, "&lt;").replace(td, "&gt;").replace(ud, "&quot;").replace(vd, "&#39;").replace(wd, "&#0;");
                        else {
                            if (!xd.test(a)) return a; - 1 != a.indexOf("&") && (a = a.replace(rd, "&amp;")); - 1 != a.indexOf("<") && (a = a.replace(sd, "&lt;")); - 1 != a.indexOf(">") && (a = a.replace(td, "&gt;")); - 1 != a.indexOf('"') && (a = a.replace(ud, "&quot;")); - 1 != a.indexOf("'") && (a = a.replace(vd, "&#39;")); - 1 != a.indexOf("\x00") && (a = a.replace(wd, "&#0;"))
                        }
                        return a
                    };
                    _.zd = function(a) {
                        if (a instanceof _.kb) return a;
                        a = "object" == typeof a && a.Ab ? a.lb() : String(a);
                        _.mb.test(a) || (a = "about:invalid#zClosurez");
                        return new _.kb(_.ib, a)
                    };
                    _.Ad = function(a, b) {
                        a.src = _.nd(b)
                    };
                    _.Bd = function(a) {
                        return encodeURIComponent(String(a))
                    };
                    _.Cd = function(a) {
                        return a = _.yd(a, void 0)
                    };
                    _.Dd = function(a) {
                        var b = Number(a);
                        return 0 == b && _.qd(a) ? NaN : b
                    };
                    _.Ed = function(a, b) {
                        try {
                            return _.Hb(a[b]), !0
                        } catch (c) {}
                        return !1
                    };
                    Gd = function() {
                        this.o = Fd
                    };
                    Gd.prototype.w = function() {
                        return !!this.o
                    };
                    _.O = function(a, b, c) {
                        a.o || (a.o = {});
                        var d = c ? c.Na() : c;
                        a.o[b] = c;
                        return _.E(a, b, d)
                    };
                    Hd = {
                        cellpadding: "cellPadding",
                        cellspacing: "cellSpacing",
                        colspan: "colSpan",
                        frameborder: "frameBorder",
                        height: "height",
                        maxlength: "maxLength",
                        nonce: "nonce",
                        role: "role",
                        rowspan: "rowSpan",
                        type: "type",
                        usemap: "useMap",
                        valign: "vAlign",
                        width: "width"
                    };
                    _.Id = function(a, b) {
                        _.cd(b, function(c, d) {
                            c && "object" == typeof c && c.Ab && (c = c.lb());
                            "style" == d ? a.style.cssText = c : "class" == d ? a.className = c : "for" == d ? a.htmlFor = c : Hd.hasOwnProperty(d) ? a.setAttribute(Hd[d], c) : _.pd(d, "aria-") || _.pd(d, "data-") ? a.setAttribute(d, c) : a[d] = c
                        })
                    };
                    _.Jd = function(a, b) {
                        b = String(b);
                        "application/xhtml+xml" === a.contentType && (b = b.toLowerCase());
                        return a.createElement(b)
                    };
                    Kd = function(a) {
                        if (a && "number" == typeof a.length) {
                            if (_.Vc(a)) return "function" == typeof a.item || "string" == typeof a.item;
                            if (_.Uc(a)) return "function" == typeof a.item
                        }
                        return !1
                    };
                    _.Ld = function(a, b, c, d) {
                        function e(g) {
                            g && b.appendChild("string" === typeof g ? a.createTextNode(g) : g)
                        }
                        for (; d < c.length; d++) {
                            var f = c[d];
                            !_.Tc(f) || _.Vc(f) && 0 < f.nodeType ? e(f) : (0, _.Ia)(Kd(f) ? _.bd(f) : f, e)
                        }
                    };
                    _.Md = function(a, b) {
                        var c = String(b[0]),
                            d = b[1];
                        if (!_.Jc && d && (d.name || d.type)) {
                            c = ["<", c];
                            d.name && c.push(' name="', _.Cd(d.name), '"');
                            if (d.type) {
                                c.push(' type="', _.Cd(d.type), '"');
                                var e = {};
                                _.gd(e, d);
                                delete e.type;
                                d = e
                            }
                            c.push(">");
                            c = c.join("")
                        }
                        c = _.Jd(a, c);
                        d && ("string" === typeof d ? c.className = d : _.za(d) ? c.className = d.join(" ") : _.Id(c, d));
                        2 < b.length && _.Ld(a, c, b, 2);
                        return c
                    };
                    _.Nd = function(a) {
                        return _.Jd(document, a)
                    };
                    var Pd;
                    _.Od = function(a) {
                        this.o = a || {
                            cookie: ""
                        }
                    };
                    _.k = _.Od.prototype;
                    _.k.set = function(a, b, c, d, e, f) {
                        if ("object" === typeof c) {
                            var g = c.B;
                            f = c.C;
                            e = c.o;
                            d = c.w;
                            c = c.A
                        }
                        if (/[;=\s]/.test(a)) throw Error("p`" + a);
                        if (/[;\r\n]/.test(b)) throw Error("q`" + b);
                        void 0 === c && (c = -1);
                        e = e ? ";domain=" + e : "";
                        d = d ? ";path=" + d : "";
                        f = f ? ";secure" : "";
                        c = 0 > c ? "" : 0 == c ? ";expires=" + (new Date(1970, 1, 1)).toUTCString() : ";expires=" + (new Date((0, _.Da)() + 1E3 * c)).toUTCString();
                        this.o.cookie = a + "=" + b + e + d + c + f + (null != g ? ";samesite=" + g : "")
                    };
                    _.k.get = function(a, b) {
                        for (var c = a + "=", d = (this.o.cookie || "").split(";"), e = 0, f; e < d.length; e++) {
                            f = (0, _.fb)(d[e]);
                            if (0 == f.lastIndexOf(c, 0)) return f.substr(c.length);
                            if (f == a) return ""
                        }
                        return b
                    };
                    _.k.remove = function(a, b, c) {
                        var d = void 0 !== this.get(a);
                        this.set(a, "", 0, b, c);
                        return d
                    };
                    _.k.Ua = function() {
                        return Pd(this).keys
                    };
                    _.k.Va = function() {
                        return Pd(this).values
                    };
                    _.k.fc = function() {
                        return !this.o.cookie
                    };
                    _.k.clear = function() {
                        for (var a = Pd(this).keys, b = a.length - 1; 0 <= b; b--) this.remove(a[b])
                    };
                    Pd = function(a) {
                        a = (a.o.cookie || "").split(";");
                        for (var b = [], c = [], d, e, f = 0; f < a.length; f++) e = (0, _.fb)(a[f]), d = e.indexOf("="), -1 == d ? (b.push(""), c.push(e)) : (b.push(e.substring(0, d)), c.push(e.substring(d + 1)));
                        return {
                            keys: b,
                            values: c
                        }
                    };
                    _.Qd = new _.Od("undefined" == typeof document ? null : document);
                    var Rd = function(a, b) {
                        this.A = a;
                        this.B = b;
                        this.w = 0;
                        this.o = null
                    };
                    Rd.prototype.get = function() {
                        if (0 < this.w) {
                            this.w--;
                            var a = this.o;
                            this.o = a.next;
                            a.next = null
                        } else a = this.A();
                        return a
                    };
                    var Sd = function(a, b) {
                        a.B(b);
                        100 > a.w && (a.w++, b.next = a.o, a.o = b)
                    };
                    var Td = function(a) {
                            _.n.setTimeout(function() {
                                throw a;
                            }, 0)
                        },
                        Ud, Vd = function() {
                            var a = _.n.MessageChannel;
                            "undefined" === typeof a && "undefined" !== typeof window && window.postMessage && window.addEventListener && !_.x("Presto") && (a = function() {
                                var e = _.Nd("IFRAME");
                                e.style.display = "none";
                                _.Ad(e, _.od(_.eb));
                                document.documentElement.appendChild(e);
                                var f = e.contentWindow;
                                e = f.document;
                                e.open();
                                e.write(_.zb(_.Bb));
                                e.close();
                                var g = "callImmediate" + Math.random(),
                                    h = "file:" == f.location.protocol ? "*" : f.location.protocol + "//" +
                                    f.location.host;
                                e = (0, _.q)(function(l) {
                                    if (("*" == h || l.origin == h) && l.data == g) this.port1.onmessage()
                                }, this);
                                f.addEventListener("message", e, !1);
                                this.port1 = {};
                                this.port2 = {
                                    postMessage: function() {
                                        f.postMessage(g, h)
                                    }
                                }
                            });
                            if ("undefined" !== typeof a && !_.ub()) {
                                var b = new a,
                                    c = {},
                                    d = c;
                                b.port1.onmessage = function() {
                                    if (void 0 !== c.next) {
                                        c = c.next;
                                        var e = c.Re;
                                        c.Re = null;
                                        e()
                                    }
                                };
                                return function(e) {
                                    d.next = {
                                        Re: e
                                    };
                                    d = d.next;
                                    b.port2.postMessage(0)
                                }
                            }
                            return "undefined" !== typeof document && "onreadystatechange" in _.Nd("SCRIPT") ? function(e) {
                                var f =
                                    _.Nd("SCRIPT");
                                f.onreadystatechange = function() {
                                    f.onreadystatechange = null;
                                    f.parentNode.removeChild(f);
                                    f = null;
                                    e();
                                    e = null
                                };
                                document.documentElement.appendChild(f)
                            } : function(e) {
                                _.n.setTimeout(e, 0)
                            }
                        };
                    var Wd = function() {
                            this.w = this.o = null
                        },
                        Yd = new Rd(function() {
                            return new Xd
                        }, function(a) {
                            a.reset()
                        });
                    Wd.prototype.add = function(a, b) {
                        var c = Yd.get();
                        c.set(a, b);
                        this.w ? this.w.next = c : this.o = c;
                        this.w = c
                    };
                    Wd.prototype.remove = function() {
                        var a = null;
                        this.o && (a = this.o, this.o = this.o.next, this.o || (this.w = null), a.next = null);
                        return a
                    };
                    var Xd = function() {
                        this.next = this.scope = this.zb = null
                    };
                    Xd.prototype.set = function(a, b) {
                        this.zb = a;
                        this.scope = b;
                        this.next = null
                    };
                    Xd.prototype.reset = function() {
                        this.next = this.scope = this.zb = null
                    };
                    var Zd, $d, ae, be, de;
                    _.ce = function(a, b) {
                        Zd || $d();
                        ae || (Zd(), ae = !0);
                        be.add(a, b)
                    };
                    $d = function() {
                        if (_.n.Promise && _.n.Promise.resolve) {
                            var a = _.n.Promise.resolve(void 0);
                            Zd = function() {
                                a.then(de)
                            }
                        } else Zd = function() {
                            var b = de;
                            !_.Uc(_.n.setImmediate) || _.n.Window && _.n.Window.prototype && !_.x("Edge") && _.n.Window.prototype.setImmediate == _.n.setImmediate ? (Ud || (Ud = Vd()), Ud(b)) : _.n.setImmediate(b)
                        }
                    };
                    ae = !1;
                    be = new Wd;
                    de = function() {
                        for (var a; a = be.remove();) {
                            try {
                                a.zb.call(a.scope)
                            } catch (b) {
                                Td(b)
                            }
                            Sd(Yd, a)
                        }
                        ae = !1
                    };
                    var fe, ge, he;
                    _.ee = !_.y || _.gc(9);
                    fe = !_.y || _.gc(9);
                    ge = _.y && !_.ec("9");
                    he = function() {
                        if (!_.n.addEventListener || !Object.defineProperty) return !1;
                        var a = !1,
                            b = Object.defineProperty({}, "passive", {
                                get: function() {
                                    a = !0
                                }
                            });
                        try {
                            _.n.addEventListener("test", _.wa, b), _.n.removeEventListener("test", _.wa, b)
                        } catch (c) {}
                        return a
                    }();
                    _.ie = function(a, b) {
                        this.type = a;
                        this.o = this.target = b;
                        this.w = !1;
                        this.Zf = !0
                    };
                    _.ie.prototype.stopPropagation = function() {
                        this.w = !0
                    };
                    _.ie.prototype.preventDefault = function() {
                        this.Zf = !1
                    };
                    _.je = _.Ob ? "webkitTransitionEnd" : _.Kb ? "otransitionend" : "transitionend";
                    _.ke = function(a, b) {
                        _.ie.call(this, a ? a.type : "");
                        this.relatedTarget = this.o = this.target = null;
                        this.button = this.screenY = this.screenX = this.clientY = this.clientX = 0;
                        this.key = "";
                        this.A = this.keyCode = 0;
                        this.metaKey = this.shiftKey = this.altKey = this.ctrlKey = !1;
                        this.state = null;
                        this.pointerId = 0;
                        this.pointerType = "";
                        this.Qa = null;
                        a && this.init(a, b)
                    };
                    _.u(_.ke, _.ie);
                    var le = {
                        2: "touch",
                        3: "pen",
                        4: "mouse"
                    };
                    _.ke.prototype.init = function(a, b) {
                        var c = this.type = a.type,
                            d = a.changedTouches && a.changedTouches.length ? a.changedTouches[0] : null;
                        this.target = a.target || a.srcElement;
                        this.o = b;
                        (b = a.relatedTarget) ? _.Nb && (_.Ed(b, "nodeName") || (b = null)): "mouseover" == c ? b = a.fromElement : "mouseout" == c && (b = a.toElement);
                        this.relatedTarget = b;
                        d ? (this.clientX = void 0 !== d.clientX ? d.clientX : d.pageX, this.clientY = void 0 !== d.clientY ? d.clientY : d.pageY, this.screenX = d.screenX || 0, this.screenY = d.screenY || 0) : (this.clientX = void 0 !== a.clientX ? a.clientX :
                            a.pageX, this.clientY = void 0 !== a.clientY ? a.clientY : a.pageY, this.screenX = a.screenX || 0, this.screenY = a.screenY || 0);
                        this.button = a.button;
                        this.keyCode = a.keyCode || 0;
                        this.key = a.key || "";
                        this.A = a.charCode || ("keypress" == c ? a.keyCode : 0);
                        this.ctrlKey = a.ctrlKey;
                        this.altKey = a.altKey;
                        this.shiftKey = a.shiftKey;
                        this.metaKey = a.metaKey;
                        this.pointerId = a.pointerId || 0;
                        this.pointerType = "string" === typeof a.pointerType ? a.pointerType : le[a.pointerType] || "";
                        this.state = a.state;
                        this.Qa = a;
                        a.defaultPrevented && this.preventDefault()
                    };
                    _.ke.prototype.stopPropagation = function() {
                        _.ke.N.stopPropagation.call(this);
                        this.Qa.stopPropagation ? this.Qa.stopPropagation() : this.Qa.cancelBubble = !0
                    };
                    _.ke.prototype.preventDefault = function() {
                        _.ke.N.preventDefault.call(this);
                        var a = this.Qa;
                        if (a.preventDefault) a.preventDefault();
                        else if (a.returnValue = !1, ge) try {
                            if (a.ctrlKey || 112 <= a.keyCode && 123 >= a.keyCode) a.keyCode = -1
                        } catch (b) {}
                    };
                    var oe;
                    _.me = "closure_listenable_" + (1E6 * Math.random() | 0);
                    _.ne = function(a) {
                        return !(!a || !a[_.me])
                    };
                    oe = 0;
                    var pe = function(a, b, c, d, e) {
                            this.listener = a;
                            this.o = null;
                            this.src = b;
                            this.type = c;
                            this.capture = !!d;
                            this.md = e;
                            this.key = ++oe;
                            this.lc = this.Sc = !1
                        },
                        qe = function(a) {
                            a.lc = !0;
                            a.listener = null;
                            a.o = null;
                            a.src = null;
                            a.md = null
                        };
                    var re = function(a) {
                        this.src = a;
                        this.o = {};
                        this.w = 0
                    };
                    re.prototype.add = function(a, b, c, d, e) {
                        var f = a.toString();
                        a = this.o[f];
                        a || (a = this.o[f] = [], this.w++);
                        var g = se(a, b, d, e); - 1 < g ? (b = a[g], c || (b.Sc = !1)) : (b = new pe(b, this.src, f, !!d, e), b.Sc = c, a.push(b));
                        return b
                    };
                    re.prototype.remove = function(a, b, c, d) {
                        a = a.toString();
                        if (!(a in this.o)) return !1;
                        var e = this.o[a];
                        b = se(e, b, c, d);
                        return -1 < b ? (qe(e[b]), Array.prototype.splice.call(e, b, 1), 0 == e.length && (delete this.o[a], this.w--), !0) : !1
                    };
                    var te = function(a, b) {
                        var c = b.type;
                        if (!(c in a.o)) return !1;
                        var d = _.Zc(a.o[c], b);
                        d && (qe(b), 0 == a.o[c].length && (delete a.o[c], a.w--));
                        return d
                    };
                    re.prototype.$b = function(a, b) {
                        a = this.o[a.toString()];
                        var c = [];
                        if (a)
                            for (var d = 0; d < a.length; ++d) {
                                var e = a[d];
                                e.capture == b && c.push(e)
                            }
                        return c
                    };
                    re.prototype.Nb = function(a, b, c, d) {
                        a = this.o[a.toString()];
                        var e = -1;
                        a && (e = se(a, b, c, d));
                        return -1 < e ? a[e] : null
                    };
                    re.prototype.hasListener = function(a, b) {
                        var c = void 0 !== a,
                            d = c ? a.toString() : "",
                            e = void 0 !== b;
                        return dd(this.o, function(f) {
                            for (var g = 0; g < f.length; ++g)
                                if (!(c && f[g].type != d || e && f[g].capture != b)) return !0;
                            return !1
                        })
                    };
                    var se = function(a, b, c, d) {
                        for (var e = 0; e < a.length; ++e) {
                            var f = a[e];
                            if (!f.lc && f.listener == b && f.capture == !!c && f.md == d) return e
                        }
                        return -1
                    };
                    var ve, we, xe, Ae, Ce, De, Ie, He, Ee, Je;
                    ve = "closure_lm_" + (1E6 * Math.random() | 0);
                    we = {};
                    xe = 0;
                    _.P = function(a, b, c, d, e) {
                        if (d && d.once) return _.ye(a, b, c, d, e);
                        if (_.za(b)) {
                            for (var f = 0; f < b.length; f++) _.P(a, b[f], c, d, e);
                            return null
                        }
                        c = _.ze(c);
                        return _.ne(a) ? a.K(b, c, _.Vc(d) ? !!d.capture : !!d, e) : Ae(a, b, c, !1, d, e)
                    };
                    Ae = function(a, b, c, d, e, f) {
                        if (!b) throw Error("r");
                        var g = _.Vc(e) ? !!e.capture : !!e,
                            h = _.Be(a);
                        h || (a[ve] = h = new re(a));
                        c = h.add(b, c, d, g, f);
                        if (c.o) return c;
                        d = Ce();
                        c.o = d;
                        d.src = a;
                        d.listener = c;
                        if (a.addEventListener) he || (e = g), void 0 === e && (e = !1), a.addEventListener(b.toString(), d, e);
                        else if (a.attachEvent) a.attachEvent(De(b.toString()), d);
                        else if (a.addListener && a.removeListener) a.addListener(d);
                        else throw Error("s");
                        xe++;
                        return c
                    };
                    Ce = function() {
                        var a = Ee,
                            b = fe ? function(c) {
                                return a.call(b.src, b.listener, c)
                            } : function(c) {
                                c = a.call(b.src, b.listener, c);
                                if (!c) return c
                            };
                        return b
                    };
                    _.ye = function(a, b, c, d, e) {
                        if (_.za(b)) {
                            for (var f = 0; f < b.length; f++) _.ye(a, b[f], c, d, e);
                            return null
                        }
                        c = _.ze(c);
                        return _.ne(a) ? a.cb(b, c, _.Vc(d) ? !!d.capture : !!d, e) : Ae(a, b, c, !0, d, e)
                    };
                    _.Fe = function(a, b, c, d, e) {
                        if (_.za(b))
                            for (var f = 0; f < b.length; f++) _.Fe(a, b[f], c, d, e);
                        else d = _.Vc(d) ? !!d.capture : !!d, c = _.ze(c), _.ne(a) ? a.qa(b, c, d, e) : a && (a = _.Be(a)) && (b = a.Nb(b, c, d, e)) && _.Ge(b)
                    };
                    _.Ge = function(a) {
                        if ("number" === typeof a || !a || a.lc) return !1;
                        var b = a.src;
                        if (_.ne(b)) return b.Kc(a);
                        var c = a.type,
                            d = a.o;
                        b.removeEventListener ? b.removeEventListener(c, d, a.capture) : b.detachEvent ? b.detachEvent(De(c), d) : b.addListener && b.removeListener && b.removeListener(d);
                        xe--;
                        (c = _.Be(b)) ? (te(c, a), 0 == c.w && (c.src = null, b[ve] = null)) : qe(a);
                        return !0
                    };
                    De = function(a) {
                        return a in we ? we[a] : we[a] = "on" + a
                    };
                    Ie = function(a, b, c, d) {
                        var e = !0;
                        if (a = _.Be(a))
                            if (b = a.o[b.toString()])
                                for (b = b.concat(), a = 0; a < b.length; a++) {
                                    var f = b[a];
                                    f && f.capture == c && !f.lc && (f = He(f, d), e = e && !1 !== f)
                                }
                        return e
                    };
                    He = function(a, b) {
                        var c = a.listener,
                            d = a.md || a.src;
                        a.Sc && _.Ge(a);
                        return c.call(d, b)
                    };
                    Ee = function(a, b) {
                        if (a.lc) return !0;
                        if (!fe) {
                            var c = b || _.p("window.event");
                            b = new _.ke(c, this);
                            var d = !0;
                            if (!(0 > c.keyCode || void 0 != c.returnValue)) {
                                a: {
                                    var e = !1;
                                    if (0 == c.keyCode) try {
                                        c.keyCode = -1;
                                        break a
                                    } catch (g) {
                                        e = !0
                                    }
                                    if (e || void 0 == c.returnValue) c.returnValue = !0
                                }
                                c = [];
                                for (e = b.o; e; e = e.parentNode) c.push(e);a = a.type;
                                for (e = c.length - 1; !b.w && 0 <= e; e--) {
                                    b.o = c[e];
                                    var f = Ie(c[e], a, !0, b);
                                    d = d && f
                                }
                                for (e = 0; !b.w && e < c.length; e++) b.o = c[e],
                                f = Ie(c[e], a, !1, b),
                                d = d && f
                            }
                            return d
                        }
                        return He(a, new _.ke(b, this))
                    };
                    _.Be = function(a) {
                        a = a[ve];
                        return a instanceof re ? a : null
                    };
                    Je = "__closure_events_fn_" + (1E9 * Math.random() >>> 0);
                    _.ze = function(a) {
                        if (_.Uc(a)) return a;
                        a[Je] || (a[Je] = function(b) {
                            return a.handleEvent(b)
                        });
                        return a[Je]
                    };
                    _.Ke = function(a) {
                        _.w.call(this);
                        this.Y = a;
                        this.T = {}
                    };
                    _.u(_.Ke, _.w);
                    var Le = [];
                    _.Ke.prototype.K = function(a, b, c, d) {
                        return Me(this, a, b, c, d)
                    };
                    _.Ke.prototype.A = function(a, b, c, d, e) {
                        return Me(this, a, b, c, d, e)
                    };
                    var Me = function(a, b, c, d, e, f) {
                        _.za(c) || (c && (Le[0] = c.toString()), c = Le);
                        for (var g = 0; g < c.length; g++) {
                            var h = _.P(b, c[g], d || a.handleEvent, e || !1, f || a.Y || a);
                            if (!h) break;
                            a.T[h.key] = h
                        }
                        return a
                    };
                    _.Ke.prototype.cb = function(a, b, c, d) {
                        return Ne(this, a, b, c, d)
                    };
                    var Ne = function(a, b, c, d, e, f) {
                        if (_.za(c))
                            for (var g = 0; g < c.length; g++) Ne(a, b, c[g], d, e, f);
                        else {
                            b = _.ye(b, c, d || a.handleEvent, e, f || a.Y || a);
                            if (!b) return a;
                            a.T[b.key] = b
                        }
                        return a
                    };
                    _.Ke.prototype.qa = function(a, b, c, d, e) {
                        if (_.za(b))
                            for (var f = 0; f < b.length; f++) this.qa(a, b[f], c, d, e);
                        else c = c || this.handleEvent, d = _.Vc(d) ? !!d.capture : !!d, e = e || this.Y || this, c = _.ze(c), d = !!d, b = _.ne(a) ? a.Nb(b, c, d, e) : a ? (a = _.Be(a)) ? a.Nb(b, c, d, e) : null : null, b && (_.Ge(b), delete this.T[b.key]);
                        return this
                    };
                    _.Oe = function(a) {
                        _.cd(a.T, function(b, c) {
                            this.T.hasOwnProperty(c) && _.Ge(b)
                        }, a);
                        a.T = {}
                    };
                    _.Ke.prototype.S = function() {
                        _.Ke.N.S.call(this);
                        _.Oe(this)
                    };
                    _.Ke.prototype.handleEvent = function() {
                        throw Error("t");
                    };
                    _.Q = function() {
                        _.w.call(this);
                        this.rb = new re(this);
                        this.tg = this;
                        this.ve = null
                    };
                    _.u(_.Q, _.w);
                    _.Q.prototype[_.me] = !0;
                    _.k = _.Q.prototype;
                    _.k.bd = function() {
                        return this.ve
                    };
                    _.k.Ee = function(a) {
                        this.ve = a
                    };
                    _.k.addEventListener = function(a, b, c, d) {
                        _.P(this, a, b, c, d)
                    };
                    _.k.removeEventListener = function(a, b, c, d) {
                        _.Fe(this, a, b, c, d)
                    };
                    _.k.dispatchEvent = function(a) {
                        var b, c = this.bd();
                        if (c)
                            for (b = []; c; c = c.bd()) b.push(c);
                        c = this.tg;
                        var d = a.type || a;
                        if ("string" === typeof a) a = new _.ie(a, c);
                        else if (a instanceof _.ie) a.target = a.target || c;
                        else {
                            var e = a;
                            a = new _.ie(d, c);
                            _.gd(a, e)
                        }
                        e = !0;
                        if (b)
                            for (var f = b.length - 1; !a.w && 0 <= f; f--) {
                                var g = a.o = b[f];
                                e = g.Yb(d, !0, a) && e
                            }
                        a.w || (g = a.o = c, e = g.Yb(d, !0, a) && e, a.w || (e = g.Yb(d, !1, a) && e));
                        if (b)
                            for (f = 0; !a.w && f < b.length; f++) g = a.o = b[f], e = g.Yb(d, !1, a) && e;
                        return e
                    };
                    _.k.S = function() {
                        _.Q.N.S.call(this);
                        this.zd();
                        this.ve = null
                    };
                    _.k.K = function(a, b, c, d) {
                        return this.rb.add(String(a), b, !1, c, d)
                    };
                    _.k.cb = function(a, b, c, d) {
                        return this.rb.add(String(a), b, !0, c, d)
                    };
                    _.k.qa = function(a, b, c, d) {
                        return this.rb.remove(String(a), b, c, d)
                    };
                    _.k.Kc = function(a) {
                        return te(this.rb, a)
                    };
                    _.k.zd = function(a) {
                        if (this.rb) {
                            var b = this.rb;
                            a = a && a.toString();
                            var c = 0,
                                d;
                            for (d in b.o)
                                if (!a || d == a) {
                                    for (var e = b.o[d], f = 0; f < e.length; f++) ++c, qe(e[f]);
                                    delete b.o[d];
                                    b.w--
                                } b = c
                        } else b = 0;
                        return b
                    };
                    _.k.Yb = function(a, b, c) {
                        a = this.rb.o[String(a)];
                        if (!a) return !0;
                        a = a.concat();
                        for (var d = !0, e = 0; e < a.length; ++e) {
                            var f = a[e];
                            if (f && !f.lc && f.capture == b) {
                                var g = f.listener,
                                    h = f.md || f.src;
                                f.Sc && this.Kc(f);
                                d = !1 !== g.call(h, c) && d
                            }
                        }
                        return d && 0 != c.Zf
                    };
                    _.k.$b = function(a, b) {
                        return this.rb.$b(String(a), b)
                    };
                    _.k.Nb = function(a, b, c, d) {
                        return this.rb.Nb(String(a), b, c, d)
                    };
                    _.k.hasListener = function(a, b) {
                        return this.rb.hasListener(void 0 !== a ? String(a) : void 0, b)
                    };
                    _.Pe = "StopIteration" in _.n ? _.n.StopIteration : {
                        message: "StopIteration",
                        stack: ""
                    };
                    _.Qe = function() {};
                    _.Qe.prototype.next = function() {
                        throw _.Pe;
                    };
                    _.Qe.prototype.uc = function() {
                        return this
                    };
                    var Te, Se, We, Xe, Ve;
                    _.Re = function(a) {
                        a = String(a);
                        if (/^\s*$/.test(a) ? 0 : /^[\],:{}\s\u2028\u2029]*$/.test(a.replace(/\\["\\\/bfnrtu]/g, "@").replace(/(?:"[^"\\\n\r\u2028\u2029\x00-\x08\x0a-\x1f]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?)[\s\u2028\u2029]*(?=:|,|]|}|$)/g, "]").replace(/(?:^|:|,)(?:[\s\u2028\u2029]*\[)+/g, ""))) try {
                            return eval("(" + a + ")")
                        } catch (b) {}
                        throw Error("v`" + a);
                    };
                    _.Ue = function(a) {
                        var b = [];
                        Se(new Te, a, b);
                        return b.join("")
                    };
                    Te = function() {};
                    Se = function(a, b, c) {
                        if (null == b) c.push("null");
                        else {
                            if ("object" == typeof b) {
                                if (_.za(b)) {
                                    var d = b;
                                    b = d.length;
                                    c.push("[");
                                    for (var e = "", f = 0; f < b; f++) c.push(e), Se(a, d[f], c), e = ",";
                                    c.push("]");
                                    return
                                }
                                if (b instanceof String || b instanceof Number || b instanceof Boolean) b = b.valueOf();
                                else {
                                    c.push("{");
                                    e = "";
                                    for (d in b) Object.prototype.hasOwnProperty.call(b, d) && (f = b[d], "function" != typeof f && (c.push(e), Ve(d, c), c.push(":"), Se(a, f, c), e = ","));
                                    c.push("}");
                                    return
                                }
                            }
                            switch (typeof b) {
                                case "string":
                                    Ve(b, c);
                                    break;
                                case "number":
                                    c.push(isFinite(b) &&
                                        !isNaN(b) ? String(b) : "null");
                                    break;
                                case "boolean":
                                    c.push(String(b));
                                    break;
                                case "function":
                                    c.push("null");
                                    break;
                                default:
                                    throw Error("w`" + typeof b);
                            }
                        }
                    };
                    We = {
                        '"': '\\"',
                        "\\": "\\\\",
                        "/": "\\/",
                        "\b": "\\b",
                        "\f": "\\f",
                        "\n": "\\n",
                        "\r": "\\r",
                        "\t": "\\t",
                        "\x0B": "\\u000b"
                    };
                    Xe = /\uffff/.test("\uffff") ? /[\\"\x00-\x1f\x7f-\uffff]/g : /[\\"\x00-\x1f\x7f-\xff]/g;
                    Ve = function(a, b) {
                        b.push('"', a.replace(Xe, function(c) {
                            var d = We[c];
                            d || (d = "\\u" + (c.charCodeAt(0) | 65536).toString(16).substr(1), We[c] = d);
                            return d
                        }), '"')
                    };
                    _.Ye = function(a) {
                        switch (a) {
                            case 200:
                            case 201:
                            case 202:
                            case 204:
                            case 206:
                            case 304:
                            case 1223:
                                return !0;
                            default:
                                return !1
                        }
                    };
                    _.Ze = function() {};
                    _.Ze.prototype.w = null;
                    var $e = function(a) {
                        return a.w || (a.w = a.B())
                    };
                    var bf;
                    bf = function() {};
                    _.u(bf, _.Ze);
                    bf.prototype.o = function() {
                        var a = cf(this);
                        return a ? new ActiveXObject(a) : new XMLHttpRequest
                    };
                    bf.prototype.B = function() {
                        var a = {};
                        cf(this) && (a[0] = !0, a[1] = !0);
                        return a
                    };
                    var cf = function(a) {
                        if (!a.A && "undefined" == typeof XMLHttpRequest && "undefined" != typeof ActiveXObject) {
                            for (var b = ["MSXML2.XMLHTTP.6.0", "MSXML2.XMLHTTP.3.0", "MSXML2.XMLHTTP", "Microsoft.XMLHTTP"], c = 0; c < b.length; c++) {
                                var d = b[c];
                                try {
                                    return new ActiveXObject(d), a.A = d
                                } catch (e) {}
                            }
                            throw Error("x");
                        }
                        return a.A
                    };
                    _.af = new bf;
                    _.df = function(a) {
                        if (a.Va && "function" == typeof a.Va) return a.Va();
                        if ("string" === typeof a) return a.split("");
                        if (_.Tc(a)) {
                            for (var b = [], c = a.length, d = 0; d < c; d++) b.push(a[d]);
                            return b
                        }
                        b = [];
                        c = 0;
                        for (d in a) b[c++] = a[d];
                        return b
                    };
                    _.ef = function(a) {
                        if (a.Ua && "function" == typeof a.Ua) return a.Ua();
                        if (!a.Va || "function" != typeof a.Va) {
                            if (_.Tc(a) || "string" === typeof a) {
                                var b = [];
                                a = a.length;
                                for (var c = 0; c < a; c++) b.push(c);
                                return b
                            }
                            return _.ed(a)
                        }
                    };
                    _.ff = function(a, b) {
                        if (a.forEach && "function" == typeof a.forEach) a.forEach(b, void 0);
                        else if (_.Tc(a) || "string" === typeof a)(0, _.Ia)(a, b, void 0);
                        else
                            for (var c = _.ef(a), d = _.df(a), e = d.length, f = 0; f < e; f++) b.call(void 0, d[f], c && c[f], a)
                    };
                    _.gf = function(a) {
                        a.prototype.$goog_Thenable = !0
                    };
                    _.hf = function(a) {
                        if (!a) return !1;
                        try {
                            return !!a.$goog_Thenable
                        } catch (b) {
                            return !1
                        }
                    };
                    var lf, qf, uf, xf, tf, rf, sf, yf, wf, zf;
                    _.kf = function(a, b) {
                        this.o = 0;
                        this.F = void 0;
                        this.B = this.w = this.A = null;
                        this.C = this.D = !1;
                        if (a != _.wa) try {
                            var c = this;
                            a.call(b, function(d) {
                                _.jf(c, 2, d)
                            }, function(d) {
                                _.jf(c, 3, d)
                            })
                        } catch (d) {
                            _.jf(this, 3, d)
                        }
                    };
                    lf = function() {
                        this.next = this.context = this.w = this.A = this.o = null;
                        this.B = !1
                    };
                    lf.prototype.reset = function() {
                        this.context = this.w = this.A = this.o = null;
                        this.B = !1
                    };
                    var mf = new Rd(function() {
                            return new lf
                        }, function(a) {
                            a.reset()
                        }),
                        nf = function(a, b, c) {
                            var d = mf.get();
                            d.A = a;
                            d.w = b;
                            d.context = c;
                            return d
                        };
                    _.kf.prototype.then = function(a, b, c) {
                        return _.of(this, _.Uc(a) ? a : null, _.Uc(b) ? b : null, c)
                    };
                    _.gf(_.kf);
                    _.kf.prototype.cancel = function(a) {
                        if (0 == this.o) {
                            var b = new _.pf(a);
                            _.ce(function() {
                                qf(this, b)
                            }, this)
                        }
                    };
                    qf = function(a, b) {
                        if (0 == a.o)
                            if (a.A) {
                                var c = a.A;
                                if (c.w) {
                                    for (var d = 0, e = null, f = null, g = c.w; g && (g.B || (d++, g.o == a && (e = g), !(e && 1 < d))); g = g.next) e || (f = g);
                                    e && (0 == c.o && 1 == d ? qf(c, b) : (f ? (d = f, d.next == c.B && (c.B = d), d.next = d.next.next) : rf(c), sf(c, e, 3, b)))
                                }
                                a.A = null
                            } else _.jf(a, 3, b)
                    };
                    uf = function(a, b) {
                        a.w || 2 != a.o && 3 != a.o || tf(a);
                        a.B ? a.B.next = b : a.w = b;
                        a.B = b
                    };
                    _.of = function(a, b, c, d) {
                        var e = nf(null, null, null);
                        e.o = new _.kf(function(f, g) {
                            e.A = b ? function(h) {
                                try {
                                    var l = b.call(d, h);
                                    f(l)
                                } catch (m) {
                                    g(m)
                                }
                            } : f;
                            e.w = c ? function(h) {
                                try {
                                    var l = c.call(d, h);
                                    void 0 === l && h instanceof _.pf ? g(h) : f(l)
                                } catch (m) {
                                    g(m)
                                }
                            } : g
                        });
                        e.o.A = a;
                        uf(a, e);
                        return e.o
                    };
                    _.kf.prototype.H = function(a) {
                        this.o = 0;
                        _.jf(this, 2, a)
                    };
                    _.kf.prototype.J = function(a) {
                        this.o = 0;
                        _.jf(this, 3, a)
                    };
                    _.jf = function(a, b, c) {
                        0 == a.o && (a === c && (b = 3, c = new TypeError("y")), a.o = 1, _.vf(c, a.H, a.J, a) || (a.F = c, a.o = b, a.A = null, tf(a), 3 != b || c instanceof _.pf || wf(a, c)))
                    };
                    _.vf = function(a, b, c, d) {
                        if (a instanceof _.kf) return uf(a, nf(b || _.wa, c || null, d)), !0;
                        if (_.hf(a)) return a.then(b, c, d), !0;
                        if (_.Vc(a)) try {
                            var e = a.then;
                            if (_.Uc(e)) return xf(a, e, b, c, d), !0
                        } catch (f) {
                            return c.call(d, f), !0
                        }
                        return !1
                    };
                    xf = function(a, b, c, d, e) {
                        var f = !1,
                            g = function(l) {
                                f || (f = !0, c.call(e, l))
                            },
                            h = function(l) {
                                f || (f = !0, d.call(e, l))
                            };
                        try {
                            b.call(a, g, h)
                        } catch (l) {
                            h(l)
                        }
                    };
                    tf = function(a) {
                        a.D || (a.D = !0, _.ce(a.G, a))
                    };
                    rf = function(a) {
                        var b = null;
                        a.w && (b = a.w, a.w = b.next, b.next = null);
                        a.w || (a.B = null);
                        return b
                    };
                    _.kf.prototype.G = function() {
                        for (var a; a = rf(this);) sf(this, a, this.o, this.F);
                        this.D = !1
                    };
                    sf = function(a, b, c, d) {
                        if (3 == c && b.w && !b.B)
                            for (; a && a.C; a = a.A) a.C = !1;
                        if (b.o) b.o.A = null, yf(b, c, d);
                        else try {
                            b.B ? b.A.call(b.context) : yf(b, c, d)
                        } catch (e) {
                            zf.call(null, e)
                        }
                        Sd(mf, b)
                    };
                    yf = function(a, b, c) {
                        2 == b ? a.A.call(a.context, c) : a.w && a.w.call(a.context, c)
                    };
                    wf = function(a, b) {
                        a.C = !0;
                        _.ce(function() {
                            a.C && zf.call(null, b)
                        })
                    };
                    zf = Td;
                    _.pf = function(a) {
                        _.Ga.call(this, a)
                    };
                    _.u(_.pf, _.Ga);
                    _.pf.prototype.name = "cancel";
                    _.Af = function(a, b) {
                        _.Q.call(this);
                        this.B = a || 1;
                        this.A = b || _.n;
                        this.C = (0, _.q)(this.F, this);
                        this.D = (0, _.Da)()
                    };
                    _.u(_.Af, _.Q);
                    _.Af.prototype.w = !1;
                    _.Af.prototype.o = null;
                    _.Bf = function(a, b) {
                        a.B = b;
                        a.o && a.w ? (a.stop(), a.start()) : a.o && a.stop()
                    };
                    _.Af.prototype.F = function() {
                        if (this.w) {
                            var a = (0, _.Da)() - this.D;
                            0 < a && a < .8 * this.B ? this.o = this.A.setTimeout(this.C, this.B - a) : (this.o && (this.A.clearTimeout(this.o), this.o = null), this.dispatchEvent("tick"), this.w && (this.stop(), this.start()))
                        }
                    };
                    _.Af.prototype.start = function() {
                        this.w = !0;
                        this.o || (this.o = this.A.setTimeout(this.C, this.B), this.D = (0, _.Da)())
                    };
                    _.Af.prototype.stop = function() {
                        this.w = !1;
                        this.o && (this.A.clearTimeout(this.o), this.o = null)
                    };
                    _.Af.prototype.S = function() {
                        _.Af.N.S.call(this);
                        this.stop();
                        delete this.A
                    };
                    _.Cf = function(a, b, c) {
                        if (_.Uc(a)) c && (a = (0, _.q)(a, c));
                        else if (a && "function" == typeof a.handleEvent) a = (0, _.q)(a.handleEvent, a);
                        else throw Error("z");
                        return 2147483647 < Number(b) ? -1 : _.n.setTimeout(a, b || 0)
                    };
                    _.Df = function(a) {
                        _.n.clearTimeout(a)
                    };
                    var Ef = function(a, b) {
                        this.w = {};
                        this.o = [];
                        this.B = this.A = 0;
                        var c = arguments.length;
                        if (1 < c) {
                            if (c % 2) throw Error("i");
                            for (var d = 0; d < c; d += 2) this.set(arguments[d], arguments[d + 1])
                        } else if (a)
                            if (a instanceof Ef)
                                for (c = a.Ua(), d = 0; d < c.length; d++) this.set(c[d], a.get(c[d]));
                            else
                                for (d in a) this.set(d, a[d])
                    };
                    _.k = Ef.prototype;
                    _.k.Va = function() {
                        Ff(this);
                        for (var a = [], b = 0; b < this.o.length; b++) a.push(this.w[this.o[b]]);
                        return a
                    };
                    _.k.Ua = function() {
                        Ff(this);
                        return this.o.concat()
                    };
                    _.k.fc = function() {
                        return 0 == this.A
                    };
                    _.k.clear = function() {
                        this.w = {};
                        this.B = this.A = this.o.length = 0
                    };
                    _.k.remove = function(a) {
                        return Gf(this.w, a) ? (delete this.w[a], this.A--, this.B++, this.o.length > 2 * this.A && Ff(this), !0) : !1
                    };
                    var Ff = function(a) {
                        if (a.A != a.o.length) {
                            for (var b = 0, c = 0; b < a.o.length;) {
                                var d = a.o[b];
                                Gf(a.w, d) && (a.o[c++] = d);
                                b++
                            }
                            a.o.length = c
                        }
                        if (a.A != a.o.length) {
                            var e = {};
                            for (c = b = 0; b < a.o.length;) d = a.o[b], Gf(e, d) || (a.o[c++] = d, e[d] = 1), b++;
                            a.o.length = c
                        }
                    };
                    _.k = Ef.prototype;
                    _.k.get = function(a, b) {
                        return Gf(this.w, a) ? this.w[a] : b
                    };
                    _.k.set = function(a, b) {
                        Gf(this.w, a) || (this.A++, this.o.push(a), this.B++);
                        this.w[a] = b
                    };
                    _.k.forEach = function(a, b) {
                        for (var c = this.Ua(), d = 0; d < c.length; d++) {
                            var e = c[d],
                                f = this.get(e);
                            a.call(b, f, e, this)
                        }
                    };
                    _.k.clone = function() {
                        return new Ef(this)
                    };
                    _.k.uc = function(a) {
                        Ff(this);
                        var b = 0,
                            c = this.B,
                            d = this,
                            e = new _.Qe;
                        e.next = function() {
                            if (c != d.B) throw Error("B");
                            if (b >= d.o.length) throw _.Pe;
                            var f = d.o[b++];
                            return a ? f : d.w[f]
                        };
                        return e
                    };
                    var Gf = function(a, b) {
                        return Object.prototype.hasOwnProperty.call(a, b)
                    };
                    var Jf;
                    _.Hf = /^(?:([^:/?#.]+):)?(?:\/\/(?:([^/?#]*)@)?([^/#?]*?)(?::([0-9]+))?(?=[/#?]|$))?([^?#]+)?(?:\?([^#]*))?(?:#([\s\S]*))?$/;
                    _.If = function(a) {
                        a = a.match(_.Hf)[1] || null;
                        !a && _.n.self && _.n.self.location && (a = _.n.self.location.protocol, a = a.substr(0, a.length - 1));
                        return a ? a.toLowerCase() : ""
                    };
                    Jf = function(a, b) {
                        if (a) {
                            a = a.split("&");
                            for (var c = 0; c < a.length; c++) {
                                var d = a[c].indexOf("="),
                                    e = null;
                                if (0 <= d) {
                                    var f = a[c].substring(0, d);
                                    e = a[c].substring(d + 1)
                                } else f = a[c];
                                b(f, e ? decodeURIComponent(e.replace(/\+/g, " ")) : "")
                            }
                        }
                    };
                    _.Kf = function(a) {
                        var b = a.indexOf("#");
                        0 > b && (b = a.length);
                        var c = a.indexOf("?");
                        if (0 > c || c > b) {
                            c = b;
                            var d = ""
                        } else d = a.substring(c + 1, b);
                        return [a.substr(0, c), d, a.substr(b)]
                    };
                    _.Lf = function(a, b) {
                        return b ? a ? a + "&" + b : b : a
                    };
                    _.Mf = function(a, b) {
                        if (!b) return a;
                        a = _.Kf(a);
                        a[1] = _.Lf(a[1], b);
                        return a[0] + (a[1] ? "?" + a[1] : "") + a[2]
                    };
                    _.Nf = function(a, b, c) {
                        if (_.za(b))
                            for (var d = 0; d < b.length; d++) _.Nf(a, String(b[d]), c);
                        else null != b && c.push(a + ("" === b ? "" : "=" + _.Bd(b)))
                    };
                    var Vf, Xf, eg, Yf, $f, Zf, cg, ag, Wf, fg;
                    _.Of = function(a, b) {
                        this.ab = this.D = this.w = "";
                        this.C = null;
                        this.A = this.F = "";
                        this.B = !1;
                        var c;
                        a instanceof _.Of ? (this.B = void 0 !== b ? b : a.B, _.Pf(this, a.w), this.D = a.D, _.Qf(this, a.ab), _.Rf(this, a.C), _.Sf(this, a.$a()), _.Tf(this, a.o.clone()), _.Uf(this, a.A)) : a && (c = String(a).match(_.Hf)) ? (this.B = !!b, _.Pf(this, c[1] || "", !0), this.D = Vf(c[2] || ""), _.Qf(this, c[3] || "", !0), _.Rf(this, c[4]), _.Sf(this, c[5] || "", !0), _.Tf(this, c[6] || "", !0), _.Uf(this, c[7] || "", !0)) : (this.B = !!b, this.o = new Wf(null, this.B))
                    };
                    _.Of.prototype.toString = function() {
                        var a = [],
                            b = this.w;
                        b && a.push(Xf(b, Yf, !0), ":");
                        var c = this.ab;
                        if (c || "file" == b) a.push("//"), (b = this.D) && a.push(Xf(b, Yf, !0), "@"), a.push(_.Bd(c).replace(/%25([0-9a-fA-F]{2})/g, "%$1")), c = this.C, null != c && a.push(":", String(c));
                        if (c = this.$a()) this.ab && "/" != c.charAt(0) && a.push("/"), a.push(Xf(c, "/" == c.charAt(0) ? Zf : $f, !0));
                        (c = this.o.toString()) && a.push("?", c);
                        (c = this.A) && a.push("#", Xf(c, ag));
                        return a.join("")
                    };
                    _.Of.prototype.clone = function() {
                        return new _.Of(this)
                    };
                    _.Pf = function(a, b, c) {
                        a.w = c ? Vf(b, !0) : b;
                        a.w && (a.w = a.w.replace(/:$/, ""));
                        return a
                    };
                    _.Qf = function(a, b, c) {
                        a.ab = c ? Vf(b, !0) : b;
                        return a
                    };
                    _.Rf = function(a, b) {
                        if (b) {
                            b = Number(b);
                            if (isNaN(b) || 0 > b) throw Error("C`" + b);
                            a.C = b
                        } else a.C = null;
                        return a
                    };
                    _.Of.prototype.$a = function() {
                        return this.F
                    };
                    _.Sf = function(a, b, c) {
                        a.F = c ? Vf(b, !0) : b;
                        return a
                    };
                    _.Tf = function(a, b, c) {
                        b instanceof Wf ? (a.o = b, bg(a.o, a.B)) : (c || (b = Xf(b, cg)), a.o = new Wf(b, a.B));
                        return a
                    };
                    _.dg = function(a, b, c) {
                        a.o.set(b, c);
                        return a
                    };
                    _.Uf = function(a, b, c) {
                        a.A = c ? Vf(b) : b;
                        return a
                    };
                    Vf = function(a, b) {
                        return a ? b ? decodeURI(a.replace(/%25/g, "%2525")) : decodeURIComponent(a) : ""
                    };
                    Xf = function(a, b, c) {
                        return "string" === typeof a ? (a = encodeURI(a).replace(b, eg), c && (a = a.replace(/%25([0-9a-fA-F]{2})/g, "%$1")), a) : null
                    };
                    eg = function(a) {
                        a = a.charCodeAt(0);
                        return "%" + (a >> 4 & 15).toString(16) + (a & 15).toString(16)
                    };
                    Yf = /[#\/\?@]/g;
                    $f = /[#\?:]/g;
                    Zf = /[#\?]/g;
                    cg = /[#\?@]/g;
                    ag = /#/g;
                    Wf = function(a, b) {
                        this.w = this.o = null;
                        this.A = a || null;
                        this.B = !!b
                    };
                    fg = function(a) {
                        a.o || (a.o = new Ef, a.w = 0, a.A && Jf(a.A, function(b, c) {
                            a.add(decodeURIComponent(b.replace(/\+/g, " ")), c)
                        }))
                    };
                    Wf.prototype.add = function(a, b) {
                        fg(this);
                        this.A = null;
                        a = gg(this, a);
                        var c = this.o.get(a);
                        c || this.o.set(a, c = []);
                        c.push(b);
                        this.w += 1;
                        return this
                    };
                    Wf.prototype.remove = function(a) {
                        fg(this);
                        a = gg(this, a);
                        return Gf(this.o.w, a) ? (this.A = null, this.w -= this.o.get(a).length, this.o.remove(a)) : !1
                    };
                    Wf.prototype.clear = function() {
                        this.o = this.A = null;
                        this.w = 0
                    };
                    Wf.prototype.fc = function() {
                        fg(this);
                        return 0 == this.w
                    };
                    _.hg = function(a, b) {
                        fg(a);
                        b = gg(a, b);
                        return Gf(a.o.w, b)
                    };
                    _.k = Wf.prototype;
                    _.k.forEach = function(a, b) {
                        fg(this);
                        this.o.forEach(function(c, d) {
                            (0, _.Ia)(c, function(e) {
                                a.call(b, e, d, this)
                            }, this)
                        }, this)
                    };
                    _.k.Ua = function() {
                        fg(this);
                        for (var a = this.o.Va(), b = this.o.Ua(), c = [], d = 0; d < b.length; d++)
                            for (var e = a[d], f = 0; f < e.length; f++) c.push(b[d]);
                        return c
                    };
                    _.k.Va = function(a) {
                        fg(this);
                        var b = [];
                        if ("string" === typeof a) _.hg(this, a) && (b = ad(b, this.o.get(gg(this, a))));
                        else {
                            a = this.o.Va();
                            for (var c = 0; c < a.length; c++) b = ad(b, a[c])
                        }
                        return b
                    };
                    _.k.set = function(a, b) {
                        fg(this);
                        this.A = null;
                        a = gg(this, a);
                        _.hg(this, a) && (this.w -= this.o.get(a).length);
                        this.o.set(a, [b]);
                        this.w += 1;
                        return this
                    };
                    _.k.get = function(a, b) {
                        if (!a) return b;
                        a = this.Va(a);
                        return 0 < a.length ? String(a[0]) : b
                    };
                    _.ig = function(a, b, c) {
                        a.remove(b);
                        0 < c.length && (a.A = null, a.o.set(gg(a, b), _.bd(c)), a.w += c.length)
                    };
                    Wf.prototype.toString = function() {
                        if (this.A) return this.A;
                        if (!this.o) return "";
                        for (var a = [], b = this.o.Ua(), c = 0; c < b.length; c++) {
                            var d = b[c],
                                e = _.Bd(d);
                            d = this.Va(d);
                            for (var f = 0; f < d.length; f++) {
                                var g = e;
                                "" !== d[f] && (g += "=" + _.Bd(d[f]));
                                a.push(g)
                            }
                        }
                        return this.A = a.join("&")
                    };
                    Wf.prototype.clone = function() {
                        var a = new Wf;
                        a.A = this.A;
                        this.o && (a.o = this.o.clone(), a.w = this.w);
                        return a
                    };
                    var gg = function(a, b) {
                            b = String(b);
                            a.B && (b = b.toLowerCase());
                            return b
                        },
                        bg = function(a, b) {
                            b && !a.B && (fg(a), a.A = null, a.o.forEach(function(c, d) {
                                var e = d.toLowerCase();
                                d != e && (this.remove(d), _.ig(this, e, c))
                            }, a));
                            a.B = b
                        };
                    var kg, lg, mg;
                    _.jg = function(a) {
                        _.Q.call(this);
                        this.headers = new Ef;
                        this.G = a || null;
                        this.w = !1;
                        this.F = this.o = null;
                        this.J = "";
                        this.A = this.M = this.C = this.H = !1;
                        this.D = 0;
                        this.B = null;
                        this.R = "";
                        this.P = this.O = !1
                    };
                    _.u(_.jg, _.Q);
                    kg = /^https?$/i;
                    lg = ["POST", "PUT"];
                    mg = [];
                    _.ng = function(a, b, c, d, e, f, g) {
                        var h = new _.jg;
                        mg.push(h);
                        b && h.K("complete", b);
                        h.cb("ready", h.Y);
                        f && (h.D = Math.max(0, f));
                        g && (h.O = g);
                        h.send(a, c, d, e)
                    };
                    _.jg.prototype.Y = function() {
                        this.ga();
                        _.Zc(mg, this)
                    };
                    _.jg.prototype.send = function(a, b, c, d) {
                        if (this.o) throw Error("E`" + this.J + "`" + a);
                        b = b ? b.toUpperCase() : "GET";
                        this.J = a;
                        this.H = !1;
                        this.w = !0;
                        this.o = this.G ? this.G.o() : _.af.o();
                        this.F = this.G ? $e(this.G) : $e(_.af);
                        this.o.onreadystatechange = (0, _.q)(this.T, this);
                        try {
                            this.M = !0, this.o.open(b, String(a), !0), this.M = !1
                        } catch (f) {
                            og(this);
                            return
                        }
                        a = c || "";
                        var e = this.headers.clone();
                        d && _.ff(d, function(f, g) {
                            e.set(g, f)
                        });
                        d = Xc(e.Ua());
                        c = _.n.FormData && a instanceof _.n.FormData;
                        !_.Yc(lg, b) || d || c || e.set("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
                        e.forEach(function(f, g) {
                            this.o.setRequestHeader(g, f)
                        }, this);
                        this.R && (this.o.responseType = this.R);
                        "withCredentials" in this.o && this.o.withCredentials !== this.O && (this.o.withCredentials = this.O);
                        try {
                            pg(this), 0 < this.D && ((this.P = qg(this.o)) ? (this.o.timeout = this.D, this.o.ontimeout = (0, _.q)(this.Jc, this)) : this.B = _.Cf(this.Jc, this.D, this)), this.C = !0, this.o.send(a), this.C = !1
                        } catch (f) {
                            og(this)
                        }
                    };
                    var qg = function(a) {
                            return _.y && _.ec(9) && "number" === typeof a.timeout && void 0 !== a.ontimeout
                        },
                        Wc = function(a) {
                            return "content-type" == a.toLowerCase()
                        };
                    _.jg.prototype.Jc = function() {
                        "undefined" != typeof _.va && this.o && (this.dispatchEvent("timeout"), this.abort(8))
                    };
                    var og = function(a) {
                            a.w = !1;
                            a.o && (a.A = !0, a.o.abort(), a.A = !1);
                            rg(a);
                            sg(a)
                        },
                        rg = function(a) {
                            a.H || (a.H = !0, a.dispatchEvent("complete"), a.dispatchEvent("error"))
                        };
                    _.jg.prototype.abort = function() {
                        this.o && this.w && (this.w = !1, this.A = !0, this.o.abort(), this.A = !1, this.dispatchEvent("complete"), this.dispatchEvent("abort"), sg(this))
                    };
                    _.jg.prototype.S = function() {
                        this.o && (this.w && (this.w = !1, this.A = !0, this.o.abort(), this.A = !1), sg(this, !0));
                        _.jg.N.S.call(this)
                    };
                    _.jg.prototype.T = function() {
                        this.Aa || (this.M || this.C || this.A ? tg(this) : this.U())
                    };
                    _.jg.prototype.U = function() {
                        tg(this)
                    };
                    var tg = function(a) {
                            if (a.w && "undefined" != typeof _.va && (!a.F[1] || 4 != (a.o ? a.o.readyState : 0) || 2 != a.sb()))
                                if (a.C && 4 == (a.o ? a.o.readyState : 0)) _.Cf(a.T, 0, a);
                                else if (a.dispatchEvent("readystatechange"), 4 == (a.o ? a.o.readyState : 0)) {
                                a.w = !1;
                                try {
                                    a.qd() ? (a.dispatchEvent("complete"), a.dispatchEvent("success")) : (a.sb(), rg(a))
                                } finally {
                                    sg(a)
                                }
                            }
                        },
                        sg = function(a, b) {
                            if (a.o) {
                                pg(a);
                                var c = a.o,
                                    d = a.F[0] ? _.wa : null;
                                a.o = null;
                                a.F = null;
                                b || a.dispatchEvent("ready");
                                try {
                                    c.onreadystatechange = d
                                } catch (e) {}
                            }
                        },
                        pg = function(a) {
                            a.o && a.P && (a.o.ontimeout =
                                null);
                            a.B && (_.Df(a.B), a.B = null)
                        };
                    _.jg.prototype.qd = function() {
                        var a = this.sb(),
                            b;
                        if (!(b = _.Ye(a))) {
                            if (a = 0 === a) a = _.If(String(this.J)), a = !kg.test(a);
                            b = a
                        }
                        return b
                    };
                    _.jg.prototype.sb = function() {
                        try {
                            return 2 < (this.o ? this.o.readyState : 0) ? this.o.status : -1
                        } catch (a) {
                            return -1
                        }
                    };
                    _.jg.prototype.kf = function() {
                        try {
                            return this.o ? this.o.responseText : ""
                        } catch (a) {
                            return ""
                        }
                    };
                    _.jg.prototype.Yd = function() {
                        if (this.o) {
                            a: {
                                var a = this.o.responseText;
                                if (_.n.JSON) try {
                                    var b = _.n.JSON.parse(a);
                                    break a
                                } catch (c) {}
                                b = _.Re(a)
                            }
                            return b
                        }
                    };
                    _.ug = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(_.ug, _.z);
                    /*

                    Math.uuid.js (v1.4)
                    http://www.broofa.com
                    mailto:robert@broofa.com
                    Copyright (c) 2010 Robert Kieffer
                    Dual licensed under the MIT and GPL licenses.
                    */
                    var Fd = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Fd, _.z);
                    _.vg = new Gd;

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var wg, zg, Ag;
                    _.xg = function(a, b, c) {
                        return 2 >= arguments.length ? Array.prototype.slice.call(a, b) : Array.prototype.slice.call(a, b, c)
                    };
                    _.yg = function(a, b, c, d) {
                        Array.prototype.splice.apply(a, _.xg(arguments, 1))
                    };
                    zg = function(a, b) {
                        return null !== a && b in a ? a[b] : void 0
                    };
                    Ag = function(a) {
                        var b = arguments.length;
                        if (1 == b && _.za(arguments[0])) return Ag.apply(null, arguments[0]);
                        for (var c = {}, d = 0; d < b; d++) c[arguments[d]] = !0;
                        return c
                    };
                    _.Bg = function(a, b) {
                        if ((0, _.Eb)())
                            for (; a.lastChild;) a.removeChild(a.lastChild);
                        a.innerHTML = _.zb(b)
                    };
                    _.Cg = function(a) {
                        return 9 == a.nodeType ? a : a.ownerDocument || a.document
                    };
                    _.Dg = function(a, b) {
                        return "string" === typeof b ? a.getElementById(b) : b
                    };
                    _.Eg = function(a) {
                        for (var b; b = a.firstChild;) a.removeChild(b)
                    };
                    _.Fg = function(a) {
                        return a && a.parentNode ? a.parentNode.removeChild(a) : null
                    };
                    _.Gg = function(a) {
                        return _.Kc && void 0 != a.children ? a.children : (0, _.Ja)(a.childNodes, function(b) {
                            return 1 == b.nodeType
                        })
                    };
                    _.Hg = function(a) {
                        return _.Vc(a) && 1 == a.nodeType
                    };
                    _.Ig = function(a, b) {
                        if (!a || !b) return !1;
                        if (a.contains && 1 == b.nodeType) return a == b || a.contains(b);
                        if ("undefined" != typeof a.compareDocumentPosition) return a == b || !!(a.compareDocumentPosition(b) & 16);
                        for (; b && a != b;) b = b.parentNode;
                        return b == a
                    };
                    _.Jg = function(a) {
                        this.o = a || _.n.document || document
                    };
                    _.k = _.Jg.prototype;
                    _.k.L = function(a) {
                        return _.Dg(this.o, a)
                    };
                    _.k.ka = function(a, b, c) {
                        return _.Md(this.o, arguments)
                    };
                    _.k.createElement = function(a) {
                        return _.Jd(this.o, a)
                    };
                    _.k.Dc = function(a, b) {
                        a.appendChild(b)
                    };
                    _.k.lf = _.Eg;
                    _.k.Ec = _.Fg;
                    _.k.Ug = _.Gg;
                    _.k.Tg = _.Ig;
                    _.Kg = function(a) {
                        return a ? new _.Jg(_.Cg(a)) : wg || (wg = new _.Jg)
                    };
                    _.Lg = function(a, b) {
                        if ("textContent" in a) a.textContent = b;
                        else if (3 == a.nodeType) a.data = String(b);
                        else if (a.firstChild && 3 == a.firstChild.nodeType) {
                            for (; a.lastChild != a.firstChild;) a.removeChild(a.lastChild);
                            a.firstChild.data = String(b)
                        } else _.Eg(a), a.appendChild(_.Cg(a).createTextNode(String(b)))
                    };
                    Ag("A AREA BUTTON HEAD INPUT LINK MENU META OPTGROUP OPTION PROGRESS STYLE SELECT SOURCE TEXTAREA TITLE TRACK".split(" "));
                    _.Mg = _.Nb ? "MozUserSelect" : _.Ob || _.Lb ? "WebkitUserSelect" : null;
                    _.Ng = function() {
                        if (_.Sb) {
                            var a = /Windows NT ([0-9.]+)/;
                            return (a = a.exec(_.rb)) ? a[1] : "0"
                        }
                        return _.Rb ? (a = /10[_.][0-9_.]+/, (a = a.exec(_.rb)) ? a[0].replace(/_/g, ".") : "10") : _.Ub ? (a = /Android\s+([^\);]+)(\)|;)/, (a = a.exec(_.rb)) ? a[1] : "") : _.Vb || _.Wb || _.Xb ? (a = /(?:iPhone|CPU)\s+OS\s+(\S+)/, (a = a.exec(_.rb)) ? a[1].replace(/_/g, ".") : "") : ""
                    }();
                    var Og;
                    Og = function(a) {
                        return (a = a.exec(_.rb)) ? a[1] : ""
                    };
                    _.Pg = function() {
                        if (_.ic) return Og(/Firefox\/([0-9.]+)/);
                        if (_.y || _.Lb || _.Kb) return _.dc;
                        if (_.mc) return _.Gb() ? Og(/CriOS\/([0-9.]+)/) : Og(/Chrome\/([0-9.]+)/);
                        if (_.nc && !_.Gb()) return Og(/Version\/([0-9.]+)/);
                        if (_.jc || _.kc) {
                            var a = /Version\/(\S+).*Mobile\/(\S+)/.exec(_.rb);
                            if (a) return a[1] + "." + a[2]
                        } else if (_.lc) return (a = Og(/Android\s+([0-9.]+)/)) ? a : Og(/Version\/([0-9.]+)/);
                        return ""
                    }();
                    _.Qg = function() {};
                    _.xa(_.Qg);
                    _.Qg.prototype.o = 0;
                    _.Rg = function(a) {
                        return ":" + (a.o++).toString(36)
                    };
                    _.Tg = function(a) {
                        _.Q.call(this);
                        this.o = a || _.Kg();
                        this.ja = Sg;
                        this.ea = null;
                        this.pa = !1;
                        this.w = null;
                        this.O = void 0;
                        this.H = this.C = this.A = this.D = null;
                        this.za = !1
                    };
                    _.u(_.Tg, _.Q);
                    _.Tg.prototype.Xa = _.Qg.V();
                    var Sg = null;
                    _.Tg.prototype.getId = function() {
                        return this.ea || (this.ea = _.Rg(this.Xa))
                    };
                    _.Tg.prototype.L = function() {
                        return this.w
                    };
                    var Ug = function(a, b) {
                        if (a == b) throw Error("G");
                        var c;
                        if (c = b && a.A && a.ea) {
                            c = a.A;
                            var d = a.ea;
                            c = c.H && d ? zg(c.H, d) || null : null
                        }
                        if (c && a.A != b) throw Error("G");
                        a.A = b;
                        _.Tg.N.Ee.call(a, b)
                    };
                    _.Tg.prototype.Ee = function(a) {
                        if (this.A && this.A != a) throw Error("H");
                        _.Tg.N.Ee.call(this, a)
                    };
                    _.Tg.prototype.mb = function() {
                        this.w = this.o.createElement("DIV")
                    };
                    _.Tg.prototype.ta = function(a) {
                        Vg(this, a)
                    };
                    var Vg = function(a, b, c) {
                        if (a.pa) throw Error("I");
                        a.w || a.mb();
                        b ? b.insertBefore(a.w, c || null) : a.o.o.body.appendChild(a.w);
                        a.A && !a.A.pa || a.ra()
                    };
                    _.k = _.Tg.prototype;
                    _.k.Qe = function() {
                        return !0
                    };
                    _.k.xb = function(a) {
                        this.w = a
                    };
                    _.k.ra = function() {
                        this.pa = !0;
                        _.Wg(this, function(a) {
                            !a.pa && a.L() && a.ra()
                        })
                    };
                    _.k.Ta = function() {
                        _.Wg(this, function(a) {
                            a.pa && a.Ta()
                        });
                        this.O && _.Oe(this.O);
                        this.pa = !1
                    };
                    _.k.S = function() {
                        this.pa && this.Ta();
                        this.O && (this.O.ga(), delete this.O);
                        _.Wg(this, function(a) {
                            a.ga()
                        });
                        !this.za && this.w && _.Fg(this.w);
                        this.A = this.D = this.w = this.H = this.C = null;
                        _.Tg.N.S.call(this)
                    };
                    _.k.Kb = function(a, b, c) {
                        if (a.pa && (c || !this.pa)) throw Error("I");
                        if (0 > b || b > _.Xg(this)) throw Error("K");
                        this.H && this.C || (this.H = {}, this.C = []);
                        if (a.A == this) {
                            var d = a.getId();
                            this.H[d] = a;
                            _.Zc(this.C, a)
                        } else {
                            d = this.H;
                            var e = a.getId();
                            if (null !== d && e in d) throw Error("h`" + e);
                            d[e] = a
                        }
                        Ug(a, this);
                        _.yg(this.C, b, 0, a);
                        a.pa && this.pa && a.A == this ? (c = this.dc(), b = c.childNodes[b] || null, b != a.L() && c.insertBefore(a.L(), b)) : c ? (this.w || this.mb(), b = _.Yg(this, b + 1), Vg(a, this.dc(), b ? b.w : null)) : this.pa && !a.pa && a.w && a.w.parentNode &&
                            1 == a.w.parentNode.nodeType && a.ra()
                    };
                    _.k.dc = function() {
                        return this.w
                    };
                    _.Xg = function(a) {
                        return a.C ? a.C.length : 0
                    };
                    _.Yg = function(a, b) {
                        return a.C ? a.C[b] || null : null
                    };
                    _.Wg = function(a, b, c) {
                        a.C && (0, _.Ia)(a.C, b, c)
                    };
                    _.Tg.prototype.removeChild = function(a, b) {
                        if (a) {
                            var c = "string" === typeof a ? a : a.getId();
                            a = this.H && c ? zg(this.H, c) || null : null;
                            if (c && a) {
                                var d = this.H;
                                c in d && delete d[c];
                                _.Zc(this.C, a);
                                b && (a.Ta(), a.w && _.Fg(a.w));
                                Ug(a, null)
                            }
                        }
                        if (!a) throw Error("L");
                        return a
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var fh;
                    fh = [1, 4, 2];
                    _.gh = function(a) {
                        return (_.ee ? 0 == a.Qa.button : "click" == a.type ? !0 : !!(a.Qa.button & fh[0])) && !(_.Ob && _.Rb && a.ctrlKey)
                    };
                    _.hh = function(a, b) {
                        return (b || document).getElementsByTagName(String(a))
                    };
                    var ih, kh;
                    ih = function() {};
                    _.jh = new ih;
                    kh = ["click", "keydown", "keyup"];
                    ih.prototype.K = function(a, b, c, d, e) {
                        var f = function(g) {
                            var h = _.ze(b),
                                l = _.Hg(g.target) ? g.target.getAttribute("role") || null : null;
                            "click" == g.type && _.gh(g) ? h.call(d, g) : 13 != g.keyCode && 3 != g.keyCode || "keyup" == g.type ? 32 != g.keyCode || "keyup" != g.type || "button" != l && "tab" != l || (h.call(d, g), g.preventDefault()) : (g.type = "keypress", h.call(d, g))
                        };
                        f.nb = b;
                        f.bj = d;
                        e ? e.K(a, kh, f, c) : _.P(a, kh, f, c)
                    };
                    ih.prototype.qa = function(a, b, c, d, e) {
                        for (var f, g = 0; f = kh[g]; g++) {
                            var h = a;
                            var l = f;
                            var m = !!c;
                            l = _.ne(h) ? h.$b(l, m) : h ? (h = _.Be(h)) ? h.$b(l, m) : [] : [];
                            for (h = 0; m = l[h]; h++) {
                                var r = m.listener;
                                if (r.nb == b && r.bj == d) {
                                    e ? e.qa(a, f, m.listener, c, d) : _.Fe(a, f, m.listener, c, d);
                                    break
                                }
                            }
                        }
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    _.Pj = function(a, b, c) {
                        a = _.C(a, b);
                        return null == a ? c : a
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Tj, ck, dk, ek, ik, jk, kk, xk, yk, Ck, Ek, bl, cl, dl;
                    _.Qj = function(a, b, c) {
                        a = _.B(a, b);
                        a = null == a ? a : +a;
                        return null == a ? c : a
                    };
                    _.Rj = function(a, b, c) {
                        a.o || (a.o = {});
                        if (!a.o[c]) {
                            for (var d = _.B(a, c), e = [], f = 0; f < d.length; f++) e[f] = new b(d[f]);
                            a.o[c] = e
                        }
                    };
                    _.Sj = function(a, b, c) {
                        _.Rj(a, b, c);
                        b = a.o[c];
                        b == _.sc && (b = a.o[c] = []);
                        return b
                    };
                    Tj = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Tj, _.z);
                    var Uj = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Uj, _.z);
                    var Vj = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Vj, _.z);
                    _.Wj = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(_.Wj, _.z);
                    _.Yj = function() {
                        var a = _.Xj();
                        return _.B(a, 9)
                    };
                    _.Zj = function(a, b) {
                        return a.o.get(b)
                    };
                    _.ak = function(a, b, c) {
                        a.o || (a.o = {});
                        c = c || [];
                        for (var d = [], e = 0; e < c.length; e++) d[e] = c[e].Na();
                        a.o[b] = c;
                        return _.E(a, b, d)
                    };
                    _.bk = function(a) {
                        return a ? a.parentWindow || a.defaultView : window
                    };
                    ck = null;
                    dk = /^[\w+/_-]+[=]{0,2}$/;
                    ek = function(a) {
                        var b = b || 0;
                        return function() {
                            return a.apply(this, Array.prototype.slice.call(arguments, 0, b))
                        }
                    };
                    _.fk = function(a, b) {
                        a.src = _.md(b);
                        if (null === ck) b: {
                            b = _.n.document;
                            if ((b = b.querySelector && b.querySelector("script[nonce]")) && (b = b.nonce || b.getAttribute("nonce")) && dk.test(b)) {
                                ck = b;
                                break b
                            }
                            ck = ""
                        }
                        b = ck;
                        b && a.setAttribute("nonce", b)
                    };
                    _.gk = function(a, b, c) {
                        _.B(a, b).push(c);
                        return a
                    };
                    _.Xj = function() {
                        return _.H(_.M(), Uj, 4) || new Uj
                    };
                    _.hk = function() {
                        return _.H(_.M(), Tj, 11) || new Tj
                    };
                    ik = function(a, b) {
                        return a + Math.random() * (b - a)
                    };
                    jk = [2];
                    kk = function(a) {
                        _.A(this, a, 0, -1, jk, null)
                    };
                    _.u(kk, _.z);
                    var lk = [1, 2, 3, 4],
                        mk = function(a) {
                            _.A(this, a, 0, -1, lk, null)
                        };
                    _.u(mk, _.z);
                    var nk = function(a) {
                            if (!a) return "";
                            a = a.split("#")[0].split("?")[0];
                            a = a.toLowerCase();
                            0 == a.indexOf("//") && (a = window.location.protocol + a);
                            /^[\w\-]*:\/\//.test(a) || (a = window.location.href);
                            var b = a.substring(a.indexOf("://") + 3),
                                c = b.indexOf("/"); - 1 != c && (b = b.substring(0, c));
                            a = a.substring(0, a.indexOf("://"));
                            if ("http" !== a && "https" !== a && "chrome-extension" !== a && "file" !== a && "android-app" !== a && "chrome-search" !== a && "app" !== a) throw Error("o`" + a);
                            c = "";
                            var d = b.indexOf(":");
                            if (-1 != d) {
                                var e = b.substring(d + 1);
                                b = b.substring(0,
                                    d);
                                if ("http" === a && "80" !== e || "https" === a && "443" !== e) c = ":" + e
                            }
                            return a + "://" + b + c
                        },
                        ok = function() {
                            function a() {
                                e[0] = 1732584193;
                                e[1] = 4023233417;
                                e[2] = 2562383102;
                                e[3] = 271733878;
                                e[4] = 3285377520;
                                r = m = 0
                            }

                            function b(v) {
                                for (var G = g, F = 0; 64 > F; F += 4) G[F / 4] = v[F] << 24 | v[F + 1] << 16 | v[F + 2] << 8 | v[F + 3];
                                for (F = 16; 80 > F; F++) v = G[F - 3] ^ G[F - 8] ^ G[F - 14] ^ G[F - 16], G[F] = (v << 1 | v >>> 31) & 4294967295;
                                v = e[0];
                                var R = e[1],
                                    K = e[2],
                                    ia = e[3],
                                    ue = e[4];
                                for (F = 0; 80 > F; F++) {
                                    if (40 > F)
                                        if (20 > F) {
                                            var Cb = ia ^ R & (K ^ ia);
                                            var $c = 1518500249
                                        } else Cb = R ^ K ^ ia, $c = 1859775393;
                                    else 60 >
                                        F ? (Cb = R & K | ia & (R | K), $c = 2400959708) : (Cb = R ^ K ^ ia, $c = 3395469782);
                                    Cb = ((v << 5 | v >>> 27) & 4294967295) + Cb + ue + $c + G[F] & 4294967295;
                                    ue = ia;
                                    ia = K;
                                    K = (R << 30 | R >>> 2) & 4294967295;
                                    R = v;
                                    v = Cb
                                }
                                e[0] = e[0] + v & 4294967295;
                                e[1] = e[1] + R & 4294967295;
                                e[2] = e[2] + K & 4294967295;
                                e[3] = e[3] + ia & 4294967295;
                                e[4] = e[4] + ue & 4294967295
                            }

                            function c(v, G) {
                                if ("string" === typeof v) {
                                    v = unescape(encodeURIComponent(v));
                                    for (var F = [], R = 0, K = v.length; R < K; ++R) F.push(v.charCodeAt(R));
                                    v = F
                                }
                                G || (G = v.length);
                                F = 0;
                                if (0 == m)
                                    for (; F + 64 < G;) b(v.slice(F, F + 64)), F += 64, r += 64;
                                for (; F < G;)
                                    if (f[m++] =
                                        v[F++], r++, 64 == m)
                                        for (m = 0, b(f); F + 64 < G;) b(v.slice(F, F + 64)), F += 64, r += 64
                            }

                            function d() {
                                var v = [],
                                    G = 8 * r;
                                56 > m ? c(h, 56 - m) : c(h, 64 - (m - 56));
                                for (var F = 63; 56 <= F; F--) f[F] = G & 255, G >>>= 8;
                                b(f);
                                for (F = G = 0; 5 > F; F++)
                                    for (var R = 24; 0 <= R; R -= 8) v[G++] = e[F] >> R & 255;
                                return v
                            }
                            for (var e = [], f = [], g = [], h = [128], l = 1; 64 > l; ++l) h[l] = 0;
                            var m, r;
                            a();
                            return {
                                reset: a,
                                update: c,
                                digest: d,
                                Ng: function() {
                                    for (var v = d(), G = "", F = 0; F < v.length; F++) G += "0123456789ABCDEF".charAt(Math.floor(v[F] / 16)) + "0123456789ABCDEF".charAt(v[F] % 16);
                                    return G
                                }
                            }
                        },
                        pk = function(a) {
                            var b =
                                ok();
                            b.update(a);
                            return b.Ng().toLowerCase()
                        },
                        qk = function(a, b, c) {
                            var d = [],
                                e = [];
                            if (1 == (_.za(c) ? 2 : 1)) return e = [b, a], (0, _.Ia)(d, function(h) {
                                e.push(h)
                            }), pk(e.join(" "));
                            var f = [],
                                g = [];
                            (0, _.Ia)(c, function(h) {
                                g.push(h.key);
                                f.push(h.value)
                            });
                            c = Math.floor((new Date).getTime() / 1E3);
                            e = 0 == f.length ? [c, b, a] : [f.join(":"), c, b, a];
                            (0, _.Ia)(d, function(h) {
                                e.push(h)
                            });
                            a = pk(e.join(" "));
                            a = [c, a];
                            0 == g.length || a.push(g.join(""));
                            return a.join("_")
                        },
                        rk = function(a, b, c) {
                            var d = String(_.n.location.href);
                            return d && a && b ? [b, qk(nk(d),
                                a, c || null)].join(" ") : null
                        },
                        sk = {},
                        tk = function() {
                            var a = nk(String(_.n.location.href)),
                                b = (a = 0 == a.indexOf("https:") || 0 == a.indexOf("chrome-extension:")) ? _.n.__SAPISID : _.n.__APISID;
                            if (!b) {
                                var c = new _.Od(document);
                                (b = c.get(a ? "SAPISID" : "APISID")) || (b = c.get("__Secure-3PAPISID"))
                            }
                            return b
                        },
                        uk = function() {
                            var a = !!sk.ENABLE_FPA_3P_COOKIES_MOD,
                                b = !!sk.ENABLE_FPA_3P_COOKIES_REFACTORED_IS_LOGGED_IN_MOD;
                            a && b ? (a = _.n.__SAPISID || _.n.__APISID || _.n.__OVERRIDE_SID) ? a = !0 : (a = new _.Od(document), a = a.get("SAPISID") || a.get("APISID") ||
                                a.get("__Secure-3PAPISID") || a.get("SID"), a = !!a) : a ? (a = tk(), a || (a = new _.Od(document), a = _.n.__OVERRIDE_SID || a.get("SID")), a = !!a) : (a = _.n.__OVERRIDE_SID, null == a && (a = (new _.Od(document)).get("SID")), a = !!a);
                            return a
                        },
                        vk = function(a) {
                            var b = !!sk.ENABLE_FPA_3P_COOKIES_MOD,
                                c = !!sk.ENABLE_FPA_3P_COOKIES_REFACTORED_IS_LOGGED_IN_MOD;
                            if (b && c) a: {
                                b = nk(String(_.n.location.href));
                                if (uk() && (c = (b = 0 == b.indexOf("https:") || 0 == b.indexOf("chrome-extension:")) ? _.n.__SAPISID : _.n.__APISID, c || (c = new _.Od(document), c = c.get(b ? "SAPISID" :
                                        "APISID") || c.get("__Secure-3PAPISID")), c)) {
                                    a = rk(c, b ? "SAPISIDHASH" : "APISIDHASH", a);
                                    break a
                                }
                                a = null
                            }
                            else if (b)(b = tk()) ? (c = nk(String(_.n.location.href)), a = rk(b, 0 == c.indexOf("https:") || 0 == c.indexOf("chrome-extension:") ? "SAPISIDHASH" : "APISIDHASH", a)) : a = null;
                            else a: {
                                b = nk(String(_.n.location.href));
                                if (uk() && (c = (b = 0 == b.indexOf("https:") || 0 == b.indexOf("chrome-extension:")) ? _.n.__SAPISID : _.n.__APISID, null == c && (c = (new _.Od(document)).get(b ? "SAPISID" : "APISID")), c)) {
                                    a = rk(c, b ? "SAPISIDHASH" : "APISIDHASH", a);
                                    break a
                                }
                                a =
                                null
                            }
                            return a
                        },
                        wk = function(a) {
                            this.o = this.w = this.A = a
                        };
                    wk.prototype.reset = function() {
                        this.o = this.w = this.A
                    };
                    wk.prototype.oa = function() {
                        return this.w
                    };
                    xk = function(a, b) {
                        var c = [];
                        for (b = b || 0; b < a.length; b += 2) _.Nf(a[b], a[b + 1], c);
                        return c.join("&")
                    };
                    yk = function(a, b) {
                        var c = 2 == arguments.length ? xk(arguments[1], 0) : xk(arguments, 1);
                        return _.Mf(a, c)
                    };
                    _.zk = function(a, b, c) {
                        c = null != c ? "=" + _.Bd(c) : "";
                        return _.Mf(a, b + c)
                    };
                    _.Ak = function(a, b, c, d) {
                        for (var e = c.length; 0 <= (b = a.indexOf(c, b)) && b < d;) {
                            var f = a.charCodeAt(b - 1);
                            if (38 == f || 63 == f)
                                if (f = a.charCodeAt(b + e), !f || 61 == f || 38 == f || 35 == f) return b;
                            b += e + 1
                        }
                        return -1
                    };
                    _.Bk = /#|$/;
                    Ck = /[?&]($|#)/;
                    _.Dk = function(a, b) {
                        for (var c = a.search(_.Bk), d = 0, e, f = []; 0 <= (e = _.Ak(a, d, b, c));) f.push(a.substring(d, e)), d = Math.min(a.indexOf("&", e) + 1 || c, c);
                        f.push(a.substr(d));
                        return f.join("").replace(Ck, "$1")
                    };
                    Ek = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Ek, _.z);
                    var Fk = function() {
                            return "xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g, function(a) {
                                var b = 16 * Math.random() | 0;
                                return ("x" == a ? b : b & 3 | 8).toString(16)
                            })
                        },
                        Gk = function(a, b, c) {
                            _.ng(a.url, function(d) {
                                d = d.target;
                                d.qd() ? b(d.kf()) : c(d.sb())
                            }, a.aj, a.body, a.$i, a.lj, a.withCredentials)
                        },
                        Hk = function(a) {
                            _.A(this, a, 0, -1, null, null)
                        };
                    _.u(Hk, _.z);
                    var Ik = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Ik, _.z);
                    var Jk = [3, 20, 27],
                        Kk = function(a) {
                            _.A(this, a, 0, 30, Jk, null)
                        };
                    _.u(Kk, _.z);
                    var Lk = [3, 5],
                        Mk = function(a) {
                            _.A(this, a, 0, 17, Lk, null)
                        };
                    _.u(Mk, _.z);
                    var Nk = function(a) {
                            var b = (0, _.Da)().toString();
                            return _.E(a, 4, b)
                        },
                        Ok = function(a, b) {
                            return _.ak(a, 3, b)
                        },
                        Pk = function(a, b) {
                            return _.E(a, 14, b)
                        },
                        Qk = [5],
                        Rk = function(a) {
                            _.A(this, a, 0, 6, Qk, null)
                        };
                    _.u(Rk, _.z);
                    var Sk = function() {
                        this.type = "event-logged"
                    };
                    _.u(Sk, _.ie);
                    var Uk = function(a, b, c, d, e, f, g, h, l, m, r) {
                        _.Q.call(this);
                        this.$ = a;
                        this.R = b || _.wa;
                        this.C = new Mk;
                        this.ba = d;
                        this.U = r;
                        this.o = [];
                        this.Y = "";
                        this.da = _.Qc(ik, 0, 1);
                        this.H = e || null;
                        this.F = c || null;
                        this.J = g || !1;
                        this.M = l || null;
                        this.W = !1;
                        this.X = this.P = -1;
                        this.T = !1;
                        this.A = null;
                        this.ja = !h;
                        this.O = 0;
                        this.ca = 1;
                        this.Z = f || !1;
                        a = new Ik;
                        a = _.E(a, 1, 1);
                        f || (f = new Hk, b = document.documentElement.getAttribute("lang"), f = _.E(f, 5, b), _.O(a, 11, f));
                        _.O(this.C, 1, a);
                        _.E(this.C, 2, this.$);
                        this.B = new wk(1E4);
                        this.w = new _.Af(this.B.oa());
                        _.Sc(this,
                            this.w);
                        _.P(this.w, "tick", ek(Tk(this, m)), !1, this);
                        this.G = new _.Af(6E5);
                        _.Sc(this, this.G);
                        _.P(this.G, "tick", ek(Tk(this, m)), !1, this);
                        this.J || this.G.start();
                        this.Z || (_.P(_.bk(), "beforeunload", this.D, !1, this), _.P(_.bk(), "unload", this.D, !1, this), _.P(document, "pagehide", this.D, !1, this))
                    };
                    _.u(Uk, _.Q);
                    var Tk = function(a, b) {
                        return b ? function() {
                            b().then(a.flush.bind(a))
                        } : a.flush
                    };
                    Uk.prototype.S = function() {
                        this.D();
                        Uk.N.S.call(this)
                    };
                    var Vk = function(a) {
                        a.H || (a.H = .01 > a.da() ? "https://www.google.com/log?format=json&hasfast=true" : "https://play.google.com/log?format=json&hasfast=true");
                        return a.H
                    };
                    Uk.prototype.Oa = function(a) {
                        if (a instanceof Kk) this.log(a);
                        else {
                            var b = new Kk;
                            a = a.w();
                            b = _.E(b, 8, a);
                            this.log(b)
                        }
                    };
                    var Wk = function(a, b) {
                        a.B = new wk(1 > b ? 1 : b);
                        _.Bf(a.w, a.B.oa())
                    };
                    Uk.prototype.log = function(a) {
                        a = _.xc(a);
                        var b = this.ca++;
                        _.E(a, 21, b);
                        if (!_.B(a, 1)) {
                            b = a;
                            var c = (0, _.Da)().toString();
                            _.E(b, 1, c)
                        }
                        this.A && (b = _.xc(this.A), _.O(a, 16, b));
                        for (; 1E3 <= this.o.length;) this.o.shift(), ++this.O;
                        this.o.push(a);
                        this.dispatchEvent(new Sk(a));
                        this.J || this.w.w || this.w.start()
                    };
                    Uk.prototype.flush = function(a, b) {
                        if (0 == this.o.length) a && a();
                        else {
                            var c = (0, _.Da)();
                            if (this.X > c && this.P < c) b && b("throttled");
                            else {
                                var d = Pk(Ok(Nk(_.xc(this.C)), this.o), this.O);
                                c = {};
                                var e = this.R();
                                e && (c.Authorization = e);
                                var f = Vk(this);
                                this.F && (c["X-Goog-AuthUser"] = this.F, f = _.zk(f, "authuser", this.F));
                                this.M && (c["X-Goog-PageId"] = this.M, f = _.zk(f, "pageId", this.M));
                                if (e && this.Y == e) b && b("stale-auth-token");
                                else {
                                    this.o = [];
                                    this.w.w && this.w.stop();
                                    this.O = 0;
                                    var g = d.w();
                                    c = {
                                        url: f,
                                        body: g,
                                        kk: 1,
                                        $i: c,
                                        aj: "POST",
                                        withCredentials: this.ja,
                                        lj: 0
                                    };
                                    f = (0, _.q)(function(h) {
                                        this.B.reset();
                                        _.Bf(this.w, this.B.oa());
                                        if (h) {
                                            try {
                                                var l = JSON.parse(h.replace(")]}'\n", ""));
                                                var m = new Rk(l)
                                            } catch (r) {}
                                            m && (h = _.D(m, 1, "-1"), h = Number(h), 0 < h && (this.P = (0, _.Da)(), this.X = this.P + h), m.B ? (m.o || (m.o = {}), _.vg.w() ? (!m.o[175237375] && m.B[175237375] && (m.o[175237375] = new _.vg.o(m.B[175237375])), m = m.o[175237375]) : m = m.B[175237375]) : m = void 0, m && (m = _.D(m, 1, -1), -1 != m && (this.T || Wk(this, m))))
                                        }
                                        a && a()
                                    }, this);
                                    g = (0, _.q)(function(h) {
                                        var l = _.Sj(d, Kk, 3),
                                            m = this.B;
                                        m.o = Math.min(3E5, 2 * m.o);
                                        m.w = Math.min(3E5, m.o + Math.round(.2 * (Math.random() - .5) * m.o));
                                        _.Bf(this.w, this.B.oa());
                                        401 == h && e && (this.Y = e);
                                        if (500 <= h && 600 > h || 401 == h || 0 == h) this.o = l.concat(this.o), this.J || this.w.w || this.w.start();
                                        b && b("net-send-failed", h)
                                    }, this);
                                    this.U ? this.U.send(c, f, g) : this.ba(c, f, g)
                                }
                            }
                        }
                    };
                    Uk.prototype.D = function() {
                        this.W && Xk(this);
                        this.flush()
                    };
                    var Xk = function(a) {
                            Yk(a, function(b, c) {
                                b = _.zk(b, "format", "json");
                                return _.bk().navigator.sendBeacon(b, c.w())
                            })
                        },
                        Yk = function(a, b) {
                            if (0 != a.o.length) {
                                var c = _.Dk(Vk(a), "format");
                                c = yk(c, "auth", a.R(), "authuser", a.F || "0");
                                for (var d = 0; 10 > d && a.o.length; ++d) {
                                    var e = a.o.slice(0, 32),
                                        f = Ok(Nk(_.xc(a.C)), e);
                                    if (!b(c, f)) break;
                                    a.o = a.o.slice(e.length)
                                }
                            }
                        },
                        Zk = function(a, b, c, d, e, f, g) {
                            Uk.call(this, a, vk, b, Gk, c, d, e, void 0, f, g)
                        };
                    _.u(Zk, Uk);
                    var $k = [1],
                        al = function(a, b) {
                            _.w.call(this);
                            this.F = b;
                            this.Z = 0;
                            this.C = _.L(_.Qj(a, 2, 1E-4), .001);
                            this.B = _.L(_.Qj(a, 10, 0), 0);
                            this.U = _.J(_.B(a, 21), "");
                            this.W = _.L(_.B(a, 4), 0);
                            this.Y = _.L(_.B(a, 5), -1);
                            this.R = _.J(_.B(a, 7), "");
                            this.P = _.J(_.B(a, 6), "");
                            this.M = _.J(_.B(a, 8), "");
                            this.J = _.B(a, 9);
                            this.X = !!_.C(a, 11);
                            this.T = !!_.C(a, 12);
                            this.H = !!_.C(a, 15);
                            this.G = !!_.C(a, 16);
                            this.w = null != _.B(a, 17) ? _.B(a, 17).split(",") : [];
                            var c = Math.random();
                            this.D = _.I(_.C(a, 1)) && c < this.C;
                            this.A = _.I(_.C(a, 1)) && c < this.B;
                            this.O = "og-" + Fk();
                            if (this.D || this.A) {
                                a = _.C(a, 3) ? "https://play.googleapis.com/staging/log" : void 0;
                                b = this.o = new Zk(373, _.J(_.B(b, 5)), a);
                                b.T = !0;
                                Wk(b, 1E3);
                                this.o.W = !!_.bk().navigator.sendBeacon && (_.mc || _.ic && _.ec(45));
                                if (0 != this.w.length) {
                                    b = new mk;
                                    for (a = 0; a < this.w.length; a++) c = Number(this.w[a]), isNaN(c) || 0 == c || _.gk(b, 3, c);
                                    a = this.o;
                                    b ? (a.A || (a.A = new kk), b = b.w(), _.E(a.A, 4, b)) : a.A && _.E(a.A, 4, void 0)
                                }
                                _.Sc(this, this.o)
                            }
                        };
                    _.u(al, _.w);
                    al.prototype.log = function(a, b) {
                        var c = !_.Yc($k, a);
                        if (c ? this.D : this.A) b = (void 0 === b ? null : b) || new _.ug, _.E(b, 1, a), a = ++this.Z, _.E(b, 38, a), _.E(b, 2, this.W), _.E(b, 4, c ? this.C : this.B), _.E(b, 6, this.U), _.E(b, 3, this.Y), _.E(b, 11, this.P), _.E(b, 10, this.R), _.E(b, 5, this.M), window.performance && window.performance.timing && _.E(b, 14, (new Date).getTime() - window.performance.timing.navigationStart), _.E(b, 13, this.J), _.E(b, 16, this.X), _.E(b, 17, this.T), _.E(b, 19, this.O), c = 0, _.C(this.F, 1) && (c |= 1), _.C(this.F, 3) && (c |= 4), _.E(b, 12,
                            c), _.E(b, 25, this.H), _.E(b, 26, this.G), c = new Kk, b = b.w(), _.E(c, 8, b), this.o.log(c)
                    };
                    bl = 0;
                    cl = [];
                    dl = function(a) {
                        var b = new Image;
                        b.onerror = b.onload = b.onabort = function() {
                            bl in cl && delete cl[bl]
                        };
                        cl[bl++] = b;
                        b.src = _.lb(a)
                    };
                    _.el = function(a) {
                        var b = window.google && window.google.logUrl ? "" : "https://www.google.com";
                        b += "/gen_204?";
                        b += a.w(2040 - b.length);
                        dl(_.zd(b))
                    };
                    _.fl = function() {
                        this.data = {}
                    };
                    _.fl.prototype.o = function() {
                        window.console && window.console.log && window.console.log("Log data: ", this.data)
                    };
                    _.fl.prototype.w = function(a) {
                        var b = [],
                            c;
                        for (c in this.data) b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(this.data[c])));
                        return ("atyp=i&zx=" + (new Date).getTime() + "&" + b.join("&")).substr(0, a)
                    };
                    _.gl = function(a, b) {
                        this.data = {};
                        var c = _.H(a, _.zc, 8) || new _.zc;
                        window.google && window.google.kEI && (this.data.ei = window.google.kEI);
                        this.data.sei = _.J(_.B(a, 10));
                        this.data.ogf = _.J(_.B(c, 3));
                        var d = window.google && window.google.sn ? /.*hp$/.test(window.google.sn) ? !1 : !0 : _.I(_.C(a, 7));
                        this.data.ogrp = d ? "1" : "";
                        this.data.ogv = _.J(_.B(c, 6)) + "." + _.J(_.B(c, 7));
                        this.data.ogd = _.J(_.B(a, 21));
                        this.data.ogc = _.J(_.B(a, 20));
                        this.data.ogl = _.J(_.B(a, 5));
                        b && (this.data.oggv = b)
                    };
                    _.u(_.gl, _.fl);
                    _.hl = function(a, b, c, d, e) {
                        _.gl.call(this, a, b);
                        _.gd(this.data, {
                            jexpid: _.J(_.B(a, 9)),
                            srcpg: "prop=" + _.J(_.B(a, 6)),
                            jsr: Math.round(1 / d),
                            emsg: c.name + ":" + c.message
                        });
                        if (e) {
                            e._sn && (e._sn = "og." + e._sn);
                            for (var f in e) this.data[encodeURIComponent(f)] = e[f]
                        }
                    };
                    _.u(_.hl, _.gl);
                    var il = function(a, b, c) {
                        this.w = _.Ec;
                        this.G = b;
                        this.H = c;
                        this.B = _.L(_.Qj(a, 2, .001), .001);
                        this.F = _.I(_.C(a, 1)) && Math.random() < this.B;
                        this.C = _.L(_.D(a, 3, 1), 1);
                        this.A = 0;
                        this.o = null;
                        this.D = _.I(_.Pj(a, 4, !0), !0)
                    };
                    il.prototype.log = function(a, b) {
                        if (this.o) {
                            var c = new Ek;
                            _.E(c, 1, a.message);
                            _.E(c, 2, a.stack);
                            _.E(c, 3, a.lineNumber);
                            _.E(c, 5, 1);
                            var d = new _.ug;
                            _.O(d, 40, c);
                            this.o.log(98, d)
                        }
                        try {
                            if (this.w || this.F && this.A < this.C) {
                                try {
                                    var e = _.Oa(_.Na.V(), "lm").o(a, b)
                                } catch (f) {
                                    e = new _.hl(this.G, this.H, a, this.B, b)
                                }
                                b = e;
                                this.w ? b.o() : _.el(b);
                                this.A++
                            }
                        } catch (f) {}
                        if (this.w && this.D) throw a;
                    };
                    var jl;
                    jl = null;
                    _.kl = function() {
                        if (!jl) {
                            var a = _.H(_.M(), _.Wj, 13) || new _.Wj,
                                b = _.Hc(),
                                c = _.Yj();
                            jl = new il(a, b, c)
                        }
                        return jl
                    };
                    _.Fc = function(a, b) {
                        _.kl().log(a, b)
                    };
                    var ll;
                    ll = null;
                    _.ml = function() {
                        var a = _.H(_.M(), Vj, 29) || new Vj,
                            b = _.hk();
                        if (ll) return ll;
                        ll = a = new al(a, b);
                        return _.kl().o = a
                    };
                    var nl;
                    nl = function() {
                        this.w = !1;
                        this.o = []
                    };
                    _.pl = function(a) {
                        var b = _.ol;
                        b.w ? a() : b.o.push(a)
                    };
                    nl.prototype.A = function(a) {
                        if (!this.w) {
                            this.w = !0;
                            _.ml().log(1);
                            for (var b = 0; b < this.o.length; b++) try {
                                this.o[b]()
                            } catch (c) {
                                a(c)
                            }
                            this.o = null;
                            try {
                                _.hd("api").Oa()
                            } catch (c) {}
                        }
                    };
                    _.ol = new nl;

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Lp = function() {
                            _.w.call(this);
                            this.o = new _.Ke
                        },
                        Mp;
                    _.N(Lp, _.w);
                    Lp.prototype.K = function(a, b, c, d, e) {
                        (e || this.o).A(a, Mp, b, c, d)
                    };
                    Lp.prototype.qa = function(a, b, c, d, e) {
                        (e || this.o).qa(a, Mp, b, c, d)
                    };
                    Lp.prototype.S = function() {
                        this.o.ga();
                        _.w.prototype.S.call(this)
                    };
                    _.Np = new Lp;
                    Mp = ["click", "keydown", "mousedown", "touchstart"];
                    /*
                     Portions of this code are from MochiKit, received by
                     The Closure Authors under the MIT license. All other code is Copyright
                     2005-2009 The Closure Authors. All Rights Reserved.
                    */
                    _.Op = function(a, b) {
                        this.C = [];
                        this.O = a;
                        this.Aa = b || null;
                        this.B = this.o = !1;
                        this.A = void 0;
                        this.H = this.M = this.F = !1;
                        this.D = 0;
                        this.w = null;
                        this.G = 0
                    };
                    _.Op.prototype.cancel = function(a) {
                        if (this.o) this.A instanceof _.Op && this.A.cancel();
                        else {
                            if (this.w) {
                                var b = this.w;
                                delete this.w;
                                a ? b.cancel(a) : (b.G--, 0 >= b.G && b.cancel())
                            }
                            this.O ? this.O.call(this.Aa, this) : this.H = !0;
                            this.o || (a = new Pp(this), _.Qp(this), _.Rp(this, !1, a))
                        }
                    };
                    _.Op.prototype.J = function(a, b) {
                        this.F = !1;
                        _.Rp(this, a, b)
                    };
                    _.Rp = function(a, b, c) {
                        a.o = !0;
                        a.A = c;
                        a.B = !b;
                        Sp(a)
                    };
                    _.Qp = function(a) {
                        if (a.o) {
                            if (!a.H) throw new Tp(a);
                            a.H = !1
                        }
                    };
                    _.Op.prototype.Db = function(a) {
                        _.Qp(this);
                        _.Rp(this, !0, a)
                    };
                    _.Op.prototype.addCallback = function(a, b) {
                        return Up(this, a, null, b)
                    };
                    var Up = function(a, b, c, d) {
                        a.C.push([b, c, d]);
                        a.o && Sp(a);
                        return a
                    };
                    _.Op.prototype.then = function(a, b, c) {
                        var d, e, f = new _.kf(function(g, h) {
                            d = g;
                            e = h
                        });
                        Up(this, d, function(g) {
                            g instanceof Pp ? f.cancel() : e(g)
                        });
                        return f.then(a, b, c)
                    };
                    _.gf(_.Op);
                    _.Op.prototype.isError = function(a) {
                        return a instanceof Error
                    };
                    var Vp = function(a) {
                            return (0, _.Ma)(a.C, function(b) {
                                return _.Uc(b[1])
                            })
                        },
                        Sp = function(a) {
                            if (a.D && a.o && Vp(a)) {
                                var b = a.D,
                                    c = Wp[b];
                                c && (_.n.clearTimeout(c.ea), delete Wp[b]);
                                a.D = 0
                            }
                            a.w && (a.w.G--, delete a.w);
                            b = a.A;
                            for (var d = c = !1; a.C.length && !a.F;) {
                                var e = a.C.shift(),
                                    f = e[0],
                                    g = e[1];
                                e = e[2];
                                if (f = a.B ? g : f) try {
                                    var h = f.call(e || a.Aa, b);
                                    void 0 !== h && (a.B = a.B && (h == b || a.isError(h)), a.A = b = h);
                                    if (_.hf(b) || "function" === typeof _.n.Promise && b instanceof _.n.Promise) d = !0, a.F = !0
                                } catch (l) {
                                    b = l, a.B = !0, Vp(a) || (c = !0)
                                }
                            }
                            a.A = b;
                            d && (h = (0, _.q)(a.J,
                                a, !0), d = (0, _.q)(a.J, a, !1), b instanceof _.Op ? (Up(b, h, d), b.M = !0) : b.then(h, d));
                            c && (b = new Xp(b), Wp[b.ea] = b, a.D = b.ea)
                        },
                        Tp = function() {
                            _.Ga.call(this)
                        };
                    _.u(Tp, _.Ga);
                    Tp.prototype.message = "Deferred has already fired";
                    Tp.prototype.name = "AlreadyCalledError";
                    var Pp = function() {
                        _.Ga.call(this)
                    };
                    _.u(Pp, _.Ga);
                    Pp.prototype.message = "Deferred was canceled";
                    Pp.prototype.name = "CanceledError";
                    var Xp = function(a) {
                        this.ea = _.n.setTimeout((0, _.q)(this.w, this), 0);
                        this.o = a
                    };
                    Xp.prototype.w = function() {
                        delete Wp[this.ea];
                        throw this.o;
                    };
                    var Wp = {};
                    _.Yp = _.od(_.db("https://apis.google.com/js/api.js"));
                    _.Zp = new Map([
                        ["birthday", 14],
                        ["children", 1],
                        ["dinner", 2],
                        ["featured", 3],
                        ["holiday", 4],
                        ["nightlife", 5],
                        ["other", 6],
                        ["party", 7],
                        ["school", 8],
                        ["seasonal", 9],
                        ["sport", 10],
                        ["stationery", 11],
                        ["travel", 12],
                        ["wedding", 13]
                    ]);
                    _.$p = new Set("all docs-images docs-images-and-videos docs-videos documents drawings folders forms pdfs presentations scripts sites spreadsheets tables".split(" "));
                    _.aq = _.n.document && _.n.document.documentElement && !!_.n.document.documentElement.setCapture && !!_.n.document.releaseCapture;
                    var bq = function(a) {
                        this.ib = new Map;
                        var b = arguments.length;
                        if (1 < b) {
                            if (b % 2) throw Error("i");
                            for (var c = 0; c < b; c += 2) this.set(arguments[c], arguments[c + 1])
                        } else if (a)
                            if (a instanceof bq)
                                for (b = _.ba(a.ib), c = b.next(); !c.done; c = b.next()) {
                                    var d = _.ba(c.value);
                                    c = d.next().value;
                                    d = d.next().value;
                                    this.ib.set(c, d)
                                } else if (a)
                                    for (b = _.ba(Object.entries(a)), c = b.next(); !c.done; c = b.next()) d = _.ba(c.value), c = d.next().value, d = d.next().value, this.ib.set(c, d)
                    };
                    _.k = bq.prototype;
                    _.k.Va = function() {
                        return Array.from(this.ib.values())
                    };
                    _.k.Ua = function() {
                        return Array.from(this.ib.keys())
                    };
                    _.k.fc = function() {
                        return 0 == this.ib.size
                    };
                    _.k.clear = function() {
                        this.ib.clear()
                    };
                    _.k.remove = function(a) {
                        return this.ib["delete"](a)
                    };
                    _.k.get = function(a, b) {
                        return this.ib.has(a) ? this.ib.get(a) : b
                    };
                    _.k.set = function(a, b) {
                        this.ib.set(a, b);
                        return this
                    };
                    _.k.forEach = function(a, b) {
                        var c = this;
                        b = void 0 === b ? this : b;
                        this.ib.forEach(function(d, e) {
                            return a.call(b, d, e, c)
                        })
                    };
                    _.k.clone = function() {
                        return new bq(this)
                    };
                    (function() {
                        for (var a = ["ms", "moz", "webkit", "o"], b, c = 0; b = a[c] && !_.n.requestAnimationFrame; ++c) _.n.requestAnimationFrame = _.n[b + "RequestAnimationFrame"], _.n.cancelAnimationFrame = _.n[b + "CancelAnimationFrame"] || _.n[b + "CancelRequestAnimationFrame"];
                        if (!_.n.requestAnimationFrame) {
                            var d = 0;
                            _.n.requestAnimationFrame = function(e) {
                                var f = (new Date).getTime(),
                                    g = Math.max(0, 16 - (f - d));
                                d = f + g;
                                return _.n.setTimeout(function() {
                                    e(f + g)
                                }, g)
                            };
                            _.n.cancelAnimationFrame || (_.n.cancelAnimationFrame = function(e) {
                                clearTimeout(e)
                            })
                        }
                    })();
                    var eq;
                    _.cq = _.y ? _.od(_.db('javascript:""')) : _.od(_.db("about:blank"));
                    _.dq = _.nd(_.cq);
                    eq = _.y ? _.od(_.db('javascript:""')) : _.od(_.db("javascript:undefined"));
                    _.nd(eq);
                    var jq, kq, lq, mq;
                    _.fq = function(a) {
                        bq.call(this);
                        a || _.Kg();
                        this.w = this.o = this.A = null
                    };
                    _.u(_.fq, bq);
                    _.fq.prototype.clear = function() {
                        bq.prototype.clear.call(this);
                        this.A = this.w = null
                    };
                    _.fq.prototype.set = function(a, b, c, d) {
                        bq.prototype.set.call(this, a, b);
                        c && (this.A = a);
                        d && (this.w = a);
                        return this
                    };
                    _.gq = function(a, b, c, d) {
                        return a.set(b.key, b.caption, c, d)
                    };
                    _.fq.prototype.ta = function() {
                        if (this.o) {
                            _.Bg(this.o, _.Bb);
                            var a = _.Kg(this.o);
                            this.forEach(function(b, c) {
                                b = a.ka("BUTTON", {
                                    name: c
                                }, b);
                                c == this.A && (b.className = "gb_Aa-buttonset-default");
                                this.o.appendChild(b)
                            }, this)
                        }
                    };
                    _.fq.prototype.L = function() {
                        return this.o
                    };
                    _.hq = {
                        key: "ok",
                        caption: "OK"
                    };
                    _.iq = {
                        key: "cancel",
                        caption: "Cancel"
                    };
                    jq = {
                        key: "yes",
                        caption: "Yes"
                    };
                    kq = {
                        key: "no",
                        caption: "No"
                    };
                    lq = {
                        key: "save",
                        caption: "Save"
                    };
                    mq = {
                        key: "continue",
                        caption: "Continue"
                    };
                    "undefined" != typeof document && (_.gq(new _.fq, _.hq, !0, !0), _.gq(_.gq(new _.fq, _.hq, !0), _.iq, !1, !0), _.gq(_.gq(new _.fq, jq, !0), kq, !1, !0), _.gq(_.gq(_.gq(new _.fq, jq), kq, !0), _.iq, !1, !0), _.gq(_.gq(_.gq(new _.fq, mq), lq), _.iq, !0, !0));
                    _.nq = _.od(_.db("//www-onepick-opensocial.googleusercontent.com/gadgets/js/rpc.js?c=1&container=onepick"));
                    _.oq = _.od(_.db("//apis.google.com/js/rpc.js"));
                    var pq = !1,
                        qq = "",
                        rq = function(a) {
                            a = a.match(/[\d]+/g);
                            if (!a) return "";
                            a.length = 3;
                            return a.join(".")
                        };
                    (function() {
                        if (navigator.plugins && navigator.plugins.length) {
                            var a = navigator.plugins["Shockwave Flash"];
                            if (a && (pq = !0, a.description)) {
                                qq = rq(a.description);
                                return
                            }
                            if (navigator.plugins["Shockwave Flash 2.0"]) {
                                pq = !0;
                                qq = "2.0.0.11";
                                return
                            }
                        }
                        if (navigator.mimeTypes && navigator.mimeTypes.length && (a = navigator.mimeTypes["application/x-shockwave-flash"], pq = !(!a || !a.enabledPlugin))) {
                            qq = rq(a.enabledPlugin.description);
                            return
                        }
                        if ("undefined" != typeof ActiveXObject) {
                            try {
                                var b = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.7");
                                pq = !0;
                                qq = rq(b.GetVariable("$version"));
                                return
                            } catch (c) {}
                            try {
                                b = new ActiveXObject("ShockwaveFlash.ShockwaveFlash.6");
                                pq = !0;
                                qq = "6.0.21";
                                return
                            } catch (c) {}
                            try {
                                b = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"), pq = !0, qq = rq(b.GetVariable("$version"))
                            } catch (c) {}
                        }
                    })();
                    _.sq = qq;

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    _.tq = function() {
                        _.w.call(this);
                        this.w = new _.Q
                    };
                    _.u(_.tq, _.w);
                    _.tq.prototype[_.me] = !0;
                    _.k = _.tq.prototype;
                    _.k.K = function(a, b, c, d) {
                        return this.w.K(a, b, c, d)
                    };
                    _.k.cb = function(a, b, c, d) {
                        return this.w.cb(a, b, c, d)
                    };
                    _.k.qa = function(a, b, c, d) {
                        return this.w.qa(a, b, c, d)
                    };
                    _.k.Kc = function(a) {
                        return this.w.Kc(a)
                    };
                    _.k.dispatchEvent = function(a) {
                        return this.w.dispatchEvent(a)
                    };
                    _.k.zd = function(a) {
                        return this.w.zd(a)
                    };
                    _.k.bd = function() {
                        return this.w.bd()
                    };
                    _.k.Yb = function(a, b, c) {
                        return this.w.Yb(a, b, c)
                    };
                    _.k.$b = function(a, b) {
                        return this.w.$b(a, b)
                    };
                    _.k.Nb = function(a, b, c, d) {
                        return this.w.Nb(a, b, c, d)
                    };
                    _.k.hasListener = function(a, b) {
                        return this.w.hasListener(a, b)
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    _.uq = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(_.uq, _.z);
                    _.uq.prototype.$a = function() {
                        return _.B(this, 6)
                    };
                    var vq = function(a, b) {
                            return null !== a && b in a
                        },
                        wq = function(a) {
                            var b = arguments,
                                c = b.length;
                            return function() {
                                for (var d = 0; d < c; d++)
                                    if (b[d].apply(this, arguments)) return !0;
                                return !1
                            }
                        },
                        xq = function(a) {
                            return function() {
                                return !a.apply(this, arguments)
                            }
                        };
                    _.yq = function(a, b, c, d, e) {
                        _.w.call(this);
                        this.B = b;
                        this.X = d;
                        this.F = e;
                        this.O = !1;
                        this.A = {};
                        this.w = {};
                        this.U = [];
                        this.C = [];
                        this.J = _.C(a, 1) ? "http" : "https";
                        this.T = [this.J + "://" + _.J(_.B(a, 2)), "og/_/js", "k=" + _.J(_.B(a, 3)), "rt=j"];
                        this.H = "" == _.J(_.B(a, 14)) ? null : _.B(a, 14);
                        this.M = [this.J + "://" + _.J(_.B(a, 2)), "og/_/ss", "k=" + _.J(_.B(a, 13))];
                        this.G = "" == _.J(_.B(a, 15)) ? null : _.B(a, 15);
                        this.R = _.I(_.C(a, 1)) ? "?host=www.gstatic.com&bust=" + _.J(_.B(a, 16)) : "";
                        this.P = _.I(_.C(a, 1)) ? "?host=www.gstatic.com&bust=" + 1E11 * Math.random() :
                            "";
                        this.o = _.L(_.D(a, 17, 1), 1);
                        a = 0;
                        for (b = c[a]; a < c.length; a++, b = c[a]) this.A[b] = !0, this.w[b] = !0
                    };
                    _.u(_.yq, _.w);
                    _.Qa(_.yq, "m");
                    _.Aq = function(a, b, c) {
                        b = (0, _.Ja)(b, xq(wq(_.qd, _.Qc(vq, a.A))));
                        if (0 < b.length) {
                            var d = a.T.join("/") + "/m=" + b.join(",") + "/exm=" + _.ed(a.A).join(",") + "/d=1/ed=1";
                            a.H && (d += "/rs=" + a.H);
                            d += a.R;
                            zq(a, d, (0, _.q)(a.Y, a, c));
                            a.U.push(d);
                            for (c = 0; c < b.length; c++) a.A[b[c]] = !0
                        }
                    };
                    _.yq.prototype.Y = function(a) {
                        for (var b = 0; b < this.C.length; b++) this.C[b].call(null);
                        a && a.call(null)
                    };
                    var zq = function(a, b, c, d) {
                        var e = _.Nd("SCRIPT");
                        e.async = !0;
                        e.type = "text/javascript";
                        e.charset = "UTF-8";
                        _.fk(e, new _.ld(_.jd, b));
                        var f = !0,
                            g = d || 1;
                        d = (0, _.q)(function() {
                            f = !1;
                            this.F.log(47, {
                                att: g,
                                max: this.o,
                                url: b
                            });
                            g < this.o ? zq(this, b, c, g + 1) : this.X.log(Error("ya`" + g + "`" + this.o), {
                                url: b
                            })
                        }, a);
                        var h = (0, _.q)(function() {
                                f && (this.F.log(46, {
                                    att: g,
                                    max: this.o,
                                    url: b
                                }), f = !1, c && c.call(null))
                            }, a),
                            l = function(m) {
                                "loaded" == m.readyState || "complete" == m.readyState ? h() : f && window.setTimeout(function() {
                                    l(m)
                                }, 100)
                            };
                        "undefined" !==
                        typeof e.addEventListener ? e.onload = function() {
                            h()
                        } : e.onreadystatechange = function() {
                            e.onreadystatechange = null;
                            l(e)
                        };
                        e.onerror = d;
                        a.F.log(45, {
                            att: g,
                            max: a.o,
                            url: b
                        });
                        _.hh("HEAD")[0].appendChild(e)
                    };
                    _.yq.prototype.vd = function(a, b) {
                        a = (0, _.Ja)(a, xq(wq(_.qd, _.Qc(vq, this.w))));
                        if (0 < a.length) {
                            var c = this.M.join("/") + "/m=" + a.join(",") + "/excm=" + _.ed(this.w).join(",") + "/d=1/ed=1/ct=zgms";
                            this.G && (c += "/rs=" + this.G);
                            Bq(c + this.P, b);
                            for (b = 0; b < a.length; b++) this.w[a[b]] = !0
                        }
                    };
                    var Bq = function(a, b) {
                        var c = _.Nd("LINK");
                        c.setAttribute("rel", "stylesheet");
                        c.setAttribute("type", "text/css");
                        c.setAttribute("href", a);
                        c.onload = c.onreadystatechange = function() {
                            c.readyState && "loaded" != c.readyState && "complete" != c.readyState || b && b.call(null)
                        };
                        _.hh("HEAD")[0].appendChild(c)
                    };
                    _.yq.prototype.D = function(a, b) {
                        if (!this.O)
                            if (void 0 != b) window.setTimeout((0, _.q)(this.D, this, a, void 0), b);
                            else {
                                _.Aq(this, _.B(this.B, 1), a);
                                a = _.B(this.B, 2);
                                if (_.C(this.B, 3)) {
                                    var c = (0, _.q)(this.vd, this, a);
                                    a = function() {
                                        c()
                                    };
                                    "undefined" !== typeof window.addEventListener ? window.addEventListener("load", a) : window.attachEvent("onload", a)
                                } else this.vd(a);
                                this.O = !0
                            }
                    };

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Fq, Gq, Hq, Iq, Jq, Lq;
                    _.Cq = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(_.Cq, _.z);
                    var Dq = function(a) {
                        _.A(this, a, 0, -1, null, null)
                    };
                    _.u(Dq, _.z);
                    _.Eq = function(a, b, c) {
                        return function() {
                            try {
                                return b.apply(c, arguments)
                            } catch (d) {
                                a.log(d)
                            }
                        }
                    };
                    Fq = [1, 2, 3, 4, 5, 6, 9, 10, 11, 13, 14, 28, 29, 30, 34, 35, 37, 38, 39, 40, 42, 43, 48, 49, 50, 51, 52, 53, 62, 500];
                    Gq = function(a) {
                        a = String(a);
                        return a.replace(".", "%2E").replace(",", "%2C")
                    };
                    Hq = null;
                    Iq = function(a) {
                        if (!Hq) {
                            Hq = {};
                            for (var b = 0; b < Fq.length; b++) Hq[Fq[b]] = !0
                        }
                        return !!Hq[a]
                    };
                    Jq = function(a, b, c, d, e, f) {
                        _.gl.call(this, a, b);
                        _.gd(this.data, {
                            oge: d,
                            ogex: _.J(_.B(a, 9)),
                            ogp: _.J(_.B(a, 6)),
                            ogsr: Math.round(1 / (Iq(d) ? _.L(_.Qj(c, 3, 1)) : _.L(_.Qj(c, 2, 1E-4)))),
                            ogus: e
                        });
                        if (f) {
                            "ogw" in f && (this.data.ogw = f.ogw, delete f.ogw);
                            "ved" in f && (this.data.ved = f.ved, delete f.ved);
                            a = [];
                            for (var g in f) 0 != a.length && a.push(","), a.push(Gq(g)), a.push("."), a.push(Gq(f[g]));
                            f = a.join("");
                            "" != f && (this.data.ogad = f)
                        }
                    };
                    _.u(Jq, _.gl);
                    var Kq = function(a, b, c, d) {
                        this.o = _.Ec;
                        this.F = a;
                        this.D = b;
                        this.G = d;
                        this.C = _.L(_.Qj(a, 2, 1E-4), 1E-4);
                        this.A = _.L(_.Qj(a, 3, 1), 1);
                        b = Math.random();
                        this.B = _.I(_.C(a, 1)) && b < this.C;
                        this.w = _.I(_.C(a, 1)) && b < this.A;
                        a = 0;
                        _.I(_.C(c, 1)) && (a |= 1);
                        _.I(_.C(c, 2)) && (a |= 2);
                        _.I(_.C(c, 3)) && (a |= 4);
                        this.H = a
                    };
                    Kq.prototype.log = function(a, b) {
                        try {
                            if (this.o || (Iq(a) ? this.w : this.B)) {
                                var c = new Jq(this.D, this.G, this.F, a, this.H, b);
                                this.o ? c.o() : _.el(c)
                            }
                        } catch (d) {}
                    };
                    Lq = null;
                    _.Mq = function() {
                        if (!Lq) {
                            var a = _.H(_.M(), Dq, 12) || new Dq,
                                b = _.Hc(),
                                c = _.hk(),
                                d = _.Yj();
                            Lq = new Kq(a, b, c, d)
                        }
                        return Lq
                    };
                    _.Nq = function(a, b) {
                        _.Mq().log(a, b)
                    };
                    _.Nq(8, {
                        m: "BackCompat" == document.compatMode ? "q" : "s"
                    });

                } catch (e) {
                    _._DumpException(e)
                }
                try {
                    var Oq = function() {
                            _.ol.A(_.Fc)
                        },
                        Pq = function(a, b) {
                            var c = _.kl();
                            c = _.Eq(c, Oq);
                            a.addEventListener ? a.addEventListener(b, c) : a.attachEvent && a.attachEvent("on" + b, c)
                        },
                        Qq = [1, 2],
                        Rq = function(a) {
                            _.A(this, a, 0, -1, Qq, null)
                        };
                    _.u(Rq, _.z);
                    var Sq = function(a, b) {
                            a.C.push(b)
                        },
                        Tq = function(a, b) {
                            a.__PVT = b
                        },
                        Uq = function(a) {
                            _.w.call(this);
                            this.C = a;
                            this.A = null;
                            this.o = {};
                            this.B = {};
                            this.w = {}
                        };
                    _.u(Uq, _.w);
                    var Vq = function(a) {
                        if (a.A) return a.A;
                        for (var b in a.w)
                            if (a.w[b].Df() && a.w[b].vb()) return a.w[b];
                        return null
                    };
                    _.k = Uq.prototype;
                    _.k.De = function(a) {
                        a && Vq(this) && a != Vq(this) && Vq(this).re(!1);
                        this.A = a
                    };
                    _.k.Gf = function(a) {
                        a = this.w[a] || a;
                        return Vq(this) == a
                    };
                    _.k.Se = function() {
                        Vq(this) && Vq(this).re(!1);
                        this.De(null)
                    };
                    _.k.zg = function(a) {
                        Vq(this) && Vq(this).getId() == a && this.Se()
                    };
                    _.k.wc = function(a, b, c) {
                        this.o[a] = this.o[a] || {};
                        this.o[a][b] = this.o[a][b] || [];
                        this.o[a][b].push(c)
                    };
                    _.k.Sd = function(a, b) {
                        b = b.getId();
                        if (this.o[a] && this.o[a][b])
                            for (var c = 0; c < this.o[a][b].length; c++) try {
                                this.o[a][b][c]()
                            } catch (d) {
                                this.C.log(d)
                            }
                    };
                    _.k.hj = function(a, b) {
                        this.B[a] = b
                    };
                    _.k.xg = function(a) {
                        return !this.B[a.getId()]
                    };
                    _.k.ii = function() {
                        return !!Vq(this) && Vq(this).Ef()
                    };
                    _.k.wg = function() {
                        return !!Vq(this)
                    };
                    _.k.Pf = function() {
                        Vq(this) && Vq(this).qe()
                    };
                    _.k.se = function(a) {
                        this.w[a.getId()] = a
                    };
                    var Wq = function() {
                        _.w.call(this);
                        this.w = [];
                        this.o = []
                    };
                    _.N(Wq, _.w);
                    Wq.prototype.A = function(a, b) {
                        this.w.push({
                            Vc: a,
                            options: b
                        })
                    };
                    Wq.prototype.init = function(a, b, c) {
                        window.gapi = {};
                        var d = window.___jsl = {};
                        d.h = _.J(_.B(a, 1));
                        null != _.B(a, 12) && (d.dpo = _.I(_.C(a, 12)));
                        d.ms = _.J(_.B(a, 2));
                        d.m = _.J(_.B(a, 3));
                        d.l = [];
                        _.B(b, 1) && (a = _.B(b, 3)) && this.o.push(a);
                        _.B(c, 1) && (c = _.B(c, 2)) && this.o.push(c);
                        _.t("gapi.load", (0, _.q)(this.A, this));
                        return this
                    };
                    var Xq = function(a) {
                        _.w.call(this);
                        this.D = a;
                        this.A = this.o = null;
                        this.F = 0;
                        this.C = {};
                        this.w = !1;
                        a = window.navigator.userAgent;
                        0 <= a.indexOf("MSIE") && 0 <= a.indexOf("Trident") && (a = /\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a)) && a[1] && 9 > parseFloat(a[1]) && (this.w = !0)
                    };
                    _.N(Xq, _.w);
                    var Yq = function(a, b, c) {
                        if (!a.w)
                            if (c instanceof Array)
                                for (var d in c) Yq(a, b, c[d]);
                            else {
                                d = (0, _.q)(a.G, a, b);
                                var e = a.F + c;
                                a.F++;
                                b.setAttribute("data-eqid", e);
                                a.C[e] = d;
                                b && b.addEventListener ? b.addEventListener(c, d, !1) : b && b.attachEvent ? b.attachEvent("on" + c, d) : a.D.log(Error("za`" + b))
                            }
                    };
                    Xq.prototype.B = function(a, b) {
                        if (this.w) return null;
                        if (b instanceof Array) {
                            var c = null,
                                d;
                            for (d in b) {
                                var e = this.B(a, b[d]);
                                e && (c = e)
                            }
                            return c
                        }
                        c = null;
                        this.o && this.o.type == b && this.A == a && (c = this.o, this.o = null);
                        if (d = a.getAttribute("data-eqid")) a.removeAttribute("data-eqid"), (d = this.C[d]) ? a.removeEventListener ? a.removeEventListener(b, d, !1) : a.detachEvent && a.detachEvent("on" + b, d) : this.D.log(Error("Aa`" + a));
                        return c
                    };
                    Xq.prototype.G = function(a, b) {
                        this.o = b;
                        this.A = a;
                        b.preventDefault ? b.preventDefault() : b.returnValue = !1
                    };
                    (function() {
                        var a;
                        window.gbar && window.gbar._LDD ? a = window.gbar._LDD : a = [];
                        var b = _.hk();
                        Tq(window, _.J(_.B(b, 8)));
                        b = _.Hc();
                        var c = _.kl();
                        a = new _.yq(b, _.H(_.M(), Rq, 17) || new Rq, a, c, _.Mq());
                        _.Sa("m", a);
                        var d = function() {
                            _.t("gbar.qm", (0, _.q)(function(e) {
                                try {
                                    e()
                                } catch (f) {
                                    c.log(f)
                                }
                            }, this));
                            _.hd("api").Oa()
                        };
                        _.I(_.C(b, 18), !0) ? a.D(d) : (b = _.L(_.B(b, 19), 200), b = (0, _.q)(a.D, a, d, b), _.pl(b))
                    })();
                    Pq(document, "DOMContentLoaded");
                    Pq(window, "load");
                    _.t("gbar.ldb", _.q(_.ol.A, _.ol, _.Fc));
                    _.t("gbar.mls", function() {});
                    _.Sa("eq", new Xq(_.kl()));
                    _.Sa("gs", (new Wq).init(_.Xj(), _.H(_.M(), _.Cq, 5) || new _.Cq, _.H(_.M(), _.uq, 6) || new _.uq));
                    (function() {
                        for (var a = function(e) {
                                return function() {
                                    _.Nq(44, {
                                        n: e
                                    })
                                }
                            }, b = 0; b < _.Va.length; b++) {
                            var c = "gbar." + _.Va[b];
                            _.t(c, a(c))
                        }
                        var d = _.Na.V();
                        _.Oa(d, "api").Oa();
                        Sq(_.Oa(d, "m"), function() {
                            _.Oa(d, "api").Oa()
                        })
                    })();
                    var Zq = function(a) {
                        _.pl(function() {
                            var b = document.querySelector("." + a);
                            b && (b = b.querySelector(".gb_D")) && Yq(_.hd("eq"), b, "click")
                        })
                    };
                    var $q = document.querySelector(".gb_C"),
                        ar = /(\s+|^)gb_9f(\s+|$)/;
                    $q && !ar.test($q.className) && Zq("gb_C");
                    var br = new Uq(_.kl());
                    _.Sa("dd", br);
                    _.t("gbar.close", (0, _.q)(br.Se, br));
                    _.t("gbar.cls", (0, _.q)(br.zg, br));
                    _.t("gbar.abh", (0, _.q)(br.wc, br, 0));
                    _.t("gbar.adh", (0, _.q)(br.wc, br, 1));
                    _.t("gbar.ach", (0, _.q)(br.wc, br, 2));
                    _.t("gbar.aeh", (0, _.q)(br.hj, br));
                    _.t("gbar.bsy", (0, _.q)(br.ii, br));
                    _.t("gbar.op", (0, _.q)(br.wg, br));
                    Zq("gb_Pa");
                    _.pl(function() {
                        var a = document.querySelector(".gb_mc");
                        a && Yq(_.hd("eq"), a, "click")
                    });
                    _.t("gbar.qfgw", (0, _.q)(document.getElementById, document, "gbqfqw"));
                    _.t("gbar.qfgq", (0, _.q)(document.getElementById, document, "gbqfq"));
                    _.t("gbar.qfgf", (0, _.q)(document.getElementById, document, "gbqf"));
                    _.t("gbar.qfsb", (0, _.q)(document.getElementById, document, "gbqfb"));

                } catch (e) {
                    _._DumpException(e)
                }
            })(this.gbar_);
            // Google Inc.
        </script>
        <div class="gb_Fa"></div>
        <style>
            @-webkit-keyframes gb__a {
                0% {
                    opacity: 0
                }

                50% {
                    opacity: 1
                }
            }

            @keyframes gb__a {
                0% {
                    opacity: 0
                }

                50% {
                    opacity: 1
                }
            }

            .gb_Fa {
                display: none !important
            }

            .gb_Ha {
                visibility: hidden
            }

            .gb_e .gbqfi::before {
                left: -428px;
                top: 0
            }

            .gb_Qb .gbqfb:focus .gbqfi {
                outline: 1px dotted #fff
            }

            .gb_e .gb_C .gb_D::before,
            .gb_e.gb_E .gb_C .gb_D::before {
                left: -132px;
                top: -38px
            }

            .gb_e.gb_j .gb_C .gb_D::before {
                left: -463px;
                top: -35px
            }

            .gb_Qb .gb_K {
                position: relative
            }

            .gb_C .gb_D:hover,
            .gb_C .gb_D:focus {
                opacity: .85
            }

            .gb_j .gb_C .gb_D:hover,
            .gb_j .gb_C .gb_D:focus {
                opacity: 1
            }

            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_o .gb_r {
                    background-image: url('https://ssl.gstatic.com/gb/images/p2_547d5a41.png')
                }
            }

            .gb_e .gb_mc .gb_oc::before {
                left: 0;
                top: -35px
            }

            .gb_e.gb_j .gb_mc .gb_oc::before {
                left: -296px;
                top: 0
            }

            .gb_e.gb_E .gb_mc .gb_oc::before {
                left: -97px;
                top: 0
            }

            .gb_e .gb_ra {
                background-image: none !important
            }

            .gb_e .gb_pc {
                visibility: visible
            }

            .gb_Qb .gb_ie span {
                background: transparent
            }

            .gb_Hd {
                color: #ffffff;
                font-size: 13px;
                font-weight: bold;
                height: 25px;
                line-height: 19px;
                padding-top: 5px;
                padding-left: 12px;
                position: relative;
                background-color: #4d90fe
            }

            .gb_Hd .gb_Id {
                color: #ffffff;
                cursor: default;
                font-size: 22px;
                font-weight: normal;
                position: absolute;
                right: 12px;
                top: 5px
            }

            .gb_Hd .gb_md,
            .gb_Hd .gb_jd {
                color: #ffffff;
                display: inline-block;
                font-size: 11px;
                margin-left: 16px;
                padding: 0 8px;
                white-space: nowrap
            }

            .gb_Jd {
                background: none;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.16)), to(rgba(0, 0, 0, 0.2)));
                background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                background-image: linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.16), rgba(0, 0, 0, 0.2));
                border-radius: 2px;
                border: 1px solid #dcdcdc;
                border: 1px solid rgba(0, 0, 0, 0.1);
                cursor: default !important;
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#160000ff, endColorstr=#220000ff);
                text-decoration: none !important;
                -webkit-border-radius: 2px
            }

            .gb_Jd:hover {
                background: none;
                background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.14)), to(rgba(0, 0, 0, 0.2)));
                background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                background-image: linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.14), rgba(0, 0, 0, 0.2));
                border: 1px solid rgba(0, 0, 0, 0.2);
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#14000000, endColorstr=#22000000)
            }

            .gb_Jd:active {
                box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3)
            }

            .gb_dd.gb_ed {
                padding: 0
            }

            .gb_ed .gb_F {
                background: #ffffff;
                border: solid 1px transparent;
                -webkit-border-radius: 8px;
                border-radius: 8px;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                padding: 16px;
                right: 0;
                top: 72px;
                -webkit-box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15);
                box-shadow: 0 1px 2px 0 rgba(65, 69, 73, 0.3), 0 3px 6px 2px rgba(65, 69, 73, 0.15)
            }

            a.gb_fd {
                color: #5f6368 !important;
                font-size: 22px;
                height: 24px;
                opacity: 1;
                padding: 8px;
                position: absolute;
                right: 8px;
                top: 8px;
                text-decoration: none !important;
                width: 24px
            }

            a.gb_fd:focus,
            a.gb_fd:active,
            a.gb_fd:focus:hover {
                background-color: #e8eaed;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                outline: none
            }

            a.gb_fd:hover {
                background-color: #f1f3f4;
                -webkit-border-radius: 50%;
                border-radius: 50%;
                outline: none
            }

            svg.gb_gd {
                fill: #5f6368;
                opacity: 1
            }

            .gb_hd {
                padding: 0;
                white-space: normal;
                display: table
            }

            .gb_id {
                line-height: normal;
                font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif
            }

            .gb_ed .gb_4:active {
                outline: none;
                -webkit-box-shadow: 0 4px 5px rgba(0, 0, 0, .16);
                box-shadow: 0 4px 5px rgba(0, 0, 0, .16)
            }

            .gb_0.gb_jd.gb_kd {
                -webkit-border-radius: 4px;
                border-radius: 4px;
                cursor: pointer;
                height: 16px;
                color: #5f6368;
                font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
                font-weight: 500;
                letter-spacing: .25px;
                line-height: 16px;
                padding: 8px 6px;
                text-transform: none;
                -webkit-font-smoothing: antialiased
            }

            .gb_0.gb_jd:hover {
                background-color: #f8f9fa
            }

            .gb_0.gb_jd:focus,
            .gb_0.gb_jd:hover:focus {
                background-color: #f1f3f4;
                border-color: transparent
            }

            .gb_0.gb_jd:active {
                background-color: #f1f3f4;
                -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15);
                box-shadow: 0 1px 2px 0 rgba(60, 64, 67, 0.3), 0 1px 3px 1px rgba(60, 64, 67, 0.15)
            }

            .gb_cd {
                color: #5f6368;
                font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
                font-size: 14px;
                letter-spacing: .25px;
                line-height: 20px;
                margin: 0;
                margin-bottom: 5px
            }

            .gb_ld {
                text-align: right;
                font-size: 14px;
                padding-bottom: 0;
                white-space: nowrap
            }

            .gb_ld .gb_md {
                margin-left: 12px;
                text-transform: none
            }

            a.gb_4.gb_md:hover {
                background-color: #2b7de9;
                border-color: transparent;
                -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
                box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
            }

            a.gb_4.gb_md:focus,
            a.gb_4.gb_md:hover:focus {
                background-color: #5094ed;
                border-color: transparent;
                -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
                box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
            }

            a.gb_4.gb_md:active {
                background-color: #63a0ef;
                -webkit-box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15);
                box-shadow: 0 1px 2px 0 rgba(66, 133, 244, 0.3), 0 1px 3px 1px rgba(66, 133, 244, 0.15)
            }

            .gb_ld .gb_md.gb_nd {
                padding-left: 6px;
                padding-right: 14px
            }

            .gb_ld .gb_kd.gb_md img {
                background-color: inherit;
                -webkit-border-radius: initial;
                border-radius: initial;
                height: 18px;
                margin: 0 8px 0 4px;
                vertical-align: text-top;
                width: 18px
            }

            .gb_od .gb_hd .gb_pd .gb_kd {
                border: 2px solid transparent
            }

            .gb_od .gb_hd .gb_pd .gb_kd:focus:after,
            .gb_od .gb_hd .gb_pd .gb_kd:hover:after {
                background-color: transparent
            }

            .gb_id {
                background-color: #404040;
                color: #fff;
                padding: 16px;
                position: absolute;
                top: 36px;
                min-width: 328px;
                max-width: 650px;
                right: 0;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -webkit-box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4);
                box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.4)
            }

            .gb_id a,
            .gb_id a:visited {
                color: #5e97f6;
                text-decoration: none
            }

            .gb_qd {
                text-transform: uppercase
            }

            .gb_rd {
                padding-left: 50px
            }

            .gb_sd {
                color: #3c4043;
                font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
                font-size: 16px;
                font-weight: 500;
                letter-spacing: .1px;
                line-height: 20px;
                margin: 0;
                margin-bottom: 12px
            }

            .gb_cd a.gb_ud {
                text-decoration: none;
                color: #5e97f6
            }

            .gb_cd a.gb_ud:visited {
                color: #5e97f6
            }

            .gb_cd a.gb_ud:hover,
            .gb_cd a.gb_ud:active {
                text-decoration: underline
            }

            .gb_vd {
                position: absolute;
                background: transparent;
                top: -999px;
                z-index: -1;
                visibility: hidden;
                margin-top: 1px;
                margin-left: 1px
            }

            #gb .gb_ed {
                margin: 0
            }

            .gb_ed .gb_Vc {
                background: #4d90fe;
                border: 2px solid transparent;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
                font-weight: 500;
                margin-top: 21px;
                min-width: 70px;
                text-align: center;
                -webkit-font-smoothing: antialiased
            }

            .gb_ed a.gb_4 {
                background: #1a73e8;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                color: #ffffff;
                font-family: Google Sans, Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
                font-size: 14px;
                font-weight: 500;
                letter-spacing: .25px;
                line-height: 16px;
                padding: 8px 22px;
                -webkit-font-smoothing: antialiased
            }

            .gb_ed a.gb_4.gb_wd {
                background: #d93025
            }

            .gb_ed a.gb_4.gb_wd:hover {
                background-color: #cc3127
            }

            .gb_ed a.gb_4.gb_wd:focus,
            .gb_ed a.gb_4.gb_wd:focus:hover {
                background-color: #b3332c
            }

            .gb_ed a.gb_4.gb_wd:active,
            .gb_ed a.gb_4.gb_wd:focus:active {
                background-color: #a6342e
            }

            .gb_ed:not(.gb_od) a.gb_4 {
                float: right
            }

            #gb .gb_ed a.gb_Vc.gb_Vc {
                color: #ffffff;
                cursor: pointer
            }

            .gb_ed .gb_Vc:hover {
                background: #357ae8;
                border-color: #2f5bb7
            }

            .gb_xd,
            .gb_pd {
                display: table-cell
            }

            .gb_xd {
                vertical-align: middle
            }

            .gb_xd img {
                height: 48px;
                padding-left: 4px;
                padding-right: 20px;
                width: 48px
            }

            .gb_pd {
                padding-left: 13px;
                width: 100%
            }

            .gb_ed .gb_pd {
                padding-top: 4px;
                min-width: 326px;
                padding-left: 0;
                width: 326px
            }

            .gb_ed.gb_yd .gb_pd {
                min-width: 254px;
                width: 254px
            }

            .gb_ed:not(.gb_od) .gb_pd {
                padding-top: 32px
            }

            .gb_zd {
                display: block;
                display: inline-block;
                padding: 1em 0 0 0;
                position: relative;
                width: 100%
            }

            .gb_Ad {
                color: #ff0000;
                font-style: italic;
                margin: 0;
                padding-left: 46px
            }

            .gb_zd .gb_Bd {
                float: right;
                margin: -20px 0;
                width: -webkit-calc(100% - 46px);
                width: calc(100% - 46px)
            }

            .gb_Cd svg {
                fill: grey
            }

            .gb_Cd.gb_Dd svg {
                fill: #4285f4
            }

            .gb_zd .gb_Bd label:after {
                background-color: #4285f4
            }

            .gb_Cd {
                display: inline;
                float: right;
                margin-right: 22px;
                position: relative;
                top: 2px
            }

            .gb_Kf {
                margin-bottom: 32px;
                font-size: small
            }

            .gb_Kf .gb_Lf {
                margin-right: 5px
            }

            .gb_Kf .gb_Mf {
                color: red
            }

            .gb_2c {
                display: none
            }

            .gb_2c.gb_na {
                display: block
            }

            .gb_3c {
                background-color: #fff;
                -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.08);
                color: #000;
                position: relative;
                z-index: 986
            }

            .gb_4c {
                height: 40px;
                padding: 16px 24px;
                white-space: nowrap
            }

            .gb_5c {
                position: fixed;
                bottom: 16px;
                padding: 16px;
                right: 16px;
                white-space: normal;
                width: 328px;
                -webkit-transition: width .2s, bottom .2s, right .2s;
                transition: width .2s, bottom .2s, right .2s;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -webkit-box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12);
                box-shadow: 0 5px 5px -3px rgba(0, 0, 0, 0.2), 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12)
            }

            @media (max-width:400px) {
                .gb_3c.gb_5c {
                    max-width: 368px;
                    width: auto;
                    bottom: 0;
                    right: 0
                }
            }

            .gb_3c .gb_Vc {
                border: 0;
                font-weight: 500;
                font-size: 14px;
                line-height: 36px;
                min-width: 32px;
                padding: 0 16px;
                vertical-align: middle
            }

            .gb_3c .gb_Vc:before {
                content: '';
                height: 6px;
                left: 0;
                position: absolute;
                top: -6px;
                width: 100%
            }

            .gb_3c .gb_Vc:after {
                bottom: -6px;
                content: '';
                height: 6px;
                left: 0;
                position: absolute;
                width: 100%
            }

            .gb_3c .gb_Vc+.gb_Vc {
                margin-left: 8px
            }

            .gb_6c {
                height: 48px;
                padding: 4px;
                margin: -8px 0 0 -8px
            }

            .gb_5c .gb_6c {
                float: left;
                margin: -4px
            }

            .gb_7c {
                font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif;
                overflow: hidden;
                vertical-align: top
            }

            .gb_4c .gb_7c {
                display: inline-block;
                padding-left: 8px;
                width: 640px
            }

            .gb_5c .gb_7c {
                display: block;
                margin-left: 56px;
                padding-bottom: 16px
            }

            .gb_8c {
                background-color: inherit
            }

            .gb_4c .gb_8c {
                display: inline-block;
                position: absolute;
                top: 18px;
                right: 24px
            }

            .gb_5c .gb_8c {
                text-align: right;
                padding-right: 24px;
                padding-top: 6px
            }

            .gb_8c .gb_9c {
                height: 1.5em;
                margin: -.25em 10px -.25em 0;
                vertical-align: text-top;
                width: 1.5em
            }

            .gb_ad {
                line-height: 20px;
                font-size: 16px;
                font-weight: 700;
                color: rgba(0, 0, 0, .87)
            }

            .gb_5c .gb_ad {
                color: rgba(0, 0, 0, .87);
                font-size: 16px;
                line-height: 20px;
                padding-top: 8px
            }

            .gb_4c .gb_ad,
            .gb_4c .gb_bd {
                width: 640px
            }

            .gb_bd .gb_cd,
            .gb_bd {
                line-height: 20px;
                font-size: 13px;
                font-weight: 400;
                color: rgba(0, 0, 0, .54)
            }

            .gb_5c .gb_bd .gb_cd {
                font-size: 14px
            }

            .gb_5c .gb_bd {
                padding-top: 12px
            }

            .gb_5c .gb_bd a {
                color: rgba(66, 133, 244, 1)
            }

            .gb_Qb .gb_2a {
                border: 0;
                border-left: 1px solid rgba(0, 0, 0, .2);
                border-top: 1px solid rgba(0, 0, 0, .2);
                height: 14px;
                width: 14px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg)
            }

            .gb_Qb .gb_1a {
                border: 0;
                border-left: 1px solid rgba(0, 0, 0, .2);
                border-top: 1px solid rgba(0, 0, 0, .2);
                height: 14px;
                width: 14px;
                -webkit-transform: rotate(45deg);
                transform: rotate(45deg);
                border-color: #fff;
                background: #fff
            }

            .gb_e .gb_mg::before {
                clip: rect(25px 235px 41px 219px);
                left: -197px;
                top: -3px
            }

            .gb_e .gb_oc.gb_ng {
                position: absolute
            }

            .gb_e .gb_ng::before {
                clip: rect(0 210px 16px 194px);
                left: -164px;
                top: 22px
            }

            .gb_e .gb_Ra .gb_mg::before {
                left: -189px
            }

            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_e .gb_mg::before {
                    clip: rect(50px 470px 82px 438px)
                }

                .gb_e .gb_ng::before {
                    clip: rect(0 420px 32px 388px)
                }
            }

            .gb_e .gb_oc,
            .gb_e .gbii,
            .gb_e .gbip {
                background-image: none;
                overflow: hidden;
                position: relative
            }

            .gb_e .gb_oc::before {
                content: url('//ssl.gstatic.com/gb/images/i1_1967ca6a.png');
                position: absolute
            }

            @media (min-resolution:1.25dppx),
            (-webkit-min-device-pixel-ratio:1.25),
            (min-device-pixel-ratio:1.25) {
                .gb_e .gb_oc::before {
                    content: url('//ssl.gstatic.com/gb/images/i2_2ec824b0.png');
                    -webkit-transform: scale(.5);
                    transform: scale(.5);
                    -webkit-transform-origin: 0 0;
                    transform-origin: 0 0
                }
            }

            .gb_Qb a:focus {
                outline: 1px dotted #fff !important
            }

            sentinel {}
        </style>
        <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
            (function() {
                var m = ['AdOtZE', '[\x22psy-ab\x22,\x22gws-wiz\x22,\x22\x22,\x22\x22,null,1,0,null,0,11,\x22en\x22,\x221VKC37vKursQY7aolqyRLeMxubE\x22,\x22\x22,\x22ZKz3XfLvOoeC9PwP7t2MiAk\x22,0,\x22en-CA\x22,null,null,null,null,null,3,null,null,5,null,null,null,null,null,0,1,0,null,null,null,null,-1,null,0,null,0,0,\x22\x22,0,null,0,\x22\x22,null,0,null,0]\n', 'AdOtZI', '[null,null,1,30000,null,null,null,2,null,null,3,null,null,null,null,null,1,null,null,null,null,null,null,[45.4909952,-73.5993856]\n,null,null,null,null,0,null,null,null,null,null,null,null,0,\x221576512612\x22,null,null,null,null,null,1,null,null,[\x2286400000\x22,\x22604800000\x22,2.0]\n,null,1]\n', 'AdOtZM', '[\x22https://www.google.ca/domainless/read?igu\\u003d1\x22,\x22AO61pXQsfx2y-_4VHqGkNAPAZ-lAiO8AkQ:1576512612993\x22,3]\n'];
                var a = m;
                window.W_jd = window.W_jd || {};
                for (var b = 0; b < a.length; b += 2) window.W_jd[a[b]] = JSON.parse(a[b + 1]);
            })();
            (function() {
                var s = '/images/nav_logo299.webp';
                var k = this || self,
                    l = function() {},
                    m = function(a) {
                        var b = typeof a;
                        if ("object" == b)
                            if (a) {
                                if (a instanceof Array) return "array";
                                if (a instanceof Object) return b;
                                var c = Object.prototype.toString.call(a);
                                if ("[object Window]" == c) return "object";
                                if ("[object Array]" == c || "number" == typeof a.length && "undefined" != typeof a.splice && "undefined" != typeof a.propertyIsEnumerable && !a.propertyIsEnumerable("splice")) return "array";
                                if ("[object Function]" == c || "undefined" != typeof a.call && "undefined" != typeof a.propertyIsEnumerable &&
                                    !a.propertyIsEnumerable("call")) return "function"
                            } else return "null";
                        else if ("function" == b && "undefined" == typeof a.call) return "object";
                        return b
                    },
                    n = function(a) {
                        var b = typeof a;
                        return "object" == b && null != a || "function" == b
                    },
                    aa = function(a, b) {
                        function c() {}
                        c.prototype = b.prototype;
                        a.l = b.prototype;
                        a.prototype = new c;
                        a.prototype.constructor = a
                    };
                var ba = Array.prototype.indexOf ? function(a, b) {
                    return Array.prototype.indexOf.call(a, b, void 0)
                } : function(a, b) {
                    if ("string" === typeof a) return "string" !== typeof b || 1 != b.length ? -1 : a.indexOf(b, 0);
                    for (var c = 0; c < a.length; c++)
                        if (c in a && a[c] === b) return c;
                    return -1
                };
                var p = String.prototype.trim ? function(a) {
                        return a.trim()
                    } : function(a) {
                        return /^[\s\xa0]*([\s\S]*?)[\s\xa0]*$/.exec(a)[1]
                    },
                    q = function(a, b) {
                        return a < b ? -1 : a > b ? 1 : 0
                    };
                var r;
                a: {
                    var t = k.navigator;
                    if (t) {
                        var u = t.userAgent;
                        if (u) {
                            r = u;
                            break a
                        }
                    }
                    r = ""
                };
                var v = function(a) {
                    v[" "](a);
                    return a
                };
                v[" "] = l;
                var ca = -1 != r.indexOf("Opera"),
                    w = -1 != r.indexOf("Trident") || -1 != r.indexOf("MSIE"),
                    da = -1 != r.indexOf("Edge"),
                    x = -1 != r.indexOf("Gecko") && !(-1 != r.toLowerCase().indexOf("webkit") && -1 == r.indexOf("Edge")) && !(-1 != r.indexOf("Trident") || -1 != r.indexOf("MSIE")) && -1 == r.indexOf("Edge"),
                    ea = -1 != r.toLowerCase().indexOf("webkit") && -1 == r.indexOf("Edge"),
                    y = function() {
                        var a = k.document;
                        return a ? a.documentMode : void 0
                    },
                    z;
                a: {
                    var A = "",
                        B = function() {
                            var a = r;
                            if (x) return /rv:([^\);]+)(\)|;)/.exec(a);
                            if (da) return /Edge\/([\d\.]+)/.exec(a);
                            if (w) return /\b(?:MSIE|rv)[:]([^\);]+)(\)|;)/.exec(a);
                            if (ea) return /WebKit\/(\S+)/.exec(a);
                            if (ca) return /(?:Version)[ \/]?(\S+)/.exec(a)
                        }();B && (A = B ? B[1] : "");
                    if (w) {
                        var C = y();
                        if (null != C && C > parseFloat(A)) {
                            z = String(C);
                            break a
                        }
                    }
                    z = A
                }
                var fa = z,
                    D = {},
                    E;
                E = k.document && w ? y() : void 0;
                var F;
                (F = !w) || (F = 9 <= Number(E));
                var G = F,
                    H;
                if (H = w) {
                    var I;
                    if (Object.prototype.hasOwnProperty.call(D, "9")) I = D["9"];
                    else {
                        for (var J = 0, K = p(String(fa)).split("."), L = p("9").split("."), ha = Math.max(K.length, L.length), M = 0; 0 == J && M < ha; M++) {
                            var O = K[M] || "",
                                P = L[M] || "";
                            do {
                                var Q = /(\d*)(\D*)(.*)/.exec(O) || ["", "", "", ""],
                                    R = /(\d*)(\D*)(.*)/.exec(P) || ["", "", "", ""];
                                if (0 == Q[0].length && 0 == R[0].length) break;
                                J = q(0 == Q[1].length ? 0 : parseInt(Q[1], 10), 0 == R[1].length ? 0 : parseInt(R[1], 10)) || q(0 == Q[2].length, 0 == R[2].length) || q(Q[2], R[2]);
                                O = Q[3];
                                P = R[3]
                            } while (0 == J)
                        }
                        I = D["9"] = 0 <=
                            J
                    }
                    H = !I
                }
                var ia = H,
                    ja = function() {
                        if (!k.addEventListener || !Object.defineProperty) return !1;
                        var a = !1,
                            b = Object.defineProperty({}, "passive", {
                                get: function() {
                                    a = !0
                                }
                            });
                        try {
                            k.addEventListener("test", l, b), k.removeEventListener("test", l, b)
                        } catch (c) {}
                        return a
                    }();
                var S = function(a, b) {
                    this.type = a;
                    this.a = this.target = b
                };
                S.prototype.g = function() {};
                var T = function(a, b) {
                    S.call(this, a ? a.type : "");
                    this.relatedTarget = this.a = this.target = null;
                    this.button = this.screenY = this.screenX = this.clientY = this.clientX = 0;
                    this.key = "";
                    this.metaKey = this.shiftKey = this.altKey = this.ctrlKey = !1;
                    this.pointerId = 0;
                    this.pointerType = "";
                    this.j = null;
                    if (a) {
                        var c = this.type = a.type,
                            e = a.changedTouches && a.changedTouches.length ? a.changedTouches[0] : null;
                        this.target = a.target || a.srcElement;
                        this.a = b;
                        var d = a.relatedTarget;
                        if (d) {
                            if (x) {
                                a: {
                                    try {
                                        v(d.nodeName);
                                        var f = !0;
                                        break a
                                    } catch (g) {}
                                    f = !1
                                }
                                f ||
                                (d = null)
                            }
                        } else "mouseover" == c ? d = a.fromElement : "mouseout" == c && (d = a.toElement);
                        this.relatedTarget = d;
                        e ? (this.clientX = void 0 !== e.clientX ? e.clientX : e.pageX, this.clientY = void 0 !== e.clientY ? e.clientY : e.pageY, this.screenX = e.screenX || 0, this.screenY = e.screenY || 0) : (this.clientX = void 0 !== a.clientX ? a.clientX : a.pageX, this.clientY = void 0 !== a.clientY ? a.clientY : a.pageY, this.screenX = a.screenX || 0, this.screenY = a.screenY || 0);
                        this.button = a.button;
                        this.key = a.key || "";
                        this.ctrlKey = a.ctrlKey;
                        this.altKey = a.altKey;
                        this.shiftKey =
                            a.shiftKey;
                        this.metaKey = a.metaKey;
                        this.pointerId = a.pointerId || 0;
                        this.pointerType = "string" === typeof a.pointerType ? a.pointerType : la[a.pointerType] || "";
                        this.j = a;
                        a.defaultPrevented && this.g()
                    }
                };
                aa(T, S);
                var la = {
                    2: "touch",
                    3: "pen",
                    4: "mouse"
                };
                T.prototype.g = function() {
                    T.l.g.call(this);
                    var a = this.j;
                    if (a.preventDefault) a.preventDefault();
                    else if (a.returnValue = !1, ia) try {
                        if (a.ctrlKey || 112 <= a.keyCode && 123 >= a.keyCode) a.keyCode = -1
                    } catch (b) {}
                };
                var U = "closure_listenable_" + (1E6 * Math.random() | 0),
                    ma = 0;
                var na = function(a, b, c, e, d) {
                        this.listener = a;
                        this.a = null;
                        this.src = b;
                        this.type = c;
                        this.capture = !!e;
                        this.g = d;
                        this.key = ++ma;
                        this.h = this.i = !1
                    },
                    oa = function(a) {
                        a.h = !0;
                        a.listener = null;
                        a.a = null;
                        a.src = null;
                        a.g = null
                    };
                var V = function(a) {
                    this.src = a;
                    this.a = {};
                    this.g = 0
                };
                V.prototype.add = function(a, b, c, e, d) {
                    var f = a.toString();
                    a = this.a[f];
                    a || (a = this.a[f] = [], this.g++);
                    var g;
                    a: {
                        for (g = 0; g < a.length; ++g) {
                            var h = a[g];
                            if (!h.h && h.listener == b && h.capture == !!e && h.g == d) break a
                        }
                        g = -1
                    } - 1 < g ? (b = a[g], c || (b.i = !1)) : (b = new na(b, this.src, f, !!e, d), b.i = c, a.push(b));
                    return b
                };
                var W = "closure_lm_" + (1E6 * Math.random() | 0),
                    X = {},
                    pa = 0,
                    ra = function(a, b, c, e, d) {
                        if (e && e.once) qa(a, b, c, e, d);
                        else if ("array" == m(b))
                            for (var f = 0; f < b.length; f++) ra(a, b[f], c, e, d);
                        else c = sa(c), a && a[U] ? a.a(b, c, n(e) ? !!e.capture : !!e, d) : ta(a, b, c, !1, e, d)
                    },
                    ta = function(a, b, c, e, d, f) {
                        if (!b) throw Error("a");
                        var g = n(d) ? !!d.capture : !!d,
                            h = Y(a);
                        h || (a[W] = h = new V(a));
                        c = h.add(b, c, e, g, f);
                        if (!c.a) {
                            e = ua();
                            c.a = e;
                            e.src = a;
                            e.listener = c;
                            if (a.addEventListener) ja || (d = g), void 0 === d && (d = !1), a.addEventListener(b.toString(), e, d);
                            else if (a.attachEvent) a.attachEvent(va(b.toString()), e);
                            else if (a.addListener && a.removeListener) a.addListener(e);
                            else throw Error("b");
                            pa++
                        }
                    },
                    ua = function() {
                        var a = wa,
                            b = G ? function(c) {
                                return a.call(b.src, b.listener, c)
                            } : function(c) {
                                c = a.call(b.src, b.listener, c);
                                if (!c) return c
                            };
                        return b
                    },
                    qa = function(a, b, c, e, d) {
                        if ("array" == m(b))
                            for (var f = 0; f < b.length; f++) qa(a, b[f], c, e, d);
                        else c = sa(c), a && a[U] ? a.g(b, c, n(e) ? !!e.capture : !!e, d) : ta(a, b, c, !0, e, d)
                    },
                    va = function(a) {
                        return a in X ? X[a] : X[a] = "on" + a
                    },
                    ya = function(a, b, c, e) {
                        var d = !0;
                        if (a = Y(a))
                            if (b = a.a[b.toString()])
                                for (b =
                                    b.concat(), a = 0; a < b.length; a++) {
                                    var f = b[a];
                                    f && f.capture == c && !f.h && (f = xa(f, e), d = d && !1 !== f)
                                }
                        return d
                    },
                    xa = function(a, b) {
                        var c = a.listener,
                            e = a.g || a.src;
                        if (a.i && "number" !== typeof a && a && !a.h) {
                            var d = a.src;
                            if (d && d[U]) d.j(a);
                            else {
                                var f = a.type,
                                    g = a.a;
                                d.removeEventListener ? d.removeEventListener(f, g, a.capture) : d.detachEvent ? d.detachEvent(va(f), g) : d.addListener && d.removeListener && d.removeListener(g);
                                pa--;
                                if (f = Y(d)) {
                                    g = a.type;
                                    var h;
                                    if (h = g in f.a) {
                                        h = f.a[g];
                                        var N = ba(h, a),
                                            ka;
                                        (ka = 0 <= N) && Array.prototype.splice.call(h, N, 1);
                                        h = ka
                                    }
                                    h && (oa(a), 0 == f.a[g].length && (delete f.a[g], f.g--));
                                    0 == f.g && (f.src = null, d[W] = null)
                                } else oa(a)
                            }
                        }
                        return c.call(e, b)
                    },
                    wa = function(a, b) {
                        if (a.h) return !0;
                        if (!G) {
                            var c;
                            if (!(c = b)) a: {
                                c = ["window", "event"];
                                for (var e = k, d = 0; d < c.length; d++)
                                    if (e = e[c[d]], null == e) {
                                        c = null;
                                        break a
                                    } c = e
                            }
                            d = c;
                            c = new T(d, this);
                            e = !0;
                            if (!(0 > d.keyCode || void 0 != d.returnValue)) {
                                a: {
                                    var f = !1;
                                    if (0 == d.keyCode) try {
                                        d.keyCode = -1;
                                        break a
                                    } catch (N) {
                                        f = !0
                                    }
                                    if (f || void 0 == d.returnValue) d.returnValue = !0
                                }
                                d = [];
                                for (f = c.a; f; f = f.parentNode) d.push(f);f = a.type;
                                for (var g = d.length - 1; 0 <= g; g--) {
                                    c.a = d[g];
                                    var h = ya(d[g], f, !0, c);
                                    e = e && h
                                }
                                for (g = 0; g < d.length; g++) c.a = d[g],
                                h = ya(d[g], f, !1, c),
                                e = e && h
                            }
                            return e
                        }
                        return xa(a, new T(b, this))
                    },
                    Y = function(a) {
                        a = a[W];
                        return a instanceof V ? a : null
                    },
                    Z = "__closure_events_fn_" + (1E9 * Math.random() >>> 0),
                    sa = function(a) {
                        if ("function" == m(a)) return a;
                        a[Z] || (a[Z] = function(b) {
                            return a.handleEvent(b)
                        });
                        return a[Z]
                    };
                ra(document, "DOMContentLoaded", function() {
                    document.f && (document.f.q.getAttribute("data-saf") || document.f.q.focus());
                    document.gbqf && document.gbqf.q.focus();
                    document.images && ((new Image).src = s)
                });
            })();
        </script>
    </div><textarea class="csi" name="csi" style="display:none"></textarea>
    <script nonce="H2hylgiybQtnv1vEIh0pTQ==">
        (function() {
            function k(a, b) {
                var c = window,
                    d = document;
                if (!a) return 0;
                if (!b) {
                    if ("none" == a.style.display) return 0;
                    if (d.defaultView && d.defaultView.getComputedStyle) {
                        var e = d.defaultView.getComputedStyle(a);
                        if (e && ("hidden" == e.visibility || "0px" == e.height && "0px" == e.width)) return 0
                    }
                }
                if (!a.getBoundingClientRect) return 1;
                var f = a.getBoundingClientRect();
                e = f.left + c.pageXOffset;
                var m = f.top + c.pageYOffset,
                    h = f.width;
                f = f.height;
                return !b && 0 >= f && 0 >= h ? 0 : 0 > m + f ? 2 : m >= (c.innerHeight || d.documentElement.clientHeight) ? 3 : 0 > e + h || e >= (c.innerWidth ||
                    d.documentElement.clientWidth) ? 4 : 1
            };
            var l, n = ["aft", "hct", "prt", "pprt", "sct"];

            function p(a) {
                return (a = q.search.match(new RegExp("[?&]" + a + "=(\\d+)"))) ? Number(a[1]) : -1
            }

            function r(a) {
                l.removeEventListener("click", r);
                a.stopPropagation && a.stopPropagation()
            }
            var q = location;
            var t = 0,
                u = 0,
                v = 0,
                w = 0,
                x = 0,
                y, z;

            function A(a, b, c, d) {
                var e = google.timers.load.t[a];
                e && (c || d && b && b < e) || google.tick("load", a, b)
            }

            function C(a, b) {
                b = b || google.time();
                A("aft", b, !1, !0);
                ++x;
                D();
                E(a, b)
            }

            function E(a, b) {
                var c = b || google.time();
                A("iml", c, !1, !0);
                ++u;
                F()
            }

            function F() {
                z || u != t || google.c.u("il")
            }

            function D() {
                if (!y && x == v) {
                    var a = "&ima=" + v + "&imad=" + w;
                    google.timers.load.e.imn && (a += "&imn=" + google.timers.load.e.imn);
                    var b = google.timers.load,
                        c = p("qsubts");
                    if (0 < c) {
                        var d = p("fbts");
                        0 < d && (b.t.start = Math.max(c, d))
                    }
                    var e = b.t,
                        f = e.start;
                    d = {
                        wsrt: b.wsrt
                    };
                    for (var m = 0, h; h = n[m++];) {
                        var B = e[h];
                        B && f && (d[h] = B - f)
                    }
                    0 < c && (d.gsasrt = b.t.start - c);
                    b = "/gen_204?s=" + google.sn + "&t=aft&atyp=csi&ei=" + google.kEI + "&rt=";
                    c = "";
                    for (var g in d) b += c + g + "." + d[g], c = ",";
                    google.cshid && (b += "&cshid=" + google.cshid);
                    (g = window.performance &&
                        window.performance.navigation) && 2 == g.type && (b += "&bb=1");
                    "gsasrt" in d && (g = p("qsd"), 0 < g && (b += "&qsd=" + g));
                    google.kBL && (b += "&bl=" + google.kBL);
                    a = b + (a || "");
                    (l = document.getElementById("csi-ping")) ? (l.addEventListener("click", r), l.setAttribute("ping", a), l.click()) : navigator.sendBeacon ? navigator.sendBeacon(a, "") : google.log("", "", a)
                }
            }

            function G(a) {
                var b = "string" != typeof a.src || !a.src,
                    c = !!a.getAttribute("data-bsrc"),
                    d = a.getAttribute("data-deferred"),
                    e = (b || a.complete) && !d && !c;
                b = e && !google.c.lhc && Number(a.getAttribute("data-iml")) || 0;
                c = k(a, c);
                a.setAttribute("data-atf", c);
                ++t;
                e && !b || a.hasAttribute("data-noaft") ? ++u : (e = (c = 1 == c) ? C : E, c && (++v, d && ++w), b ? e(void 0, b) : google.rll(a, !0, e))
            };
            (function() {
                var a = google.time();
                if (google.timers && google.timers.load.t) {
                    z = y = !0;
                    google.c.b("il");
                    for (var b = document.getElementsByTagName("img"), c = 0, d = void 0; d = b[c++];) G(d);
                    A("prt", a);
                    A("aft", a, !0);
                    A("iml", a, !0);
                    google.c.e("load", "imn", String(t));
                    y && (y = !1, D());
                    z = !1;
                    F();
                    google.c.glu && google.c.glu();
                    google.rll(window, !1, function() {
                        A("ol", void 0);
                        google.c.u("pr")
                    })
                }
            })();
        }).call(this);
        google.drty && google.drty();
    </script>
    <script src="./g00gie_files/rs=ACT90oG9qtJMQmN3EJ0OT3xlLKh_RpIAFg"></script>
    <script src="./g00gie_files/m=WgDvvc,aa,abd,async,dvl,fEVMic,foot,lu,m,mUpTid,mu,sb_wiz,sf,sonic,spch,xz7cCd" async="" gapi_processed="true"></script>
</body>

</html>