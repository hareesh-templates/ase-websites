/******************************************
    Version: 1.0
/****************************************** */

/*! jQuery v3.3.1 | (c) JS Foundation and other contributors | jquery.org/license */
!(function (e, t) {
  "use strict";
  "object" == typeof module && "object" == typeof module.exports
    ? (module.exports = e.document
        ? t(e, !0)
        : function (e) {
            if (!e.document)
              throw new Error("jQuery requires a window with a document");
            return t(e);
          })
    : t(e);
})("undefined" != typeof window ? window : this, function (e, t) {
  "use strict";
  var n = [],
    r = e.document,
    i = Object.getPrototypeOf,
    o = n.slice,
    a = n.concat,
    s = n.push,
    u = n.indexOf,
    l = {},
    c = l.toString,
    f = l.hasOwnProperty,
    p = f.toString,
    d = p.call(Object),
    h = {},
    g = function e(t) {
      return "function" == typeof t && "number" != typeof t.nodeType;
    },
    y = function e(t) {
      return null != t && t === t.window;
    },
    v = { type: !0, src: !0, noModule: !0 };
  function m(e, t, n) {
    var i,
      o = (t = t || r).createElement("script");
    if (((o.text = e), n)) for (i in v) n[i] && (o[i] = n[i]);
    t.head.appendChild(o).parentNode.removeChild(o);
  }
  function x(e) {
    return null == e
      ? e + ""
      : "object" == typeof e || "function" == typeof e
      ? l[c.call(e)] || "object"
      : typeof e;
  }
  var b = "3.3.1",
    w = function (e, t) {
      return new w.fn.init(e, t);
    },
    T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
  (w.fn = w.prototype =
    {
      jquery: "3.3.1",
      constructor: w,
      length: 0,
      toArray: function () {
        return o.call(this);
      },
      get: function (e) {
        return null == e
          ? o.call(this)
          : e < 0
          ? this[e + this.length]
          : this[e];
      },
      pushStack: function (e) {
        var t = w.merge(this.constructor(), e);
        return (t.prevObject = this), t;
      },
      each: function (e) {
        return w.each(this, e);
      },
      map: function (e) {
        return this.pushStack(
          w.map(this, function (t, n) {
            return e.call(t, n, t);
          })
        );
      },
      slice: function () {
        return this.pushStack(o.apply(this, arguments));
      },
      first: function () {
        return this.eq(0);
      },
      last: function () {
        return this.eq(-1);
      },
      eq: function (e) {
        var t = this.length,
          n = +e + (e < 0 ? t : 0);
        return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
      },
      end: function () {
        return this.prevObject || this.constructor();
      },
      push: s,
      sort: n.sort,
      splice: n.splice,
    }),
    (w.extend = w.fn.extend =
      function () {
        var e,
          t,
          n,
          r,
          i,
          o,
          a = arguments[0] || {},
          s = 1,
          u = arguments.length,
          l = !1;
        for (
          "boolean" == typeof a && ((l = a), (a = arguments[s] || {}), s++),
            "object" == typeof a || g(a) || (a = {}),
            s === u && ((a = this), s--);
          s < u;
          s++
        )
          if (null != (e = arguments[s]))
            for (t in e)
              (n = a[t]),
                a !== (r = e[t]) &&
                  (l && r && (w.isPlainObject(r) || (i = Array.isArray(r)))
                    ? (i
                        ? ((i = !1), (o = n && Array.isArray(n) ? n : []))
                        : (o = n && w.isPlainObject(n) ? n : {}),
                      (a[t] = w.extend(l, o, r)))
                    : void 0 !== r && (a[t] = r));
        return a;
      }),
    w.extend({
      expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
      isReady: !0,
      error: function (e) {
        throw new Error(e);
      },
      noop: function () {},
      isPlainObject: function (e) {
        var t, n;
        return (
          !(!e || "[object Object]" !== c.call(e)) &&
          (!(t = i(e)) ||
            ("function" ==
              typeof (n = f.call(t, "constructor") && t.constructor) &&
              p.call(n) === d))
        );
      },
      isEmptyObject: function (e) {
        var t;
        for (t in e) return !1;
        return !0;
      },
      globalEval: function (e) {
        m(e);
      },
      each: function (e, t) {
        var n,
          r = 0;
        if (C(e)) {
          for (n = e.length; r < n; r++)
            if (!1 === t.call(e[r], r, e[r])) break;
        } else for (r in e) if (!1 === t.call(e[r], r, e[r])) break;
        return e;
      },
      trim: function (e) {
        return null == e ? "" : (e + "").replace(T, "");
      },
      makeArray: function (e, t) {
        var n = t || [];
        return (
          null != e &&
            (C(Object(e))
              ? w.merge(n, "string" == typeof e ? [e] : e)
              : s.call(n, e)),
          n
        );
      },
      inArray: function (e, t, n) {
        return null == t ? -1 : u.call(t, e, n);
      },
      merge: function (e, t) {
        for (var n = +t.length, r = 0, i = e.length; r < n; r++) e[i++] = t[r];
        return (e.length = i), e;
      },
      grep: function (e, t, n) {
        for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++)
          (r = !t(e[o], o)) !== s && i.push(e[o]);
        return i;
      },
      map: function (e, t, n) {
        var r,
          i,
          o = 0,
          s = [];
        if (C(e))
          for (r = e.length; o < r; o++)
            null != (i = t(e[o], o, n)) && s.push(i);
        else for (o in e) null != (i = t(e[o], o, n)) && s.push(i);
        return a.apply([], s);
      },
      guid: 1,
      support: h,
    }),
    "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]),
    w.each(
      "Boolean Number String Function Array Date RegExp Object Error Symbol".split(
        " "
      ),
      function (e, t) {
        l["[object " + t + "]"] = t.toLowerCase();
      }
    );
  function C(e) {
    var t = !!e && "length" in e && e.length,
      n = x(e);
    return (
      !g(e) &&
      !y(e) &&
      ("array" === n ||
        0 === t ||
        ("number" == typeof t && t > 0 && t - 1 in e))
    );
  }
  var E = (function (e) {
    var t,
      n,
      r,
      i,
      o,
      a,
      s,
      u,
      l,
      c,
      f,
      p,
      d,
      h,
      g,
      y,
      v,
      m,
      x,
      b = "sizzle" + 1 * new Date(),
      w = e.document,
      T = 0,
      C = 0,
      E = ae(),
      k = ae(),
      S = ae(),
      D = function (e, t) {
        return e === t && (f = !0), 0;
      },
      N = {}.hasOwnProperty,
      A = [],
      j = A.pop,
      q = A.push,
      L = A.push,
      H = A.slice,
      O = function (e, t) {
        for (var n = 0, r = e.length; n < r; n++) if (e[n] === t) return n;
        return -1;
      },
      P =
        "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
      M = "[\\x20\\t\\r\\n\\f]",
      R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
      I =
        "\\[" +
        M +
        "*(" +
        R +
        ")(?:" +
        M +
        "*([*^$|!~]?=)" +
        M +
        "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" +
        R +
        "))|)" +
        M +
        "*\\]",
      W =
        ":(" +
        R +
        ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" +
        I +
        ")*)|.*)\\)|)",
      $ = new RegExp(M + "+", "g"),
      B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
      F = new RegExp("^" + M + "*," + M + "*"),
      _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
      z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
      X = new RegExp(W),
      U = new RegExp("^" + R + "$"),
      V = {
        ID: new RegExp("^#(" + R + ")"),
        CLASS: new RegExp("^\\.(" + R + ")"),
        TAG: new RegExp("^(" + R + "|[*])"),
        ATTR: new RegExp("^" + I),
        PSEUDO: new RegExp("^" + W),
        CHILD: new RegExp(
          "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
            M +
            "*(even|odd|(([+-]|)(\\d*)n|)" +
            M +
            "*(?:([+-]|)" +
            M +
            "*(\\d+)|))" +
            M +
            "*\\)|)",
          "i"
        ),
        bool: new RegExp("^(?:" + P + ")$", "i"),
        needsContext: new RegExp(
          "^" +
            M +
            "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
            M +
            "*((?:-\\d)?\\d*)" +
            M +
            "*\\)|)(?=[^-]|$)",
          "i"
        ),
      },
      G = /^(?:input|select|textarea|button)$/i,
      Y = /^h\d$/i,
      Q = /^[^{]+\{\s*\[native \w/,
      J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
      K = /[+~]/,
      Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
      ee = function (e, t, n) {
        var r = "0x" + t - 65536;
        return r !== r || n
          ? t
          : r < 0
          ? String.fromCharCode(r + 65536)
          : String.fromCharCode((r >> 10) | 55296, (1023 & r) | 56320);
      },
      te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
      ne = function (e, t) {
        return t
          ? "\0" === e
            ? "\ufffd"
            : e.slice(0, -1) +
              "\\" +
              e.charCodeAt(e.length - 1).toString(16) +
              " "
          : "\\" + e;
      },
      re = function () {
        p();
      },
      ie = me(
        function (e) {
          return !0 === e.disabled && ("form" in e || "label" in e);
        },
        { dir: "parentNode", next: "legend" }
      );
    try {
      L.apply((A = H.call(w.childNodes)), w.childNodes),
        A[w.childNodes.length].nodeType;
    } catch (e) {
      L = {
        apply: A.length
          ? function (e, t) {
              q.apply(e, H.call(t));
            }
          : function (e, t) {
              var n = e.length,
                r = 0;
              while ((e[n++] = t[r++]));
              e.length = n - 1;
            },
      };
    }
    function oe(e, t, r, i) {
      var o,
        s,
        l,
        c,
        f,
        h,
        v,
        m = t && t.ownerDocument,
        T = t ? t.nodeType : 9;
      if (
        ((r = r || []),
        "string" != typeof e || !e || (1 !== T && 9 !== T && 11 !== T))
      )
        return r;
      if (
        !i &&
        ((t ? t.ownerDocument || t : w) !== d && p(t), (t = t || d), g)
      ) {
        if (11 !== T && (f = J.exec(e)))
          if ((o = f[1])) {
            if (9 === T) {
              if (!(l = t.getElementById(o))) return r;
              if (l.id === o) return r.push(l), r;
            } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o)
              return r.push(l), r;
          } else {
            if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
            if (
              (o = f[3]) &&
              n.getElementsByClassName &&
              t.getElementsByClassName
            )
              return L.apply(r, t.getElementsByClassName(o)), r;
          }
        if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
          if (1 !== T) (m = t), (v = e);
          else if ("object" !== t.nodeName.toLowerCase()) {
            (c = t.getAttribute("id"))
              ? (c = c.replace(te, ne))
              : t.setAttribute("id", (c = b)),
              (s = (h = a(e)).length);
            while (s--) h[s] = "#" + c + " " + ve(h[s]);
            (v = h.join(",")), (m = (K.test(e) && ge(t.parentNode)) || t);
          }
          if (v)
            try {
              return L.apply(r, m.querySelectorAll(v)), r;
            } catch (e) {
            } finally {
              c === b && t.removeAttribute("id");
            }
        }
      }
      return u(e.replace(B, "$1"), t, r, i);
    }
    function ae() {
      var e = [];
      function t(n, i) {
        return (
          e.push(n + " ") > r.cacheLength && delete t[e.shift()],
          (t[n + " "] = i)
        );
      }
      return t;
    }
    function se(e) {
      return (e[b] = !0), e;
    }
    function ue(e) {
      var t = d.createElement("fieldset");
      try {
        return !!e(t);
      } catch (e) {
        return !1;
      } finally {
        t.parentNode && t.parentNode.removeChild(t), (t = null);
      }
    }
    function le(e, t) {
      var n = e.split("|"),
        i = n.length;
      while (i--) r.attrHandle[n[i]] = t;
    }
    function ce(e, t) {
      var n = t && e,
        r =
          n &&
          1 === e.nodeType &&
          1 === t.nodeType &&
          e.sourceIndex - t.sourceIndex;
      if (r) return r;
      if (n) while ((n = n.nextSibling)) if (n === t) return -1;
      return e ? 1 : -1;
    }
    function fe(e) {
      return function (t) {
        return "input" === t.nodeName.toLowerCase() && t.type === e;
      };
    }
    function pe(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();
        return ("input" === n || "button" === n) && t.type === e;
      };
    }
    function de(e) {
      return function (t) {
        return "form" in t
          ? t.parentNode && !1 === t.disabled
            ? "label" in t
              ? "label" in t.parentNode
                ? t.parentNode.disabled === e
                : t.disabled === e
              : t.isDisabled === e || (t.isDisabled !== !e && ie(t) === e)
            : t.disabled === e
          : "label" in t && t.disabled === e;
      };
    }
    function he(e) {
      return se(function (t) {
        return (
          (t = +t),
          se(function (n, r) {
            var i,
              o = e([], n.length, t),
              a = o.length;
            while (a--) n[(i = o[a])] && (n[i] = !(r[i] = n[i]));
          })
        );
      });
    }
    function ge(e) {
      return e && "undefined" != typeof e.getElementsByTagName && e;
    }
    (n = oe.support = {}),
      (o = oe.isXML =
        function (e) {
          var t = e && (e.ownerDocument || e).documentElement;
          return !!t && "HTML" !== t.nodeName;
        }),
      (p = oe.setDocument =
        function (e) {
          var t,
            i,
            a = e ? e.ownerDocument || e : w;
          return a !== d && 9 === a.nodeType && a.documentElement
            ? ((d = a),
              (h = d.documentElement),
              (g = !o(d)),
              w !== d &&
                (i = d.defaultView) &&
                i.top !== i &&
                (i.addEventListener
                  ? i.addEventListener("unload", re, !1)
                  : i.attachEvent && i.attachEvent("onunload", re)),
              (n.attributes = ue(function (e) {
                return (e.className = "i"), !e.getAttribute("className");
              })),
              (n.getElementsByTagName = ue(function (e) {
                return (
                  e.appendChild(d.createComment("")),
                  !e.getElementsByTagName("*").length
                );
              })),
              (n.getElementsByClassName = Q.test(d.getElementsByClassName)),
              (n.getById = ue(function (e) {
                return (
                  (h.appendChild(e).id = b),
                  !d.getElementsByName || !d.getElementsByName(b).length
                );
              })),
              n.getById
                ? ((r.filter.ID = function (e) {
                    var t = e.replace(Z, ee);
                    return function (e) {
                      return e.getAttribute("id") === t;
                    };
                  }),
                  (r.find.ID = function (e, t) {
                    if ("undefined" != typeof t.getElementById && g) {
                      var n = t.getElementById(e);
                      return n ? [n] : [];
                    }
                  }))
                : ((r.filter.ID = function (e) {
                    var t = e.replace(Z, ee);
                    return function (e) {
                      var n =
                        "undefined" != typeof e.getAttributeNode &&
                        e.getAttributeNode("id");
                      return n && n.value === t;
                    };
                  }),
                  (r.find.ID = function (e, t) {
                    if ("undefined" != typeof t.getElementById && g) {
                      var n,
                        r,
                        i,
                        o = t.getElementById(e);
                      if (o) {
                        if ((n = o.getAttributeNode("id")) && n.value === e)
                          return [o];
                        (i = t.getElementsByName(e)), (r = 0);
                        while ((o = i[r++]))
                          if ((n = o.getAttributeNode("id")) && n.value === e)
                            return [o];
                      }
                      return [];
                    }
                  })),
              (r.find.TAG = n.getElementsByTagName
                ? function (e, t) {
                    return "undefined" != typeof t.getElementsByTagName
                      ? t.getElementsByTagName(e)
                      : n.qsa
                      ? t.querySelectorAll(e)
                      : void 0;
                  }
                : function (e, t) {
                    var n,
                      r = [],
                      i = 0,
                      o = t.getElementsByTagName(e);
                    if ("*" === e) {
                      while ((n = o[i++])) 1 === n.nodeType && r.push(n);
                      return r;
                    }
                    return o;
                  }),
              (r.find.CLASS =
                n.getElementsByClassName &&
                function (e, t) {
                  if ("undefined" != typeof t.getElementsByClassName && g)
                    return t.getElementsByClassName(e);
                }),
              (v = []),
              (y = []),
              (n.qsa = Q.test(d.querySelectorAll)) &&
                (ue(function (e) {
                  (h.appendChild(e).innerHTML =
                    "<a id='" +
                    b +
                    "'></a><select id='" +
                    b +
                    "-\r\\' msallowcapture=''><option selected=''></option></select>"),
                    e.querySelectorAll("[msallowcapture^='']").length &&
                      y.push("[*^$]=" + M + "*(?:''|\"\")"),
                    e.querySelectorAll("[selected]").length ||
                      y.push("\\[" + M + "*(?:value|" + P + ")"),
                    e.querySelectorAll("[id~=" + b + "-]").length ||
                      y.push("~="),
                    e.querySelectorAll(":checked").length || y.push(":checked"),
                    e.querySelectorAll("a#" + b + "+*").length ||
                      y.push(".#.+[+~]");
                }),
                ue(function (e) {
                  e.innerHTML =
                    "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
                  var t = d.createElement("input");
                  t.setAttribute("type", "hidden"),
                    e.appendChild(t).setAttribute("name", "D"),
                    e.querySelectorAll("[name=d]").length &&
                      y.push("name" + M + "*[*^$|!~]?="),
                    2 !== e.querySelectorAll(":enabled").length &&
                      y.push(":enabled", ":disabled"),
                    (h.appendChild(e).disabled = !0),
                    2 !== e.querySelectorAll(":disabled").length &&
                      y.push(":enabled", ":disabled"),
                    e.querySelectorAll("*,:x"),
                    y.push(",.*:");
                })),
              (n.matchesSelector = Q.test(
                (m =
                  h.matches ||
                  h.webkitMatchesSelector ||
                  h.mozMatchesSelector ||
                  h.oMatchesSelector ||
                  h.msMatchesSelector)
              )) &&
                ue(function (e) {
                  (n.disconnectedMatch = m.call(e, "*")),
                    m.call(e, "[s!='']:x"),
                    v.push("!=", W);
                }),
              (y = y.length && new RegExp(y.join("|"))),
              (v = v.length && new RegExp(v.join("|"))),
              (t = Q.test(h.compareDocumentPosition)),
              (x =
                t || Q.test(h.contains)
                  ? function (e, t) {
                      var n = 9 === e.nodeType ? e.documentElement : e,
                        r = t && t.parentNode;
                      return (
                        e === r ||
                        !(
                          !r ||
                          1 !== r.nodeType ||
                          !(n.contains
                            ? n.contains(r)
                            : e.compareDocumentPosition &&
                              16 & e.compareDocumentPosition(r))
                        )
                      );
                    }
                  : function (e, t) {
                      if (t) while ((t = t.parentNode)) if (t === e) return !0;
                      return !1;
                    }),
              (D = t
                ? function (e, t) {
                    if (e === t) return (f = !0), 0;
                    var r =
                      !e.compareDocumentPosition - !t.compareDocumentPosition;
                    return (
                      r ||
                      (1 &
                        (r =
                          (e.ownerDocument || e) === (t.ownerDocument || t)
                            ? e.compareDocumentPosition(t)
                            : 1) ||
                      (!n.sortDetached && t.compareDocumentPosition(e) === r)
                        ? e === d || (e.ownerDocument === w && x(w, e))
                          ? -1
                          : t === d || (t.ownerDocument === w && x(w, t))
                          ? 1
                          : c
                          ? O(c, e) - O(c, t)
                          : 0
                        : 4 & r
                        ? -1
                        : 1)
                    );
                  }
                : function (e, t) {
                    if (e === t) return (f = !0), 0;
                    var n,
                      r = 0,
                      i = e.parentNode,
                      o = t.parentNode,
                      a = [e],
                      s = [t];
                    if (!i || !o)
                      return e === d
                        ? -1
                        : t === d
                        ? 1
                        : i
                        ? -1
                        : o
                        ? 1
                        : c
                        ? O(c, e) - O(c, t)
                        : 0;
                    if (i === o) return ce(e, t);
                    n = e;
                    while ((n = n.parentNode)) a.unshift(n);
                    n = t;
                    while ((n = n.parentNode)) s.unshift(n);
                    while (a[r] === s[r]) r++;
                    return r
                      ? ce(a[r], s[r])
                      : a[r] === w
                      ? -1
                      : s[r] === w
                      ? 1
                      : 0;
                  }),
              d)
            : d;
        }),
      (oe.matches = function (e, t) {
        return oe(e, null, null, t);
      }),
      (oe.matchesSelector = function (e, t) {
        if (
          ((e.ownerDocument || e) !== d && p(e),
          (t = t.replace(z, "='$1']")),
          n.matchesSelector &&
            g &&
            !S[t + " "] &&
            (!v || !v.test(t)) &&
            (!y || !y.test(t)))
        )
          try {
            var r = m.call(e, t);
            if (
              r ||
              n.disconnectedMatch ||
              (e.document && 11 !== e.document.nodeType)
            )
              return r;
          } catch (e) {}
        return oe(t, d, null, [e]).length > 0;
      }),
      (oe.contains = function (e, t) {
        return (e.ownerDocument || e) !== d && p(e), x(e, t);
      }),
      (oe.attr = function (e, t) {
        (e.ownerDocument || e) !== d && p(e);
        var i = r.attrHandle[t.toLowerCase()],
          o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
        return void 0 !== o
          ? o
          : n.attributes || !g
          ? e.getAttribute(t)
          : (o = e.getAttributeNode(t)) && o.specified
          ? o.value
          : null;
      }),
      (oe.escape = function (e) {
        return (e + "").replace(te, ne);
      }),
      (oe.error = function (e) {
        throw new Error("Syntax error, unrecognized expression: " + e);
      }),
      (oe.uniqueSort = function (e) {
        var t,
          r = [],
          i = 0,
          o = 0;
        if (
          ((f = !n.detectDuplicates),
          (c = !n.sortStable && e.slice(0)),
          e.sort(D),
          f)
        ) {
          while ((t = e[o++])) t === e[o] && (i = r.push(o));
          while (i--) e.splice(r[i], 1);
        }
        return (c = null), e;
      }),
      (i = oe.getText =
        function (e) {
          var t,
            n = "",
            r = 0,
            o = e.nodeType;
          if (o) {
            if (1 === o || 9 === o || 11 === o) {
              if ("string" == typeof e.textContent) return e.textContent;
              for (e = e.firstChild; e; e = e.nextSibling) n += i(e);
            } else if (3 === o || 4 === o) return e.nodeValue;
          } else while ((t = e[r++])) n += i(t);
          return n;
        }),
      ((r = oe.selectors =
        {
          cacheLength: 50,
          createPseudo: se,
          match: V,
          attrHandle: {},
          find: {},
          relative: {
            ">": { dir: "parentNode", first: !0 },
            " ": { dir: "parentNode" },
            "+": { dir: "previousSibling", first: !0 },
            "~": { dir: "previousSibling" },
          },
          preFilter: {
            ATTR: function (e) {
              return (
                (e[1] = e[1].replace(Z, ee)),
                (e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee)),
                "~=" === e[2] && (e[3] = " " + e[3] + " "),
                e.slice(0, 4)
              );
            },
            CHILD: function (e) {
              return (
                (e[1] = e[1].toLowerCase()),
                "nth" === e[1].slice(0, 3)
                  ? (e[3] || oe.error(e[0]),
                    (e[4] = +(e[4]
                      ? e[5] + (e[6] || 1)
                      : 2 * ("even" === e[3] || "odd" === e[3]))),
                    (e[5] = +(e[7] + e[8] || "odd" === e[3])))
                  : e[3] && oe.error(e[0]),
                e
              );
            },
            PSEUDO: function (e) {
              var t,
                n = !e[6] && e[2];
              return V.CHILD.test(e[0])
                ? null
                : (e[3]
                    ? (e[2] = e[4] || e[5] || "")
                    : n &&
                      X.test(n) &&
                      (t = a(n, !0)) &&
                      (t = n.indexOf(")", n.length - t) - n.length) &&
                      ((e[0] = e[0].slice(0, t)), (e[2] = n.slice(0, t))),
                  e.slice(0, 3));
            },
          },
          filter: {
            TAG: function (e) {
              var t = e.replace(Z, ee).toLowerCase();
              return "*" === e
                ? function () {
                    return !0;
                  }
                : function (e) {
                    return e.nodeName && e.nodeName.toLowerCase() === t;
                  };
            },
            CLASS: function (e) {
              var t = E[e + " "];
              return (
                t ||
                ((t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) &&
                  E(e, function (e) {
                    return t.test(
                      ("string" == typeof e.className && e.className) ||
                        ("undefined" != typeof e.getAttribute &&
                          e.getAttribute("class")) ||
                        ""
                    );
                  }))
              );
            },
            ATTR: function (e, t, n) {
              return function (r) {
                var i = oe.attr(r, e);
                return null == i
                  ? "!=" === t
                  : !t ||
                      ((i += ""),
                      "=" === t
                        ? i === n
                        : "!=" === t
                        ? i !== n
                        : "^=" === t
                        ? n && 0 === i.indexOf(n)
                        : "*=" === t
                        ? n && i.indexOf(n) > -1
                        : "$=" === t
                        ? n && i.slice(-n.length) === n
                        : "~=" === t
                        ? (" " + i.replace($, " ") + " ").indexOf(n) > -1
                        : "|=" === t &&
                          (i === n || i.slice(0, n.length + 1) === n + "-"));
              };
            },
            CHILD: function (e, t, n, r, i) {
              var o = "nth" !== e.slice(0, 3),
                a = "last" !== e.slice(-4),
                s = "of-type" === t;
              return 1 === r && 0 === i
                ? function (e) {
                    return !!e.parentNode;
                  }
                : function (t, n, u) {
                    var l,
                      c,
                      f,
                      p,
                      d,
                      h,
                      g = o !== a ? "nextSibling" : "previousSibling",
                      y = t.parentNode,
                      v = s && t.nodeName.toLowerCase(),
                      m = !u && !s,
                      x = !1;
                    if (y) {
                      if (o) {
                        while (g) {
                          p = t;
                          while ((p = p[g]))
                            if (
                              s
                                ? p.nodeName.toLowerCase() === v
                                : 1 === p.nodeType
                            )
                              return !1;
                          h = g = "only" === e && !h && "nextSibling";
                        }
                        return !0;
                      }
                      if (((h = [a ? y.firstChild : y.lastChild]), a && m)) {
                        (x =
                          (d =
                            (l =
                              (c =
                                (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] ||
                                (f[p.uniqueID] = {}))[e] || [])[0] === T &&
                            l[1]) && l[2]),
                          (p = d && y.childNodes[d]);
                        while (
                          (p = (++d && p && p[g]) || (x = d = 0) || h.pop())
                        )
                          if (1 === p.nodeType && ++x && p === t) {
                            c[e] = [T, d, x];
                            break;
                          }
                      } else if (
                        (m &&
                          (x = d =
                            (l =
                              (c =
                                (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] ||
                                (f[p.uniqueID] = {}))[e] || [])[0] === T &&
                            l[1]),
                        !1 === x)
                      )
                        while (
                          (p = (++d && p && p[g]) || (x = d = 0) || h.pop())
                        )
                          if (
                            (s
                              ? p.nodeName.toLowerCase() === v
                              : 1 === p.nodeType) &&
                            ++x &&
                            (m &&
                              ((c =
                                (f = p[b] || (p[b] = {}))[p.uniqueID] ||
                                (f[p.uniqueID] = {}))[e] = [T, x]),
                            p === t)
                          )
                            break;
                      return (x -= i) === r || (x % r == 0 && x / r >= 0);
                    }
                  };
            },
            PSEUDO: function (e, t) {
              var n,
                i =
                  r.pseudos[e] ||
                  r.setFilters[e.toLowerCase()] ||
                  oe.error("unsupported pseudo: " + e);
              return i[b]
                ? i(t)
                : i.length > 1
                ? ((n = [e, e, "", t]),
                  r.setFilters.hasOwnProperty(e.toLowerCase())
                    ? se(function (e, n) {
                        var r,
                          o = i(e, t),
                          a = o.length;
                        while (a--) e[(r = O(e, o[a]))] = !(n[r] = o[a]);
                      })
                    : function (e) {
                        return i(e, 0, n);
                      })
                : i;
            },
          },
          pseudos: {
            not: se(function (e) {
              var t = [],
                n = [],
                r = s(e.replace(B, "$1"));
              return r[b]
                ? se(function (e, t, n, i) {
                    var o,
                      a = r(e, null, i, []),
                      s = e.length;
                    while (s--) (o = a[s]) && (e[s] = !(t[s] = o));
                  })
                : function (e, i, o) {
                    return (
                      (t[0] = e), r(t, null, o, n), (t[0] = null), !n.pop()
                    );
                  };
            }),
            has: se(function (e) {
              return function (t) {
                return oe(e, t).length > 0;
              };
            }),
            contains: se(function (e) {
              return (
                (e = e.replace(Z, ee)),
                function (t) {
                  return (t.textContent || t.innerText || i(t)).indexOf(e) > -1;
                }
              );
            }),
            lang: se(function (e) {
              return (
                U.test(e || "") || oe.error("unsupported lang: " + e),
                (e = e.replace(Z, ee).toLowerCase()),
                function (t) {
                  var n;
                  do {
                    if (
                      (n = g
                        ? t.lang
                        : t.getAttribute("xml:lang") || t.getAttribute("lang"))
                    )
                      return (
                        (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-")
                      );
                  } while ((t = t.parentNode) && 1 === t.nodeType);
                  return !1;
                }
              );
            }),
            target: function (t) {
              var n = e.location && e.location.hash;
              return n && n.slice(1) === t.id;
            },
            root: function (e) {
              return e === h;
            },
            focus: function (e) {
              return (
                e === d.activeElement &&
                (!d.hasFocus || d.hasFocus()) &&
                !!(e.type || e.href || ~e.tabIndex)
              );
            },
            enabled: de(!1),
            disabled: de(!0),
            checked: function (e) {
              var t = e.nodeName.toLowerCase();
              return (
                ("input" === t && !!e.checked) ||
                ("option" === t && !!e.selected)
              );
            },
            selected: function (e) {
              return (
                e.parentNode && e.parentNode.selectedIndex, !0 === e.selected
              );
            },
            empty: function (e) {
              for (e = e.firstChild; e; e = e.nextSibling)
                if (e.nodeType < 6) return !1;
              return !0;
            },
            parent: function (e) {
              return !r.pseudos.empty(e);
            },
            header: function (e) {
              return Y.test(e.nodeName);
            },
            input: function (e) {
              return G.test(e.nodeName);
            },
            button: function (e) {
              var t = e.nodeName.toLowerCase();
              return ("input" === t && "button" === e.type) || "button" === t;
            },
            text: function (e) {
              var t;
              return (
                "input" === e.nodeName.toLowerCase() &&
                "text" === e.type &&
                (null == (t = e.getAttribute("type")) ||
                  "text" === t.toLowerCase())
              );
            },
            first: he(function () {
              return [0];
            }),
            last: he(function (e, t) {
              return [t - 1];
            }),
            eq: he(function (e, t, n) {
              return [n < 0 ? n + t : n];
            }),
            even: he(function (e, t) {
              for (var n = 0; n < t; n += 2) e.push(n);
              return e;
            }),
            odd: he(function (e, t) {
              for (var n = 1; n < t; n += 2) e.push(n);
              return e;
            }),
            lt: he(function (e, t, n) {
              for (var r = n < 0 ? n + t : n; --r >= 0; ) e.push(r);
              return e;
            }),
            gt: he(function (e, t, n) {
              for (var r = n < 0 ? n + t : n; ++r < t; ) e.push(r);
              return e;
            }),
          },
        }).pseudos.nth = r.pseudos.eq);
    for (t in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 })
      r.pseudos[t] = fe(t);
    for (t in { submit: !0, reset: !0 }) r.pseudos[t] = pe(t);
    function ye() {}
    (ye.prototype = r.filters = r.pseudos),
      (r.setFilters = new ye()),
      (a = oe.tokenize =
        function (e, t) {
          var n,
            i,
            o,
            a,
            s,
            u,
            l,
            c = k[e + " "];
          if (c) return t ? 0 : c.slice(0);
          (s = e), (u = []), (l = r.preFilter);
          while (s) {
            (n && !(i = F.exec(s))) ||
              (i && (s = s.slice(i[0].length) || s), u.push((o = []))),
              (n = !1),
              (i = _.exec(s)) &&
                ((n = i.shift()),
                o.push({ value: n, type: i[0].replace(B, " ") }),
                (s = s.slice(n.length)));
            for (a in r.filter)
              !(i = V[a].exec(s)) ||
                (l[a] && !(i = l[a](i))) ||
                ((n = i.shift()),
                o.push({ value: n, type: a, matches: i }),
                (s = s.slice(n.length)));
            if (!n) break;
          }
          return t ? s.length : s ? oe.error(e) : k(e, u).slice(0);
        });
    function ve(e) {
      for (var t = 0, n = e.length, r = ""; t < n; t++) r += e[t].value;
      return r;
    }
    function me(e, t, n) {
      var r = t.dir,
        i = t.next,
        o = i || r,
        a = n && "parentNode" === o,
        s = C++;
      return t.first
        ? function (t, n, i) {
            while ((t = t[r])) if (1 === t.nodeType || a) return e(t, n, i);
            return !1;
          }
        : function (t, n, u) {
            var l,
              c,
              f,
              p = [T, s];
            if (u) {
              while ((t = t[r]))
                if ((1 === t.nodeType || a) && e(t, n, u)) return !0;
            } else
              while ((t = t[r]))
                if (1 === t.nodeType || a)
                  if (
                    ((f = t[b] || (t[b] = {})),
                    (c = f[t.uniqueID] || (f[t.uniqueID] = {})),
                    i && i === t.nodeName.toLowerCase())
                  )
                    t = t[r] || t;
                  else {
                    if ((l = c[o]) && l[0] === T && l[1] === s)
                      return (p[2] = l[2]);
                    if (((c[o] = p), (p[2] = e(t, n, u)))) return !0;
                  }
            return !1;
          };
    }
    function xe(e) {
      return e.length > 1
        ? function (t, n, r) {
            var i = e.length;
            while (i--) if (!e[i](t, n, r)) return !1;
            return !0;
          }
        : e[0];
    }
    function be(e, t, n) {
      for (var r = 0, i = t.length; r < i; r++) oe(e, t[r], n);
      return n;
    }
    function we(e, t, n, r, i) {
      for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++)
        (o = e[s]) && ((n && !n(o, r, i)) || (a.push(o), l && t.push(s)));
      return a;
    }
    function Te(e, t, n, r, i, o) {
      return (
        r && !r[b] && (r = Te(r)),
        i && !i[b] && (i = Te(i, o)),
        se(function (o, a, s, u) {
          var l,
            c,
            f,
            p = [],
            d = [],
            h = a.length,
            g = o || be(t || "*", s.nodeType ? [s] : s, []),
            y = !e || (!o && t) ? g : we(g, p, e, s, u),
            v = n ? (i || (o ? e : h || r) ? [] : a) : y;
          if ((n && n(y, v, s, u), r)) {
            (l = we(v, d)), r(l, [], s, u), (c = l.length);
            while (c--) (f = l[c]) && (v[d[c]] = !(y[d[c]] = f));
          }
          if (o) {
            if (i || e) {
              if (i) {
                (l = []), (c = v.length);
                while (c--) (f = v[c]) && l.push((y[c] = f));
                i(null, (v = []), l, u);
              }
              c = v.length;
              while (c--)
                (f = v[c]) &&
                  (l = i ? O(o, f) : p[c]) > -1 &&
                  (o[l] = !(a[l] = f));
            }
          } else (v = we(v === a ? v.splice(h, v.length) : v)), i ? i(null, a, v, u) : L.apply(a, v);
        })
      );
    }
    function Ce(e) {
      for (
        var t,
          n,
          i,
          o = e.length,
          a = r.relative[e[0].type],
          s = a || r.relative[" "],
          u = a ? 1 : 0,
          c = me(
            function (e) {
              return e === t;
            },
            s,
            !0
          ),
          f = me(
            function (e) {
              return O(t, e) > -1;
            },
            s,
            !0
          ),
          p = [
            function (e, n, r) {
              var i =
                (!a && (r || n !== l)) ||
                ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
              return (t = null), i;
            },
          ];
        u < o;
        u++
      )
        if ((n = r.relative[e[u].type])) p = [me(xe(p), n)];
        else {
          if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
            for (i = ++u; i < o; i++) if (r.relative[e[i].type]) break;
            return Te(
              u > 1 && xe(p),
              u > 1 &&
                ve(
                  e
                    .slice(0, u - 1)
                    .concat({ value: " " === e[u - 2].type ? "*" : "" })
                ).replace(B, "$1"),
              n,
              u < i && Ce(e.slice(u, i)),
              i < o && Ce((e = e.slice(i))),
              i < o && ve(e)
            );
          }
          p.push(n);
        }
      return xe(p);
    }
    function Ee(e, t) {
      var n = t.length > 0,
        i = e.length > 0,
        o = function (o, a, s, u, c) {
          var f,
            h,
            y,
            v = 0,
            m = "0",
            x = o && [],
            b = [],
            w = l,
            C = o || (i && r.find.TAG("*", c)),
            E = (T += null == w ? 1 : Math.random() || 0.1),
            k = C.length;
          for (
            c && (l = a === d || a || c);
            m !== k && null != (f = C[m]);
            m++
          ) {
            if (i && f) {
              (h = 0), a || f.ownerDocument === d || (p(f), (s = !g));
              while ((y = e[h++]))
                if (y(f, a || d, s)) {
                  u.push(f);
                  break;
                }
              c && (T = E);
            }
            n && ((f = !y && f) && v--, o && x.push(f));
          }
          if (((v += m), n && m !== v)) {
            h = 0;
            while ((y = t[h++])) y(x, b, a, s);
            if (o) {
              if (v > 0) while (m--) x[m] || b[m] || (b[m] = j.call(u));
              b = we(b);
            }
            L.apply(u, b),
              c && !o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u);
          }
          return c && ((T = E), (l = w)), x;
        };
      return n ? se(o) : o;
    }
    return (
      (s = oe.compile =
        function (e, t) {
          var n,
            r = [],
            i = [],
            o = S[e + " "];
          if (!o) {
            t || (t = a(e)), (n = t.length);
            while (n--) (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
            (o = S(e, Ee(i, r))).selector = e;
          }
          return o;
        }),
      (u = oe.select =
        function (e, t, n, i) {
          var o,
            u,
            l,
            c,
            f,
            p = "function" == typeof e && e,
            d = !i && a((e = p.selector || e));
          if (((n = n || []), 1 === d.length)) {
            if (
              (u = d[0] = d[0].slice(0)).length > 2 &&
              "ID" === (l = u[0]).type &&
              9 === t.nodeType &&
              g &&
              r.relative[u[1].type]
            ) {
              if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0]))
                return n;
              p && (t = t.parentNode), (e = e.slice(u.shift().value.length));
            }
            o = V.needsContext.test(e) ? 0 : u.length;
            while (o--) {
              if (((l = u[o]), r.relative[(c = l.type)])) break;
              if (
                (f = r.find[c]) &&
                (i = f(
                  l.matches[0].replace(Z, ee),
                  (K.test(u[0].type) && ge(t.parentNode)) || t
                ))
              ) {
                if ((u.splice(o, 1), !(e = i.length && ve(u))))
                  return L.apply(n, i), n;
                break;
              }
            }
          }
          return (
            (p || s(e, d))(
              i,
              t,
              !g,
              n,
              !t || (K.test(e) && ge(t.parentNode)) || t
            ),
            n
          );
        }),
      (n.sortStable = b.split("").sort(D).join("") === b),
      (n.detectDuplicates = !!f),
      p(),
      (n.sortDetached = ue(function (e) {
        return 1 & e.compareDocumentPosition(d.createElement("fieldset"));
      })),
      ue(function (e) {
        return (
          (e.innerHTML = "<a href='#'></a>"),
          "#" === e.firstChild.getAttribute("href")
        );
      }) ||
        le("type|href|height|width", function (e, t, n) {
          if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
        }),
      (n.attributes &&
        ue(function (e) {
          return (
            (e.innerHTML = "<input/>"),
            e.firstChild.setAttribute("value", ""),
            "" === e.firstChild.getAttribute("value")
          );
        })) ||
        le("value", function (e, t, n) {
          if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
        }),
      ue(function (e) {
        return null == e.getAttribute("disabled");
      }) ||
        le(P, function (e, t, n) {
          var r;
          if (!n)
            return !0 === e[t]
              ? t.toLowerCase()
              : (r = e.getAttributeNode(t)) && r.specified
              ? r.value
              : null;
        }),
      oe
    );
  })(e);
  (w.find = E),
    (w.expr = E.selectors),
    (w.expr[":"] = w.expr.pseudos),
    (w.uniqueSort = w.unique = E.uniqueSort),
    (w.text = E.getText),
    (w.isXMLDoc = E.isXML),
    (w.contains = E.contains),
    (w.escapeSelector = E.escape);
  var k = function (e, t, n) {
      var r = [],
        i = void 0 !== n;
      while ((e = e[t]) && 9 !== e.nodeType)
        if (1 === e.nodeType) {
          if (i && w(e).is(n)) break;
          r.push(e);
        }
      return r;
    },
    S = function (e, t) {
      for (var n = []; e; e = e.nextSibling)
        1 === e.nodeType && e !== t && n.push(e);
      return n;
    },
    D = w.expr.match.needsContext;
  function N(e, t) {
    return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
  }
  var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;
  function j(e, t, n) {
    return g(t)
      ? w.grep(e, function (e, r) {
          return !!t.call(e, r, e) !== n;
        })
      : t.nodeType
      ? w.grep(e, function (e) {
          return (e === t) !== n;
        })
      : "string" != typeof t
      ? w.grep(e, function (e) {
          return u.call(t, e) > -1 !== n;
        })
      : w.filter(t, e, n);
  }
  (w.filter = function (e, t, n) {
    var r = t[0];
    return (
      n && (e = ":not(" + e + ")"),
      1 === t.length && 1 === r.nodeType
        ? w.find.matchesSelector(r, e)
          ? [r]
          : []
        : w.find.matches(
            e,
            w.grep(t, function (e) {
              return 1 === e.nodeType;
            })
          )
    );
  }),
    w.fn.extend({
      find: function (e) {
        var t,
          n,
          r = this.length,
          i = this;
        if ("string" != typeof e)
          return this.pushStack(
            w(e).filter(function () {
              for (t = 0; t < r; t++) if (w.contains(i[t], this)) return !0;
            })
          );
        for (n = this.pushStack([]), t = 0; t < r; t++) w.find(e, i[t], n);
        return r > 1 ? w.uniqueSort(n) : n;
      },
      filter: function (e) {
        return this.pushStack(j(this, e || [], !1));
      },
      not: function (e) {
        return this.pushStack(j(this, e || [], !0));
      },
      is: function (e) {
        return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1)
          .length;
      },
    });
  var q,
    L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
  ((w.fn.init = function (e, t, n) {
    var i, o;
    if (!e) return this;
    if (((n = n || q), "string" == typeof e)) {
      if (
        !(i =
          "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3
            ? [null, e, null]
            : L.exec(e)) ||
        (!i[1] && t)
      )
        return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);
      if (i[1]) {
        if (
          ((t = t instanceof w ? t[0] : t),
          w.merge(
            this,
            w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)
          ),
          A.test(i[1]) && w.isPlainObject(t))
        )
          for (i in t) g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
        return this;
      }
      return (
        (o = r.getElementById(i[2])) && ((this[0] = o), (this.length = 1)), this
      );
    }
    return e.nodeType
      ? ((this[0] = e), (this.length = 1), this)
      : g(e)
      ? void 0 !== n.ready
        ? n.ready(e)
        : e(w)
      : w.makeArray(e, this);
  }).prototype = w.fn),
    (q = w(r));
  var H = /^(?:parents|prev(?:Until|All))/,
    O = { children: !0, contents: !0, next: !0, prev: !0 };
  w.fn.extend({
    has: function (e) {
      var t = w(e, this),
        n = t.length;
      return this.filter(function () {
        for (var e = 0; e < n; e++) if (w.contains(this, t[e])) return !0;
      });
    },
    closest: function (e, t) {
      var n,
        r = 0,
        i = this.length,
        o = [],
        a = "string" != typeof e && w(e);
      if (!D.test(e))
        for (; r < i; r++)
          for (n = this[r]; n && n !== t; n = n.parentNode)
            if (
              n.nodeType < 11 &&
              (a
                ? a.index(n) > -1
                : 1 === n.nodeType && w.find.matchesSelector(n, e))
            ) {
              o.push(n);
              break;
            }
      return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o);
    },
    index: function (e) {
      return e
        ? "string" == typeof e
          ? u.call(w(e), this[0])
          : u.call(this, e.jquery ? e[0] : e)
        : this[0] && this[0].parentNode
        ? this.first().prevAll().length
        : -1;
    },
    add: function (e, t) {
      return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))));
    },
    addBack: function (e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
    },
  });
  function P(e, t) {
    while ((e = e[t]) && 1 !== e.nodeType);
    return e;
  }
  w.each(
    {
      parent: function (e) {
        var t = e.parentNode;
        return t && 11 !== t.nodeType ? t : null;
      },
      parents: function (e) {
        return k(e, "parentNode");
      },
      parentsUntil: function (e, t, n) {
        return k(e, "parentNode", n);
      },
      next: function (e) {
        return P(e, "nextSibling");
      },
      prev: function (e) {
        return P(e, "previousSibling");
      },
      nextAll: function (e) {
        return k(e, "nextSibling");
      },
      prevAll: function (e) {
        return k(e, "previousSibling");
      },
      nextUntil: function (e, t, n) {
        return k(e, "nextSibling", n);
      },
      prevUntil: function (e, t, n) {
        return k(e, "previousSibling", n);
      },
      siblings: function (e) {
        return S((e.parentNode || {}).firstChild, e);
      },
      children: function (e) {
        return S(e.firstChild);
      },
      contents: function (e) {
        return N(e, "iframe")
          ? e.contentDocument
          : (N(e, "template") && (e = e.content || e),
            w.merge([], e.childNodes));
      },
    },
    function (e, t) {
      w.fn[e] = function (n, r) {
        var i = w.map(this, t, n);
        return (
          "Until" !== e.slice(-5) && (r = n),
          r && "string" == typeof r && (i = w.filter(r, i)),
          this.length > 1 &&
            (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()),
          this.pushStack(i)
        );
      };
    }
  );
  var M = /[^\x20\t\r\n\f]+/g;
  function R(e) {
    var t = {};
    return (
      w.each(e.match(M) || [], function (e, n) {
        t[n] = !0;
      }),
      t
    );
  }
  w.Callbacks = function (e) {
    e = "string" == typeof e ? R(e) : w.extend({}, e);
    var t,
      n,
      r,
      i,
      o = [],
      a = [],
      s = -1,
      u = function () {
        for (i = i || e.once, r = t = !0; a.length; s = -1) {
          n = a.shift();
          while (++s < o.length)
            !1 === o[s].apply(n[0], n[1]) &&
              e.stopOnFalse &&
              ((s = o.length), (n = !1));
        }
        e.memory || (n = !1), (t = !1), i && (o = n ? [] : "");
      },
      l = {
        add: function () {
          return (
            o &&
              (n && !t && ((s = o.length - 1), a.push(n)),
              (function t(n) {
                w.each(n, function (n, r) {
                  g(r)
                    ? (e.unique && l.has(r)) || o.push(r)
                    : r && r.length && "string" !== x(r) && t(r);
                });
              })(arguments),
              n && !t && u()),
            this
          );
        },
        remove: function () {
          return (
            w.each(arguments, function (e, t) {
              var n;
              while ((n = w.inArray(t, o, n)) > -1)
                o.splice(n, 1), n <= s && s--;
            }),
            this
          );
        },
        has: function (e) {
          return e ? w.inArray(e, o) > -1 : o.length > 0;
        },
        empty: function () {
          return o && (o = []), this;
        },
        disable: function () {
          return (i = a = []), (o = n = ""), this;
        },
        disabled: function () {
          return !o;
        },
        lock: function () {
          return (i = a = []), n || t || (o = n = ""), this;
        },
        locked: function () {
          return !!i;
        },
        fireWith: function (e, n) {
          return (
            i ||
              ((n = [e, (n = n || []).slice ? n.slice() : n]),
              a.push(n),
              t || u()),
            this
          );
        },
        fire: function () {
          return l.fireWith(this, arguments), this;
        },
        fired: function () {
          return !!r;
        },
      };
    return l;
  };
  function I(e) {
    return e;
  }
  function W(e) {
    throw e;
  }
  function $(e, t, n, r) {
    var i;
    try {
      e && g((i = e.promise))
        ? i.call(e).done(t).fail(n)
        : e && g((i = e.then))
        ? i.call(e, t, n)
        : t.apply(void 0, [e].slice(r));
    } catch (e) {
      n.apply(void 0, [e]);
    }
  }
  w.extend({
    Deferred: function (t) {
      var n = [
          [
            "notify",
            "progress",
            w.Callbacks("memory"),
            w.Callbacks("memory"),
            2,
          ],
          [
            "resolve",
            "done",
            w.Callbacks("once memory"),
            w.Callbacks("once memory"),
            0,
            "resolved",
          ],
          [
            "reject",
            "fail",
            w.Callbacks("once memory"),
            w.Callbacks("once memory"),
            1,
            "rejected",
          ],
        ],
        r = "pending",
        i = {
          state: function () {
            return r;
          },
          always: function () {
            return o.done(arguments).fail(arguments), this;
          },
          catch: function (e) {
            return i.then(null, e);
          },
          pipe: function () {
            var e = arguments;
            return w
              .Deferred(function (t) {
                w.each(n, function (n, r) {
                  var i = g(e[r[4]]) && e[r[4]];
                  o[r[1]](function () {
                    var e = i && i.apply(this, arguments);
                    e && g(e.promise)
                      ? e
                          .promise()
                          .progress(t.notify)
                          .done(t.resolve)
                          .fail(t.reject)
                      : t[r[0] + "With"](this, i ? [e] : arguments);
                  });
                }),
                  (e = null);
              })
              .promise();
          },
          then: function (t, r, i) {
            var o = 0;
            function a(t, n, r, i) {
              return function () {
                var s = this,
                  u = arguments,
                  l = function () {
                    var e, l;
                    if (!(t < o)) {
                      if ((e = r.apply(s, u)) === n.promise())
                        throw new TypeError("Thenable self-resolution");
                      (l =
                        e &&
                        ("object" == typeof e || "function" == typeof e) &&
                        e.then),
                        g(l)
                          ? i
                            ? l.call(e, a(o, n, I, i), a(o, n, W, i))
                            : (o++,
                              l.call(
                                e,
                                a(o, n, I, i),
                                a(o, n, W, i),
                                a(o, n, I, n.notifyWith)
                              ))
                          : (r !== I && ((s = void 0), (u = [e])),
                            (i || n.resolveWith)(s, u));
                    }
                  },
                  c = i
                    ? l
                    : function () {
                        try {
                          l();
                        } catch (e) {
                          w.Deferred.exceptionHook &&
                            w.Deferred.exceptionHook(e, c.stackTrace),
                            t + 1 >= o &&
                              (r !== W && ((s = void 0), (u = [e])),
                              n.rejectWith(s, u));
                        }
                      };
                t
                  ? c()
                  : (w.Deferred.getStackHook &&
                      (c.stackTrace = w.Deferred.getStackHook()),
                    e.setTimeout(c));
              };
            }
            return w
              .Deferred(function (e) {
                n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)),
                  n[1][3].add(a(0, e, g(t) ? t : I)),
                  n[2][3].add(a(0, e, g(r) ? r : W));
              })
              .promise();
          },
          promise: function (e) {
            return null != e ? w.extend(e, i) : i;
          },
        },
        o = {};
      return (
        w.each(n, function (e, t) {
          var a = t[2],
            s = t[5];
          (i[t[1]] = a.add),
            s &&
              a.add(
                function () {
                  r = s;
                },
                n[3 - e][2].disable,
                n[3 - e][3].disable,
                n[0][2].lock,
                n[0][3].lock
              ),
            a.add(t[3].fire),
            (o[t[0]] = function () {
              return (
                o[t[0] + "With"](this === o ? void 0 : this, arguments), this
              );
            }),
            (o[t[0] + "With"] = a.fireWith);
        }),
        i.promise(o),
        t && t.call(o, o),
        o
      );
    },
    when: function (e) {
      var t = arguments.length,
        n = t,
        r = Array(n),
        i = o.call(arguments),
        a = w.Deferred(),
        s = function (e) {
          return function (n) {
            (r[e] = this),
              (i[e] = arguments.length > 1 ? o.call(arguments) : n),
              --t || a.resolveWith(r, i);
          };
        };
      if (
        t <= 1 &&
        ($(e, a.done(s(n)).resolve, a.reject, !t),
        "pending" === a.state() || g(i[n] && i[n].then))
      )
        return a.then();
      while (n--) $(i[n], s(n), a.reject);
      return a.promise();
    },
  });
  var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
  (w.Deferred.exceptionHook = function (t, n) {
    e.console &&
      e.console.warn &&
      t &&
      B.test(t.name) &&
      e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n);
  }),
    (w.readyException = function (t) {
      e.setTimeout(function () {
        throw t;
      });
    });
  var F = w.Deferred();
  (w.fn.ready = function (e) {
    return (
      F.then(e)["catch"](function (e) {
        w.readyException(e);
      }),
      this
    );
  }),
    w.extend({
      isReady: !1,
      readyWait: 1,
      ready: function (e) {
        (!0 === e ? --w.readyWait : w.isReady) ||
          ((w.isReady = !0),
          (!0 !== e && --w.readyWait > 0) || F.resolveWith(r, [w]));
      },
    }),
    (w.ready.then = F.then);
  function _() {
    r.removeEventListener("DOMContentLoaded", _),
      e.removeEventListener("load", _),
      w.ready();
  }
  "complete" === r.readyState ||
  ("loading" !== r.readyState && !r.documentElement.doScroll)
    ? e.setTimeout(w.ready)
    : (r.addEventListener("DOMContentLoaded", _),
      e.addEventListener("load", _));
  var z = function (e, t, n, r, i, o, a) {
      var s = 0,
        u = e.length,
        l = null == n;
      if ("object" === x(n)) {
        i = !0;
        for (s in n) z(e, t, s, n[s], !0, o, a);
      } else if (
        void 0 !== r &&
        ((i = !0),
        g(r) || (a = !0),
        l &&
          (a
            ? (t.call(e, r), (t = null))
            : ((l = t),
              (t = function (e, t, n) {
                return l.call(w(e), n);
              }))),
        t)
      )
        for (; s < u; s++) t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
      return i ? e : l ? t.call(e) : u ? t(e[0], n) : o;
    },
    X = /^-ms-/,
    U = /-([a-z])/g;
  function V(e, t) {
    return t.toUpperCase();
  }
  function G(e) {
    return e.replace(X, "ms-").replace(U, V);
  }
  var Y = function (e) {
    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
  };
  function Q() {
    this.expando = w.expando + Q.uid++;
  }
  (Q.uid = 1),
    (Q.prototype = {
      cache: function (e) {
        var t = e[this.expando];
        return (
          t ||
            ((t = {}),
            Y(e) &&
              (e.nodeType
                ? (e[this.expando] = t)
                : Object.defineProperty(e, this.expando, {
                    value: t,
                    configurable: !0,
                  }))),
          t
        );
      },
      set: function (e, t, n) {
        var r,
          i = this.cache(e);
        if ("string" == typeof t) i[G(t)] = n;
        else for (r in t) i[G(r)] = t[r];
        return i;
      },
      get: function (e, t) {
        return void 0 === t
          ? this.cache(e)
          : e[this.expando] && e[this.expando][G(t)];
      },
      access: function (e, t, n) {
        return void 0 === t || (t && "string" == typeof t && void 0 === n)
          ? this.get(e, t)
          : (this.set(e, t, n), void 0 !== n ? n : t);
      },
      remove: function (e, t) {
        var n,
          r = e[this.expando];
        if (void 0 !== r) {
          if (void 0 !== t) {
            n = (t = Array.isArray(t)
              ? t.map(G)
              : (t = G(t)) in r
              ? [t]
              : t.match(M) || []).length;
            while (n--) delete r[t[n]];
          }
          (void 0 === t || w.isEmptyObject(r)) &&
            (e.nodeType ? (e[this.expando] = void 0) : delete e[this.expando]);
        }
      },
      hasData: function (e) {
        var t = e[this.expando];
        return void 0 !== t && !w.isEmptyObject(t);
      },
    });
  var J = new Q(),
    K = new Q(),
    Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
    ee = /[A-Z]/g;
  function te(e) {
    return (
      "true" === e ||
      ("false" !== e &&
        ("null" === e
          ? null
          : e === +e + ""
          ? +e
          : Z.test(e)
          ? JSON.parse(e)
          : e))
    );
  }
  function ne(e, t, n) {
    var r;
    if (void 0 === n && 1 === e.nodeType)
      if (
        ((r = "data-" + t.replace(ee, "-$&").toLowerCase()),
        "string" == typeof (n = e.getAttribute(r)))
      ) {
        try {
          n = te(n);
        } catch (e) {}
        K.set(e, t, n);
      } else n = void 0;
    return n;
  }
  w.extend({
    hasData: function (e) {
      return K.hasData(e) || J.hasData(e);
    },
    data: function (e, t, n) {
      return K.access(e, t, n);
    },
    removeData: function (e, t) {
      K.remove(e, t);
    },
    _data: function (e, t, n) {
      return J.access(e, t, n);
    },
    _removeData: function (e, t) {
      J.remove(e, t);
    },
  }),
    w.fn.extend({
      data: function (e, t) {
        var n,
          r,
          i,
          o = this[0],
          a = o && o.attributes;
        if (void 0 === e) {
          if (
            this.length &&
            ((i = K.get(o)), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))
          ) {
            n = a.length;
            while (n--)
              a[n] &&
                0 === (r = a[n].name).indexOf("data-") &&
                ((r = G(r.slice(5))), ne(o, r, i[r]));
            J.set(o, "hasDataAttrs", !0);
          }
          return i;
        }
        return "object" == typeof e
          ? this.each(function () {
              K.set(this, e);
            })
          : z(
              this,
              function (t) {
                var n;
                if (o && void 0 === t) {
                  if (void 0 !== (n = K.get(o, e))) return n;
                  if (void 0 !== (n = ne(o, e))) return n;
                } else
                  this.each(function () {
                    K.set(this, e, t);
                  });
              },
              null,
              t,
              arguments.length > 1,
              null,
              !0
            );
      },
      removeData: function (e) {
        return this.each(function () {
          K.remove(this, e);
        });
      },
    }),
    w.extend({
      queue: function (e, t, n) {
        var r;
        if (e)
          return (
            (t = (t || "fx") + "queue"),
            (r = J.get(e, t)),
            n &&
              (!r || Array.isArray(n)
                ? (r = J.access(e, t, w.makeArray(n)))
                : r.push(n)),
            r || []
          );
      },
      dequeue: function (e, t) {
        t = t || "fx";
        var n = w.queue(e, t),
          r = n.length,
          i = n.shift(),
          o = w._queueHooks(e, t),
          a = function () {
            w.dequeue(e, t);
          };
        "inprogress" === i && ((i = n.shift()), r--),
          i &&
            ("fx" === t && n.unshift("inprogress"),
            delete o.stop,
            i.call(e, a, o)),
          !r && o && o.empty.fire();
      },
      _queueHooks: function (e, t) {
        var n = t + "queueHooks";
        return (
          J.get(e, n) ||
          J.access(e, n, {
            empty: w.Callbacks("once memory").add(function () {
              J.remove(e, [t + "queue", n]);
            }),
          })
        );
      },
    }),
    w.fn.extend({
      queue: function (e, t) {
        var n = 2;
        return (
          "string" != typeof e && ((t = e), (e = "fx"), n--),
          arguments.length < n
            ? w.queue(this[0], e)
            : void 0 === t
            ? this
            : this.each(function () {
                var n = w.queue(this, e, t);
                w._queueHooks(this, e),
                  "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e);
              })
        );
      },
      dequeue: function (e) {
        return this.each(function () {
          w.dequeue(this, e);
        });
      },
      clearQueue: function (e) {
        return this.queue(e || "fx", []);
      },
      promise: function (e, t) {
        var n,
          r = 1,
          i = w.Deferred(),
          o = this,
          a = this.length,
          s = function () {
            --r || i.resolveWith(o, [o]);
          };
        "string" != typeof e && ((t = e), (e = void 0)), (e = e || "fx");
        while (a--)
          (n = J.get(o[a], e + "queueHooks")) &&
            n.empty &&
            (r++, n.empty.add(s));
        return s(), i.promise(t);
      },
    });
  var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
    ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
    oe = ["Top", "Right", "Bottom", "Left"],
    ae = function (e, t) {
      return (
        "none" === (e = t || e).style.display ||
        ("" === e.style.display &&
          w.contains(e.ownerDocument, e) &&
          "none" === w.css(e, "display"))
      );
    },
    se = function (e, t, n, r) {
      var i,
        o,
        a = {};
      for (o in t) (a[o] = e.style[o]), (e.style[o] = t[o]);
      i = n.apply(e, r || []);
      for (o in t) e.style[o] = a[o];
      return i;
    };
  function ue(e, t, n, r) {
    var i,
      o,
      a = 20,
      s = r
        ? function () {
            return r.cur();
          }
        : function () {
            return w.css(e, t, "");
          },
      u = s(),
      l = (n && n[3]) || (w.cssNumber[t] ? "" : "px"),
      c = (w.cssNumber[t] || ("px" !== l && +u)) && ie.exec(w.css(e, t));
    if (c && c[3] !== l) {
      (u /= 2), (l = l || c[3]), (c = +u || 1);
      while (a--)
        w.style(e, t, c + l),
          (1 - o) * (1 - (o = s() / u || 0.5)) <= 0 && (a = 0),
          (c /= o);
      (c *= 2), w.style(e, t, c + l), (n = n || []);
    }
    return (
      n &&
        ((c = +c || +u || 0),
        (i = n[1] ? c + (n[1] + 1) * n[2] : +n[2]),
        r && ((r.unit = l), (r.start = c), (r.end = i))),
      i
    );
  }
  var le = {};
  function ce(e) {
    var t,
      n = e.ownerDocument,
      r = e.nodeName,
      i = le[r];
    return (
      i ||
      ((t = n.body.appendChild(n.createElement(r))),
      (i = w.css(t, "display")),
      t.parentNode.removeChild(t),
      "none" === i && (i = "block"),
      (le[r] = i),
      i)
    );
  }
  function fe(e, t) {
    for (var n, r, i = [], o = 0, a = e.length; o < a; o++)
      (r = e[o]).style &&
        ((n = r.style.display),
        t
          ? ("none" === n &&
              ((i[o] = J.get(r, "display") || null),
              i[o] || (r.style.display = "")),
            "" === r.style.display && ae(r) && (i[o] = ce(r)))
          : "none" !== n && ((i[o] = "none"), J.set(r, "display", n)));
    for (o = 0; o < a; o++) null != i[o] && (e[o].style.display = i[o]);
    return e;
  }
  w.fn.extend({
    show: function () {
      return fe(this, !0);
    },
    hide: function () {
      return fe(this);
    },
    toggle: function (e) {
      return "boolean" == typeof e
        ? e
          ? this.show()
          : this.hide()
        : this.each(function () {
            ae(this) ? w(this).show() : w(this).hide();
          });
    },
  });
  var pe = /^(?:checkbox|radio)$/i,
    de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
    he = /^$|^module$|\/(?:java|ecma)script/i,
    ge = {
      option: [1, "<select multiple='multiple'>", "</select>"],
      thead: [1, "<table>", "</table>"],
      col: [2, "<table><colgroup>", "</colgroup></table>"],
      tr: [2, "<table><tbody>", "</tbody></table>"],
      td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
      _default: [0, "", ""],
    };
  (ge.optgroup = ge.option),
    (ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead),
    (ge.th = ge.td);
  function ye(e, t) {
    var n;
    return (
      (n =
        "undefined" != typeof e.getElementsByTagName
          ? e.getElementsByTagName(t || "*")
          : "undefined" != typeof e.querySelectorAll
          ? e.querySelectorAll(t || "*")
          : []),
      void 0 === t || (t && N(e, t)) ? w.merge([e], n) : n
    );
  }
  function ve(e, t) {
    for (var n = 0, r = e.length; n < r; n++)
      J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"));
  }
  var me = /<|&#?\w+;/;
  function xe(e, t, n, r, i) {
    for (
      var o,
        a,
        s,
        u,
        l,
        c,
        f = t.createDocumentFragment(),
        p = [],
        d = 0,
        h = e.length;
      d < h;
      d++
    )
      if ((o = e[d]) || 0 === o)
        if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o);
        else if (me.test(o)) {
          (a = a || f.appendChild(t.createElement("div"))),
            (s = (de.exec(o) || ["", ""])[1].toLowerCase()),
            (u = ge[s] || ge._default),
            (a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2]),
            (c = u[0]);
          while (c--) a = a.lastChild;
          w.merge(p, a.childNodes), ((a = f.firstChild).textContent = "");
        } else p.push(t.createTextNode(o));
    (f.textContent = ""), (d = 0);
    while ((o = p[d++]))
      if (r && w.inArray(o, r) > -1) i && i.push(o);
      else if (
        ((l = w.contains(o.ownerDocument, o)),
        (a = ye(f.appendChild(o), "script")),
        l && ve(a),
        n)
      ) {
        c = 0;
        while ((o = a[c++])) he.test(o.type || "") && n.push(o);
      }
    return f;
  }
  !(function () {
    var e = r.createDocumentFragment().appendChild(r.createElement("div")),
      t = r.createElement("input");
    t.setAttribute("type", "radio"),
      t.setAttribute("checked", "checked"),
      t.setAttribute("name", "t"),
      e.appendChild(t),
      (h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked),
      (e.innerHTML = "<textarea>x</textarea>"),
      (h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue);
  })();
  var be = r.documentElement,
    we = /^key/,
    Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
    Ce = /^([^.]*)(?:\.(.+)|)/;
  function Ee() {
    return !0;
  }
  function ke() {
    return !1;
  }
  function Se() {
    try {
      return r.activeElement;
    } catch (e) {}
  }
  function De(e, t, n, r, i, o) {
    var a, s;
    if ("object" == typeof t) {
      "string" != typeof n && ((r = r || n), (n = void 0));
      for (s in t) De(e, s, n, r, t[s], o);
      return e;
    }
    if (
      (null == r && null == i
        ? ((i = n), (r = n = void 0))
        : null == i &&
          ("string" == typeof n
            ? ((i = r), (r = void 0))
            : ((i = r), (r = n), (n = void 0))),
      !1 === i)
    )
      i = ke;
    else if (!i) return e;
    return (
      1 === o &&
        ((a = i),
        ((i = function (e) {
          return w().off(e), a.apply(this, arguments);
        }).guid = a.guid || (a.guid = w.guid++))),
      e.each(function () {
        w.event.add(this, t, i, r, n);
      })
    );
  }
  (w.event = {
    global: {},
    add: function (e, t, n, r, i) {
      var o,
        a,
        s,
        u,
        l,
        c,
        f,
        p,
        d,
        h,
        g,
        y = J.get(e);
      if (y) {
        n.handler && ((n = (o = n).handler), (i = o.selector)),
          i && w.find.matchesSelector(be, i),
          n.guid || (n.guid = w.guid++),
          (u = y.events) || (u = y.events = {}),
          (a = y.handle) ||
            (a = y.handle =
              function (t) {
                return "undefined" != typeof w && w.event.triggered !== t.type
                  ? w.event.dispatch.apply(e, arguments)
                  : void 0;
              }),
          (l = (t = (t || "").match(M) || [""]).length);
        while (l--)
          (d = g = (s = Ce.exec(t[l]) || [])[1]),
            (h = (s[2] || "").split(".").sort()),
            d &&
              ((f = w.event.special[d] || {}),
              (d = (i ? f.delegateType : f.bindType) || d),
              (f = w.event.special[d] || {}),
              (c = w.extend(
                {
                  type: d,
                  origType: g,
                  data: r,
                  handler: n,
                  guid: n.guid,
                  selector: i,
                  needsContext: i && w.expr.match.needsContext.test(i),
                  namespace: h.join("."),
                },
                o
              )),
              (p = u[d]) ||
                (((p = u[d] = []).delegateCount = 0),
                (f.setup && !1 !== f.setup.call(e, r, h, a)) ||
                  (e.addEventListener && e.addEventListener(d, a))),
              f.add &&
                (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)),
              i ? p.splice(p.delegateCount++, 0, c) : p.push(c),
              (w.event.global[d] = !0));
      }
    },
    remove: function (e, t, n, r, i) {
      var o,
        a,
        s,
        u,
        l,
        c,
        f,
        p,
        d,
        h,
        g,
        y = J.hasData(e) && J.get(e);
      if (y && (u = y.events)) {
        l = (t = (t || "").match(M) || [""]).length;
        while (l--)
          if (
            ((s = Ce.exec(t[l]) || []),
            (d = g = s[1]),
            (h = (s[2] || "").split(".").sort()),
            d)
          ) {
            (f = w.event.special[d] || {}),
              (p = u[(d = (r ? f.delegateType : f.bindType) || d)] || []),
              (s =
                s[2] &&
                new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)")),
              (a = o = p.length);
            while (o--)
              (c = p[o]),
                (!i && g !== c.origType) ||
                  (n && n.guid !== c.guid) ||
                  (s && !s.test(c.namespace)) ||
                  (r && r !== c.selector && ("**" !== r || !c.selector)) ||
                  (p.splice(o, 1),
                  c.selector && p.delegateCount--,
                  f.remove && f.remove.call(e, c));
            a &&
              !p.length &&
              ((f.teardown && !1 !== f.teardown.call(e, h, y.handle)) ||
                w.removeEvent(e, d, y.handle),
              delete u[d]);
          } else for (d in u) w.event.remove(e, d + t[l], n, r, !0);
        w.isEmptyObject(u) && J.remove(e, "handle events");
      }
    },
    dispatch: function (e) {
      var t = w.event.fix(e),
        n,
        r,
        i,
        o,
        a,
        s,
        u = new Array(arguments.length),
        l = (J.get(this, "events") || {})[t.type] || [],
        c = w.event.special[t.type] || {};
      for (u[0] = t, n = 1; n < arguments.length; n++) u[n] = arguments[n];
      if (
        ((t.delegateTarget = this),
        !c.preDispatch || !1 !== c.preDispatch.call(this, t))
      ) {
        (s = w.event.handlers.call(this, t, l)), (n = 0);
        while ((o = s[n++]) && !t.isPropagationStopped()) {
          (t.currentTarget = o.elem), (r = 0);
          while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped())
            (t.rnamespace && !t.rnamespace.test(a.namespace)) ||
              ((t.handleObj = a),
              (t.data = a.data),
              void 0 !==
                (i = (
                  (w.event.special[a.origType] || {}).handle || a.handler
                ).apply(o.elem, u)) &&
                !1 === (t.result = i) &&
                (t.preventDefault(), t.stopPropagation()));
        }
        return c.postDispatch && c.postDispatch.call(this, t), t.result;
      }
    },
    handlers: function (e, t) {
      var n,
        r,
        i,
        o,
        a,
        s = [],
        u = t.delegateCount,
        l = e.target;
      if (u && l.nodeType && !("click" === e.type && e.button >= 1))
        for (; l !== this; l = l.parentNode || this)
          if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
            for (o = [], a = {}, n = 0; n < u; n++)
              void 0 === a[(i = (r = t[n]).selector + " ")] &&
                (a[i] = r.needsContext
                  ? w(i, this).index(l) > -1
                  : w.find(i, this, null, [l]).length),
                a[i] && o.push(r);
            o.length && s.push({ elem: l, handlers: o });
          }
      return (
        (l = this), u < t.length && s.push({ elem: l, handlers: t.slice(u) }), s
      );
    },
    addProp: function (e, t) {
      Object.defineProperty(w.Event.prototype, e, {
        enumerable: !0,
        configurable: !0,
        get: g(t)
          ? function () {
              if (this.originalEvent) return t(this.originalEvent);
            }
          : function () {
              if (this.originalEvent) return this.originalEvent[e];
            },
        set: function (t) {
          Object.defineProperty(this, e, {
            enumerable: !0,
            configurable: !0,
            writable: !0,
            value: t,
          });
        },
      });
    },
    fix: function (e) {
      return e[w.expando] ? e : new w.Event(e);
    },
    special: {
      load: { noBubble: !0 },
      focus: {
        trigger: function () {
          if (this !== Se() && this.focus) return this.focus(), !1;
        },
        delegateType: "focusin",
      },
      blur: {
        trigger: function () {
          if (this === Se() && this.blur) return this.blur(), !1;
        },
        delegateType: "focusout",
      },
      click: {
        trigger: function () {
          if ("checkbox" === this.type && this.click && N(this, "input"))
            return this.click(), !1;
        },
        _default: function (e) {
          return N(e.target, "a");
        },
      },
      beforeunload: {
        postDispatch: function (e) {
          void 0 !== e.result &&
            e.originalEvent &&
            (e.originalEvent.returnValue = e.result);
        },
      },
    },
  }),
    (w.removeEvent = function (e, t, n) {
      e.removeEventListener && e.removeEventListener(t, n);
    }),
    (w.Event = function (e, t) {
      if (!(this instanceof w.Event)) return new w.Event(e, t);
      e && e.type
        ? ((this.originalEvent = e),
          (this.type = e.type),
          (this.isDefaultPrevented =
            e.defaultPrevented ||
            (void 0 === e.defaultPrevented && !1 === e.returnValue)
              ? Ee
              : ke),
          (this.target =
            e.target && 3 === e.target.nodeType
              ? e.target.parentNode
              : e.target),
          (this.currentTarget = e.currentTarget),
          (this.relatedTarget = e.relatedTarget))
        : (this.type = e),
        t && w.extend(this, t),
        (this.timeStamp = (e && e.timeStamp) || Date.now()),
        (this[w.expando] = !0);
    }),
    (w.Event.prototype = {
      constructor: w.Event,
      isDefaultPrevented: ke,
      isPropagationStopped: ke,
      isImmediatePropagationStopped: ke,
      isSimulated: !1,
      preventDefault: function () {
        var e = this.originalEvent;
        (this.isDefaultPrevented = Ee),
          e && !this.isSimulated && e.preventDefault();
      },
      stopPropagation: function () {
        var e = this.originalEvent;
        (this.isPropagationStopped = Ee),
          e && !this.isSimulated && e.stopPropagation();
      },
      stopImmediatePropagation: function () {
        var e = this.originalEvent;
        (this.isImmediatePropagationStopped = Ee),
          e && !this.isSimulated && e.stopImmediatePropagation(),
          this.stopPropagation();
      },
    }),
    w.each(
      {
        altKey: !0,
        bubbles: !0,
        cancelable: !0,
        changedTouches: !0,
        ctrlKey: !0,
        detail: !0,
        eventPhase: !0,
        metaKey: !0,
        pageX: !0,
        pageY: !0,
        shiftKey: !0,
        view: !0,
        char: !0,
        charCode: !0,
        key: !0,
        keyCode: !0,
        button: !0,
        buttons: !0,
        clientX: !0,
        clientY: !0,
        offsetX: !0,
        offsetY: !0,
        pointerId: !0,
        pointerType: !0,
        screenX: !0,
        screenY: !0,
        targetTouches: !0,
        toElement: !0,
        touches: !0,
        which: function (e) {
          var t = e.button;
          return null == e.which && we.test(e.type)
            ? null != e.charCode
              ? e.charCode
              : e.keyCode
            : !e.which && void 0 !== t && Te.test(e.type)
            ? 1 & t
              ? 1
              : 2 & t
              ? 3
              : 4 & t
              ? 2
              : 0
            : e.which;
        },
      },
      w.event.addProp
    ),
    w.each(
      {
        mouseenter: "mouseover",
        mouseleave: "mouseout",
        pointerenter: "pointerover",
        pointerleave: "pointerout",
      },
      function (e, t) {
        w.event.special[e] = {
          delegateType: t,
          bindType: t,
          handle: function (e) {
            var n,
              r = this,
              i = e.relatedTarget,
              o = e.handleObj;
            return (
              (i && (i === r || w.contains(r, i))) ||
                ((e.type = o.origType),
                (n = o.handler.apply(this, arguments)),
                (e.type = t)),
              n
            );
          },
        };
      }
    ),
    w.fn.extend({
      on: function (e, t, n, r) {
        return De(this, e, t, n, r);
      },
      one: function (e, t, n, r) {
        return De(this, e, t, n, r, 1);
      },
      off: function (e, t, n) {
        var r, i;
        if (e && e.preventDefault && e.handleObj)
          return (
            (r = e.handleObj),
            w(e.delegateTarget).off(
              r.namespace ? r.origType + "." + r.namespace : r.origType,
              r.selector,
              r.handler
            ),
            this
          );
        if ("object" == typeof e) {
          for (i in e) this.off(i, t, e[i]);
          return this;
        }
        return (
          (!1 !== t && "function" != typeof t) || ((n = t), (t = void 0)),
          !1 === n && (n = ke),
          this.each(function () {
            w.event.remove(this, e, n, t);
          })
        );
      },
    });
  var Ne =
      /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
    Ae = /<script|<style|<link/i,
    je = /checked\s*(?:[^=]|=\s*.checked.)/i,
    qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;
  function Le(e, t) {
    return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr")
      ? w(e).children("tbody")[0] || e
      : e;
  }
  function He(e) {
    return (e.type = (null !== e.getAttribute("type")) + "/" + e.type), e;
  }
  function Oe(e) {
    return (
      "true/" === (e.type || "").slice(0, 5)
        ? (e.type = e.type.slice(5))
        : e.removeAttribute("type"),
      e
    );
  }
  function Pe(e, t) {
    var n, r, i, o, a, s, u, l;
    if (1 === t.nodeType) {
      if (
        J.hasData(e) &&
        ((o = J.access(e)), (a = J.set(t, o)), (l = o.events))
      ) {
        delete a.handle, (a.events = {});
        for (i in l)
          for (n = 0, r = l[i].length; n < r; n++) w.event.add(t, i, l[i][n]);
      }
      K.hasData(e) && ((s = K.access(e)), (u = w.extend({}, s)), K.set(t, u));
    }
  }
  function Me(e, t) {
    var n = t.nodeName.toLowerCase();
    "input" === n && pe.test(e.type)
      ? (t.checked = e.checked)
      : ("input" !== n && "textarea" !== n) ||
        (t.defaultValue = e.defaultValue);
  }
  function Re(e, t, n, r) {
    t = a.apply([], t);
    var i,
      o,
      s,
      u,
      l,
      c,
      f = 0,
      p = e.length,
      d = p - 1,
      y = t[0],
      v = g(y);
    if (v || (p > 1 && "string" == typeof y && !h.checkClone && je.test(y)))
      return e.each(function (i) {
        var o = e.eq(i);
        v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r);
      });
    if (
      p &&
      ((i = xe(t, e[0].ownerDocument, !1, e, r)),
      (o = i.firstChild),
      1 === i.childNodes.length && (i = o),
      o || r)
    ) {
      for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++)
        (l = i),
          f !== d &&
            ((l = w.clone(l, !0, !0)), u && w.merge(s, ye(l, "script"))),
          n.call(e[f], l, f);
      if (u)
        for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++)
          (l = s[f]),
            he.test(l.type || "") &&
              !J.access(l, "globalEval") &&
              w.contains(c, l) &&
              (l.src && "module" !== (l.type || "").toLowerCase()
                ? w._evalUrl && w._evalUrl(l.src)
                : m(l.textContent.replace(qe, ""), c, l));
    }
    return e;
  }
  function Ie(e, t, n) {
    for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++)
      n || 1 !== r.nodeType || w.cleanData(ye(r)),
        r.parentNode &&
          (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")),
          r.parentNode.removeChild(r));
    return e;
  }
  w.extend({
    htmlPrefilter: function (e) {
      return e.replace(Ne, "<$1></$2>");
    },
    clone: function (e, t, n) {
      var r,
        i,
        o,
        a,
        s = e.cloneNode(!0),
        u = w.contains(e.ownerDocument, e);
      if (
        !(
          h.noCloneChecked ||
          (1 !== e.nodeType && 11 !== e.nodeType) ||
          w.isXMLDoc(e)
        )
      )
        for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++)
          Me(o[r], a[r]);
      if (t)
        if (n)
          for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++)
            Pe(o[r], a[r]);
        else Pe(e, s);
      return (
        (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s
      );
    },
    cleanData: function (e) {
      for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++)
        if (Y(n)) {
          if ((t = n[J.expando])) {
            if (t.events)
              for (r in t.events)
                i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
            n[J.expando] = void 0;
          }
          n[K.expando] && (n[K.expando] = void 0);
        }
    },
  }),
    w.fn.extend({
      detach: function (e) {
        return Ie(this, e, !0);
      },
      remove: function (e) {
        return Ie(this, e);
      },
      text: function (e) {
        return z(
          this,
          function (e) {
            return void 0 === e
              ? w.text(this)
              : this.empty().each(function () {
                  (1 !== this.nodeType &&
                    11 !== this.nodeType &&
                    9 !== this.nodeType) ||
                    (this.textContent = e);
                });
          },
          null,
          e,
          arguments.length
        );
      },
      append: function () {
        return Re(this, arguments, function (e) {
          (1 !== this.nodeType &&
            11 !== this.nodeType &&
            9 !== this.nodeType) ||
            Le(this, e).appendChild(e);
        });
      },
      prepend: function () {
        return Re(this, arguments, function (e) {
          if (
            1 === this.nodeType ||
            11 === this.nodeType ||
            9 === this.nodeType
          ) {
            var t = Le(this, e);
            t.insertBefore(e, t.firstChild);
          }
        });
      },
      before: function () {
        return Re(this, arguments, function (e) {
          this.parentNode && this.parentNode.insertBefore(e, this);
        });
      },
      after: function () {
        return Re(this, arguments, function (e) {
          this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
        });
      },
      empty: function () {
        for (var e, t = 0; null != (e = this[t]); t++)
          1 === e.nodeType && (w.cleanData(ye(e, !1)), (e.textContent = ""));
        return this;
      },
      clone: function (e, t) {
        return (
          (e = null != e && e),
          (t = null == t ? e : t),
          this.map(function () {
            return w.clone(this, e, t);
          })
        );
      },
      html: function (e) {
        return z(
          this,
          function (e) {
            var t = this[0] || {},
              n = 0,
              r = this.length;
            if (void 0 === e && 1 === t.nodeType) return t.innerHTML;
            if (
              "string" == typeof e &&
              !Ae.test(e) &&
              !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]
            ) {
              e = w.htmlPrefilter(e);
              try {
                for (; n < r; n++)
                  1 === (t = this[n] || {}).nodeType &&
                    (w.cleanData(ye(t, !1)), (t.innerHTML = e));
                t = 0;
              } catch (e) {}
            }
            t && this.empty().append(e);
          },
          null,
          e,
          arguments.length
        );
      },
      replaceWith: function () {
        var e = [];
        return Re(
          this,
          arguments,
          function (t) {
            var n = this.parentNode;
            w.inArray(this, e) < 0 &&
              (w.cleanData(ye(this)), n && n.replaceChild(t, this));
          },
          e
        );
      },
    }),
    w.each(
      {
        appendTo: "append",
        prependTo: "prepend",
        insertBefore: "before",
        insertAfter: "after",
        replaceAll: "replaceWith",
      },
      function (e, t) {
        w.fn[e] = function (e) {
          for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++)
            (n = a === o ? this : this.clone(!0)),
              w(i[a])[t](n),
              s.apply(r, n.get());
          return this.pushStack(r);
        };
      }
    );
  var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"),
    $e = function (t) {
      var n = t.ownerDocument.defaultView;
      return (n && n.opener) || (n = e), n.getComputedStyle(t);
    },
    Be = new RegExp(oe.join("|"), "i");
  !(function () {
    function t() {
      if (c) {
        (l.style.cssText =
          "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0"),
          (c.style.cssText =
            "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%"),
          be.appendChild(l).appendChild(c);
        var t = e.getComputedStyle(c);
        (i = "1%" !== t.top),
          (u = 12 === n(t.marginLeft)),
          (c.style.right = "60%"),
          (s = 36 === n(t.right)),
          (o = 36 === n(t.width)),
          (c.style.position = "absolute"),
          (a = 36 === c.offsetWidth || "absolute"),
          be.removeChild(l),
          (c = null);
      }
    }
    function n(e) {
      return Math.round(parseFloat(e));
    }
    var i,
      o,
      a,
      s,
      u,
      l = r.createElement("div"),
      c = r.createElement("div");
    c.style &&
      ((c.style.backgroundClip = "content-box"),
      (c.cloneNode(!0).style.backgroundClip = ""),
      (h.clearCloneStyle = "content-box" === c.style.backgroundClip),
      w.extend(h, {
        boxSizingReliable: function () {
          return t(), o;
        },
        pixelBoxStyles: function () {
          return t(), s;
        },
        pixelPosition: function () {
          return t(), i;
        },
        reliableMarginLeft: function () {
          return t(), u;
        },
        scrollboxSize: function () {
          return t(), a;
        },
      }));
  })();
  function Fe(e, t, n) {
    var r,
      i,
      o,
      a,
      s = e.style;
    return (
      (n = n || $e(e)) &&
        ("" !== (a = n.getPropertyValue(t) || n[t]) ||
          w.contains(e.ownerDocument, e) ||
          (a = w.style(e, t)),
        !h.pixelBoxStyles() &&
          We.test(a) &&
          Be.test(t) &&
          ((r = s.width),
          (i = s.minWidth),
          (o = s.maxWidth),
          (s.minWidth = s.maxWidth = s.width = a),
          (a = n.width),
          (s.width = r),
          (s.minWidth = i),
          (s.maxWidth = o))),
      void 0 !== a ? a + "" : a
    );
  }
  function _e(e, t) {
    return {
      get: function () {
        if (!e()) return (this.get = t).apply(this, arguments);
        delete this.get;
      },
    };
  }
  var ze = /^(none|table(?!-c[ea]).+)/,
    Xe = /^--/,
    Ue = { position: "absolute", visibility: "hidden", display: "block" },
    Ve = { letterSpacing: "0", fontWeight: "400" },
    Ge = ["Webkit", "Moz", "ms"],
    Ye = r.createElement("div").style;
  function Qe(e) {
    if (e in Ye) return e;
    var t = e[0].toUpperCase() + e.slice(1),
      n = Ge.length;
    while (n--) if ((e = Ge[n] + t) in Ye) return e;
  }
  function Je(e) {
    var t = w.cssProps[e];
    return t || (t = w.cssProps[e] = Qe(e) || e), t;
  }
  function Ke(e, t, n) {
    var r = ie.exec(t);
    return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t;
  }
  function Ze(e, t, n, r, i, o) {
    var a = "width" === t ? 1 : 0,
      s = 0,
      u = 0;
    if (n === (r ? "border" : "content")) return 0;
    for (; a < 4; a += 2)
      "margin" === n && (u += w.css(e, n + oe[a], !0, i)),
        r
          ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)),
            "margin" !== n &&
              (u -= w.css(e, "border" + oe[a] + "Width", !0, i)))
          : ((u += w.css(e, "padding" + oe[a], !0, i)),
            "padding" !== n
              ? (u += w.css(e, "border" + oe[a] + "Width", !0, i))
              : (s += w.css(e, "border" + oe[a] + "Width", !0, i)));
    return (
      !r &&
        o >= 0 &&
        (u += Math.max(
          0,
          Math.ceil(
            e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - 0.5
          )
        )),
      u
    );
  }
  function et(e, t, n) {
    var r = $e(e),
      i = Fe(e, t, r),
      o = "border-box" === w.css(e, "boxSizing", !1, r),
      a = o;
    if (We.test(i)) {
      if (!n) return i;
      i = "auto";
    }
    return (
      (a = a && (h.boxSizingReliable() || i === e.style[t])),
      ("auto" === i ||
        (!parseFloat(i) && "inline" === w.css(e, "display", !1, r))) &&
        ((i = e["offset" + t[0].toUpperCase() + t.slice(1)]), (a = !0)),
      (i = parseFloat(i) || 0) +
        Ze(e, t, n || (o ? "border" : "content"), a, r, i) +
        "px"
    );
  }
  w.extend({
    cssHooks: {
      opacity: {
        get: function (e, t) {
          if (t) {
            var n = Fe(e, "opacity");
            return "" === n ? "1" : n;
          }
        },
      },
    },
    cssNumber: {
      animationIterationCount: !0,
      columnCount: !0,
      fillOpacity: !0,
      flexGrow: !0,
      flexShrink: !0,
      fontWeight: !0,
      lineHeight: !0,
      opacity: !0,
      order: !0,
      orphans: !0,
      widows: !0,
      zIndex: !0,
      zoom: !0,
    },
    cssProps: {},
    style: function (e, t, n, r) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var i,
          o,
          a,
          s = G(t),
          u = Xe.test(t),
          l = e.style;
        if (
          (u || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]), void 0 === n)
        )
          return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
        "string" == (o = typeof n) &&
          (i = ie.exec(n)) &&
          i[1] &&
          ((n = ue(e, t, i)), (o = "number")),
          null != n &&
            n === n &&
            ("number" === o &&
              (n += (i && i[3]) || (w.cssNumber[s] ? "" : "px")),
            h.clearCloneStyle ||
              "" !== n ||
              0 !== t.indexOf("background") ||
              (l[t] = "inherit"),
            (a && "set" in a && void 0 === (n = a.set(e, n, r))) ||
              (u ? l.setProperty(t, n) : (l[t] = n)));
      }
    },
    css: function (e, t, n, r) {
      var i,
        o,
        a,
        s = G(t);
      return (
        Xe.test(t) || (t = Je(s)),
        (a = w.cssHooks[t] || w.cssHooks[s]) &&
          "get" in a &&
          (i = a.get(e, !0, n)),
        void 0 === i && (i = Fe(e, t, r)),
        "normal" === i && t in Ve && (i = Ve[t]),
        "" === n || n
          ? ((o = parseFloat(i)), !0 === n || isFinite(o) ? o || 0 : i)
          : i
      );
    },
  }),
    w.each(["height", "width"], function (e, t) {
      w.cssHooks[t] = {
        get: function (e, n, r) {
          if (n)
            return !ze.test(w.css(e, "display")) ||
              (e.getClientRects().length && e.getBoundingClientRect().width)
              ? et(e, t, r)
              : se(e, Ue, function () {
                  return et(e, t, r);
                });
        },
        set: function (e, n, r) {
          var i,
            o = $e(e),
            a = "border-box" === w.css(e, "boxSizing", !1, o),
            s = r && Ze(e, t, r, a, o);
          return (
            a &&
              h.scrollboxSize() === o.position &&
              (s -= Math.ceil(
                e["offset" + t[0].toUpperCase() + t.slice(1)] -
                  parseFloat(o[t]) -
                  Ze(e, t, "border", !1, o) -
                  0.5
              )),
            s &&
              (i = ie.exec(n)) &&
              "px" !== (i[3] || "px") &&
              ((e.style[t] = n), (n = w.css(e, t))),
            Ke(e, n, s)
          );
        },
      };
    }),
    (w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
      if (t)
        return (
          (parseFloat(Fe(e, "marginLeft")) ||
            e.getBoundingClientRect().left -
              se(e, { marginLeft: 0 }, function () {
                return e.getBoundingClientRect().left;
              })) + "px"
        );
    })),
    w.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
      (w.cssHooks[e + t] = {
        expand: function (n) {
          for (
            var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n];
            r < 4;
            r++
          )
            i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
          return i;
        },
      }),
        "margin" !== e && (w.cssHooks[e + t].set = Ke);
    }),
    w.fn.extend({
      css: function (e, t) {
        return z(
          this,
          function (e, t, n) {
            var r,
              i,
              o = {},
              a = 0;
            if (Array.isArray(t)) {
              for (r = $e(e), i = t.length; a < i; a++)
                o[t[a]] = w.css(e, t[a], !1, r);
              return o;
            }
            return void 0 !== n ? w.style(e, t, n) : w.css(e, t);
          },
          e,
          t,
          arguments.length > 1
        );
      },
    });
  function tt(e, t, n, r, i) {
    return new tt.prototype.init(e, t, n, r, i);
  }
  (w.Tween = tt),
    (tt.prototype = {
      constructor: tt,
      init: function (e, t, n, r, i, o) {
        (this.elem = e),
          (this.prop = n),
          (this.easing = i || w.easing._default),
          (this.options = t),
          (this.start = this.now = this.cur()),
          (this.end = r),
          (this.unit = o || (w.cssNumber[n] ? "" : "px"));
      },
      cur: function () {
        var e = tt.propHooks[this.prop];
        return e && e.get ? e.get(this) : tt.propHooks._default.get(this);
      },
      run: function (e) {
        var t,
          n = tt.propHooks[this.prop];
        return (
          this.options.duration
            ? (this.pos = t =
                w.easing[this.easing](
                  e,
                  this.options.duration * e,
                  0,
                  1,
                  this.options.duration
                ))
            : (this.pos = t = e),
          (this.now = (this.end - this.start) * t + this.start),
          this.options.step &&
            this.options.step.call(this.elem, this.now, this),
          n && n.set ? n.set(this) : tt.propHooks._default.set(this),
          this
        );
      },
    }),
    (tt.prototype.init.prototype = tt.prototype),
    (tt.propHooks = {
      _default: {
        get: function (e) {
          var t;
          return 1 !== e.elem.nodeType ||
            (null != e.elem[e.prop] && null == e.elem.style[e.prop])
            ? e.elem[e.prop]
            : (t = w.css(e.elem, e.prop, "")) && "auto" !== t
            ? t
            : 0;
        },
        set: function (e) {
          w.fx.step[e.prop]
            ? w.fx.step[e.prop](e)
            : 1 !== e.elem.nodeType ||
              (null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop])
            ? (e.elem[e.prop] = e.now)
            : w.style(e.elem, e.prop, e.now + e.unit);
        },
      },
    }),
    (tt.propHooks.scrollTop = tt.propHooks.scrollLeft =
      {
        set: function (e) {
          e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
        },
      }),
    (w.easing = {
      linear: function (e) {
        return e;
      },
      swing: function (e) {
        return 0.5 - Math.cos(e * Math.PI) / 2;
      },
      _default: "swing",
    }),
    (w.fx = tt.prototype.init),
    (w.fx.step = {});
  var nt,
    rt,
    it = /^(?:toggle|show|hide)$/,
    ot = /queueHooks$/;
  function at() {
    rt &&
      (!1 === r.hidden && e.requestAnimationFrame
        ? e.requestAnimationFrame(at)
        : e.setTimeout(at, w.fx.interval),
      w.fx.tick());
  }
  function st() {
    return (
      e.setTimeout(function () {
        nt = void 0;
      }),
      (nt = Date.now())
    );
  }
  function ut(e, t) {
    var n,
      r = 0,
      i = { height: e };
    for (t = t ? 1 : 0; r < 4; r += 2 - t)
      i["margin" + (n = oe[r])] = i["padding" + n] = e;
    return t && (i.opacity = i.width = e), i;
  }
  function lt(e, t, n) {
    for (
      var r,
        i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]),
        o = 0,
        a = i.length;
      o < a;
      o++
    )
      if ((r = i[o].call(n, t, e))) return r;
  }
  function ct(e, t, n) {
    var r,
      i,
      o,
      a,
      s,
      u,
      l,
      c,
      f = "width" in t || "height" in t,
      p = this,
      d = {},
      h = e.style,
      g = e.nodeType && ae(e),
      y = J.get(e, "fxshow");
    n.queue ||
      (null == (a = w._queueHooks(e, "fx")).unqueued &&
        ((a.unqueued = 0),
        (s = a.empty.fire),
        (a.empty.fire = function () {
          a.unqueued || s();
        })),
      a.unqueued++,
      p.always(function () {
        p.always(function () {
          a.unqueued--, w.queue(e, "fx").length || a.empty.fire();
        });
      }));
    for (r in t)
      if (((i = t[r]), it.test(i))) {
        if (
          (delete t[r], (o = o || "toggle" === i), i === (g ? "hide" : "show"))
        ) {
          if ("show" !== i || !y || void 0 === y[r]) continue;
          g = !0;
        }
        d[r] = (y && y[r]) || w.style(e, r);
      }
    if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
      f &&
        1 === e.nodeType &&
        ((n.overflow = [h.overflow, h.overflowX, h.overflowY]),
        null == (l = y && y.display) && (l = J.get(e, "display")),
        "none" === (c = w.css(e, "display")) &&
          (l
            ? (c = l)
            : (fe([e], !0),
              (l = e.style.display || l),
              (c = w.css(e, "display")),
              fe([e]))),
        ("inline" === c || ("inline-block" === c && null != l)) &&
          "none" === w.css(e, "float") &&
          (u ||
            (p.done(function () {
              h.display = l;
            }),
            null == l && ((c = h.display), (l = "none" === c ? "" : c))),
          (h.display = "inline-block"))),
        n.overflow &&
          ((h.overflow = "hidden"),
          p.always(function () {
            (h.overflow = n.overflow[0]),
              (h.overflowX = n.overflow[1]),
              (h.overflowY = n.overflow[2]);
          })),
        (u = !1);
      for (r in d)
        u ||
          (y
            ? "hidden" in y && (g = y.hidden)
            : (y = J.access(e, "fxshow", { display: l })),
          o && (y.hidden = !g),
          g && fe([e], !0),
          p.done(function () {
            g || fe([e]), J.remove(e, "fxshow");
            for (r in d) w.style(e, r, d[r]);
          })),
          (u = lt(g ? y[r] : 0, r, p)),
          r in y || ((y[r] = u.start), g && ((u.end = u.start), (u.start = 0)));
    }
  }
  function ft(e, t) {
    var n, r, i, o, a;
    for (n in e)
      if (
        ((r = G(n)),
        (i = t[r]),
        (o = e[n]),
        Array.isArray(o) && ((i = o[1]), (o = e[n] = o[0])),
        n !== r && ((e[r] = o), delete e[n]),
        (a = w.cssHooks[r]) && "expand" in a)
      ) {
        (o = a.expand(o)), delete e[r];
        for (n in o) n in e || ((e[n] = o[n]), (t[n] = i));
      } else t[r] = i;
  }
  function pt(e, t, n) {
    var r,
      i,
      o = 0,
      a = pt.prefilters.length,
      s = w.Deferred().always(function () {
        delete u.elem;
      }),
      u = function () {
        if (i) return !1;
        for (
          var t = nt || st(),
            n = Math.max(0, l.startTime + l.duration - t),
            r = 1 - (n / l.duration || 0),
            o = 0,
            a = l.tweens.length;
          o < a;
          o++
        )
          l.tweens[o].run(r);
        return (
          s.notifyWith(e, [l, r, n]),
          r < 1 && a
            ? n
            : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1)
        );
      },
      l = s.promise({
        elem: e,
        props: w.extend({}, t),
        opts: w.extend(!0, { specialEasing: {}, easing: w.easing._default }, n),
        originalProperties: t,
        originalOptions: n,
        startTime: nt || st(),
        duration: n.duration,
        tweens: [],
        createTween: function (t, n) {
          var r = w.Tween(
            e,
            l.opts,
            t,
            n,
            l.opts.specialEasing[t] || l.opts.easing
          );
          return l.tweens.push(r), r;
        },
        stop: function (t) {
          var n = 0,
            r = t ? l.tweens.length : 0;
          if (i) return this;
          for (i = !0; n < r; n++) l.tweens[n].run(1);
          return (
            t
              ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t]))
              : s.rejectWith(e, [l, t]),
            this
          );
        },
      }),
      c = l.props;
    for (ft(c, l.opts.specialEasing); o < a; o++)
      if ((r = pt.prefilters[o].call(l, e, c, l.opts)))
        return (
          g(r.stop) &&
            (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)),
          r
        );
    return (
      w.map(c, lt, l),
      g(l.opts.start) && l.opts.start.call(e, l),
      l
        .progress(l.opts.progress)
        .done(l.opts.done, l.opts.complete)
        .fail(l.opts.fail)
        .always(l.opts.always),
      w.fx.timer(w.extend(u, { elem: e, anim: l, queue: l.opts.queue })),
      l
    );
  }
  (w.Animation = w.extend(pt, {
    tweeners: {
      "*": [
        function (e, t) {
          var n = this.createTween(e, t);
          return ue(n.elem, e, ie.exec(t), n), n;
        },
      ],
    },
    tweener: function (e, t) {
      g(e) ? ((t = e), (e = ["*"])) : (e = e.match(M));
      for (var n, r = 0, i = e.length; r < i; r++)
        (n = e[r]),
          (pt.tweeners[n] = pt.tweeners[n] || []),
          pt.tweeners[n].unshift(t);
    },
    prefilters: [ct],
    prefilter: function (e, t) {
      t ? pt.prefilters.unshift(e) : pt.prefilters.push(e);
    },
  })),
    (w.speed = function (e, t, n) {
      var r =
        e && "object" == typeof e
          ? w.extend({}, e)
          : {
              complete: n || (!n && t) || (g(e) && e),
              duration: e,
              easing: (n && t) || (t && !g(t) && t),
            };
      return (
        w.fx.off
          ? (r.duration = 0)
          : "number" != typeof r.duration &&
            (r.duration in w.fx.speeds
              ? (r.duration = w.fx.speeds[r.duration])
              : (r.duration = w.fx.speeds._default)),
        (null != r.queue && !0 !== r.queue) || (r.queue = "fx"),
        (r.old = r.complete),
        (r.complete = function () {
          g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue);
        }),
        r
      );
    }),
    w.fn.extend({
      fadeTo: function (e, t, n, r) {
        return this.filter(ae)
          .css("opacity", 0)
          .show()
          .end()
          .animate({ opacity: t }, e, n, r);
      },
      animate: function (e, t, n, r) {
        var i = w.isEmptyObject(e),
          o = w.speed(t, n, r),
          a = function () {
            var t = pt(this, w.extend({}, e), o);
            (i || J.get(this, "finish")) && t.stop(!0);
          };
        return (
          (a.finish = a),
          i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a)
        );
      },
      stop: function (e, t, n) {
        var r = function (e) {
          var t = e.stop;
          delete e.stop, t(n);
        };
        return (
          "string" != typeof e && ((n = t), (t = e), (e = void 0)),
          t && !1 !== e && this.queue(e || "fx", []),
          this.each(function () {
            var t = !0,
              i = null != e && e + "queueHooks",
              o = w.timers,
              a = J.get(this);
            if (i) a[i] && a[i].stop && r(a[i]);
            else for (i in a) a[i] && a[i].stop && ot.test(i) && r(a[i]);
            for (i = o.length; i--; )
              o[i].elem !== this ||
                (null != e && o[i].queue !== e) ||
                (o[i].anim.stop(n), (t = !1), o.splice(i, 1));
            (!t && n) || w.dequeue(this, e);
          })
        );
      },
      finish: function (e) {
        return (
          !1 !== e && (e = e || "fx"),
          this.each(function () {
            var t,
              n = J.get(this),
              r = n[e + "queue"],
              i = n[e + "queueHooks"],
              o = w.timers,
              a = r ? r.length : 0;
            for (
              n.finish = !0,
                w.queue(this, e, []),
                i && i.stop && i.stop.call(this, !0),
                t = o.length;
              t--;

            )
              o[t].elem === this &&
                o[t].queue === e &&
                (o[t].anim.stop(!0), o.splice(t, 1));
            for (t = 0; t < a; t++)
              r[t] && r[t].finish && r[t].finish.call(this);
            delete n.finish;
          })
        );
      },
    }),
    w.each(["toggle", "show", "hide"], function (e, t) {
      var n = w.fn[t];
      w.fn[t] = function (e, r, i) {
        return null == e || "boolean" == typeof e
          ? n.apply(this, arguments)
          : this.animate(ut(t, !0), e, r, i);
      };
    }),
    w.each(
      {
        slideDown: ut("show"),
        slideUp: ut("hide"),
        slideToggle: ut("toggle"),
        fadeIn: { opacity: "show" },
        fadeOut: { opacity: "hide" },
        fadeToggle: { opacity: "toggle" },
      },
      function (e, t) {
        w.fn[e] = function (e, n, r) {
          return this.animate(t, e, n, r);
        };
      }
    ),
    (w.timers = []),
    (w.fx.tick = function () {
      var e,
        t = 0,
        n = w.timers;
      for (nt = Date.now(); t < n.length; t++)
        (e = n[t])() || n[t] !== e || n.splice(t--, 1);
      n.length || w.fx.stop(), (nt = void 0);
    }),
    (w.fx.timer = function (e) {
      w.timers.push(e), w.fx.start();
    }),
    (w.fx.interval = 13),
    (w.fx.start = function () {
      rt || ((rt = !0), at());
    }),
    (w.fx.stop = function () {
      rt = null;
    }),
    (w.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
    (w.fn.delay = function (t, n) {
      return (
        (t = w.fx ? w.fx.speeds[t] || t : t),
        (n = n || "fx"),
        this.queue(n, function (n, r) {
          var i = e.setTimeout(n, t);
          r.stop = function () {
            e.clearTimeout(i);
          };
        })
      );
    }),
    (function () {
      var e = r.createElement("input"),
        t = r.createElement("select").appendChild(r.createElement("option"));
      (e.type = "checkbox"),
        (h.checkOn = "" !== e.value),
        (h.optSelected = t.selected),
        ((e = r.createElement("input")).value = "t"),
        (e.type = "radio"),
        (h.radioValue = "t" === e.value);
    })();
  var dt,
    ht = w.expr.attrHandle;
  w.fn.extend({
    attr: function (e, t) {
      return z(this, w.attr, e, t, arguments.length > 1);
    },
    removeAttr: function (e) {
      return this.each(function () {
        w.removeAttr(this, e);
      });
    },
  }),
    w.extend({
      attr: function (e, t, n) {
        var r,
          i,
          o = e.nodeType;
        if (3 !== o && 8 !== o && 2 !== o)
          return "undefined" == typeof e.getAttribute
            ? w.prop(e, t, n)
            : ((1 === o && w.isXMLDoc(e)) ||
                (i =
                  w.attrHooks[t.toLowerCase()] ||
                  (w.expr.match.bool.test(t) ? dt : void 0)),
              void 0 !== n
                ? null === n
                  ? void w.removeAttr(e, t)
                  : i && "set" in i && void 0 !== (r = i.set(e, n, t))
                  ? r
                  : (e.setAttribute(t, n + ""), n)
                : i && "get" in i && null !== (r = i.get(e, t))
                ? r
                : null == (r = w.find.attr(e, t))
                ? void 0
                : r);
      },
      attrHooks: {
        type: {
          set: function (e, t) {
            if (!h.radioValue && "radio" === t && N(e, "input")) {
              var n = e.value;
              return e.setAttribute("type", t), n && (e.value = n), t;
            }
          },
        },
      },
      removeAttr: function (e, t) {
        var n,
          r = 0,
          i = t && t.match(M);
        if (i && 1 === e.nodeType) while ((n = i[r++])) e.removeAttribute(n);
      },
    }),
    (dt = {
      set: function (e, t, n) {
        return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n;
      },
    }),
    w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
      var n = ht[t] || w.find.attr;
      ht[t] = function (e, t, r) {
        var i,
          o,
          a = t.toLowerCase();
        return (
          r ||
            ((o = ht[a]),
            (ht[a] = i),
            (i = null != n(e, t, r) ? a : null),
            (ht[a] = o)),
          i
        );
      };
    });
  var gt = /^(?:input|select|textarea|button)$/i,
    yt = /^(?:a|area)$/i;
  w.fn.extend({
    prop: function (e, t) {
      return z(this, w.prop, e, t, arguments.length > 1);
    },
    removeProp: function (e) {
      return this.each(function () {
        delete this[w.propFix[e] || e];
      });
    },
  }),
    w.extend({
      prop: function (e, t, n) {
        var r,
          i,
          o = e.nodeType;
        if (3 !== o && 8 !== o && 2 !== o)
          return (
            (1 === o && w.isXMLDoc(e)) ||
              ((t = w.propFix[t] || t), (i = w.propHooks[t])),
            void 0 !== n
              ? i && "set" in i && void 0 !== (r = i.set(e, n, t))
                ? r
                : (e[t] = n)
              : i && "get" in i && null !== (r = i.get(e, t))
              ? r
              : e[t]
          );
      },
      propHooks: {
        tabIndex: {
          get: function (e) {
            var t = w.find.attr(e, "tabindex");
            return t
              ? parseInt(t, 10)
              : gt.test(e.nodeName) || (yt.test(e.nodeName) && e.href)
              ? 0
              : -1;
          },
        },
      },
      propFix: { for: "htmlFor", class: "className" },
    }),
    h.optSelected ||
      (w.propHooks.selected = {
        get: function (e) {
          var t = e.parentNode;
          return t && t.parentNode && t.parentNode.selectedIndex, null;
        },
        set: function (e) {
          var t = e.parentNode;
          t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
        },
      }),
    w.each(
      [
        "tabIndex",
        "readOnly",
        "maxLength",
        "cellSpacing",
        "cellPadding",
        "rowSpan",
        "colSpan",
        "useMap",
        "frameBorder",
        "contentEditable",
      ],
      function () {
        w.propFix[this.toLowerCase()] = this;
      }
    );
  function vt(e) {
    return (e.match(M) || []).join(" ");
  }
  function mt(e) {
    return (e.getAttribute && e.getAttribute("class")) || "";
  }
  function xt(e) {
    return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : [];
  }
  w.fn.extend({
    addClass: function (e) {
      var t,
        n,
        r,
        i,
        o,
        a,
        s,
        u = 0;
      if (g(e))
        return this.each(function (t) {
          w(this).addClass(e.call(this, t, mt(this)));
        });
      if ((t = xt(e)).length)
        while ((n = this[u++]))
          if (((i = mt(n)), (r = 1 === n.nodeType && " " + vt(i) + " "))) {
            a = 0;
            while ((o = t[a++])) r.indexOf(" " + o + " ") < 0 && (r += o + " ");
            i !== (s = vt(r)) && n.setAttribute("class", s);
          }
      return this;
    },
    removeClass: function (e) {
      var t,
        n,
        r,
        i,
        o,
        a,
        s,
        u = 0;
      if (g(e))
        return this.each(function (t) {
          w(this).removeClass(e.call(this, t, mt(this)));
        });
      if (!arguments.length) return this.attr("class", "");
      if ((t = xt(e)).length)
        while ((n = this[u++]))
          if (((i = mt(n)), (r = 1 === n.nodeType && " " + vt(i) + " "))) {
            a = 0;
            while ((o = t[a++]))
              while (r.indexOf(" " + o + " ") > -1)
                r = r.replace(" " + o + " ", " ");
            i !== (s = vt(r)) && n.setAttribute("class", s);
          }
      return this;
    },
    toggleClass: function (e, t) {
      var n = typeof e,
        r = "string" === n || Array.isArray(e);
      return "boolean" == typeof t && r
        ? t
          ? this.addClass(e)
          : this.removeClass(e)
        : g(e)
        ? this.each(function (n) {
            w(this).toggleClass(e.call(this, n, mt(this), t), t);
          })
        : this.each(function () {
            var t, i, o, a;
            if (r) {
              (i = 0), (o = w(this)), (a = xt(e));
              while ((t = a[i++]))
                o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
            } else (void 0 !== e && "boolean" !== n) || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""));
          });
    },
    hasClass: function (e) {
      var t,
        n,
        r = 0;
      t = " " + e + " ";
      while ((n = this[r++]))
        if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1)
          return !0;
      return !1;
    },
  });
  var bt = /\r/g;
  w.fn.extend({
    val: function (e) {
      var t,
        n,
        r,
        i = this[0];
      {
        if (arguments.length)
          return (
            (r = g(e)),
            this.each(function (n) {
              var i;
              1 === this.nodeType &&
                (null == (i = r ? e.call(this, n, w(this).val()) : e)
                  ? (i = "")
                  : "number" == typeof i
                  ? (i += "")
                  : Array.isArray(i) &&
                    (i = w.map(i, function (e) {
                      return null == e ? "" : e + "";
                    })),
                ((t =
                  w.valHooks[this.type] ||
                  w.valHooks[this.nodeName.toLowerCase()]) &&
                  "set" in t &&
                  void 0 !== t.set(this, i, "value")) ||
                  (this.value = i));
            })
          );
        if (i)
          return (t =
            w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) &&
            "get" in t &&
            void 0 !== (n = t.get(i, "value"))
            ? n
            : "string" == typeof (n = i.value)
            ? n.replace(bt, "")
            : null == n
            ? ""
            : n;
      }
    },
  }),
    w.extend({
      valHooks: {
        option: {
          get: function (e) {
            var t = w.find.attr(e, "value");
            return null != t ? t : vt(w.text(e));
          },
        },
        select: {
          get: function (e) {
            var t,
              n,
              r,
              i = e.options,
              o = e.selectedIndex,
              a = "select-one" === e.type,
              s = a ? null : [],
              u = a ? o + 1 : i.length;
            for (r = o < 0 ? u : a ? o : 0; r < u; r++)
              if (
                ((n = i[r]).selected || r === o) &&
                !n.disabled &&
                (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))
              ) {
                if (((t = w(n).val()), a)) return t;
                s.push(t);
              }
            return s;
          },
          set: function (e, t) {
            var n,
              r,
              i = e.options,
              o = w.makeArray(t),
              a = i.length;
            while (a--)
              ((r = i[a]).selected =
                w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
            return n || (e.selectedIndex = -1), o;
          },
        },
      },
    }),
    w.each(["radio", "checkbox"], function () {
      (w.valHooks[this] = {
        set: function (e, t) {
          if (Array.isArray(t))
            return (e.checked = w.inArray(w(e).val(), t) > -1);
        },
      }),
        h.checkOn ||
          (w.valHooks[this].get = function (e) {
            return null === e.getAttribute("value") ? "on" : e.value;
          });
    }),
    (h.focusin = "onfocusin" in e);
  var wt = /^(?:focusinfocus|focusoutblur)$/,
    Tt = function (e) {
      e.stopPropagation();
    };
  w.extend(w.event, {
    trigger: function (t, n, i, o) {
      var a,
        s,
        u,
        l,
        c,
        p,
        d,
        h,
        v = [i || r],
        m = f.call(t, "type") ? t.type : t,
        x = f.call(t, "namespace") ? t.namespace.split(".") : [];
      if (
        ((s = h = u = i = i || r),
        3 !== i.nodeType &&
          8 !== i.nodeType &&
          !wt.test(m + w.event.triggered) &&
          (m.indexOf(".") > -1 && ((m = (x = m.split(".")).shift()), x.sort()),
          (c = m.indexOf(":") < 0 && "on" + m),
          (t = t[w.expando] ? t : new w.Event(m, "object" == typeof t && t)),
          (t.isTrigger = o ? 2 : 3),
          (t.namespace = x.join(".")),
          (t.rnamespace = t.namespace
            ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)")
            : null),
          (t.result = void 0),
          t.target || (t.target = i),
          (n = null == n ? [t] : w.makeArray(n, [t])),
          (d = w.event.special[m] || {}),
          o || !d.trigger || !1 !== d.trigger.apply(i, n)))
      ) {
        if (!o && !d.noBubble && !y(i)) {
          for (
            l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode);
            s;
            s = s.parentNode
          )
            v.push(s), (u = s);
          u === (i.ownerDocument || r) &&
            v.push(u.defaultView || u.parentWindow || e);
        }
        a = 0;
        while ((s = v[a++]) && !t.isPropagationStopped())
          (h = s),
            (t.type = a > 1 ? l : d.bindType || m),
            (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) &&
              p.apply(s, n),
            (p = c && s[c]) &&
              p.apply &&
              Y(s) &&
              ((t.result = p.apply(s, n)),
              !1 === t.result && t.preventDefault());
        return (
          (t.type = m),
          o ||
            t.isDefaultPrevented() ||
            (d._default && !1 !== d._default.apply(v.pop(), n)) ||
            !Y(i) ||
            (c &&
              g(i[m]) &&
              !y(i) &&
              ((u = i[c]) && (i[c] = null),
              (w.event.triggered = m),
              t.isPropagationStopped() && h.addEventListener(m, Tt),
              i[m](),
              t.isPropagationStopped() && h.removeEventListener(m, Tt),
              (w.event.triggered = void 0),
              u && (i[c] = u))),
          t.result
        );
      }
    },
    simulate: function (e, t, n) {
      var r = w.extend(new w.Event(), n, { type: e, isSimulated: !0 });
      w.event.trigger(r, null, t);
    },
  }),
    w.fn.extend({
      trigger: function (e, t) {
        return this.each(function () {
          w.event.trigger(e, t, this);
        });
      },
      triggerHandler: function (e, t) {
        var n = this[0];
        if (n) return w.event.trigger(e, t, n, !0);
      },
    }),
    h.focusin ||
      w.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
        var n = function (e) {
          w.event.simulate(t, e.target, w.event.fix(e));
        };
        w.event.special[t] = {
          setup: function () {
            var r = this.ownerDocument || this,
              i = J.access(r, t);
            i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1);
          },
          teardown: function () {
            var r = this.ownerDocument || this,
              i = J.access(r, t) - 1;
            i
              ? J.access(r, t, i)
              : (r.removeEventListener(e, n, !0), J.remove(r, t));
          },
        };
      });
  var Ct = e.location,
    Et = Date.now(),
    kt = /\?/;
  w.parseXML = function (t) {
    var n;
    if (!t || "string" != typeof t) return null;
    try {
      n = new e.DOMParser().parseFromString(t, "text/xml");
    } catch (e) {
      n = void 0;
    }
    return (
      (n && !n.getElementsByTagName("parsererror").length) ||
        w.error("Invalid XML: " + t),
      n
    );
  };
  var St = /\[\]$/,
    Dt = /\r?\n/g,
    Nt = /^(?:submit|button|image|reset|file)$/i,
    At = /^(?:input|select|textarea|keygen)/i;
  function jt(e, t, n, r) {
    var i;
    if (Array.isArray(t))
      w.each(t, function (t, i) {
        n || St.test(e)
          ? r(e, i)
          : jt(
              e + "[" + ("object" == typeof i && null != i ? t : "") + "]",
              i,
              n,
              r
            );
      });
    else if (n || "object" !== x(t)) r(e, t);
    else for (i in t) jt(e + "[" + i + "]", t[i], n, r);
  }
  (w.param = function (e, t) {
    var n,
      r = [],
      i = function (e, t) {
        var n = g(t) ? t() : t;
        r[r.length] =
          encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n);
      };
    if (Array.isArray(e) || (e.jquery && !w.isPlainObject(e)))
      w.each(e, function () {
        i(this.name, this.value);
      });
    else for (n in e) jt(n, e[n], t, i);
    return r.join("&");
  }),
    w.fn.extend({
      serialize: function () {
        return w.param(this.serializeArray());
      },
      serializeArray: function () {
        return this.map(function () {
          var e = w.prop(this, "elements");
          return e ? w.makeArray(e) : this;
        })
          .filter(function () {
            var e = this.type;
            return (
              this.name &&
              !w(this).is(":disabled") &&
              At.test(this.nodeName) &&
              !Nt.test(e) &&
              (this.checked || !pe.test(e))
            );
          })
          .map(function (e, t) {
            var n = w(this).val();
            return null == n
              ? null
              : Array.isArray(n)
              ? w.map(n, function (e) {
                  return { name: t.name, value: e.replace(Dt, "\r\n") };
                })
              : { name: t.name, value: n.replace(Dt, "\r\n") };
          })
          .get();
      },
    });
  var qt = /%20/g,
    Lt = /#.*$/,
    Ht = /([?&])_=[^&]*/,
    Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
    Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
    Mt = /^(?:GET|HEAD)$/,
    Rt = /^\/\//,
    It = {},
    Wt = {},
    $t = "*/".concat("*"),
    Bt = r.createElement("a");
  Bt.href = Ct.href;
  function Ft(e) {
    return function (t, n) {
      "string" != typeof t && ((n = t), (t = "*"));
      var r,
        i = 0,
        o = t.toLowerCase().match(M) || [];
      if (g(n))
        while ((r = o[i++]))
          "+" === r[0]
            ? ((r = r.slice(1) || "*"), (e[r] = e[r] || []).unshift(n))
            : (e[r] = e[r] || []).push(n);
    };
  }
  function _t(e, t, n, r) {
    var i = {},
      o = e === Wt;
    function a(s) {
      var u;
      return (
        (i[s] = !0),
        w.each(e[s] || [], function (e, s) {
          var l = s(t, n, r);
          return "string" != typeof l || o || i[l]
            ? o
              ? !(u = l)
              : void 0
            : (t.dataTypes.unshift(l), a(l), !1);
        }),
        u
      );
    }
    return a(t.dataTypes[0]) || (!i["*"] && a("*"));
  }
  function zt(e, t) {
    var n,
      r,
      i = w.ajaxSettings.flatOptions || {};
    for (n in t) void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
    return r && w.extend(!0, e, r), e;
  }
  function Xt(e, t, n) {
    var r,
      i,
      o,
      a,
      s = e.contents,
      u = e.dataTypes;
    while ("*" === u[0])
      u.shift(),
        void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
    if (r)
      for (i in s)
        if (s[i] && s[i].test(r)) {
          u.unshift(i);
          break;
        }
    if (u[0] in n) o = u[0];
    else {
      for (i in n) {
        if (!u[0] || e.converters[i + " " + u[0]]) {
          o = i;
          break;
        }
        a || (a = i);
      }
      o = o || a;
    }
    if (o) return o !== u[0] && u.unshift(o), n[o];
  }
  function Ut(e, t, n, r) {
    var i,
      o,
      a,
      s,
      u,
      l = {},
      c = e.dataTypes.slice();
    if (c[1]) for (a in e.converters) l[a.toLowerCase()] = e.converters[a];
    o = c.shift();
    while (o)
      if (
        (e.responseFields[o] && (n[e.responseFields[o]] = t),
        !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)),
        (u = o),
        (o = c.shift()))
      )
        if ("*" === o) o = u;
        else if ("*" !== u && u !== o) {
          if (!(a = l[u + " " + o] || l["* " + o]))
            for (i in l)
              if (
                (s = i.split(" "))[1] === o &&
                (a = l[u + " " + s[0]] || l["* " + s[0]])
              ) {
                !0 === a
                  ? (a = l[i])
                  : !0 !== l[i] && ((o = s[0]), c.unshift(s[1]));
                break;
              }
          if (!0 !== a)
            if (a && e["throws"]) t = a(t);
            else
              try {
                t = a(t);
              } catch (e) {
                return {
                  state: "parsererror",
                  error: a ? e : "No conversion from " + u + " to " + o,
                };
              }
        }
    return { state: "success", data: t };
  }
  w.extend({
    active: 0,
    lastModified: {},
    etag: {},
    ajaxSettings: {
      url: Ct.href,
      type: "GET",
      isLocal: Pt.test(Ct.protocol),
      global: !0,
      processData: !0,
      async: !0,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      accepts: {
        "*": $t,
        text: "text/plain",
        html: "text/html",
        xml: "application/xml, text/xml",
        json: "application/json, text/javascript",
      },
      contents: { xml: /\bxml\b/, html: /\bhtml/, json: /\bjson\b/ },
      responseFields: {
        xml: "responseXML",
        text: "responseText",
        json: "responseJSON",
      },
      converters: {
        "* text": String,
        "text html": !0,
        "text json": JSON.parse,
        "text xml": w.parseXML,
      },
      flatOptions: { url: !0, context: !0 },
    },
    ajaxSetup: function (e, t) {
      return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e);
    },
    ajaxPrefilter: Ft(It),
    ajaxTransport: Ft(Wt),
    ajax: function (t, n) {
      "object" == typeof t && ((n = t), (t = void 0)), (n = n || {});
      var i,
        o,
        a,
        s,
        u,
        l,
        c,
        f,
        p,
        d,
        h = w.ajaxSetup({}, n),
        g = h.context || h,
        y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event,
        v = w.Deferred(),
        m = w.Callbacks("once memory"),
        x = h.statusCode || {},
        b = {},
        T = {},
        C = "canceled",
        E = {
          readyState: 0,
          getResponseHeader: function (e) {
            var t;
            if (c) {
              if (!s) {
                s = {};
                while ((t = Ot.exec(a))) s[t[1].toLowerCase()] = t[2];
              }
              t = s[e.toLowerCase()];
            }
            return null == t ? null : t;
          },
          getAllResponseHeaders: function () {
            return c ? a : null;
          },
          setRequestHeader: function (e, t) {
            return (
              null == c &&
                ((e = T[e.toLowerCase()] = T[e.toLowerCase()] || e),
                (b[e] = t)),
              this
            );
          },
          overrideMimeType: function (e) {
            return null == c && (h.mimeType = e), this;
          },
          statusCode: function (e) {
            var t;
            if (e)
              if (c) E.always(e[E.status]);
              else for (t in e) x[t] = [x[t], e[t]];
            return this;
          },
          abort: function (e) {
            var t = e || C;
            return i && i.abort(t), k(0, t), this;
          },
        };
      if (
        (v.promise(E),
        (h.url = ((t || h.url || Ct.href) + "").replace(
          Rt,
          Ct.protocol + "//"
        )),
        (h.type = n.method || n.type || h.method || h.type),
        (h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""]),
        null == h.crossDomain)
      ) {
        l = r.createElement("a");
        try {
          (l.href = h.url),
            (l.href = l.href),
            (h.crossDomain =
              Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host);
        } catch (e) {
          h.crossDomain = !0;
        }
      }
      if (
        (h.data &&
          h.processData &&
          "string" != typeof h.data &&
          (h.data = w.param(h.data, h.traditional)),
        _t(It, h, n, E),
        c)
      )
        return E;
      (f = w.event && h.global) &&
        0 == w.active++ &&
        w.event.trigger("ajaxStart"),
        (h.type = h.type.toUpperCase()),
        (h.hasContent = !Mt.test(h.type)),
        (o = h.url.replace(Lt, "")),
        h.hasContent
          ? h.data &&
            h.processData &&
            0 ===
              (h.contentType || "").indexOf(
                "application/x-www-form-urlencoded"
              ) &&
            (h.data = h.data.replace(qt, "+"))
          : ((d = h.url.slice(o.length)),
            h.data &&
              (h.processData || "string" == typeof h.data) &&
              ((o += (kt.test(o) ? "&" : "?") + h.data), delete h.data),
            !1 === h.cache &&
              ((o = o.replace(Ht, "$1")),
              (d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d)),
            (h.url = o + d)),
        h.ifModified &&
          (w.lastModified[o] &&
            E.setRequestHeader("If-Modified-Since", w.lastModified[o]),
          w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])),
        ((h.data && h.hasContent && !1 !== h.contentType) || n.contentType) &&
          E.setRequestHeader("Content-Type", h.contentType),
        E.setRequestHeader(
          "Accept",
          h.dataTypes[0] && h.accepts[h.dataTypes[0]]
            ? h.accepts[h.dataTypes[0]] +
                ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "")
            : h.accepts["*"]
        );
      for (p in h.headers) E.setRequestHeader(p, h.headers[p]);
      if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c))
        return E.abort();
      if (
        ((C = "abort"),
        m.add(h.complete),
        E.done(h.success),
        E.fail(h.error),
        (i = _t(Wt, h, n, E)))
      ) {
        if (((E.readyState = 1), f && y.trigger("ajaxSend", [E, h]), c))
          return E;
        h.async &&
          h.timeout > 0 &&
          (u = e.setTimeout(function () {
            E.abort("timeout");
          }, h.timeout));
        try {
          (c = !1), i.send(b, k);
        } catch (e) {
          if (c) throw e;
          k(-1, e);
        }
      } else k(-1, "No Transport");
      function k(t, n, r, s) {
        var l,
          p,
          d,
          b,
          T,
          C = n;
        c ||
          ((c = !0),
          u && e.clearTimeout(u),
          (i = void 0),
          (a = s || ""),
          (E.readyState = t > 0 ? 4 : 0),
          (l = (t >= 200 && t < 300) || 304 === t),
          r && (b = Xt(h, E, r)),
          (b = Ut(h, b, E, l)),
          l
            ? (h.ifModified &&
                ((T = E.getResponseHeader("Last-Modified")) &&
                  (w.lastModified[o] = T),
                (T = E.getResponseHeader("etag")) && (w.etag[o] = T)),
              204 === t || "HEAD" === h.type
                ? (C = "nocontent")
                : 304 === t
                ? (C = "notmodified")
                : ((C = b.state), (p = b.data), (l = !(d = b.error))))
            : ((d = C), (!t && C) || ((C = "error"), t < 0 && (t = 0))),
          (E.status = t),
          (E.statusText = (n || C) + ""),
          l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]),
          E.statusCode(x),
          (x = void 0),
          f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]),
          m.fireWith(g, [E, C]),
          f &&
            (y.trigger("ajaxComplete", [E, h]),
            --w.active || w.event.trigger("ajaxStop")));
      }
      return E;
    },
    getJSON: function (e, t, n) {
      return w.get(e, t, n, "json");
    },
    getScript: function (e, t) {
      return w.get(e, void 0, t, "script");
    },
  }),
    w.each(["get", "post"], function (e, t) {
      w[t] = function (e, n, r, i) {
        return (
          g(n) && ((i = i || r), (r = n), (n = void 0)),
          w.ajax(
            w.extend(
              { url: e, type: t, dataType: i, data: n, success: r },
              w.isPlainObject(e) && e
            )
          )
        );
      };
    }),
    (w._evalUrl = function (e) {
      return w.ajax({
        url: e,
        type: "GET",
        dataType: "script",
        cache: !0,
        async: !1,
        global: !1,
        throws: !0,
      });
    }),
    w.fn.extend({
      wrapAll: function (e) {
        var t;
        return (
          this[0] &&
            (g(e) && (e = e.call(this[0])),
            (t = w(e, this[0].ownerDocument).eq(0).clone(!0)),
            this[0].parentNode && t.insertBefore(this[0]),
            t
              .map(function () {
                var e = this;
                while (e.firstElementChild) e = e.firstElementChild;
                return e;
              })
              .append(this)),
          this
        );
      },
      wrapInner: function (e) {
        return g(e)
          ? this.each(function (t) {
              w(this).wrapInner(e.call(this, t));
            })
          : this.each(function () {
              var t = w(this),
                n = t.contents();
              n.length ? n.wrapAll(e) : t.append(e);
            });
      },
      wrap: function (e) {
        var t = g(e);
        return this.each(function (n) {
          w(this).wrapAll(t ? e.call(this, n) : e);
        });
      },
      unwrap: function (e) {
        return (
          this.parent(e)
            .not("body")
            .each(function () {
              w(this).replaceWith(this.childNodes);
            }),
          this
        );
      },
    }),
    (w.expr.pseudos.hidden = function (e) {
      return !w.expr.pseudos.visible(e);
    }),
    (w.expr.pseudos.visible = function (e) {
      return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
    }),
    (w.ajaxSettings.xhr = function () {
      try {
        return new e.XMLHttpRequest();
      } catch (e) {}
    });
  var Vt = { 0: 200, 1223: 204 },
    Gt = w.ajaxSettings.xhr();
  (h.cors = !!Gt && "withCredentials" in Gt),
    (h.ajax = Gt = !!Gt),
    w.ajaxTransport(function (t) {
      var n, r;
      if (h.cors || (Gt && !t.crossDomain))
        return {
          send: function (i, o) {
            var a,
              s = t.xhr();
            if (
              (s.open(t.type, t.url, t.async, t.username, t.password),
              t.xhrFields)
            )
              for (a in t.xhrFields) s[a] = t.xhrFields[a];
            t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType),
              t.crossDomain ||
                i["X-Requested-With"] ||
                (i["X-Requested-With"] = "XMLHttpRequest");
            for (a in i) s.setRequestHeader(a, i[a]);
            (n = function (e) {
              return function () {
                n &&
                  ((n =
                    r =
                    s.onload =
                    s.onerror =
                    s.onabort =
                    s.ontimeout =
                    s.onreadystatechange =
                      null),
                  "abort" === e
                    ? s.abort()
                    : "error" === e
                    ? "number" != typeof s.status
                      ? o(0, "error")
                      : o(s.status, s.statusText)
                    : o(
                        Vt[s.status] || s.status,
                        s.statusText,
                        "text" !== (s.responseType || "text") ||
                          "string" != typeof s.responseText
                          ? { binary: s.response }
                          : { text: s.responseText },
                        s.getAllResponseHeaders()
                      ));
              };
            }),
              (s.onload = n()),
              (r = s.onerror = s.ontimeout = n("error")),
              void 0 !== s.onabort
                ? (s.onabort = r)
                : (s.onreadystatechange = function () {
                    4 === s.readyState &&
                      e.setTimeout(function () {
                        n && r();
                      });
                  }),
              (n = n("abort"));
            try {
              s.send((t.hasContent && t.data) || null);
            } catch (e) {
              if (n) throw e;
            }
          },
          abort: function () {
            n && n();
          },
        };
    }),
    w.ajaxPrefilter(function (e) {
      e.crossDomain && (e.contents.script = !1);
    }),
    w.ajaxSetup({
      accepts: {
        script:
          "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript",
      },
      contents: { script: /\b(?:java|ecma)script\b/ },
      converters: {
        "text script": function (e) {
          return w.globalEval(e), e;
        },
      },
    }),
    w.ajaxPrefilter("script", function (e) {
      void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET");
    }),
    w.ajaxTransport("script", function (e) {
      if (e.crossDomain) {
        var t, n;
        return {
          send: function (i, o) {
            (t = w("<script>")
              .prop({ charset: e.scriptCharset, src: e.url })
              .on(
                "load error",
                (n = function (e) {
                  t.remove(),
                    (n = null),
                    e && o("error" === e.type ? 404 : 200, e.type);
                })
              )),
              r.head.appendChild(t[0]);
          },
          abort: function () {
            n && n();
          },
        };
      }
    });
  var Yt = [],
    Qt = /(=)\?(?=&|$)|\?\?/;
  w.ajaxSetup({
    jsonp: "callback",
    jsonpCallback: function () {
      var e = Yt.pop() || w.expando + "_" + Et++;
      return (this[e] = !0), e;
    },
  }),
    w.ajaxPrefilter("json jsonp", function (t, n, r) {
      var i,
        o,
        a,
        s =
          !1 !== t.jsonp &&
          (Qt.test(t.url)
            ? "url"
            : "string" == typeof t.data &&
              0 ===
                (t.contentType || "").indexOf(
                  "application/x-www-form-urlencoded"
                ) &&
              Qt.test(t.data) &&
              "data");
      if (s || "jsonp" === t.dataTypes[0])
        return (
          (i = t.jsonpCallback =
            g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback),
          s
            ? (t[s] = t[s].replace(Qt, "$1" + i))
            : !1 !== t.jsonp &&
              (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i),
          (t.converters["script json"] = function () {
            return a || w.error(i + " was not called"), a[0];
          }),
          (t.dataTypes[0] = "json"),
          (o = e[i]),
          (e[i] = function () {
            a = arguments;
          }),
          r.always(function () {
            void 0 === o ? w(e).removeProp(i) : (e[i] = o),
              t[i] && ((t.jsonpCallback = n.jsonpCallback), Yt.push(i)),
              a && g(o) && o(a[0]),
              (a = o = void 0);
          }),
          "script"
        );
    }),
    (h.createHTMLDocument = (function () {
      var e = r.implementation.createHTMLDocument("").body;
      return (
        (e.innerHTML = "<form></form><form></form>"), 2 === e.childNodes.length
      );
    })()),
    (w.parseHTML = function (e, t, n) {
      if ("string" != typeof e) return [];
      "boolean" == typeof t && ((n = t), (t = !1));
      var i, o, a;
      return (
        t ||
          (h.createHTMLDocument
            ? (((i = (t =
                r.implementation.createHTMLDocument("")).createElement(
                "base"
              )).href = r.location.href),
              t.head.appendChild(i))
            : (t = r)),
        (o = A.exec(e)),
        (a = !n && []),
        o
          ? [t.createElement(o[1])]
          : ((o = xe([e], t, a)),
            a && a.length && w(a).remove(),
            w.merge([], o.childNodes))
      );
    }),
    (w.fn.load = function (e, t, n) {
      var r,
        i,
        o,
        a = this,
        s = e.indexOf(" ");
      return (
        s > -1 && ((r = vt(e.slice(s))), (e = e.slice(0, s))),
        g(t)
          ? ((n = t), (t = void 0))
          : t && "object" == typeof t && (i = "POST"),
        a.length > 0 &&
          w
            .ajax({ url: e, type: i || "GET", dataType: "html", data: t })
            .done(function (e) {
              (o = arguments),
                a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e);
            })
            .always(
              n &&
                function (e, t) {
                  a.each(function () {
                    n.apply(this, o || [e.responseText, t, e]);
                  });
                }
            ),
        this
      );
    }),
    w.each(
      [
        "ajaxStart",
        "ajaxStop",
        "ajaxComplete",
        "ajaxError",
        "ajaxSuccess",
        "ajaxSend",
      ],
      function (e, t) {
        w.fn[t] = function (e) {
          return this.on(t, e);
        };
      }
    ),
    (w.expr.pseudos.animated = function (e) {
      return w.grep(w.timers, function (t) {
        return e === t.elem;
      }).length;
    }),
    (w.offset = {
      setOffset: function (e, t, n) {
        var r,
          i,
          o,
          a,
          s,
          u,
          l,
          c = w.css(e, "position"),
          f = w(e),
          p = {};
        "static" === c && (e.style.position = "relative"),
          (s = f.offset()),
          (o = w.css(e, "top")),
          (u = w.css(e, "left")),
          (l =
            ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1)
            ? ((a = (r = f.position()).top), (i = r.left))
            : ((a = parseFloat(o) || 0), (i = parseFloat(u) || 0)),
          g(t) && (t = t.call(e, n, w.extend({}, s))),
          null != t.top && (p.top = t.top - s.top + a),
          null != t.left && (p.left = t.left - s.left + i),
          "using" in t ? t.using.call(e, p) : f.css(p);
      },
    }),
    w.fn.extend({
      offset: function (e) {
        if (arguments.length)
          return void 0 === e
            ? this
            : this.each(function (t) {
                w.offset.setOffset(this, e, t);
              });
        var t,
          n,
          r = this[0];
        if (r)
          return r.getClientRects().length
            ? ((t = r.getBoundingClientRect()),
              (n = r.ownerDocument.defaultView),
              { top: t.top + n.pageYOffset, left: t.left + n.pageXOffset })
            : { top: 0, left: 0 };
      },
      position: function () {
        if (this[0]) {
          var e,
            t,
            n,
            r = this[0],
            i = { top: 0, left: 0 };
          if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();
          else {
            (t = this.offset()),
              (n = r.ownerDocument),
              (e = r.offsetParent || n.documentElement);
            while (
              e &&
              (e === n.body || e === n.documentElement) &&
              "static" === w.css(e, "position")
            )
              e = e.parentNode;
            e &&
              e !== r &&
              1 === e.nodeType &&
              (((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0)),
              (i.left += w.css(e, "borderLeftWidth", !0)));
          }
          return {
            top: t.top - i.top - w.css(r, "marginTop", !0),
            left: t.left - i.left - w.css(r, "marginLeft", !0),
          };
        }
      },
      offsetParent: function () {
        return this.map(function () {
          var e = this.offsetParent;
          while (e && "static" === w.css(e, "position")) e = e.offsetParent;
          return e || be;
        });
      },
    }),
    w.each(
      { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" },
      function (e, t) {
        var n = "pageYOffset" === t;
        w.fn[e] = function (r) {
          return z(
            this,
            function (e, r, i) {
              var o;
              if (
                (y(e) ? (o = e) : 9 === e.nodeType && (o = e.defaultView),
                void 0 === i)
              )
                return o ? o[t] : e[r];
              o
                ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset)
                : (e[r] = i);
            },
            e,
            r,
            arguments.length
          );
        };
      }
    ),
    w.each(["top", "left"], function (e, t) {
      w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
        if (n)
          return (n = Fe(e, t)), We.test(n) ? w(e).position()[t] + "px" : n;
      });
    }),
    w.each({ Height: "height", Width: "width" }, function (e, t) {
      w.each(
        { padding: "inner" + e, content: t, "": "outer" + e },
        function (n, r) {
          w.fn[r] = function (i, o) {
            var a = arguments.length && (n || "boolean" != typeof i),
              s = n || (!0 === i || !0 === o ? "margin" : "border");
            return z(
              this,
              function (t, n, i) {
                var o;
                return y(t)
                  ? 0 === r.indexOf("outer")
                    ? t["inner" + e]
                    : t.document.documentElement["client" + e]
                  : 9 === t.nodeType
                  ? ((o = t.documentElement),
                    Math.max(
                      t.body["scroll" + e],
                      o["scroll" + e],
                      t.body["offset" + e],
                      o["offset" + e],
                      o["client" + e]
                    ))
                  : void 0 === i
                  ? w.css(t, n, s)
                  : w.style(t, n, i, s);
              },
              t,
              a ? i : void 0,
              a
            );
          };
        }
      );
    }),
    w.each(
      "blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(
        " "
      ),
      function (e, t) {
        w.fn[t] = function (e, n) {
          return arguments.length > 0
            ? this.on(t, null, e, n)
            : this.trigger(t);
        };
      }
    ),
    w.fn.extend({
      hover: function (e, t) {
        return this.mouseenter(e).mouseleave(t || e);
      },
    }),
    w.fn.extend({
      bind: function (e, t, n) {
        return this.on(e, null, t, n);
      },
      unbind: function (e, t) {
        return this.off(e, null, t);
      },
      delegate: function (e, t, n, r) {
        return this.on(t, e, n, r);
      },
      undelegate: function (e, t, n) {
        return 1 === arguments.length
          ? this.off(e, "**")
          : this.off(t, e || "**", n);
      },
    }),
    (w.proxy = function (e, t) {
      var n, r, i;
      if (("string" == typeof t && ((n = e[t]), (t = e), (e = n)), g(e)))
        return (
          (r = o.call(arguments, 2)),
          (i = function () {
            return e.apply(t || this, r.concat(o.call(arguments)));
          }),
          (i.guid = e.guid = e.guid || w.guid++),
          i
        );
    }),
    (w.holdReady = function (e) {
      e ? w.readyWait++ : w.ready(!0);
    }),
    (w.isArray = Array.isArray),
    (w.parseJSON = JSON.parse),
    (w.nodeName = N),
    (w.isFunction = g),
    (w.isWindow = y),
    (w.camelCase = G),
    (w.type = x),
    (w.now = Date.now),
    (w.isNumeric = function (e) {
      var t = w.type(e);
      return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e));
    }),
    "function" == typeof define &&
      define.amd &&
      define("jquery", [], function () {
        return w;
      });
  var Jt = e.jQuery,
    Kt = e.$;
  return (
    (w.noConflict = function (t) {
      return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w;
    }),
    t || (e.jQuery = e.$ = w),
    w
  );
});

/*
 Copyright (C) Federico Zivolo 2018
 Distributed under the MIT License (license terms are at http://opensource.org/licenses/MIT).
 */ (function (e, t) {
  "object" == typeof exports && "undefined" != typeof module
    ? (module.exports = t())
    : "function" == typeof define && define.amd
    ? define(t)
    : (e.Popper = t());
})(this, function () {
  "use strict";
  function e(e) {
    return e && "[object Function]" === {}.toString.call(e);
  }
  function t(e, t) {
    if (1 !== e.nodeType) return [];
    var o = getComputedStyle(e, null);
    return t ? o[t] : o;
  }
  function o(e) {
    return "HTML" === e.nodeName ? e : e.parentNode || e.host;
  }
  function n(e) {
    if (!e) return document.body;
    switch (e.nodeName) {
      case "HTML":
      case "BODY":
        return e.ownerDocument.body;
      case "#document":
        return e.body;
    }
    var i = t(e),
      r = i.overflow,
      p = i.overflowX,
      s = i.overflowY;
    return /(auto|scroll|overlay)/.test(r + s + p) ? e : n(o(e));
  }
  function r(e) {
    if (!e) return document.documentElement;
    for (
      var o = ie(10) ? document.body : null, n = e.offsetParent;
      n === o && e.nextElementSibling;

    )
      n = (e = e.nextElementSibling).offsetParent;
    var i = n && n.nodeName;
    return i && "BODY" !== i && "HTML" !== i
      ? -1 !== ["TD", "TABLE"].indexOf(n.nodeName) &&
        "static" === t(n, "position")
        ? r(n)
        : n
      : e
      ? e.ownerDocument.documentElement
      : document.documentElement;
  }
  function p(e) {
    var t = e.nodeName;
    return "BODY" !== t && ("HTML" === t || r(e.firstElementChild) === e);
  }
  function s(e) {
    return null === e.parentNode ? e : s(e.parentNode);
  }
  function d(e, t) {
    if (!e || !e.nodeType || !t || !t.nodeType) return document.documentElement;
    var o = e.compareDocumentPosition(t) & Node.DOCUMENT_POSITION_FOLLOWING,
      n = o ? e : t,
      i = o ? t : e,
      a = document.createRange();
    a.setStart(n, 0), a.setEnd(i, 0);
    var l = a.commonAncestorContainer;
    if ((e !== l && t !== l) || n.contains(i)) return p(l) ? l : r(l);
    var f = s(e);
    return f.host ? d(f.host, t) : d(e, s(t).host);
  }
  function a(e) {
    var t =
        1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : "top",
      o = "top" === t ? "scrollTop" : "scrollLeft",
      n = e.nodeName;
    if ("BODY" === n || "HTML" === n) {
      var i = e.ownerDocument.documentElement,
        r = e.ownerDocument.scrollingElement || i;
      return r[o];
    }
    return e[o];
  }
  function l(e, t) {
    var o = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
      n = a(t, "top"),
      i = a(t, "left"),
      r = o ? -1 : 1;
    return (
      (e.top += n * r),
      (e.bottom += n * r),
      (e.left += i * r),
      (e.right += i * r),
      e
    );
  }
  function f(e, t) {
    var o = "x" === t ? "Left" : "Top",
      n = "Left" == o ? "Right" : "Bottom";
    return (
      parseFloat(e["border" + o + "Width"], 10) +
      parseFloat(e["border" + n + "Width"], 10)
    );
  }
  function m(e, t, o, n) {
    return Q(
      t["offset" + e],
      t["scroll" + e],
      o["client" + e],
      o["offset" + e],
      o["scroll" + e],
      ie(10)
        ? o["offset" + e] +
            n["margin" + ("Height" === e ? "Top" : "Left")] +
            n["margin" + ("Height" === e ? "Bottom" : "Right")]
        : 0
    );
  }
  function h() {
    var e = document.body,
      t = document.documentElement,
      o = ie(10) && getComputedStyle(t);
    return { height: m("Height", e, t, o), width: m("Width", e, t, o) };
  }
  function c(e) {
    return de({}, e, { right: e.left + e.width, bottom: e.top + e.height });
  }
  function g(e) {
    var o = {};
    try {
      if (ie(10)) {
        o = e.getBoundingClientRect();
        var n = a(e, "top"),
          i = a(e, "left");
        (o.top += n), (o.left += i), (o.bottom += n), (o.right += i);
      } else o = e.getBoundingClientRect();
    } catch (t) {}
    var r = {
        left: o.left,
        top: o.top,
        width: o.right - o.left,
        height: o.bottom - o.top,
      },
      p = "HTML" === e.nodeName ? h() : {},
      s = p.width || e.clientWidth || r.right - r.left,
      d = p.height || e.clientHeight || r.bottom - r.top,
      l = e.offsetWidth - s,
      m = e.offsetHeight - d;
    if (l || m) {
      var g = t(e);
      (l -= f(g, "x")), (m -= f(g, "y")), (r.width -= l), (r.height -= m);
    }
    return c(r);
  }
  function u(e, o) {
    var i = 2 < arguments.length && void 0 !== arguments[2] && arguments[2],
      r = ie(10),
      p = "HTML" === o.nodeName,
      s = g(e),
      d = g(o),
      a = n(e),
      f = t(o),
      m = parseFloat(f.borderTopWidth, 10),
      h = parseFloat(f.borderLeftWidth, 10);
    i &&
      "HTML" === o.nodeName &&
      ((d.top = Q(d.top, 0)), (d.left = Q(d.left, 0)));
    var u = c({
      top: s.top - d.top - m,
      left: s.left - d.left - h,
      width: s.width,
      height: s.height,
    });
    if (((u.marginTop = 0), (u.marginLeft = 0), !r && p)) {
      var b = parseFloat(f.marginTop, 10),
        y = parseFloat(f.marginLeft, 10);
      (u.top -= m - b),
        (u.bottom -= m - b),
        (u.left -= h - y),
        (u.right -= h - y),
        (u.marginTop = b),
        (u.marginLeft = y);
    }
    return (
      (r && !i ? o.contains(a) : o === a && "BODY" !== a.nodeName) &&
        (u = l(u, o)),
      u
    );
  }
  function b(e) {
    var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
      o = e.ownerDocument.documentElement,
      n = u(e, o),
      i = Q(o.clientWidth, window.innerWidth || 0),
      r = Q(o.clientHeight, window.innerHeight || 0),
      p = t ? 0 : a(o),
      s = t ? 0 : a(o, "left"),
      d = {
        top: p - n.top + n.marginTop,
        left: s - n.left + n.marginLeft,
        width: i,
        height: r,
      };
    return c(d);
  }
  function y(e) {
    var n = e.nodeName;
    return "BODY" === n || "HTML" === n
      ? !1
      : "fixed" === t(e, "position") || y(o(e));
  }
  function w(e) {
    if (!e || !e.parentElement || ie()) return document.documentElement;
    for (var o = e.parentElement; o && "none" === t(o, "transform"); )
      o = o.parentElement;
    return o || document.documentElement;
  }
  function E(e, t, i, r) {
    var p = 4 < arguments.length && void 0 !== arguments[4] && arguments[4],
      s = { top: 0, left: 0 },
      a = p ? w(e) : d(e, t);
    if ("viewport" === r) s = b(a, p);
    else {
      var l;
      "scrollParent" === r
        ? ((l = n(o(t))),
          "BODY" === l.nodeName && (l = e.ownerDocument.documentElement))
        : "window" === r
        ? (l = e.ownerDocument.documentElement)
        : (l = r);
      var f = u(l, a, p);
      if ("HTML" === l.nodeName && !y(a)) {
        var m = h(),
          c = m.height,
          g = m.width;
        (s.top += f.top - f.marginTop),
          (s.bottom = c + f.top),
          (s.left += f.left - f.marginLeft),
          (s.right = g + f.left);
      } else s = f;
    }
    return (s.left += i), (s.top += i), (s.right -= i), (s.bottom -= i), s;
  }
  function v(e) {
    var t = e.width,
      o = e.height;
    return t * o;
  }
  function x(e, t, o, n, i) {
    var r = 5 < arguments.length && void 0 !== arguments[5] ? arguments[5] : 0;
    if (-1 === e.indexOf("auto")) return e;
    var p = E(o, n, r, i),
      s = {
        top: { width: p.width, height: t.top - p.top },
        right: { width: p.right - t.right, height: p.height },
        bottom: { width: p.width, height: p.bottom - t.bottom },
        left: { width: t.left - p.left, height: p.height },
      },
      d = Object.keys(s)
        .map(function (e) {
          return de({ key: e }, s[e], { area: v(s[e]) });
        })
        .sort(function (e, t) {
          return t.area - e.area;
        }),
      a = d.filter(function (e) {
        var t = e.width,
          n = e.height;
        return t >= o.clientWidth && n >= o.clientHeight;
      }),
      l = 0 < a.length ? a[0].key : d[0].key,
      f = e.split("-")[1];
    return l + (f ? "-" + f : "");
  }
  function O(e, t, o) {
    var n =
        3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : null,
      i = n ? w(t) : d(t, o);
    return u(o, i, n);
  }
  function L(e) {
    var t = getComputedStyle(e),
      o = parseFloat(t.marginTop) + parseFloat(t.marginBottom),
      n = parseFloat(t.marginLeft) + parseFloat(t.marginRight),
      i = { width: e.offsetWidth + n, height: e.offsetHeight + o };
    return i;
  }
  function S(e) {
    var t = { left: "right", right: "left", bottom: "top", top: "bottom" };
    return e.replace(/left|right|bottom|top/g, function (e) {
      return t[e];
    });
  }
  function T(e, t, o) {
    o = o.split("-")[0];
    var n = L(e),
      i = { width: n.width, height: n.height },
      r = -1 !== ["right", "left"].indexOf(o),
      p = r ? "top" : "left",
      s = r ? "left" : "top",
      d = r ? "height" : "width",
      a = r ? "width" : "height";
    return (
      (i[p] = t[p] + t[d] / 2 - n[d] / 2),
      (i[s] = o === s ? t[s] - n[a] : t[S(s)]),
      i
    );
  }
  function D(e, t) {
    return Array.prototype.find ? e.find(t) : e.filter(t)[0];
  }
  function C(e, t, o) {
    if (Array.prototype.findIndex)
      return e.findIndex(function (e) {
        return e[t] === o;
      });
    var n = D(e, function (e) {
      return e[t] === o;
    });
    return e.indexOf(n);
  }
  function N(t, o, n) {
    var i = void 0 === n ? t : t.slice(0, C(t, "name", n));
    return (
      i.forEach(function (t) {
        t["function"] &&
          console.warn("`modifier.function` is deprecated, use `modifier.fn`!");
        var n = t["function"] || t.fn;
        t.enabled &&
          e(n) &&
          ((o.offsets.popper = c(o.offsets.popper)),
          (o.offsets.reference = c(o.offsets.reference)),
          (o = n(o, t)));
      }),
      o
    );
  }
  function k() {
    if (!this.state.isDestroyed) {
      var e = {
        instance: this,
        styles: {},
        arrowStyles: {},
        attributes: {},
        flipped: !1,
        offsets: {},
      };
      (e.offsets.reference = O(
        this.state,
        this.popper,
        this.reference,
        this.options.positionFixed
      )),
        (e.placement = x(
          this.options.placement,
          e.offsets.reference,
          this.popper,
          this.reference,
          this.options.modifiers.flip.boundariesElement,
          this.options.modifiers.flip.padding
        )),
        (e.originalPlacement = e.placement),
        (e.positionFixed = this.options.positionFixed),
        (e.offsets.popper = T(this.popper, e.offsets.reference, e.placement)),
        (e.offsets.popper.position = this.options.positionFixed
          ? "fixed"
          : "absolute"),
        (e = N(this.modifiers, e)),
        this.state.isCreated
          ? this.options.onUpdate(e)
          : ((this.state.isCreated = !0), this.options.onCreate(e));
    }
  }
  function P(e, t) {
    return e.some(function (e) {
      var o = e.name,
        n = e.enabled;
      return n && o === t;
    });
  }
  function W(e) {
    for (
      var t = [!1, "ms", "Webkit", "Moz", "O"],
        o = e.charAt(0).toUpperCase() + e.slice(1),
        n = 0;
      n < t.length;
      n++
    ) {
      var i = t[n],
        r = i ? "" + i + o : e;
      if ("undefined" != typeof document.body.style[r]) return r;
    }
    return null;
  }
  function B() {
    return (
      (this.state.isDestroyed = !0),
      P(this.modifiers, "applyStyle") &&
        (this.popper.removeAttribute("x-placement"),
        (this.popper.style.position = ""),
        (this.popper.style.top = ""),
        (this.popper.style.left = ""),
        (this.popper.style.right = ""),
        (this.popper.style.bottom = ""),
        (this.popper.style.willChange = ""),
        (this.popper.style[W("transform")] = "")),
      this.disableEventListeners(),
      this.options.removeOnDestroy &&
        this.popper.parentNode.removeChild(this.popper),
      this
    );
  }
  function H(e) {
    var t = e.ownerDocument;
    return t ? t.defaultView : window;
  }
  function A(e, t, o, i) {
    var r = "BODY" === e.nodeName,
      p = r ? e.ownerDocument.defaultView : e;
    p.addEventListener(t, o, { passive: !0 }),
      r || A(n(p.parentNode), t, o, i),
      i.push(p);
  }
  function I(e, t, o, i) {
    (o.updateBound = i),
      H(e).addEventListener("resize", o.updateBound, { passive: !0 });
    var r = n(e);
    return (
      A(r, "scroll", o.updateBound, o.scrollParents),
      (o.scrollElement = r),
      (o.eventsEnabled = !0),
      o
    );
  }
  function M() {
    this.state.eventsEnabled ||
      (this.state = I(
        this.reference,
        this.options,
        this.state,
        this.scheduleUpdate
      ));
  }
  function F(e, t) {
    return (
      H(e).removeEventListener("resize", t.updateBound),
      t.scrollParents.forEach(function (e) {
        e.removeEventListener("scroll", t.updateBound);
      }),
      (t.updateBound = null),
      (t.scrollParents = []),
      (t.scrollElement = null),
      (t.eventsEnabled = !1),
      t
    );
  }
  function R() {
    this.state.eventsEnabled &&
      (cancelAnimationFrame(this.scheduleUpdate),
      (this.state = F(this.reference, this.state)));
  }
  function U(e) {
    return "" !== e && !isNaN(parseFloat(e)) && isFinite(e);
  }
  function Y(e, t) {
    Object.keys(t).forEach(function (o) {
      var n = "";
      -1 !== ["width", "height", "top", "right", "bottom", "left"].indexOf(o) &&
        U(t[o]) &&
        (n = "px"),
        (e.style[o] = t[o] + n);
    });
  }
  function j(e, t) {
    Object.keys(t).forEach(function (o) {
      var n = t[o];
      !1 === n ? e.removeAttribute(o) : e.setAttribute(o, t[o]);
    });
  }
  function q(e, t, o) {
    var n = D(e, function (e) {
        var o = e.name;
        return o === t;
      }),
      i =
        !!n &&
        e.some(function (e) {
          return e.name === o && e.enabled && e.order < n.order;
        });
    if (!i) {
      var r = "`" + t + "`";
      console.warn(
        "`" +
          o +
          "`" +
          " modifier is required by " +
          r +
          " modifier in order to work, be sure to include it before " +
          r +
          "!"
      );
    }
    return i;
  }
  function K(e) {
    return "end" === e ? "start" : "start" === e ? "end" : e;
  }
  function V(e) {
    var t = 1 < arguments.length && void 0 !== arguments[1] && arguments[1],
      o = le.indexOf(e),
      n = le.slice(o + 1).concat(le.slice(0, o));
    return t ? n.reverse() : n;
  }
  function z(e, t, o, n) {
    var i = e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),
      r = +i[1],
      p = i[2];
    if (!r) return e;
    if (0 === p.indexOf("%")) {
      var s;
      switch (p) {
        case "%p":
          s = o;
          break;
        case "%":
        case "%r":
        default:
          s = n;
      }
      var d = c(s);
      return (d[t] / 100) * r;
    }
    if ("vh" === p || "vw" === p) {
      var a;
      return (
        (a =
          "vh" === p
            ? Q(document.documentElement.clientHeight, window.innerHeight || 0)
            : Q(document.documentElement.clientWidth, window.innerWidth || 0)),
        (a / 100) * r
      );
    }
    return r;
  }
  function G(e, t, o, n) {
    var i = [0, 0],
      r = -1 !== ["right", "left"].indexOf(n),
      p = e.split(/(\+|\-)/).map(function (e) {
        return e.trim();
      }),
      s = p.indexOf(
        D(p, function (e) {
          return -1 !== e.search(/,|\s/);
        })
      );
    p[s] &&
      -1 === p[s].indexOf(",") &&
      console.warn(
        "Offsets separated by white space(s) are deprecated, use a comma (,) instead."
      );
    var d = /\s*,\s*|\s+/,
      a =
        -1 === s
          ? [p]
          : [
              p.slice(0, s).concat([p[s].split(d)[0]]),
              [p[s].split(d)[1]].concat(p.slice(s + 1)),
            ];
    return (
      (a = a.map(function (e, n) {
        var i = (1 === n ? !r : r) ? "height" : "width",
          p = !1;
        return e
          .reduce(function (e, t) {
            return "" === e[e.length - 1] && -1 !== ["+", "-"].indexOf(t)
              ? ((e[e.length - 1] = t), (p = !0), e)
              : p
              ? ((e[e.length - 1] += t), (p = !1), e)
              : e.concat(t);
          }, [])
          .map(function (e) {
            return z(e, i, t, o);
          });
      })),
      a.forEach(function (e, t) {
        e.forEach(function (o, n) {
          U(o) && (i[t] += o * ("-" === e[n - 1] ? -1 : 1));
        });
      }),
      i
    );
  }
  function _(e, t) {
    var o,
      n = t.offset,
      i = e.placement,
      r = e.offsets,
      p = r.popper,
      s = r.reference,
      d = i.split("-")[0];
    return (
      (o = U(+n) ? [+n, 0] : G(n, p, s, d)),
      "left" === d
        ? ((p.top += o[0]), (p.left -= o[1]))
        : "right" === d
        ? ((p.top += o[0]), (p.left += o[1]))
        : "top" === d
        ? ((p.left += o[0]), (p.top -= o[1]))
        : "bottom" === d && ((p.left += o[0]), (p.top += o[1])),
      (e.popper = p),
      e
    );
  }
  for (
    var X = Math.min,
      J = Math.floor,
      Q = Math.max,
      Z = "undefined" != typeof window && "undefined" != typeof document,
      $ = ["Edge", "Trident", "Firefox"],
      ee = 0,
      te = 0;
    te < $.length;
    te += 1
  )
    if (Z && 0 <= navigator.userAgent.indexOf($[te])) {
      ee = 1;
      break;
    }
  var i = Z && window.Promise,
    oe = i
      ? function (e) {
          var t = !1;
          return function () {
            t ||
              ((t = !0),
              window.Promise.resolve().then(function () {
                (t = !1), e();
              }));
          };
        }
      : function (e) {
          var t = !1;
          return function () {
            t ||
              ((t = !0),
              setTimeout(function () {
                (t = !1), e();
              }, ee));
          };
        },
    ne = {},
    ie = function () {
      var e =
        0 < arguments.length && void 0 !== arguments[0] ? arguments[0] : "all";
      return ((e = e.toString()), ne.hasOwnProperty(e))
        ? ne[e]
        : ("11" === e
            ? (ne[e] = -1 !== navigator.userAgent.indexOf("Trident"))
            : "10" === e
            ? (ne[e] = -1 !== navigator.appVersion.indexOf("MSIE 10"))
            : "all" === e
            ? (ne[e] =
                -1 !== navigator.userAgent.indexOf("Trident") ||
                -1 !== navigator.userAgent.indexOf("MSIE"))
            : void 0,
          (ne.all =
            ne.all ||
            Object.keys(ne).some(function (e) {
              return ne[e];
            })),
          ne[e]);
    },
    re = function (e, t) {
      if (!(e instanceof t))
        throw new TypeError("Cannot call a class as a function");
    },
    pe = (function () {
      function e(e, t) {
        for (var o, n = 0; n < t.length; n++)
          (o = t[n]),
            (o.enumerable = o.enumerable || !1),
            (o.configurable = !0),
            "value" in o && (o.writable = !0),
            Object.defineProperty(e, o.key, o);
      }
      return function (t, o, n) {
        return o && e(t.prototype, o), n && e(t, n), t;
      };
    })(),
    se = function (e, t, o) {
      return (
        t in e
          ? Object.defineProperty(e, t, {
              value: o,
              enumerable: !0,
              configurable: !0,
              writable: !0,
            })
          : (e[t] = o),
        e
      );
    },
    de =
      Object.assign ||
      function (e) {
        for (var t, o = 1; o < arguments.length; o++)
          for (var n in ((t = arguments[o]), t))
            Object.prototype.hasOwnProperty.call(t, n) && (e[n] = t[n]);
        return e;
      },
    ae = [
      "auto-start",
      "auto",
      "auto-end",
      "top-start",
      "top",
      "top-end",
      "right-start",
      "right",
      "right-end",
      "bottom-end",
      "bottom",
      "bottom-start",
      "left-end",
      "left",
      "left-start",
    ],
    le = ae.slice(3),
    fe = {
      FLIP: "flip",
      CLOCKWISE: "clockwise",
      COUNTERCLOCKWISE: "counterclockwise",
    },
    me = (function () {
      function t(o, n) {
        var i = this,
          r =
            2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : {};
        re(this, t),
          (this.scheduleUpdate = function () {
            return requestAnimationFrame(i.update);
          }),
          (this.update = oe(this.update.bind(this))),
          (this.options = de({}, t.Defaults, r)),
          (this.state = { isDestroyed: !1, isCreated: !1, scrollParents: [] }),
          (this.reference = o && o.jquery ? o[0] : o),
          (this.popper = n && n.jquery ? n[0] : n),
          (this.options.modifiers = {}),
          Object.keys(de({}, t.Defaults.modifiers, r.modifiers)).forEach(
            function (e) {
              i.options.modifiers[e] = de(
                {},
                t.Defaults.modifiers[e] || {},
                r.modifiers ? r.modifiers[e] : {}
              );
            }
          ),
          (this.modifiers = Object.keys(this.options.modifiers)
            .map(function (e) {
              return de({ name: e }, i.options.modifiers[e]);
            })
            .sort(function (e, t) {
              return e.order - t.order;
            })),
          this.modifiers.forEach(function (t) {
            t.enabled &&
              e(t.onLoad) &&
              t.onLoad(i.reference, i.popper, i.options, t, i.state);
          }),
          this.update();
        var p = this.options.eventsEnabled;
        p && this.enableEventListeners(), (this.state.eventsEnabled = p);
      }
      return (
        pe(t, [
          {
            key: "update",
            value: function () {
              return k.call(this);
            },
          },
          {
            key: "destroy",
            value: function () {
              return B.call(this);
            },
          },
          {
            key: "enableEventListeners",
            value: function () {
              return M.call(this);
            },
          },
          {
            key: "disableEventListeners",
            value: function () {
              return R.call(this);
            },
          },
        ]),
        t
      );
    })();
  return (
    (me.Utils = ("undefined" == typeof window ? global : window).PopperUtils),
    (me.placements = ae),
    (me.Defaults = {
      placement: "bottom",
      positionFixed: !1,
      eventsEnabled: !0,
      removeOnDestroy: !1,
      onCreate: function () {},
      onUpdate: function () {},
      modifiers: {
        shift: {
          order: 100,
          enabled: !0,
          fn: function (e) {
            var t = e.placement,
              o = t.split("-")[0],
              n = t.split("-")[1];
            if (n) {
              var i = e.offsets,
                r = i.reference,
                p = i.popper,
                s = -1 !== ["bottom", "top"].indexOf(o),
                d = s ? "left" : "top",
                a = s ? "width" : "height",
                l = {
                  start: se({}, d, r[d]),
                  end: se({}, d, r[d] + r[a] - p[a]),
                };
              e.offsets.popper = de({}, p, l[n]);
            }
            return e;
          },
        },
        offset: { order: 200, enabled: !0, fn: _, offset: 0 },
        preventOverflow: {
          order: 300,
          enabled: !0,
          fn: function (e, t) {
            var o = t.boundariesElement || r(e.instance.popper);
            e.instance.reference === o && (o = r(o));
            var n = E(
              e.instance.popper,
              e.instance.reference,
              t.padding,
              o,
              e.positionFixed
            );
            t.boundaries = n;
            var i = t.priority,
              p = e.offsets.popper,
              s = {
                primary: function (e) {
                  var o = p[e];
                  return (
                    p[e] < n[e] &&
                      !t.escapeWithReference &&
                      (o = Q(p[e], n[e])),
                    se({}, e, o)
                  );
                },
                secondary: function (e) {
                  var o = "right" === e ? "left" : "top",
                    i = p[o];
                  return (
                    p[e] > n[e] &&
                      !t.escapeWithReference &&
                      (i = X(
                        p[o],
                        n[e] - ("right" === e ? p.width : p.height)
                      )),
                    se({}, o, i)
                  );
                },
              };
            return (
              i.forEach(function (e) {
                var t =
                  -1 === ["left", "top"].indexOf(e) ? "secondary" : "primary";
                p = de({}, p, s[t](e));
              }),
              (e.offsets.popper = p),
              e
            );
          },
          priority: ["left", "right", "top", "bottom"],
          padding: 5,
          boundariesElement: "scrollParent",
        },
        keepTogether: {
          order: 400,
          enabled: !0,
          fn: function (e) {
            var t = e.offsets,
              o = t.popper,
              n = t.reference,
              i = e.placement.split("-")[0],
              r = J,
              p = -1 !== ["top", "bottom"].indexOf(i),
              s = p ? "right" : "bottom",
              d = p ? "left" : "top",
              a = p ? "width" : "height";
            return (
              o[s] < r(n[d]) && (e.offsets.popper[d] = r(n[d]) - o[a]),
              o[d] > r(n[s]) && (e.offsets.popper[d] = r(n[s])),
              e
            );
          },
        },
        arrow: {
          order: 500,
          enabled: !0,
          fn: function (e, o) {
            var n;
            if (!q(e.instance.modifiers, "arrow", "keepTogether")) return e;
            var i = o.element;
            if ("string" == typeof i) {
              if (((i = e.instance.popper.querySelector(i)), !i)) return e;
            } else if (!e.instance.popper.contains(i))
              return (
                console.warn(
                  "WARNING: `arrow.element` must be child of its popper element!"
                ),
                e
              );
            var r = e.placement.split("-")[0],
              p = e.offsets,
              s = p.popper,
              d = p.reference,
              a = -1 !== ["left", "right"].indexOf(r),
              l = a ? "height" : "width",
              f = a ? "Top" : "Left",
              m = f.toLowerCase(),
              h = a ? "left" : "top",
              g = a ? "bottom" : "right",
              u = L(i)[l];
            d[g] - u < s[m] && (e.offsets.popper[m] -= s[m] - (d[g] - u)),
              d[m] + u > s[g] && (e.offsets.popper[m] += d[m] + u - s[g]),
              (e.offsets.popper = c(e.offsets.popper));
            var b = d[m] + d[l] / 2 - u / 2,
              y = t(e.instance.popper),
              w = parseFloat(y["margin" + f], 10),
              E = parseFloat(y["border" + f + "Width"], 10),
              v = b - e.offsets.popper[m] - w - E;
            return (
              (v = Q(X(s[l] - u, v), 0)),
              (e.arrowElement = i),
              (e.offsets.arrow =
                ((n = {}), se(n, m, Math.round(v)), se(n, h, ""), n)),
              e
            );
          },
          element: "[x-arrow]",
        },
        flip: {
          order: 600,
          enabled: !0,
          fn: function (e, t) {
            if (P(e.instance.modifiers, "inner")) return e;
            if (e.flipped && e.placement === e.originalPlacement) return e;
            var o = E(
                e.instance.popper,
                e.instance.reference,
                t.padding,
                t.boundariesElement,
                e.positionFixed
              ),
              n = e.placement.split("-")[0],
              i = S(n),
              r = e.placement.split("-")[1] || "",
              p = [];
            switch (t.behavior) {
              case fe.FLIP:
                p = [n, i];
                break;
              case fe.CLOCKWISE:
                p = V(n);
                break;
              case fe.COUNTERCLOCKWISE:
                p = V(n, !0);
                break;
              default:
                p = t.behavior;
            }
            return (
              p.forEach(function (s, d) {
                if (n !== s || p.length === d + 1) return e;
                (n = e.placement.split("-")[0]), (i = S(n));
                var a = e.offsets.popper,
                  l = e.offsets.reference,
                  f = J,
                  m =
                    ("left" === n && f(a.right) > f(l.left)) ||
                    ("right" === n && f(a.left) < f(l.right)) ||
                    ("top" === n && f(a.bottom) > f(l.top)) ||
                    ("bottom" === n && f(a.top) < f(l.bottom)),
                  h = f(a.left) < f(o.left),
                  c = f(a.right) > f(o.right),
                  g = f(a.top) < f(o.top),
                  u = f(a.bottom) > f(o.bottom),
                  b =
                    ("left" === n && h) ||
                    ("right" === n && c) ||
                    ("top" === n && g) ||
                    ("bottom" === n && u),
                  y = -1 !== ["top", "bottom"].indexOf(n),
                  w =
                    !!t.flipVariations &&
                    ((y && "start" === r && h) ||
                      (y && "end" === r && c) ||
                      (!y && "start" === r && g) ||
                      (!y && "end" === r && u));
                (m || b || w) &&
                  ((e.flipped = !0),
                  (m || b) && (n = p[d + 1]),
                  w && (r = K(r)),
                  (e.placement = n + (r ? "-" + r : "")),
                  (e.offsets.popper = de(
                    {},
                    e.offsets.popper,
                    T(e.instance.popper, e.offsets.reference, e.placement)
                  )),
                  (e = N(e.instance.modifiers, e, "flip")));
              }),
              e
            );
          },
          behavior: "flip",
          padding: 5,
          boundariesElement: "viewport",
        },
        inner: {
          order: 700,
          enabled: !1,
          fn: function (e) {
            var t = e.placement,
              o = t.split("-")[0],
              n = e.offsets,
              i = n.popper,
              r = n.reference,
              p = -1 !== ["left", "right"].indexOf(o),
              s = -1 === ["top", "left"].indexOf(o);
            return (
              (i[p ? "left" : "top"] =
                r[o] - (s ? i[p ? "width" : "height"] : 0)),
              (e.placement = S(t)),
              (e.offsets.popper = c(i)),
              e
            );
          },
        },
        hide: {
          order: 800,
          enabled: !0,
          fn: function (e) {
            if (!q(e.instance.modifiers, "hide", "preventOverflow")) return e;
            var t = e.offsets.reference,
              o = D(e.instance.modifiers, function (e) {
                return "preventOverflow" === e.name;
              }).boundaries;
            if (
              t.bottom < o.top ||
              t.left > o.right ||
              t.top > o.bottom ||
              t.right < o.left
            ) {
              if (!0 === e.hide) return e;
              (e.hide = !0), (e.attributes["x-out-of-boundaries"] = "");
            } else {
              if (!1 === e.hide) return e;
              (e.hide = !1), (e.attributes["x-out-of-boundaries"] = !1);
            }
            return e;
          },
        },
        computeStyle: {
          order: 850,
          enabled: !0,
          fn: function (e, t) {
            var o = t.x,
              n = t.y,
              i = e.offsets.popper,
              p = D(e.instance.modifiers, function (e) {
                return "applyStyle" === e.name;
              }).gpuAcceleration;
            void 0 !== p &&
              console.warn(
                "WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!"
              );
            var s,
              d,
              a = void 0 === p ? t.gpuAcceleration : p,
              l = r(e.instance.popper),
              f = g(l),
              m = { position: i.position },
              h = {
                left: J(i.left),
                top: J(i.top),
                bottom: J(i.bottom),
                right: J(i.right),
              },
              c = "bottom" === o ? "top" : "bottom",
              u = "right" === n ? "left" : "right",
              b = W("transform");
            if (
              ((d = "bottom" == c ? -f.height + h.bottom : h.top),
              (s = "right" == u ? -f.width + h.right : h.left),
              a && b)
            )
              (m[b] = "translate3d(" + s + "px, " + d + "px, 0)"),
                (m[c] = 0),
                (m[u] = 0),
                (m.willChange = "transform");
            else {
              var y = "bottom" == c ? -1 : 1,
                w = "right" == u ? -1 : 1;
              (m[c] = d * y), (m[u] = s * w), (m.willChange = c + ", " + u);
            }
            var E = { "x-placement": e.placement };
            return (
              (e.attributes = de({}, E, e.attributes)),
              (e.styles = de({}, m, e.styles)),
              (e.arrowStyles = de({}, e.offsets.arrow, e.arrowStyles)),
              e
            );
          },
          gpuAcceleration: !0,
          x: "bottom",
          y: "right",
        },
        applyStyle: {
          order: 900,
          enabled: !0,
          fn: function (e) {
            return (
              Y(e.instance.popper, e.styles),
              j(e.instance.popper, e.attributes),
              e.arrowElement &&
                Object.keys(e.arrowStyles).length &&
                Y(e.arrowElement, e.arrowStyles),
              e
            );
          },
          onLoad: function (e, t, o, n, i) {
            var r = O(i, t, e, o.positionFixed),
              p = x(
                o.placement,
                r,
                t,
                e,
                o.modifiers.flip.boundariesElement,
                o.modifiers.flip.padding
              );
            return (
              t.setAttribute("x-placement", p),
              Y(t, { position: o.positionFixed ? "fixed" : "absolute" }),
              o
            );
          },
          gpuAcceleration: void 0,
        },
      },
    }),
    me
  );
});
//# sourceMappingURL=popper.min.js.map

/*! jQuery Migrate v3.0.0 | (c) jQuery Foundation and other contributors | jquery.org/license */
"undefined" == typeof jQuery.migrateMute && (jQuery.migrateMute = !0),
  (function (a, b) {
    "use strict";
    function c(c) {
      var d = b.console;
      e[c] ||
        ((e[c] = !0),
        a.migrateWarnings.push(c),
        d &&
          d.warn &&
          !a.migrateMute &&
          (d.warn("JQMIGRATE: " + c), a.migrateTrace && d.trace && d.trace()));
    }
    function d(a, b, d, e) {
      Object.defineProperty(a, b, {
        configurable: !0,
        enumerable: !0,
        get: function () {
          return c(e), d;
        },
      });
    }
    (a.migrateVersion = "3.0.0"),
      (function () {
        var c =
            b.console &&
            b.console.log &&
            function () {
              b.console.log.apply(b.console, arguments);
            },
          d = /^[12]\./;
        c &&
          ((a && !d.test(a.fn.jquery)) ||
            c("JQMIGRATE: jQuery 3.0.0+ REQUIRED"),
          a.migrateWarnings &&
            c("JQMIGRATE: Migrate plugin loaded multiple times"),
          c(
            "JQMIGRATE: Migrate is installed" +
              (a.migrateMute ? "" : " with logging active") +
              ", version " +
              a.migrateVersion
          ));
      })();
    var e = {};
    (a.migrateWarnings = []),
      void 0 === a.migrateTrace && (a.migrateTrace = !0),
      (a.migrateReset = function () {
        (e = {}), (a.migrateWarnings.length = 0);
      }),
      "BackCompat" === document.compatMode &&
        c("jQuery is not compatible with Quirks Mode");
    var f = a.fn.init,
      g = a.isNumeric,
      h = a.find,
      i = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,
      j = /\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g;
    (a.fn.init = function (a) {
      var b = Array.prototype.slice.call(arguments);
      return (
        "string" == typeof a &&
          "#" === a &&
          (c("jQuery( '#' ) is not a valid selector"), (b[0] = [])),
        f.apply(this, b)
      );
    }),
      (a.fn.init.prototype = a.fn),
      (a.find = function (a) {
        var b = Array.prototype.slice.call(arguments);
        if ("string" == typeof a && i.test(a))
          try {
            document.querySelector(a);
          } catch (d) {
            a = a.replace(j, function (a, b, c, d) {
              return "[" + b + c + '"' + d + '"]';
            });
            try {
              document.querySelector(a),
                c("Attribute selector with '#' must be quoted: " + b[0]),
                (b[0] = a);
            } catch (e) {
              c("Attribute selector with '#' was not fixed: " + b[0]);
            }
          }
        return h.apply(this, b);
      });
    var k;
    for (k in h)
      Object.prototype.hasOwnProperty.call(h, k) && (a.find[k] = h[k]);
    (a.fn.size = function () {
      return (
        c("jQuery.fn.size() is deprecated; use the .length property"),
        this.length
      );
    }),
      (a.parseJSON = function () {
        return (
          c("jQuery.parseJSON is deprecated; use JSON.parse"),
          JSON.parse.apply(null, arguments)
        );
      }),
      (a.isNumeric = function (b) {
        function d(b) {
          var c = b && b.toString();
          return !a.isArray(b) && c - parseFloat(c) + 1 >= 0;
        }
        var e = g(b),
          f = d(b);
        return (
          e !== f &&
            c("jQuery.isNumeric() should not be called on constructed objects"),
          f
        );
      }),
      d(
        a,
        "unique",
        a.uniqueSort,
        "jQuery.unique is deprecated, use jQuery.uniqueSort"
      ),
      d(
        a.expr,
        "filters",
        a.expr.pseudos,
        "jQuery.expr.filters is now jQuery.expr.pseudos"
      ),
      d(
        a.expr,
        ":",
        a.expr.pseudos,
        'jQuery.expr[":"] is now jQuery.expr.pseudos'
      );
    var l = a.ajax;
    a.ajax = function () {
      var a = l.apply(this, arguments);
      return (
        a.promise &&
          (d(a, "success", a.done, "jQXHR.success is deprecated and removed"),
          d(a, "error", a.fail, "jQXHR.error is deprecated and removed"),
          d(
            a,
            "complete",
            a.always,
            "jQXHR.complete is deprecated and removed"
          )),
        a
      );
    };
    var m = a.fn.removeAttr,
      n = a.fn.toggleClass,
      o = /\S+/g;
    (a.fn.removeAttr = function (b) {
      var d = this;
      return (
        a.each(b.match(o), function (b, e) {
          a.expr.match.bool.test(e) &&
            (c("jQuery.fn.removeAttr no longer sets boolean properties: " + e),
            d.prop(e, !1));
        }),
        m.apply(this, arguments)
      );
    }),
      (a.fn.toggleClass = function (b) {
        return void 0 !== b && "boolean" != typeof b
          ? n.apply(this, arguments)
          : (c("jQuery.fn.toggleClass( boolean ) is deprecated"),
            this.each(function () {
              var c = (this.getAttribute && this.getAttribute("class")) || "";
              c && a.data(this, "__className__", c),
                this.setAttribute &&
                  this.setAttribute(
                    "class",
                    c || b === !1 ? "" : a.data(this, "__className__") || ""
                  );
            }));
      });
    var p = !1;
    a.swap &&
      a.each(["height", "width", "reliableMarginRight"], function (b, c) {
        var d = a.cssHooks[c] && a.cssHooks[c].get;
        d &&
          (a.cssHooks[c].get = function () {
            var a;
            return (p = !0), (a = d.apply(this, arguments)), (p = !1), a;
          });
      }),
      (a.swap = function (a, b, d, e) {
        var f,
          g,
          h = {};
        p || c("jQuery.swap() is undocumented and deprecated");
        for (g in b) (h[g] = a.style[g]), (a.style[g] = b[g]);
        f = d.apply(a, e || []);
        for (g in b) a.style[g] = h[g];
        return f;
      });
    var q = a.data;
    a.data = function (b, d, e) {
      var f;
      return d &&
        d !== a.camelCase(d) &&
        ((f = a.hasData(b) && q.call(this, b)), f && d in f)
        ? (c("jQuery.data() always sets/gets camelCased names: " + d),
          arguments.length > 2 && (f[d] = e),
          f[d])
        : q.apply(this, arguments);
    };
    var r = a.Tween.prototype.run;
    a.Tween.prototype.run = function (b) {
      a.easing[this.easing].length > 1 &&
        (c(
          'easing function "jQuery.easing.' +
            this.easing.toString() +
            '" should use only first argument'
        ),
        (a.easing[this.easing] = a.easing[this.easing].bind(
          a.easing,
          b,
          this.options.duration * b,
          0,
          1,
          this.options.duration
        ))),
        r.apply(this, arguments);
    };
    var s = a.fn.load,
      t = a.event.fix;
    (a.event.props = []),
      (a.event.fixHooks = {}),
      (a.event.fix = function (b) {
        var d,
          e = b.type,
          f = this.fixHooks[e],
          g = a.event.props;
        if (g.length)
          for (
            c("jQuery.event.props are deprecated and removed: " + g.join());
            g.length;

          )
            a.event.addProp(g.pop());
        if (
          f &&
          !f._migrated_ &&
          ((f._migrated_ = !0),
          c("jQuery.event.fixHooks are deprecated and removed: " + e),
          (g = f.props) && g.length)
        )
          for (; g.length; ) a.event.addProp(g.pop());
        return (d = t.call(this, b)), f && f.filter ? f.filter(d, b) : d;
      }),
      a.each(["load", "unload", "error"], function (b, d) {
        a.fn[d] = function () {
          var a = Array.prototype.slice.call(arguments, 0);
          return "load" === d && "string" == typeof a[0]
            ? s.apply(this, a)
            : (c("jQuery.fn." + d + "() is deprecated"),
              a.splice(0, 0, d),
              arguments.length
                ? this.on.apply(this, a)
                : (this.triggerHandler.apply(this, a), this));
        };
      }),
      a(function () {
        a(document).triggerHandler("ready");
      }),
      (a.event.special.ready = {
        setup: function () {
          this === document && c("'ready' event is deprecated");
        },
      }),
      a.fn.extend({
        bind: function (a, b, d) {
          return c("jQuery.fn.bind() is deprecated"), this.on(a, null, b, d);
        },
        unbind: function (a, b) {
          return c("jQuery.fn.unbind() is deprecated"), this.off(a, null, b);
        },
        delegate: function (a, b, d, e) {
          return c("jQuery.fn.delegate() is deprecated"), this.on(b, a, d, e);
        },
        undelegate: function (a, b, d) {
          return (
            c("jQuery.fn.undelegate() is deprecated"),
            1 === arguments.length
              ? this.off(a, "**")
              : this.off(b, a || "**", d)
          );
        },
      });
    var u = a.fn.offset;
    a.fn.offset = function () {
      var b,
        d = this[0],
        e = { top: 0, left: 0 };
      return d && d.nodeType
        ? ((b = (d.ownerDocument || document).documentElement),
          a.contains(b, d)
            ? u.apply(this, arguments)
            : (c(
                "jQuery.fn.offset() requires an element connected to a document"
              ),
              e))
        : (c("jQuery.fn.offset() requires a valid DOM element"), e);
    };
    var v = a.param;
    a.param = function (b, d) {
      var e = a.ajaxSettings && a.ajaxSettings.traditional;
      return (
        void 0 === d &&
          e &&
          (c("jQuery.param() no longer uses jQuery.ajaxSettings.traditional"),
          (d = e)),
        v.call(this, b, d)
      );
    };
    var w = a.fn.andSelf || a.fn.addBack;
    a.fn.andSelf = function () {
      return (
        c("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),
        w.apply(this, arguments)
      );
    };
    var x = a.Deferred,
      y = [
        [
          "resolve",
          "done",
          a.Callbacks("once memory"),
          a.Callbacks("once memory"),
          "resolved",
        ],
        [
          "reject",
          "fail",
          a.Callbacks("once memory"),
          a.Callbacks("once memory"),
          "rejected",
        ],
        ["notify", "progress", a.Callbacks("memory"), a.Callbacks("memory")],
      ];
    a.Deferred = function (b) {
      var d = x(),
        e = d.promise();
      return (
        (d.pipe = e.pipe =
          function () {
            var b = arguments;
            return (
              c("deferred.pipe() is deprecated"),
              a
                .Deferred(function (c) {
                  a.each(y, function (f, g) {
                    var h = a.isFunction(b[f]) && b[f];
                    d[g[1]](function () {
                      var b = h && h.apply(this, arguments);
                      b && a.isFunction(b.promise)
                        ? b
                            .promise()
                            .done(c.resolve)
                            .fail(c.reject)
                            .progress(c.notify)
                        : c[g[0] + "With"](
                            this === e ? c.promise() : this,
                            h ? [b] : arguments
                          );
                    });
                  }),
                    (b = null);
                })
                .promise()
            );
          }),
        b && b.call(d, d),
        d
      );
    };
  })(jQuery, window);

/*!
 * Bootstrap v4.1.0 (https://getbootstrap.com/)
 * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
!(function (t, e) {
  "object" == typeof exports && "undefined" != typeof module
    ? e(exports, require("jquery"), require("popper.js"))
    : "function" == typeof define && define.amd
    ? define(["exports", "jquery", "popper.js"], e)
    : e((t.bootstrap = {}), t.jQuery, t.Popper);
})(this, function (t, e, c) {
  "use strict";
  function i(t, e) {
    for (var n = 0; n < e.length; n++) {
      var i = e[n];
      (i.enumerable = i.enumerable || !1),
        (i.configurable = !0),
        "value" in i && (i.writable = !0),
        Object.defineProperty(t, i.key, i);
    }
  }
  function o(t, e, n) {
    return e && i(t.prototype, e), n && i(t, n), t;
  }
  function h(r) {
    for (var t = 1; t < arguments.length; t++) {
      var s = null != arguments[t] ? arguments[t] : {},
        e = Object.keys(s);
      "function" == typeof Object.getOwnPropertySymbols &&
        (e = e.concat(
          Object.getOwnPropertySymbols(s).filter(function (t) {
            return Object.getOwnPropertyDescriptor(s, t).enumerable;
          })
        )),
        e.forEach(function (t) {
          var e, n, i;
          (e = r),
            (i = s[(n = t)]),
            n in e
              ? Object.defineProperty(e, n, {
                  value: i,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
                })
              : (e[n] = i);
        });
    }
    return r;
  }
  (e = e && e.hasOwnProperty("default") ? e.default : e),
    (c = c && c.hasOwnProperty("default") ? c.default : c);
  var r,
    n,
    s,
    a,
    l,
    u,
    f,
    d,
    _,
    g,
    m,
    p,
    v,
    E,
    y,
    T,
    C,
    I,
    A,
    D,
    b,
    S,
    w,
    N,
    O,
    k,
    P,
    L,
    j,
    R,
    H,
    W,
    M,
    x,
    U,
    K,
    F,
    V,
    Q,
    B,
    Y,
    G,
    q,
    z,
    X,
    J,
    Z,
    $,
    tt,
    et,
    nt,
    it,
    rt,
    st,
    ot,
    at,
    lt,
    ht,
    ct,
    ut,
    ft,
    dt,
    _t,
    gt,
    mt,
    pt,
    vt,
    Et,
    yt,
    Tt,
    Ct,
    It,
    At,
    Dt,
    bt,
    St,
    wt,
    Nt,
    Ot,
    kt,
    Pt,
    Lt,
    jt,
    Rt,
    Ht,
    Wt,
    Mt,
    xt,
    Ut,
    Kt,
    Ft,
    Vt,
    Qt,
    Bt,
    Yt,
    Gt,
    qt,
    zt,
    Xt,
    Jt,
    Zt,
    $t,
    te,
    ee,
    ne,
    ie,
    re,
    se,
    oe,
    ae,
    le,
    he,
    ce,
    ue,
    fe,
    de,
    _e,
    ge,
    me,
    pe,
    ve,
    Ee,
    ye,
    Te,
    Ce,
    Ie,
    Ae,
    De,
    be,
    Se,
    we,
    Ne,
    Oe,
    ke,
    Pe,
    Le,
    je,
    Re,
    He,
    We,
    Me,
    xe,
    Ue,
    Ke,
    Fe,
    Ve,
    Qe,
    Be,
    Ye,
    Ge,
    qe,
    ze,
    Xe,
    Je,
    Ze,
    $e,
    tn,
    en,
    nn,
    rn,
    sn,
    on,
    an,
    ln,
    hn,
    cn,
    un,
    fn,
    dn,
    _n,
    gn,
    mn,
    pn,
    vn,
    En,
    yn,
    Tn,
    Cn = (function (i) {
      var e = "transitionend";
      function t(t) {
        var e = this,
          n = !1;
        return (
          i(this).one(l.TRANSITION_END, function () {
            n = !0;
          }),
          setTimeout(function () {
            n || l.triggerTransitionEnd(e);
          }, t),
          this
        );
      }
      var l = {
        TRANSITION_END: "bsTransitionEnd",
        getUID: function (t) {
          for (; (t += ~~(1e6 * Math.random())), document.getElementById(t); );
          return t;
        },
        getSelectorFromElement: function (t) {
          var e = t.getAttribute("data-target");
          (e && "#" !== e) || (e = t.getAttribute("href") || "");
          try {
            return 0 < i(document).find(e).length ? e : null;
          } catch (t) {
            return null;
          }
        },
        getTransitionDurationFromElement: function (t) {
          if (!t) return 0;
          var e = i(t).css("transition-duration");
          return parseFloat(e)
            ? ((e = e.split(",")[0]), 1e3 * parseFloat(e))
            : 0;
        },
        reflow: function (t) {
          return t.offsetHeight;
        },
        triggerTransitionEnd: function (t) {
          i(t).trigger(e);
        },
        supportsTransitionEnd: function () {
          return Boolean(e);
        },
        isElement: function (t) {
          return (t[0] || t).nodeType;
        },
        typeCheckConfig: function (t, e, n) {
          for (var i in n)
            if (Object.prototype.hasOwnProperty.call(n, i)) {
              var r = n[i],
                s = e[i],
                o =
                  s && l.isElement(s)
                    ? "element"
                    : ((a = s),
                      {}.toString
                        .call(a)
                        .match(/\s([a-z]+)/i)[1]
                        .toLowerCase());
              if (!new RegExp(r).test(o))
                throw new Error(
                  t.toUpperCase() +
                    ': Option "' +
                    i +
                    '" provided type "' +
                    o +
                    '" but expected type "' +
                    r +
                    '".'
                );
            }
          var a;
        },
      };
      return (
        (i.fn.emulateTransitionEnd = t),
        (i.event.special[l.TRANSITION_END] = {
          bindType: e,
          delegateType: e,
          handle: function (t) {
            if (i(t.target).is(this))
              return t.handleObj.handler.apply(this, arguments);
          },
        }),
        l
      );
    })(e),
    In =
      ((n = "alert"),
      (a = "." + (s = "bs.alert")),
      (l = (r = e).fn[n]),
      (u = {
        CLOSE: "close" + a,
        CLOSED: "closed" + a,
        CLICK_DATA_API: "click" + a + ".data-api",
      }),
      (f = "alert"),
      (d = "fade"),
      (_ = "show"),
      (g = (function () {
        function i(t) {
          this._element = t;
        }
        var t = i.prototype;
        return (
          (t.close = function (t) {
            t = t || this._element;
            var e = this._getRootElement(t);
            this._triggerCloseEvent(e).isDefaultPrevented() ||
              this._removeElement(e);
          }),
          (t.dispose = function () {
            r.removeData(this._element, s), (this._element = null);
          }),
          (t._getRootElement = function (t) {
            var e = Cn.getSelectorFromElement(t),
              n = !1;
            return e && (n = r(e)[0]), n || (n = r(t).closest("." + f)[0]), n;
          }),
          (t._triggerCloseEvent = function (t) {
            var e = r.Event(u.CLOSE);
            return r(t).trigger(e), e;
          }),
          (t._removeElement = function (e) {
            var n = this;
            if ((r(e).removeClass(_), r(e).hasClass(d))) {
              var t = Cn.getTransitionDurationFromElement(e);
              r(e)
                .one(Cn.TRANSITION_END, function (t) {
                  return n._destroyElement(e, t);
                })
                .emulateTransitionEnd(t);
            } else this._destroyElement(e);
          }),
          (t._destroyElement = function (t) {
            r(t).detach().trigger(u.CLOSED).remove();
          }),
          (i._jQueryInterface = function (n) {
            return this.each(function () {
              var t = r(this),
                e = t.data(s);
              e || ((e = new i(this)), t.data(s, e)),
                "close" === n && e[n](this);
            });
          }),
          (i._handleDismiss = function (e) {
            return function (t) {
              t && t.preventDefault(), e.close(this);
            };
          }),
          o(i, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
          ]),
          i
        );
      })()),
      r(document).on(
        u.CLICK_DATA_API,
        '[data-dismiss="alert"]',
        g._handleDismiss(new g())
      ),
      (r.fn[n] = g._jQueryInterface),
      (r.fn[n].Constructor = g),
      (r.fn[n].noConflict = function () {
        return (r.fn[n] = l), g._jQueryInterface;
      }),
      g),
    An =
      ((p = "button"),
      (E = "." + (v = "bs.button")),
      (y = ".data-api"),
      (T = (m = e).fn[p]),
      (C = "active"),
      (I = "btn"),
      (D = '[data-toggle^="button"]'),
      (b = '[data-toggle="buttons"]'),
      (S = "input"),
      (w = ".active"),
      (N = ".btn"),
      (O = {
        CLICK_DATA_API: "click" + E + y,
        FOCUS_BLUR_DATA_API: (A = "focus") + E + y + " blur" + E + y,
      }),
      (k = (function () {
        function n(t) {
          this._element = t;
        }
        var t = n.prototype;
        return (
          (t.toggle = function () {
            var t = !0,
              e = !0,
              n = m(this._element).closest(b)[0];
            if (n) {
              var i = m(this._element).find(S)[0];
              if (i) {
                if ("radio" === i.type)
                  if (i.checked && m(this._element).hasClass(C)) t = !1;
                  else {
                    var r = m(n).find(w)[0];
                    r && m(r).removeClass(C);
                  }
                if (t) {
                  if (
                    i.hasAttribute("disabled") ||
                    n.hasAttribute("disabled") ||
                    i.classList.contains("disabled") ||
                    n.classList.contains("disabled")
                  )
                    return;
                  (i.checked = !m(this._element).hasClass(C)),
                    m(i).trigger("change");
                }
                i.focus(), (e = !1);
              }
            }
            e &&
              this._element.setAttribute(
                "aria-pressed",
                !m(this._element).hasClass(C)
              ),
              t && m(this._element).toggleClass(C);
          }),
          (t.dispose = function () {
            m.removeData(this._element, v), (this._element = null);
          }),
          (n._jQueryInterface = function (e) {
            return this.each(function () {
              var t = m(this).data(v);
              t || ((t = new n(this)), m(this).data(v, t)),
                "toggle" === e && t[e]();
            });
          }),
          o(n, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
          ]),
          n
        );
      })()),
      m(document)
        .on(O.CLICK_DATA_API, D, function (t) {
          t.preventDefault();
          var e = t.target;
          m(e).hasClass(I) || (e = m(e).closest(N)),
            k._jQueryInterface.call(m(e), "toggle");
        })
        .on(O.FOCUS_BLUR_DATA_API, D, function (t) {
          var e = m(t.target).closest(N)[0];
          m(e).toggleClass(A, /^focus(in)?$/.test(t.type));
        }),
      (m.fn[p] = k._jQueryInterface),
      (m.fn[p].Constructor = k),
      (m.fn[p].noConflict = function () {
        return (m.fn[p] = T), k._jQueryInterface;
      }),
      k),
    Dn =
      ((L = "carousel"),
      (R = "." + (j = "bs.carousel")),
      (H = ".data-api"),
      (W = (P = e).fn[L]),
      (M = {
        interval: 5e3,
        keyboard: !0,
        slide: !1,
        pause: "hover",
        wrap: !0,
      }),
      (x = {
        interval: "(number|boolean)",
        keyboard: "boolean",
        slide: "(boolean|string)",
        pause: "(string|boolean)",
        wrap: "boolean",
      }),
      (U = "next"),
      (K = "prev"),
      (F = "left"),
      (V = "right"),
      (Q = {
        SLIDE: "slide" + R,
        SLID: "slid" + R,
        KEYDOWN: "keydown" + R,
        MOUSEENTER: "mouseenter" + R,
        MOUSELEAVE: "mouseleave" + R,
        TOUCHEND: "touchend" + R,
        LOAD_DATA_API: "load" + R + H,
        CLICK_DATA_API: "click" + R + H,
      }),
      (B = "carousel"),
      (Y = "active"),
      (G = "slide"),
      (q = "carousel-item-right"),
      (z = "carousel-item-left"),
      (X = "carousel-item-next"),
      (J = "carousel-item-prev"),
      (Z = {
        ACTIVE: ".active",
        ACTIVE_ITEM: ".active.carousel-item",
        ITEM: ".carousel-item",
        NEXT_PREV: ".carousel-item-next, .carousel-item-prev",
        INDICATORS: ".carousel-indicators",
        DATA_SLIDE: "[data-slide], [data-slide-to]",
        DATA_RIDE: '[data-ride="carousel"]',
      }),
      ($ = (function () {
        function s(t, e) {
          (this._items = null),
            (this._interval = null),
            (this._activeElement = null),
            (this._isPaused = !1),
            (this._isSliding = !1),
            (this.touchTimeout = null),
            (this._config = this._getConfig(e)),
            (this._element = P(t)[0]),
            (this._indicatorsElement = P(this._element).find(Z.INDICATORS)[0]),
            this._addEventListeners();
        }
        var t = s.prototype;
        return (
          (t.next = function () {
            this._isSliding || this._slide(U);
          }),
          (t.nextWhenVisible = function () {
            !document.hidden &&
              P(this._element).is(":visible") &&
              "hidden" !== P(this._element).css("visibility") &&
              this.next();
          }),
          (t.prev = function () {
            this._isSliding || this._slide(K);
          }),
          (t.pause = function (t) {
            t || (this._isPaused = !0),
              P(this._element).find(Z.NEXT_PREV)[0] &&
                (Cn.triggerTransitionEnd(this._element), this.cycle(!0)),
              clearInterval(this._interval),
              (this._interval = null);
          }),
          (t.cycle = function (t) {
            t || (this._isPaused = !1),
              this._interval &&
                (clearInterval(this._interval), (this._interval = null)),
              this._config.interval &&
                !this._isPaused &&
                (this._interval = setInterval(
                  (document.visibilityState
                    ? this.nextWhenVisible
                    : this.next
                  ).bind(this),
                  this._config.interval
                ));
          }),
          (t.to = function (t) {
            var e = this;
            this._activeElement = P(this._element).find(Z.ACTIVE_ITEM)[0];
            var n = this._getItemIndex(this._activeElement);
            if (!(t > this._items.length - 1 || t < 0))
              if (this._isSliding)
                P(this._element).one(Q.SLID, function () {
                  return e.to(t);
                });
              else {
                if (n === t) return this.pause(), void this.cycle();
                var i = n < t ? U : K;
                this._slide(i, this._items[t]);
              }
          }),
          (t.dispose = function () {
            P(this._element).off(R),
              P.removeData(this._element, j),
              (this._items = null),
              (this._config = null),
              (this._element = null),
              (this._interval = null),
              (this._isPaused = null),
              (this._isSliding = null),
              (this._activeElement = null),
              (this._indicatorsElement = null);
          }),
          (t._getConfig = function (t) {
            return (t = h({}, M, t)), Cn.typeCheckConfig(L, t, x), t;
          }),
          (t._addEventListeners = function () {
            var e = this;
            this._config.keyboard &&
              P(this._element).on(Q.KEYDOWN, function (t) {
                return e._keydown(t);
              }),
              "hover" === this._config.pause &&
                (P(this._element)
                  .on(Q.MOUSEENTER, function (t) {
                    return e.pause(t);
                  })
                  .on(Q.MOUSELEAVE, function (t) {
                    return e.cycle(t);
                  }),
                "ontouchstart" in document.documentElement &&
                  P(this._element).on(Q.TOUCHEND, function () {
                    e.pause(),
                      e.touchTimeout && clearTimeout(e.touchTimeout),
                      (e.touchTimeout = setTimeout(function (t) {
                        return e.cycle(t);
                      }, 500 + e._config.interval));
                  }));
          }),
          (t._keydown = function (t) {
            if (!/input|textarea/i.test(t.target.tagName))
              switch (t.which) {
                case 37:
                  t.preventDefault(), this.prev();
                  break;
                case 39:
                  t.preventDefault(), this.next();
              }
          }),
          (t._getItemIndex = function (t) {
            return (
              (this._items = P.makeArray(P(t).parent().find(Z.ITEM))),
              this._items.indexOf(t)
            );
          }),
          (t._getItemByDirection = function (t, e) {
            var n = t === U,
              i = t === K,
              r = this._getItemIndex(e),
              s = this._items.length - 1;
            if (((i && 0 === r) || (n && r === s)) && !this._config.wrap)
              return e;
            var o = (r + (t === K ? -1 : 1)) % this._items.length;
            return -1 === o
              ? this._items[this._items.length - 1]
              : this._items[o];
          }),
          (t._triggerSlideEvent = function (t, e) {
            var n = this._getItemIndex(t),
              i = this._getItemIndex(P(this._element).find(Z.ACTIVE_ITEM)[0]),
              r = P.Event(Q.SLIDE, {
                relatedTarget: t,
                direction: e,
                from: i,
                to: n,
              });
            return P(this._element).trigger(r), r;
          }),
          (t._setActiveIndicatorElement = function (t) {
            if (this._indicatorsElement) {
              P(this._indicatorsElement).find(Z.ACTIVE).removeClass(Y);
              var e = this._indicatorsElement.children[this._getItemIndex(t)];
              e && P(e).addClass(Y);
            }
          }),
          (t._slide = function (t, e) {
            var n,
              i,
              r,
              s = this,
              o = P(this._element).find(Z.ACTIVE_ITEM)[0],
              a = this._getItemIndex(o),
              l = e || (o && this._getItemByDirection(t, o)),
              h = this._getItemIndex(l),
              c = Boolean(this._interval);
            if (
              (t === U
                ? ((n = z), (i = X), (r = F))
                : ((n = q), (i = J), (r = V)),
              l && P(l).hasClass(Y))
            )
              this._isSliding = !1;
            else if (
              !this._triggerSlideEvent(l, r).isDefaultPrevented() &&
              o &&
              l
            ) {
              (this._isSliding = !0),
                c && this.pause(),
                this._setActiveIndicatorElement(l);
              var u = P.Event(Q.SLID, {
                relatedTarget: l,
                direction: r,
                from: a,
                to: h,
              });
              if (P(this._element).hasClass(G)) {
                P(l).addClass(i),
                  Cn.reflow(l),
                  P(o).addClass(n),
                  P(l).addClass(n);
                var f = Cn.getTransitionDurationFromElement(o);
                P(o)
                  .one(Cn.TRANSITION_END, function () {
                    P(l)
                      .removeClass(n + " " + i)
                      .addClass(Y),
                      P(o).removeClass(Y + " " + i + " " + n),
                      (s._isSliding = !1),
                      setTimeout(function () {
                        return P(s._element).trigger(u);
                      }, 0);
                  })
                  .emulateTransitionEnd(f);
              } else
                P(o).removeClass(Y),
                  P(l).addClass(Y),
                  (this._isSliding = !1),
                  P(this._element).trigger(u);
              c && this.cycle();
            }
          }),
          (s._jQueryInterface = function (i) {
            return this.each(function () {
              var t = P(this).data(j),
                e = h({}, M, P(this).data());
              "object" == typeof i && (e = h({}, e, i));
              var n = "string" == typeof i ? i : e.slide;
              if (
                (t || ((t = new s(this, e)), P(this).data(j, t)),
                "number" == typeof i)
              )
                t.to(i);
              else if ("string" == typeof n) {
                if ("undefined" == typeof t[n])
                  throw new TypeError('No method named "' + n + '"');
                t[n]();
              } else e.interval && (t.pause(), t.cycle());
            });
          }),
          (s._dataApiClickHandler = function (t) {
            var e = Cn.getSelectorFromElement(this);
            if (e) {
              var n = P(e)[0];
              if (n && P(n).hasClass(B)) {
                var i = h({}, P(n).data(), P(this).data()),
                  r = this.getAttribute("data-slide-to");
                r && (i.interval = !1),
                  s._jQueryInterface.call(P(n), i),
                  r && P(n).data(j).to(r),
                  t.preventDefault();
              }
            }
          }),
          o(s, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return M;
              },
            },
          ]),
          s
        );
      })()),
      P(document).on(Q.CLICK_DATA_API, Z.DATA_SLIDE, $._dataApiClickHandler),
      P(window).on(Q.LOAD_DATA_API, function () {
        P(Z.DATA_RIDE).each(function () {
          var t = P(this);
          $._jQueryInterface.call(t, t.data());
        });
      }),
      (P.fn[L] = $._jQueryInterface),
      (P.fn[L].Constructor = $),
      (P.fn[L].noConflict = function () {
        return (P.fn[L] = W), $._jQueryInterface;
      }),
      $),
    bn =
      ((et = "collapse"),
      (it = "." + (nt = "bs.collapse")),
      (rt = (tt = e).fn[et]),
      (st = { toggle: !0, parent: "" }),
      (ot = { toggle: "boolean", parent: "(string|element)" }),
      (at = {
        SHOW: "show" + it,
        SHOWN: "shown" + it,
        HIDE: "hide" + it,
        HIDDEN: "hidden" + it,
        CLICK_DATA_API: "click" + it + ".data-api",
      }),
      (lt = "show"),
      (ht = "collapse"),
      (ct = "collapsing"),
      (ut = "collapsed"),
      (ft = "width"),
      (dt = "height"),
      (_t = {
        ACTIVES: ".show, .collapsing",
        DATA_TOGGLE: '[data-toggle="collapse"]',
      }),
      (gt = (function () {
        function a(t, e) {
          (this._isTransitioning = !1),
            (this._element = t),
            (this._config = this._getConfig(e)),
            (this._triggerArray = tt.makeArray(
              tt(
                '[data-toggle="collapse"][href="#' +
                  t.id +
                  '"],[data-toggle="collapse"][data-target="#' +
                  t.id +
                  '"]'
              )
            ));
          for (var n = tt(_t.DATA_TOGGLE), i = 0; i < n.length; i++) {
            var r = n[i],
              s = Cn.getSelectorFromElement(r);
            null !== s &&
              0 < tt(s).filter(t).length &&
              ((this._selector = s), this._triggerArray.push(r));
          }
          (this._parent = this._config.parent ? this._getParent() : null),
            this._config.parent ||
              this._addAriaAndCollapsedClass(this._element, this._triggerArray),
            this._config.toggle && this.toggle();
        }
        var t = a.prototype;
        return (
          (t.toggle = function () {
            tt(this._element).hasClass(lt) ? this.hide() : this.show();
          }),
          (t.show = function () {
            var t,
              e,
              n = this;
            if (
              !this._isTransitioning &&
              !tt(this._element).hasClass(lt) &&
              (this._parent &&
                0 ===
                  (t = tt.makeArray(
                    tt(this._parent)
                      .find(_t.ACTIVES)
                      .filter('[data-parent="' + this._config.parent + '"]')
                  )).length &&
                (t = null),
              !(
                t &&
                (e = tt(t).not(this._selector).data(nt)) &&
                e._isTransitioning
              ))
            ) {
              var i = tt.Event(at.SHOW);
              if ((tt(this._element).trigger(i), !i.isDefaultPrevented())) {
                t &&
                  (a._jQueryInterface.call(tt(t).not(this._selector), "hide"),
                  e || tt(t).data(nt, null));
                var r = this._getDimension();
                tt(this._element).removeClass(ht).addClass(ct),
                  (this._element.style[r] = 0) < this._triggerArray.length &&
                    tt(this._triggerArray)
                      .removeClass(ut)
                      .attr("aria-expanded", !0),
                  this.setTransitioning(!0);
                var s = "scroll" + (r[0].toUpperCase() + r.slice(1)),
                  o = Cn.getTransitionDurationFromElement(this._element);
                tt(this._element)
                  .one(Cn.TRANSITION_END, function () {
                    tt(n._element).removeClass(ct).addClass(ht).addClass(lt),
                      (n._element.style[r] = ""),
                      n.setTransitioning(!1),
                      tt(n._element).trigger(at.SHOWN);
                  })
                  .emulateTransitionEnd(o),
                  (this._element.style[r] = this._element[s] + "px");
              }
            }
          }),
          (t.hide = function () {
            var t = this;
            if (!this._isTransitioning && tt(this._element).hasClass(lt)) {
              var e = tt.Event(at.HIDE);
              if ((tt(this._element).trigger(e), !e.isDefaultPrevented())) {
                var n = this._getDimension();
                if (
                  ((this._element.style[n] =
                    this._element.getBoundingClientRect()[n] + "px"),
                  Cn.reflow(this._element),
                  tt(this._element)
                    .addClass(ct)
                    .removeClass(ht)
                    .removeClass(lt),
                  0 < this._triggerArray.length)
                )
                  for (var i = 0; i < this._triggerArray.length; i++) {
                    var r = this._triggerArray[i],
                      s = Cn.getSelectorFromElement(r);
                    if (null !== s)
                      tt(s).hasClass(lt) ||
                        tt(r).addClass(ut).attr("aria-expanded", !1);
                  }
                this.setTransitioning(!0);
                this._element.style[n] = "";
                var o = Cn.getTransitionDurationFromElement(this._element);
                tt(this._element)
                  .one(Cn.TRANSITION_END, function () {
                    t.setTransitioning(!1),
                      tt(t._element)
                        .removeClass(ct)
                        .addClass(ht)
                        .trigger(at.HIDDEN);
                  })
                  .emulateTransitionEnd(o);
              }
            }
          }),
          (t.setTransitioning = function (t) {
            this._isTransitioning = t;
          }),
          (t.dispose = function () {
            tt.removeData(this._element, nt),
              (this._config = null),
              (this._parent = null),
              (this._element = null),
              (this._triggerArray = null),
              (this._isTransitioning = null);
          }),
          (t._getConfig = function (t) {
            return (
              ((t = h({}, st, t)).toggle = Boolean(t.toggle)),
              Cn.typeCheckConfig(et, t, ot),
              t
            );
          }),
          (t._getDimension = function () {
            return tt(this._element).hasClass(ft) ? ft : dt;
          }),
          (t._getParent = function () {
            var n = this,
              t = null;
            Cn.isElement(this._config.parent)
              ? ((t = this._config.parent),
                "undefined" != typeof this._config.parent.jquery &&
                  (t = this._config.parent[0]))
              : (t = tt(this._config.parent)[0]);
            var e =
              '[data-toggle="collapse"][data-parent="' +
              this._config.parent +
              '"]';
            return (
              tt(t)
                .find(e)
                .each(function (t, e) {
                  n._addAriaAndCollapsedClass(a._getTargetFromElement(e), [e]);
                }),
              t
            );
          }),
          (t._addAriaAndCollapsedClass = function (t, e) {
            if (t) {
              var n = tt(t).hasClass(lt);
              0 < e.length &&
                tt(e).toggleClass(ut, !n).attr("aria-expanded", n);
            }
          }),
          (a._getTargetFromElement = function (t) {
            var e = Cn.getSelectorFromElement(t);
            return e ? tt(e)[0] : null;
          }),
          (a._jQueryInterface = function (i) {
            return this.each(function () {
              var t = tt(this),
                e = t.data(nt),
                n = h({}, st, t.data(), "object" == typeof i && i);
              if (
                (!e && n.toggle && /show|hide/.test(i) && (n.toggle = !1),
                e || ((e = new a(this, n)), t.data(nt, e)),
                "string" == typeof i)
              ) {
                if ("undefined" == typeof e[i])
                  throw new TypeError('No method named "' + i + '"');
                e[i]();
              }
            });
          }),
          o(a, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return st;
              },
            },
          ]),
          a
        );
      })()),
      tt(document).on(at.CLICK_DATA_API, _t.DATA_TOGGLE, function (t) {
        "A" === t.currentTarget.tagName && t.preventDefault();
        var n = tt(this),
          e = Cn.getSelectorFromElement(this);
        tt(e).each(function () {
          var t = tt(this),
            e = t.data(nt) ? "toggle" : n.data();
          gt._jQueryInterface.call(t, e);
        });
      }),
      (tt.fn[et] = gt._jQueryInterface),
      (tt.fn[et].Constructor = gt),
      (tt.fn[et].noConflict = function () {
        return (tt.fn[et] = rt), gt._jQueryInterface;
      }),
      gt),
    Sn =
      ((pt = "dropdown"),
      (Et = "." + (vt = "bs.dropdown")),
      (yt = ".data-api"),
      (Tt = (mt = e).fn[pt]),
      (Ct = new RegExp("38|40|27")),
      (It = {
        HIDE: "hide" + Et,
        HIDDEN: "hidden" + Et,
        SHOW: "show" + Et,
        SHOWN: "shown" + Et,
        CLICK: "click" + Et,
        CLICK_DATA_API: "click" + Et + yt,
        KEYDOWN_DATA_API: "keydown" + Et + yt,
        KEYUP_DATA_API: "keyup" + Et + yt,
      }),
      (At = "disabled"),
      (Dt = "show"),
      (bt = "dropup"),
      (St = "dropright"),
      (wt = "dropleft"),
      (Nt = "dropdown-menu-right"),
      (Ot = "position-static"),
      (kt = '[data-toggle="dropdown"]'),
      (Pt = ".dropdown form"),
      (Lt = ".dropdown-menu"),
      (jt = ".navbar-nav"),
      (Rt = ".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)"),
      (Ht = "top-start"),
      (Wt = "top-end"),
      (Mt = "bottom-start"),
      (xt = "bottom-end"),
      (Ut = "right-start"),
      (Kt = "left-start"),
      (Ft = {
        offset: 0,
        flip: !0,
        boundary: "scrollParent",
        reference: "toggle",
        display: "dynamic",
      }),
      (Vt = {
        offset: "(number|string|function)",
        flip: "boolean",
        boundary: "(string|element)",
        reference: "(string|element)",
        display: "string",
      }),
      (Qt = (function () {
        function l(t, e) {
          (this._element = t),
            (this._popper = null),
            (this._config = this._getConfig(e)),
            (this._menu = this._getMenuElement()),
            (this._inNavbar = this._detectNavbar()),
            this._addEventListeners();
        }
        var t = l.prototype;
        return (
          (t.toggle = function () {
            if (!this._element.disabled && !mt(this._element).hasClass(At)) {
              var t = l._getParentFromElement(this._element),
                e = mt(this._menu).hasClass(Dt);
              if ((l._clearMenus(), !e)) {
                var n = { relatedTarget: this._element },
                  i = mt.Event(It.SHOW, n);
                if ((mt(t).trigger(i), !i.isDefaultPrevented())) {
                  if (!this._inNavbar) {
                    if ("undefined" == typeof c)
                      throw new TypeError(
                        "Bootstrap dropdown require Popper.js (https://popper.js.org)"
                      );
                    var r = this._element;
                    "parent" === this._config.reference
                      ? (r = t)
                      : Cn.isElement(this._config.reference) &&
                        ((r = this._config.reference),
                        "undefined" != typeof this._config.reference.jquery &&
                          (r = this._config.reference[0])),
                      "scrollParent" !== this._config.boundary &&
                        mt(t).addClass(Ot),
                      (this._popper = new c(
                        r,
                        this._menu,
                        this._getPopperConfig()
                      ));
                  }
                  "ontouchstart" in document.documentElement &&
                    0 === mt(t).closest(jt).length &&
                    mt(document.body).children().on("mouseover", null, mt.noop),
                    this._element.focus(),
                    this._element.setAttribute("aria-expanded", !0),
                    mt(this._menu).toggleClass(Dt),
                    mt(t).toggleClass(Dt).trigger(mt.Event(It.SHOWN, n));
                }
              }
            }
          }),
          (t.dispose = function () {
            mt.removeData(this._element, vt),
              mt(this._element).off(Et),
              (this._element = null),
              (this._menu = null) !== this._popper &&
                (this._popper.destroy(), (this._popper = null));
          }),
          (t.update = function () {
            (this._inNavbar = this._detectNavbar()),
              null !== this._popper && this._popper.scheduleUpdate();
          }),
          (t._addEventListeners = function () {
            var e = this;
            mt(this._element).on(It.CLICK, function (t) {
              t.preventDefault(), t.stopPropagation(), e.toggle();
            });
          }),
          (t._getConfig = function (t) {
            return (
              (t = h(
                {},
                this.constructor.Default,
                mt(this._element).data(),
                t
              )),
              Cn.typeCheckConfig(pt, t, this.constructor.DefaultType),
              t
            );
          }),
          (t._getMenuElement = function () {
            if (!this._menu) {
              var t = l._getParentFromElement(this._element);
              this._menu = mt(t).find(Lt)[0];
            }
            return this._menu;
          }),
          (t._getPlacement = function () {
            var t = mt(this._element).parent(),
              e = Mt;
            return (
              t.hasClass(bt)
                ? ((e = Ht), mt(this._menu).hasClass(Nt) && (e = Wt))
                : t.hasClass(St)
                ? (e = Ut)
                : t.hasClass(wt)
                ? (e = Kt)
                : mt(this._menu).hasClass(Nt) && (e = xt),
              e
            );
          }),
          (t._detectNavbar = function () {
            return 0 < mt(this._element).closest(".navbar").length;
          }),
          (t._getPopperConfig = function () {
            var e = this,
              t = {};
            "function" == typeof this._config.offset
              ? (t.fn = function (t) {
                  return (
                    (t.offsets = h(
                      {},
                      t.offsets,
                      e._config.offset(t.offsets) || {}
                    )),
                    t
                  );
                })
              : (t.offset = this._config.offset);
            var n = {
              placement: this._getPlacement(),
              modifiers: {
                offset: t,
                flip: { enabled: this._config.flip },
                preventOverflow: { boundariesElement: this._config.boundary },
              },
            };
            return (
              "static" === this._config.display &&
                (n.modifiers.applyStyle = { enabled: !1 }),
              n
            );
          }),
          (l._jQueryInterface = function (e) {
            return this.each(function () {
              var t = mt(this).data(vt);
              if (
                (t ||
                  ((t = new l(this, "object" == typeof e ? e : null)),
                  mt(this).data(vt, t)),
                "string" == typeof e)
              ) {
                if ("undefined" == typeof t[e])
                  throw new TypeError('No method named "' + e + '"');
                t[e]();
              }
            });
          }),
          (l._clearMenus = function (t) {
            if (!t || (3 !== t.which && ("keyup" !== t.type || 9 === t.which)))
              for (var e = mt.makeArray(mt(kt)), n = 0; n < e.length; n++) {
                var i = l._getParentFromElement(e[n]),
                  r = mt(e[n]).data(vt),
                  s = { relatedTarget: e[n] };
                if (r) {
                  var o = r._menu;
                  if (
                    mt(i).hasClass(Dt) &&
                    !(
                      t &&
                      (("click" === t.type &&
                        /input|textarea/i.test(t.target.tagName)) ||
                        ("keyup" === t.type && 9 === t.which)) &&
                      mt.contains(i, t.target)
                    )
                  ) {
                    var a = mt.Event(It.HIDE, s);
                    mt(i).trigger(a),
                      a.isDefaultPrevented() ||
                        ("ontouchstart" in document.documentElement &&
                          mt(document.body)
                            .children()
                            .off("mouseover", null, mt.noop),
                        e[n].setAttribute("aria-expanded", "false"),
                        mt(o).removeClass(Dt),
                        mt(i).removeClass(Dt).trigger(mt.Event(It.HIDDEN, s)));
                  }
                }
              }
          }),
          (l._getParentFromElement = function (t) {
            var e,
              n = Cn.getSelectorFromElement(t);
            return n && (e = mt(n)[0]), e || t.parentNode;
          }),
          (l._dataApiKeydownHandler = function (t) {
            if (
              (/input|textarea/i.test(t.target.tagName)
                ? !(
                    32 === t.which ||
                    (27 !== t.which &&
                      ((40 !== t.which && 38 !== t.which) ||
                        mt(t.target).closest(Lt).length))
                  )
                : Ct.test(t.which)) &&
              (t.preventDefault(),
              t.stopPropagation(),
              !this.disabled && !mt(this).hasClass(At))
            ) {
              var e = l._getParentFromElement(this),
                n = mt(e).hasClass(Dt);
              if (
                (n || (27 === t.which && 32 === t.which)) &&
                (!n || (27 !== t.which && 32 !== t.which))
              ) {
                var i = mt(e).find(Rt).get();
                if (0 !== i.length) {
                  var r = i.indexOf(t.target);
                  38 === t.which && 0 < r && r--,
                    40 === t.which && r < i.length - 1 && r++,
                    r < 0 && (r = 0),
                    i[r].focus();
                }
              } else {
                if (27 === t.which) {
                  var s = mt(e).find(kt)[0];
                  mt(s).trigger("focus");
                }
                mt(this).trigger("click");
              }
            }
          }),
          o(l, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return Ft;
              },
            },
            {
              key: "DefaultType",
              get: function () {
                return Vt;
              },
            },
          ]),
          l
        );
      })()),
      mt(document)
        .on(It.KEYDOWN_DATA_API, kt, Qt._dataApiKeydownHandler)
        .on(It.KEYDOWN_DATA_API, Lt, Qt._dataApiKeydownHandler)
        .on(It.CLICK_DATA_API + " " + It.KEYUP_DATA_API, Qt._clearMenus)
        .on(It.CLICK_DATA_API, kt, function (t) {
          t.preventDefault(),
            t.stopPropagation(),
            Qt._jQueryInterface.call(mt(this), "toggle");
        })
        .on(It.CLICK_DATA_API, Pt, function (t) {
          t.stopPropagation();
        }),
      (mt.fn[pt] = Qt._jQueryInterface),
      (mt.fn[pt].Constructor = Qt),
      (mt.fn[pt].noConflict = function () {
        return (mt.fn[pt] = Tt), Qt._jQueryInterface;
      }),
      Qt),
    wn =
      ((Yt = "modal"),
      (qt = "." + (Gt = "bs.modal")),
      (zt = (Bt = e).fn[Yt]),
      (Xt = { backdrop: !0, keyboard: !0, focus: !0, show: !0 }),
      (Jt = {
        backdrop: "(boolean|string)",
        keyboard: "boolean",
        focus: "boolean",
        show: "boolean",
      }),
      (Zt = {
        HIDE: "hide" + qt,
        HIDDEN: "hidden" + qt,
        SHOW: "show" + qt,
        SHOWN: "shown" + qt,
        FOCUSIN: "focusin" + qt,
        RESIZE: "resize" + qt,
        CLICK_DISMISS: "click.dismiss" + qt,
        KEYDOWN_DISMISS: "keydown.dismiss" + qt,
        MOUSEUP_DISMISS: "mouseup.dismiss" + qt,
        MOUSEDOWN_DISMISS: "mousedown.dismiss" + qt,
        CLICK_DATA_API: "click" + qt + ".data-api",
      }),
      ($t = "modal-scrollbar-measure"),
      (te = "modal-backdrop"),
      (ee = "modal-open"),
      (ne = "fade"),
      (ie = "show"),
      (re = {
        DIALOG: ".modal-dialog",
        DATA_TOGGLE: '[data-toggle="modal"]',
        DATA_DISMISS: '[data-dismiss="modal"]',
        FIXED_CONTENT: ".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",
        STICKY_CONTENT: ".sticky-top",
        NAVBAR_TOGGLER: ".navbar-toggler",
      }),
      (se = (function () {
        function r(t, e) {
          (this._config = this._getConfig(e)),
            (this._element = t),
            (this._dialog = Bt(t).find(re.DIALOG)[0]),
            (this._backdrop = null),
            (this._isShown = !1),
            (this._isBodyOverflowing = !1),
            (this._ignoreBackdropClick = !1),
            (this._scrollbarWidth = 0);
        }
        var t = r.prototype;
        return (
          (t.toggle = function (t) {
            return this._isShown ? this.hide() : this.show(t);
          }),
          (t.show = function (t) {
            var e = this;
            if (!this._isTransitioning && !this._isShown) {
              Bt(this._element).hasClass(ne) && (this._isTransitioning = !0);
              var n = Bt.Event(Zt.SHOW, { relatedTarget: t });
              Bt(this._element).trigger(n),
                this._isShown ||
                  n.isDefaultPrevented() ||
                  ((this._isShown = !0),
                  this._checkScrollbar(),
                  this._setScrollbar(),
                  this._adjustDialog(),
                  Bt(document.body).addClass(ee),
                  this._setEscapeEvent(),
                  this._setResizeEvent(),
                  Bt(this._element).on(
                    Zt.CLICK_DISMISS,
                    re.DATA_DISMISS,
                    function (t) {
                      return e.hide(t);
                    }
                  ),
                  Bt(this._dialog).on(Zt.MOUSEDOWN_DISMISS, function () {
                    Bt(e._element).one(Zt.MOUSEUP_DISMISS, function (t) {
                      Bt(t.target).is(e._element) &&
                        (e._ignoreBackdropClick = !0);
                    });
                  }),
                  this._showBackdrop(function () {
                    return e._showElement(t);
                  }));
            }
          }),
          (t.hide = function (t) {
            var e = this;
            if (
              (t && t.preventDefault(), !this._isTransitioning && this._isShown)
            ) {
              var n = Bt.Event(Zt.HIDE);
              if (
                (Bt(this._element).trigger(n),
                this._isShown && !n.isDefaultPrevented())
              ) {
                this._isShown = !1;
                var i = Bt(this._element).hasClass(ne);
                if (
                  (i && (this._isTransitioning = !0),
                  this._setEscapeEvent(),
                  this._setResizeEvent(),
                  Bt(document).off(Zt.FOCUSIN),
                  Bt(this._element).removeClass(ie),
                  Bt(this._element).off(Zt.CLICK_DISMISS),
                  Bt(this._dialog).off(Zt.MOUSEDOWN_DISMISS),
                  i)
                ) {
                  var r = Cn.getTransitionDurationFromElement(this._element);
                  Bt(this._element)
                    .one(Cn.TRANSITION_END, function (t) {
                      return e._hideModal(t);
                    })
                    .emulateTransitionEnd(r);
                } else this._hideModal();
              }
            }
          }),
          (t.dispose = function () {
            Bt.removeData(this._element, Gt),
              Bt(window, document, this._element, this._backdrop).off(qt),
              (this._config = null),
              (this._element = null),
              (this._dialog = null),
              (this._backdrop = null),
              (this._isShown = null),
              (this._isBodyOverflowing = null),
              (this._ignoreBackdropClick = null),
              (this._scrollbarWidth = null);
          }),
          (t.handleUpdate = function () {
            this._adjustDialog();
          }),
          (t._getConfig = function (t) {
            return (t = h({}, Xt, t)), Cn.typeCheckConfig(Yt, t, Jt), t;
          }),
          (t._showElement = function (t) {
            var e = this,
              n = Bt(this._element).hasClass(ne);
            (this._element.parentNode &&
              this._element.parentNode.nodeType === Node.ELEMENT_NODE) ||
              document.body.appendChild(this._element),
              (this._element.style.display = "block"),
              this._element.removeAttribute("aria-hidden"),
              (this._element.scrollTop = 0),
              n && Cn.reflow(this._element),
              Bt(this._element).addClass(ie),
              this._config.focus && this._enforceFocus();
            var i = Bt.Event(Zt.SHOWN, { relatedTarget: t }),
              r = function () {
                e._config.focus && e._element.focus(),
                  (e._isTransitioning = !1),
                  Bt(e._element).trigger(i);
              };
            if (n) {
              var s = Cn.getTransitionDurationFromElement(this._element);
              Bt(this._dialog)
                .one(Cn.TRANSITION_END, r)
                .emulateTransitionEnd(s);
            } else r();
          }),
          (t._enforceFocus = function () {
            var e = this;
            Bt(document)
              .off(Zt.FOCUSIN)
              .on(Zt.FOCUSIN, function (t) {
                document !== t.target &&
                  e._element !== t.target &&
                  0 === Bt(e._element).has(t.target).length &&
                  e._element.focus();
              });
          }),
          (t._setEscapeEvent = function () {
            var e = this;
            this._isShown && this._config.keyboard
              ? Bt(this._element).on(Zt.KEYDOWN_DISMISS, function (t) {
                  27 === t.which && (t.preventDefault(), e.hide());
                })
              : this._isShown || Bt(this._element).off(Zt.KEYDOWN_DISMISS);
          }),
          (t._setResizeEvent = function () {
            var e = this;
            this._isShown
              ? Bt(window).on(Zt.RESIZE, function (t) {
                  return e.handleUpdate(t);
                })
              : Bt(window).off(Zt.RESIZE);
          }),
          (t._hideModal = function () {
            var t = this;
            (this._element.style.display = "none"),
              this._element.setAttribute("aria-hidden", !0),
              (this._isTransitioning = !1),
              this._showBackdrop(function () {
                Bt(document.body).removeClass(ee),
                  t._resetAdjustments(),
                  t._resetScrollbar(),
                  Bt(t._element).trigger(Zt.HIDDEN);
              });
          }),
          (t._removeBackdrop = function () {
            this._backdrop &&
              (Bt(this._backdrop).remove(), (this._backdrop = null));
          }),
          (t._showBackdrop = function (t) {
            var e = this,
              n = Bt(this._element).hasClass(ne) ? ne : "";
            if (this._isShown && this._config.backdrop) {
              if (
                ((this._backdrop = document.createElement("div")),
                (this._backdrop.className = te),
                n && Bt(this._backdrop).addClass(n),
                Bt(this._backdrop).appendTo(document.body),
                Bt(this._element).on(Zt.CLICK_DISMISS, function (t) {
                  e._ignoreBackdropClick
                    ? (e._ignoreBackdropClick = !1)
                    : t.target === t.currentTarget &&
                      ("static" === e._config.backdrop
                        ? e._element.focus()
                        : e.hide());
                }),
                n && Cn.reflow(this._backdrop),
                Bt(this._backdrop).addClass(ie),
                !t)
              )
                return;
              if (!n) return void t();
              var i = Cn.getTransitionDurationFromElement(this._backdrop);
              Bt(this._backdrop)
                .one(Cn.TRANSITION_END, t)
                .emulateTransitionEnd(i);
            } else if (!this._isShown && this._backdrop) {
              Bt(this._backdrop).removeClass(ie);
              var r = function () {
                e._removeBackdrop(), t && t();
              };
              if (Bt(this._element).hasClass(ne)) {
                var s = Cn.getTransitionDurationFromElement(this._backdrop);
                Bt(this._backdrop)
                  .one(Cn.TRANSITION_END, r)
                  .emulateTransitionEnd(s);
              } else r();
            } else t && t();
          }),
          (t._adjustDialog = function () {
            var t =
              this._element.scrollHeight >
              document.documentElement.clientHeight;
            !this._isBodyOverflowing &&
              t &&
              (this._element.style.paddingLeft = this._scrollbarWidth + "px"),
              this._isBodyOverflowing &&
                !t &&
                (this._element.style.paddingRight =
                  this._scrollbarWidth + "px");
          }),
          (t._resetAdjustments = function () {
            (this._element.style.paddingLeft = ""),
              (this._element.style.paddingRight = "");
          }),
          (t._checkScrollbar = function () {
            var t = document.body.getBoundingClientRect();
            (this._isBodyOverflowing = t.left + t.right < window.innerWidth),
              (this._scrollbarWidth = this._getScrollbarWidth());
          }),
          (t._setScrollbar = function () {
            var r = this;
            if (this._isBodyOverflowing) {
              Bt(re.FIXED_CONTENT).each(function (t, e) {
                var n = Bt(e)[0].style.paddingRight,
                  i = Bt(e).css("padding-right");
                Bt(e)
                  .data("padding-right", n)
                  .css(
                    "padding-right",
                    parseFloat(i) + r._scrollbarWidth + "px"
                  );
              }),
                Bt(re.STICKY_CONTENT).each(function (t, e) {
                  var n = Bt(e)[0].style.marginRight,
                    i = Bt(e).css("margin-right");
                  Bt(e)
                    .data("margin-right", n)
                    .css(
                      "margin-right",
                      parseFloat(i) - r._scrollbarWidth + "px"
                    );
                }),
                Bt(re.NAVBAR_TOGGLER).each(function (t, e) {
                  var n = Bt(e)[0].style.marginRight,
                    i = Bt(e).css("margin-right");
                  Bt(e)
                    .data("margin-right", n)
                    .css(
                      "margin-right",
                      parseFloat(i) + r._scrollbarWidth + "px"
                    );
                });
              var t = document.body.style.paddingRight,
                e = Bt(document.body).css("padding-right");
              Bt(document.body)
                .data("padding-right", t)
                .css(
                  "padding-right",
                  parseFloat(e) + this._scrollbarWidth + "px"
                );
            }
          }),
          (t._resetScrollbar = function () {
            Bt(re.FIXED_CONTENT).each(function (t, e) {
              var n = Bt(e).data("padding-right");
              "undefined" != typeof n &&
                Bt(e).css("padding-right", n).removeData("padding-right");
            }),
              Bt(re.STICKY_CONTENT + ", " + re.NAVBAR_TOGGLER).each(function (
                t,
                e
              ) {
                var n = Bt(e).data("margin-right");
                "undefined" != typeof n &&
                  Bt(e).css("margin-right", n).removeData("margin-right");
              });
            var t = Bt(document.body).data("padding-right");
            "undefined" != typeof t &&
              Bt(document.body)
                .css("padding-right", t)
                .removeData("padding-right");
          }),
          (t._getScrollbarWidth = function () {
            var t = document.createElement("div");
            (t.className = $t), document.body.appendChild(t);
            var e = t.getBoundingClientRect().width - t.clientWidth;
            return document.body.removeChild(t), e;
          }),
          (r._jQueryInterface = function (n, i) {
            return this.each(function () {
              var t = Bt(this).data(Gt),
                e = h(
                  {},
                  r.Default,
                  Bt(this).data(),
                  "object" == typeof n && n
                );
              if (
                (t || ((t = new r(this, e)), Bt(this).data(Gt, t)),
                "string" == typeof n)
              ) {
                if ("undefined" == typeof t[n])
                  throw new TypeError('No method named "' + n + '"');
                t[n](i);
              } else e.show && t.show(i);
            });
          }),
          o(r, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return Xt;
              },
            },
          ]),
          r
        );
      })()),
      Bt(document).on(Zt.CLICK_DATA_API, re.DATA_TOGGLE, function (t) {
        var e,
          n = this,
          i = Cn.getSelectorFromElement(this);
        i && (e = Bt(i)[0]);
        var r = Bt(e).data(Gt)
          ? "toggle"
          : h({}, Bt(e).data(), Bt(this).data());
        ("A" !== this.tagName && "AREA" !== this.tagName) || t.preventDefault();
        var s = Bt(e).one(Zt.SHOW, function (t) {
          t.isDefaultPrevented() ||
            s.one(Zt.HIDDEN, function () {
              Bt(n).is(":visible") && n.focus();
            });
        });
        se._jQueryInterface.call(Bt(e), r, this);
      }),
      (Bt.fn[Yt] = se._jQueryInterface),
      (Bt.fn[Yt].Constructor = se),
      (Bt.fn[Yt].noConflict = function () {
        return (Bt.fn[Yt] = zt), se._jQueryInterface;
      }),
      se),
    Nn =
      ((ae = "tooltip"),
      (he = "." + (le = "bs.tooltip")),
      (ce = (oe = e).fn[ae]),
      (ue = "bs-tooltip"),
      (fe = new RegExp("(^|\\s)" + ue + "\\S+", "g")),
      (ge = {
        animation: !0,
        template:
          '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
        trigger: "hover focus",
        title: "",
        delay: 0,
        html: !(_e = {
          AUTO: "auto",
          TOP: "top",
          RIGHT: "right",
          BOTTOM: "bottom",
          LEFT: "left",
        }),
        selector: !(de = {
          animation: "boolean",
          template: "string",
          title: "(string|element|function)",
          trigger: "string",
          delay: "(number|object)",
          html: "boolean",
          selector: "(string|boolean)",
          placement: "(string|function)",
          offset: "(number|string)",
          container: "(string|element|boolean)",
          fallbackPlacement: "(string|array)",
          boundary: "(string|element)",
        }),
        placement: "top",
        offset: 0,
        container: !1,
        fallbackPlacement: "flip",
        boundary: "scrollParent",
      }),
      (pe = "out"),
      (ve = {
        HIDE: "hide" + he,
        HIDDEN: "hidden" + he,
        SHOW: (me = "show") + he,
        SHOWN: "shown" + he,
        INSERTED: "inserted" + he,
        CLICK: "click" + he,
        FOCUSIN: "focusin" + he,
        FOCUSOUT: "focusout" + he,
        MOUSEENTER: "mouseenter" + he,
        MOUSELEAVE: "mouseleave" + he,
      }),
      (Ee = "fade"),
      (ye = "show"),
      (Te = ".tooltip-inner"),
      (Ce = ".arrow"),
      (Ie = "hover"),
      (Ae = "focus"),
      (De = "click"),
      (be = "manual"),
      (Se = (function () {
        function i(t, e) {
          if ("undefined" == typeof c)
            throw new TypeError(
              "Bootstrap tooltips require Popper.js (https://popper.js.org)"
            );
          (this._isEnabled = !0),
            (this._timeout = 0),
            (this._hoverState = ""),
            (this._activeTrigger = {}),
            (this._popper = null),
            (this.element = t),
            (this.config = this._getConfig(e)),
            (this.tip = null),
            this._setListeners();
        }
        var t = i.prototype;
        return (
          (t.enable = function () {
            this._isEnabled = !0;
          }),
          (t.disable = function () {
            this._isEnabled = !1;
          }),
          (t.toggleEnabled = function () {
            this._isEnabled = !this._isEnabled;
          }),
          (t.toggle = function (t) {
            if (this._isEnabled)
              if (t) {
                var e = this.constructor.DATA_KEY,
                  n = oe(t.currentTarget).data(e);
                n ||
                  ((n = new this.constructor(
                    t.currentTarget,
                    this._getDelegateConfig()
                  )),
                  oe(t.currentTarget).data(e, n)),
                  (n._activeTrigger.click = !n._activeTrigger.click),
                  n._isWithActiveTrigger()
                    ? n._enter(null, n)
                    : n._leave(null, n);
              } else {
                if (oe(this.getTipElement()).hasClass(ye))
                  return void this._leave(null, this);
                this._enter(null, this);
              }
          }),
          (t.dispose = function () {
            clearTimeout(this._timeout),
              oe.removeData(this.element, this.constructor.DATA_KEY),
              oe(this.element).off(this.constructor.EVENT_KEY),
              oe(this.element).closest(".modal").off("hide.bs.modal"),
              this.tip && oe(this.tip).remove(),
              (this._isEnabled = null),
              (this._timeout = null),
              (this._hoverState = null),
              (this._activeTrigger = null) !== this._popper &&
                this._popper.destroy(),
              (this._popper = null),
              (this.element = null),
              (this.config = null),
              (this.tip = null);
          }),
          (t.show = function () {
            var e = this;
            if ("none" === oe(this.element).css("display"))
              throw new Error("Please use show on visible elements");
            var t = oe.Event(this.constructor.Event.SHOW);
            if (this.isWithContent() && this._isEnabled) {
              oe(this.element).trigger(t);
              var n = oe.contains(
                this.element.ownerDocument.documentElement,
                this.element
              );
              if (t.isDefaultPrevented() || !n) return;
              var i = this.getTipElement(),
                r = Cn.getUID(this.constructor.NAME);
              i.setAttribute("id", r),
                this.element.setAttribute("aria-describedby", r),
                this.setContent(),
                this.config.animation && oe(i).addClass(Ee);
              var s =
                  "function" == typeof this.config.placement
                    ? this.config.placement.call(this, i, this.element)
                    : this.config.placement,
                o = this._getAttachment(s);
              this.addAttachmentClass(o);
              var a =
                !1 === this.config.container
                  ? document.body
                  : oe(this.config.container);
              oe(i).data(this.constructor.DATA_KEY, this),
                oe.contains(
                  this.element.ownerDocument.documentElement,
                  this.tip
                ) || oe(i).appendTo(a),
                oe(this.element).trigger(this.constructor.Event.INSERTED),
                (this._popper = new c(this.element, i, {
                  placement: o,
                  modifiers: {
                    offset: { offset: this.config.offset },
                    flip: { behavior: this.config.fallbackPlacement },
                    arrow: { element: Ce },
                    preventOverflow: {
                      boundariesElement: this.config.boundary,
                    },
                  },
                  onCreate: function (t) {
                    t.originalPlacement !== t.placement &&
                      e._handlePopperPlacementChange(t);
                  },
                  onUpdate: function (t) {
                    e._handlePopperPlacementChange(t);
                  },
                })),
                oe(i).addClass(ye),
                "ontouchstart" in document.documentElement &&
                  oe(document.body).children().on("mouseover", null, oe.noop);
              var l = function () {
                e.config.animation && e._fixTransition();
                var t = e._hoverState;
                (e._hoverState = null),
                  oe(e.element).trigger(e.constructor.Event.SHOWN),
                  t === pe && e._leave(null, e);
              };
              if (oe(this.tip).hasClass(Ee)) {
                var h = Cn.getTransitionDurationFromElement(this.tip);
                oe(this.tip).one(Cn.TRANSITION_END, l).emulateTransitionEnd(h);
              } else l();
            }
          }),
          (t.hide = function (t) {
            var e = this,
              n = this.getTipElement(),
              i = oe.Event(this.constructor.Event.HIDE),
              r = function () {
                e._hoverState !== me &&
                  n.parentNode &&
                  n.parentNode.removeChild(n),
                  e._cleanTipClass(),
                  e.element.removeAttribute("aria-describedby"),
                  oe(e.element).trigger(e.constructor.Event.HIDDEN),
                  null !== e._popper && e._popper.destroy(),
                  t && t();
              };
            if ((oe(this.element).trigger(i), !i.isDefaultPrevented())) {
              if (
                (oe(n).removeClass(ye),
                "ontouchstart" in document.documentElement &&
                  oe(document.body).children().off("mouseover", null, oe.noop),
                (this._activeTrigger[De] = !1),
                (this._activeTrigger[Ae] = !1),
                (this._activeTrigger[Ie] = !1),
                oe(this.tip).hasClass(Ee))
              ) {
                var s = Cn.getTransitionDurationFromElement(n);
                oe(n).one(Cn.TRANSITION_END, r).emulateTransitionEnd(s);
              } else r();
              this._hoverState = "";
            }
          }),
          (t.update = function () {
            null !== this._popper && this._popper.scheduleUpdate();
          }),
          (t.isWithContent = function () {
            return Boolean(this.getTitle());
          }),
          (t.addAttachmentClass = function (t) {
            oe(this.getTipElement()).addClass(ue + "-" + t);
          }),
          (t.getTipElement = function () {
            return (
              (this.tip = this.tip || oe(this.config.template)[0]), this.tip
            );
          }),
          (t.setContent = function () {
            var t = oe(this.getTipElement());
            this.setElementContent(t.find(Te), this.getTitle()),
              t.removeClass(Ee + " " + ye);
          }),
          (t.setElementContent = function (t, e) {
            var n = this.config.html;
            "object" == typeof e && (e.nodeType || e.jquery)
              ? n
                ? oe(e).parent().is(t) || t.empty().append(e)
                : t.text(oe(e).text())
              : t[n ? "html" : "text"](e);
          }),
          (t.getTitle = function () {
            var t = this.element.getAttribute("data-original-title");
            return (
              t ||
                (t =
                  "function" == typeof this.config.title
                    ? this.config.title.call(this.element)
                    : this.config.title),
              t
            );
          }),
          (t._getAttachment = function (t) {
            return _e[t.toUpperCase()];
          }),
          (t._setListeners = function () {
            var i = this;
            this.config.trigger.split(" ").forEach(function (t) {
              if ("click" === t)
                oe(i.element).on(
                  i.constructor.Event.CLICK,
                  i.config.selector,
                  function (t) {
                    return i.toggle(t);
                  }
                );
              else if (t !== be) {
                var e =
                    t === Ie
                      ? i.constructor.Event.MOUSEENTER
                      : i.constructor.Event.FOCUSIN,
                  n =
                    t === Ie
                      ? i.constructor.Event.MOUSELEAVE
                      : i.constructor.Event.FOCUSOUT;
                oe(i.element)
                  .on(e, i.config.selector, function (t) {
                    return i._enter(t);
                  })
                  .on(n, i.config.selector, function (t) {
                    return i._leave(t);
                  });
              }
              oe(i.element)
                .closest(".modal")
                .on("hide.bs.modal", function () {
                  return i.hide();
                });
            }),
              this.config.selector
                ? (this.config = h({}, this.config, {
                    trigger: "manual",
                    selector: "",
                  }))
                : this._fixTitle();
          }),
          (t._fixTitle = function () {
            var t = typeof this.element.getAttribute("data-original-title");
            (this.element.getAttribute("title") || "string" !== t) &&
              (this.element.setAttribute(
                "data-original-title",
                this.element.getAttribute("title") || ""
              ),
              this.element.setAttribute("title", ""));
          }),
          (t._enter = function (t, e) {
            var n = this.constructor.DATA_KEY;
            (e = e || oe(t.currentTarget).data(n)) ||
              ((e = new this.constructor(
                t.currentTarget,
                this._getDelegateConfig()
              )),
              oe(t.currentTarget).data(n, e)),
              t && (e._activeTrigger["focusin" === t.type ? Ae : Ie] = !0),
              oe(e.getTipElement()).hasClass(ye) || e._hoverState === me
                ? (e._hoverState = me)
                : (clearTimeout(e._timeout),
                  (e._hoverState = me),
                  e.config.delay && e.config.delay.show
                    ? (e._timeout = setTimeout(function () {
                        e._hoverState === me && e.show();
                      }, e.config.delay.show))
                    : e.show());
          }),
          (t._leave = function (t, e) {
            var n = this.constructor.DATA_KEY;
            (e = e || oe(t.currentTarget).data(n)) ||
              ((e = new this.constructor(
                t.currentTarget,
                this._getDelegateConfig()
              )),
              oe(t.currentTarget).data(n, e)),
              t && (e._activeTrigger["focusout" === t.type ? Ae : Ie] = !1),
              e._isWithActiveTrigger() ||
                (clearTimeout(e._timeout),
                (e._hoverState = pe),
                e.config.delay && e.config.delay.hide
                  ? (e._timeout = setTimeout(function () {
                      e._hoverState === pe && e.hide();
                    }, e.config.delay.hide))
                  : e.hide());
          }),
          (t._isWithActiveTrigger = function () {
            for (var t in this._activeTrigger)
              if (this._activeTrigger[t]) return !0;
            return !1;
          }),
          (t._getConfig = function (t) {
            return (
              "number" ==
                typeof (t = h(
                  {},
                  this.constructor.Default,
                  oe(this.element).data(),
                  t
                )).delay && (t.delay = { show: t.delay, hide: t.delay }),
              "number" == typeof t.title && (t.title = t.title.toString()),
              "number" == typeof t.content &&
                (t.content = t.content.toString()),
              Cn.typeCheckConfig(ae, t, this.constructor.DefaultType),
              t
            );
          }),
          (t._getDelegateConfig = function () {
            var t = {};
            if (this.config)
              for (var e in this.config)
                this.constructor.Default[e] !== this.config[e] &&
                  (t[e] = this.config[e]);
            return t;
          }),
          (t._cleanTipClass = function () {
            var t = oe(this.getTipElement()),
              e = t.attr("class").match(fe);
            null !== e && 0 < e.length && t.removeClass(e.join(""));
          }),
          (t._handlePopperPlacementChange = function (t) {
            this._cleanTipClass(),
              this.addAttachmentClass(this._getAttachment(t.placement));
          }),
          (t._fixTransition = function () {
            var t = this.getTipElement(),
              e = this.config.animation;
            null === t.getAttribute("x-placement") &&
              (oe(t).removeClass(Ee),
              (this.config.animation = !1),
              this.hide(),
              this.show(),
              (this.config.animation = e));
          }),
          (i._jQueryInterface = function (n) {
            return this.each(function () {
              var t = oe(this).data(le),
                e = "object" == typeof n && n;
              if (
                (t || !/dispose|hide/.test(n)) &&
                (t || ((t = new i(this, e)), oe(this).data(le, t)),
                "string" == typeof n)
              ) {
                if ("undefined" == typeof t[n])
                  throw new TypeError('No method named "' + n + '"');
                t[n]();
              }
            });
          }),
          o(i, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return ge;
              },
            },
            {
              key: "NAME",
              get: function () {
                return ae;
              },
            },
            {
              key: "DATA_KEY",
              get: function () {
                return le;
              },
            },
            {
              key: "Event",
              get: function () {
                return ve;
              },
            },
            {
              key: "EVENT_KEY",
              get: function () {
                return he;
              },
            },
            {
              key: "DefaultType",
              get: function () {
                return de;
              },
            },
          ]),
          i
        );
      })()),
      (oe.fn[ae] = Se._jQueryInterface),
      (oe.fn[ae].Constructor = Se),
      (oe.fn[ae].noConflict = function () {
        return (oe.fn[ae] = ce), Se._jQueryInterface;
      }),
      Se),
    On =
      ((Ne = "popover"),
      (ke = "." + (Oe = "bs.popover")),
      (Pe = (we = e).fn[Ne]),
      (Le = "bs-popover"),
      (je = new RegExp("(^|\\s)" + Le + "\\S+", "g")),
      (Re = h({}, Nn.Default, {
        placement: "right",
        trigger: "click",
        content: "",
        template:
          '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>',
      })),
      (He = h({}, Nn.DefaultType, { content: "(string|element|function)" })),
      (We = "fade"),
      (xe = ".popover-header"),
      (Ue = ".popover-body"),
      (Ke = {
        HIDE: "hide" + ke,
        HIDDEN: "hidden" + ke,
        SHOW: (Me = "show") + ke,
        SHOWN: "shown" + ke,
        INSERTED: "inserted" + ke,
        CLICK: "click" + ke,
        FOCUSIN: "focusin" + ke,
        FOCUSOUT: "focusout" + ke,
        MOUSEENTER: "mouseenter" + ke,
        MOUSELEAVE: "mouseleave" + ke,
      }),
      (Fe = (function (t) {
        var e, n;
        function i() {
          return t.apply(this, arguments) || this;
        }
        (n = t),
          ((e = i).prototype = Object.create(n.prototype)),
          ((e.prototype.constructor = e).__proto__ = n);
        var r = i.prototype;
        return (
          (r.isWithContent = function () {
            return this.getTitle() || this._getContent();
          }),
          (r.addAttachmentClass = function (t) {
            we(this.getTipElement()).addClass(Le + "-" + t);
          }),
          (r.getTipElement = function () {
            return (
              (this.tip = this.tip || we(this.config.template)[0]), this.tip
            );
          }),
          (r.setContent = function () {
            var t = we(this.getTipElement());
            this.setElementContent(t.find(xe), this.getTitle());
            var e = this._getContent();
            "function" == typeof e && (e = e.call(this.element)),
              this.setElementContent(t.find(Ue), e),
              t.removeClass(We + " " + Me);
          }),
          (r._getContent = function () {
            return (
              this.element.getAttribute("data-content") || this.config.content
            );
          }),
          (r._cleanTipClass = function () {
            var t = we(this.getTipElement()),
              e = t.attr("class").match(je);
            null !== e && 0 < e.length && t.removeClass(e.join(""));
          }),
          (i._jQueryInterface = function (n) {
            return this.each(function () {
              var t = we(this).data(Oe),
                e = "object" == typeof n ? n : null;
              if (
                (t || !/destroy|hide/.test(n)) &&
                (t || ((t = new i(this, e)), we(this).data(Oe, t)),
                "string" == typeof n)
              ) {
                if ("undefined" == typeof t[n])
                  throw new TypeError('No method named "' + n + '"');
                t[n]();
              }
            });
          }),
          o(i, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return Re;
              },
            },
            {
              key: "NAME",
              get: function () {
                return Ne;
              },
            },
            {
              key: "DATA_KEY",
              get: function () {
                return Oe;
              },
            },
            {
              key: "Event",
              get: function () {
                return Ke;
              },
            },
            {
              key: "EVENT_KEY",
              get: function () {
                return ke;
              },
            },
            {
              key: "DefaultType",
              get: function () {
                return He;
              },
            },
          ]),
          i
        );
      })(Nn)),
      (we.fn[Ne] = Fe._jQueryInterface),
      (we.fn[Ne].Constructor = Fe),
      (we.fn[Ne].noConflict = function () {
        return (we.fn[Ne] = Pe), Fe._jQueryInterface;
      }),
      Fe),
    kn =
      ((Qe = "scrollspy"),
      (Ye = "." + (Be = "bs.scrollspy")),
      (Ge = (Ve = e).fn[Qe]),
      (qe = { offset: 10, method: "auto", target: "" }),
      (ze = { offset: "number", method: "string", target: "(string|element)" }),
      (Xe = {
        ACTIVATE: "activate" + Ye,
        SCROLL: "scroll" + Ye,
        LOAD_DATA_API: "load" + Ye + ".data-api",
      }),
      (Je = "dropdown-item"),
      (Ze = "active"),
      ($e = {
        DATA_SPY: '[data-spy="scroll"]',
        ACTIVE: ".active",
        NAV_LIST_GROUP: ".nav, .list-group",
        NAV_LINKS: ".nav-link",
        NAV_ITEMS: ".nav-item",
        LIST_ITEMS: ".list-group-item",
        DROPDOWN: ".dropdown",
        DROPDOWN_ITEMS: ".dropdown-item",
        DROPDOWN_TOGGLE: ".dropdown-toggle",
      }),
      (tn = "offset"),
      (en = "position"),
      (nn = (function () {
        function n(t, e) {
          var n = this;
          (this._element = t),
            (this._scrollElement = "BODY" === t.tagName ? window : t),
            (this._config = this._getConfig(e)),
            (this._selector =
              this._config.target +
              " " +
              $e.NAV_LINKS +
              "," +
              this._config.target +
              " " +
              $e.LIST_ITEMS +
              "," +
              this._config.target +
              " " +
              $e.DROPDOWN_ITEMS),
            (this._offsets = []),
            (this._targets = []),
            (this._activeTarget = null),
            (this._scrollHeight = 0),
            Ve(this._scrollElement).on(Xe.SCROLL, function (t) {
              return n._process(t);
            }),
            this.refresh(),
            this._process();
        }
        var t = n.prototype;
        return (
          (t.refresh = function () {
            var e = this,
              t = this._scrollElement === this._scrollElement.window ? tn : en,
              r = "auto" === this._config.method ? t : this._config.method,
              s = r === en ? this._getScrollTop() : 0;
            (this._offsets = []),
              (this._targets = []),
              (this._scrollHeight = this._getScrollHeight()),
              Ve.makeArray(Ve(this._selector))
                .map(function (t) {
                  var e,
                    n = Cn.getSelectorFromElement(t);
                  if ((n && (e = Ve(n)[0]), e)) {
                    var i = e.getBoundingClientRect();
                    if (i.width || i.height) return [Ve(e)[r]().top + s, n];
                  }
                  return null;
                })
                .filter(function (t) {
                  return t;
                })
                .sort(function (t, e) {
                  return t[0] - e[0];
                })
                .forEach(function (t) {
                  e._offsets.push(t[0]), e._targets.push(t[1]);
                });
          }),
          (t.dispose = function () {
            Ve.removeData(this._element, Be),
              Ve(this._scrollElement).off(Ye),
              (this._element = null),
              (this._scrollElement = null),
              (this._config = null),
              (this._selector = null),
              (this._offsets = null),
              (this._targets = null),
              (this._activeTarget = null),
              (this._scrollHeight = null);
          }),
          (t._getConfig = function (t) {
            if ("string" != typeof (t = h({}, qe, t)).target) {
              var e = Ve(t.target).attr("id");
              e || ((e = Cn.getUID(Qe)), Ve(t.target).attr("id", e)),
                (t.target = "#" + e);
            }
            return Cn.typeCheckConfig(Qe, t, ze), t;
          }),
          (t._getScrollTop = function () {
            return this._scrollElement === window
              ? this._scrollElement.pageYOffset
              : this._scrollElement.scrollTop;
          }),
          (t._getScrollHeight = function () {
            return (
              this._scrollElement.scrollHeight ||
              Math.max(
                document.body.scrollHeight,
                document.documentElement.scrollHeight
              )
            );
          }),
          (t._getOffsetHeight = function () {
            return this._scrollElement === window
              ? window.innerHeight
              : this._scrollElement.getBoundingClientRect().height;
          }),
          (t._process = function () {
            var t = this._getScrollTop() + this._config.offset,
              e = this._getScrollHeight(),
              n = this._config.offset + e - this._getOffsetHeight();
            if ((this._scrollHeight !== e && this.refresh(), n <= t)) {
              var i = this._targets[this._targets.length - 1];
              this._activeTarget !== i && this._activate(i);
            } else {
              if (
                this._activeTarget &&
                t < this._offsets[0] &&
                0 < this._offsets[0]
              )
                return (this._activeTarget = null), void this._clear();
              for (var r = this._offsets.length; r--; ) {
                this._activeTarget !== this._targets[r] &&
                  t >= this._offsets[r] &&
                  ("undefined" == typeof this._offsets[r + 1] ||
                    t < this._offsets[r + 1]) &&
                  this._activate(this._targets[r]);
              }
            }
          }),
          (t._activate = function (e) {
            (this._activeTarget = e), this._clear();
            var t = this._selector.split(",");
            t = t.map(function (t) {
              return (
                t + '[data-target="' + e + '"],' + t + '[href="' + e + '"]'
              );
            });
            var n = Ve(t.join(","));
            n.hasClass(Je)
              ? (n.closest($e.DROPDOWN).find($e.DROPDOWN_TOGGLE).addClass(Ze),
                n.addClass(Ze))
              : (n.addClass(Ze),
                n
                  .parents($e.NAV_LIST_GROUP)
                  .prev($e.NAV_LINKS + ", " + $e.LIST_ITEMS)
                  .addClass(Ze),
                n
                  .parents($e.NAV_LIST_GROUP)
                  .prev($e.NAV_ITEMS)
                  .children($e.NAV_LINKS)
                  .addClass(Ze)),
              Ve(this._scrollElement).trigger(Xe.ACTIVATE, {
                relatedTarget: e,
              });
          }),
          (t._clear = function () {
            Ve(this._selector).filter($e.ACTIVE).removeClass(Ze);
          }),
          (n._jQueryInterface = function (e) {
            return this.each(function () {
              var t = Ve(this).data(Be);
              if (
                (t ||
                  ((t = new n(this, "object" == typeof e && e)),
                  Ve(this).data(Be, t)),
                "string" == typeof e)
              ) {
                if ("undefined" == typeof t[e])
                  throw new TypeError('No method named "' + e + '"');
                t[e]();
              }
            });
          }),
          o(n, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
            {
              key: "Default",
              get: function () {
                return qe;
              },
            },
          ]),
          n
        );
      })()),
      Ve(window).on(Xe.LOAD_DATA_API, function () {
        for (var t = Ve.makeArray(Ve($e.DATA_SPY)), e = t.length; e--; ) {
          var n = Ve(t[e]);
          nn._jQueryInterface.call(n, n.data());
        }
      }),
      (Ve.fn[Qe] = nn._jQueryInterface),
      (Ve.fn[Qe].Constructor = nn),
      (Ve.fn[Qe].noConflict = function () {
        return (Ve.fn[Qe] = Ge), nn._jQueryInterface;
      }),
      nn),
    Pn =
      ((on = "." + (sn = "bs.tab")),
      (an = (rn = e).fn.tab),
      (ln = {
        HIDE: "hide" + on,
        HIDDEN: "hidden" + on,
        SHOW: "show" + on,
        SHOWN: "shown" + on,
        CLICK_DATA_API: "click" + on + ".data-api",
      }),
      (hn = "dropdown-menu"),
      (cn = "active"),
      (un = "disabled"),
      (fn = "fade"),
      (dn = "show"),
      (_n = ".dropdown"),
      (gn = ".nav, .list-group"),
      (mn = ".active"),
      (pn = "> li > .active"),
      (vn = '[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]'),
      (En = ".dropdown-toggle"),
      (yn = "> .dropdown-menu .active"),
      (Tn = (function () {
        function i(t) {
          this._element = t;
        }
        var t = i.prototype;
        return (
          (t.show = function () {
            var n = this;
            if (
              !(
                (this._element.parentNode &&
                  this._element.parentNode.nodeType === Node.ELEMENT_NODE &&
                  rn(this._element).hasClass(cn)) ||
                rn(this._element).hasClass(un)
              )
            ) {
              var t,
                i,
                e = rn(this._element).closest(gn)[0],
                r = Cn.getSelectorFromElement(this._element);
              if (e) {
                var s = "UL" === e.nodeName ? pn : mn;
                i = (i = rn.makeArray(rn(e).find(s)))[i.length - 1];
              }
              var o = rn.Event(ln.HIDE, { relatedTarget: this._element }),
                a = rn.Event(ln.SHOW, { relatedTarget: i });
              if (
                (i && rn(i).trigger(o),
                rn(this._element).trigger(a),
                !a.isDefaultPrevented() && !o.isDefaultPrevented())
              ) {
                r && (t = rn(r)[0]), this._activate(this._element, e);
                var l = function () {
                  var t = rn.Event(ln.HIDDEN, { relatedTarget: n._element }),
                    e = rn.Event(ln.SHOWN, { relatedTarget: i });
                  rn(i).trigger(t), rn(n._element).trigger(e);
                };
                t ? this._activate(t, t.parentNode, l) : l();
              }
            }
          }),
          (t.dispose = function () {
            rn.removeData(this._element, sn), (this._element = null);
          }),
          (t._activate = function (t, e, n) {
            var i = this,
              r = (
                "UL" === e.nodeName ? rn(e).find(pn) : rn(e).children(mn)
              )[0],
              s = n && r && rn(r).hasClass(fn),
              o = function () {
                return i._transitionComplete(t, r, n);
              };
            if (r && s) {
              var a = Cn.getTransitionDurationFromElement(r);
              rn(r).one(Cn.TRANSITION_END, o).emulateTransitionEnd(a);
            } else o();
          }),
          (t._transitionComplete = function (t, e, n) {
            if (e) {
              rn(e).removeClass(dn + " " + cn);
              var i = rn(e.parentNode).find(yn)[0];
              i && rn(i).removeClass(cn),
                "tab" === e.getAttribute("role") &&
                  e.setAttribute("aria-selected", !1);
            }
            if (
              (rn(t).addClass(cn),
              "tab" === t.getAttribute("role") &&
                t.setAttribute("aria-selected", !0),
              Cn.reflow(t),
              rn(t).addClass(dn),
              t.parentNode && rn(t.parentNode).hasClass(hn))
            ) {
              var r = rn(t).closest(_n)[0];
              r && rn(r).find(En).addClass(cn),
                t.setAttribute("aria-expanded", !0);
            }
            n && n();
          }),
          (i._jQueryInterface = function (n) {
            return this.each(function () {
              var t = rn(this),
                e = t.data(sn);
              if (
                (e || ((e = new i(this)), t.data(sn, e)), "string" == typeof n)
              ) {
                if ("undefined" == typeof e[n])
                  throw new TypeError('No method named "' + n + '"');
                e[n]();
              }
            });
          }),
          o(i, null, [
            {
              key: "VERSION",
              get: function () {
                return "4.1.0";
              },
            },
          ]),
          i
        );
      })()),
      rn(document).on(ln.CLICK_DATA_API, vn, function (t) {
        t.preventDefault(), Tn._jQueryInterface.call(rn(this), "show");
      }),
      (rn.fn.tab = Tn._jQueryInterface),
      (rn.fn.tab.Constructor = Tn),
      (rn.fn.tab.noConflict = function () {
        return (rn.fn.tab = an), Tn._jQueryInterface;
      }),
      Tn);
  !(function (t) {
    if ("undefined" == typeof t)
      throw new TypeError(
        "Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript."
      );
    var e = t.fn.jquery.split(" ")[0].split(".");
    if (
      (e[0] < 2 && e[1] < 9) ||
      (1 === e[0] && 9 === e[1] && e[2] < 1) ||
      4 <= e[0]
    )
      throw new Error(
        "Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0"
      );
  })(e),
    (t.Util = Cn),
    (t.Alert = In),
    (t.Button = An),
    (t.Carousel = Dn),
    (t.Collapse = bn),
    (t.Dropdown = Sn),
    (t.Modal = wn),
    (t.Popover = On),
    (t.Scrollspy = kn),
    (t.Tab = Pn),
    (t.Tooltip = Nn),
    Object.defineProperty(t, "__esModule", { value: !0 });
});
//# sourceMappingURL=bootstrap.min.js.map

/*!
 * ANIMATE
 */
(function () {
  var a,
    b,
    c,
    d,
    e,
    f = function (a, b) {
      return function () {
        return a.apply(b, arguments);
      };
    },
    g =
      [].indexOf ||
      function (a) {
        for (var b = 0, c = this.length; c > b; b++)
          if (b in this && this[b] === a) return b;
        return -1;
      };
  (b = (function () {
    function a() {}
    return (
      (a.prototype.extend = function (a, b) {
        var c, d;
        for (c in b) (d = b[c]), null == a[c] && (a[c] = d);
        return a;
      }),
      (a.prototype.isMobile = function (a) {
        return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
          a
        );
      }),
      (a.prototype.createEvent = function (a, b, c, d) {
        var e;
        return (
          null == b && (b = !1),
          null == c && (c = !1),
          null == d && (d = null),
          null != document.createEvent
            ? ((e = document.createEvent("CustomEvent")),
              e.initCustomEvent(a, b, c, d))
            : null != document.createEventObject
            ? ((e = document.createEventObject()), (e.eventType = a))
            : (e.eventName = a),
          e
        );
      }),
      (a.prototype.emitEvent = function (a, b) {
        return null != a.dispatchEvent
          ? a.dispatchEvent(b)
          : b in (null != a)
          ? a[b]()
          : "on" + b in (null != a)
          ? a["on" + b]()
          : void 0;
      }),
      (a.prototype.addEvent = function (a, b, c) {
        return null != a.addEventListener
          ? a.addEventListener(b, c, !1)
          : null != a.attachEvent
          ? a.attachEvent("on" + b, c)
          : (a[b] = c);
      }),
      (a.prototype.removeEvent = function (a, b, c) {
        return null != a.removeEventListener
          ? a.removeEventListener(b, c, !1)
          : null != a.detachEvent
          ? a.detachEvent("on" + b, c)
          : delete a[b];
      }),
      (a.prototype.innerHeight = function () {
        return "innerHeight" in window
          ? window.innerHeight
          : document.documentElement.clientHeight;
      }),
      a
    );
  })()),
    (c =
      this.WeakMap ||
      this.MozWeakMap ||
      (c = (function () {
        function a() {
          (this.keys = []), (this.values = []);
        }
        return (
          (a.prototype.get = function (a) {
            var b, c, d, e, f;
            for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d)
              if (((c = f[b]), c === a)) return this.values[b];
          }),
          (a.prototype.set = function (a, b) {
            var c, d, e, f, g;
            for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e)
              if (((d = g[c]), d === a)) return void (this.values[c] = b);
            return this.keys.push(a), this.values.push(b);
          }),
          a
        );
      })())),
    (a =
      this.MutationObserver ||
      this.WebkitMutationObserver ||
      this.MozMutationObserver ||
      (a = (function () {
        function a() {
          "undefined" != typeof console &&
            null !== console &&
            console.warn("MutationObserver is not supported by your browser."),
            "undefined" != typeof console &&
              null !== console &&
              console.warn(
                "WOW.js cannot detect dom mutations, please call .sync() after loading new content."
              );
        }
        return (a.notSupported = !0), (a.prototype.observe = function () {}), a;
      })())),
    (d =
      this.getComputedStyle ||
      function (a, b) {
        return (
          (this.getPropertyValue = function (b) {
            var c;
            return (
              "float" === b && (b = "styleFloat"),
              e.test(b) &&
                b.replace(e, function (a, b) {
                  return b.toUpperCase();
                }),
              (null != (c = a.currentStyle) ? c[b] : void 0) || null
            );
          }),
          this
        );
      }),
    (e = /(\-([a-z]){1})/g),
    (this.WOW = (function () {
      function e(a) {
        null == a && (a = {}),
          (this.scrollCallback = f(this.scrollCallback, this)),
          (this.scrollHandler = f(this.scrollHandler, this)),
          (this.resetAnimation = f(this.resetAnimation, this)),
          (this.start = f(this.start, this)),
          (this.scrolled = !0),
          (this.config = this.util().extend(a, this.defaults)),
          null != a.scrollContainer &&
            (this.config.scrollContainer = document.querySelector(
              a.scrollContainer
            )),
          (this.animationNameCache = new c()),
          (this.wowEvent = this.util().createEvent(this.config.boxClass));
      }
      return (
        (e.prototype.defaults = {
          boxClass: "wow",
          animateClass: "animated",
          offset: 0,
          mobile: !0,
          live: !0,
          callback: null,
          scrollContainer: null,
        }),
        (e.prototype.init = function () {
          var a;
          return (
            (this.element = window.document.documentElement),
            "interactive" === (a = document.readyState) || "complete" === a
              ? this.start()
              : this.util().addEvent(document, "DOMContentLoaded", this.start),
            (this.finished = [])
          );
        }),
        (e.prototype.start = function () {
          var b, c, d, e;
          if (
            ((this.stopped = !1),
            (this.boxes = function () {
              var a, c, d, e;
              for (
                d = this.element.querySelectorAll("." + this.config.boxClass),
                  e = [],
                  a = 0,
                  c = d.length;
                c > a;
                a++
              )
                (b = d[a]), e.push(b);
              return e;
            }.call(this)),
            (this.all = function () {
              var a, c, d, e;
              for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++)
                (b = d[a]), e.push(b);
              return e;
            }.call(this)),
            this.boxes.length)
          )
            if (this.disabled()) this.resetStyle();
            else
              for (e = this.boxes, c = 0, d = e.length; d > c; c++)
                (b = e[c]), this.applyStyle(b, !0);
          return (
            this.disabled() ||
              (this.util().addEvent(
                this.config.scrollContainer || window,
                "scroll",
                this.scrollHandler
              ),
              this.util().addEvent(window, "resize", this.scrollHandler),
              (this.interval = setInterval(this.scrollCallback, 50))),
            this.config.live
              ? new a(
                  (function (a) {
                    return function (b) {
                      var c, d, e, f, g;
                      for (g = [], c = 0, d = b.length; d > c; c++)
                        (f = b[c]),
                          g.push(
                            function () {
                              var a, b, c, d;
                              for (
                                c = f.addedNodes || [],
                                  d = [],
                                  a = 0,
                                  b = c.length;
                                b > a;
                                a++
                              )
                                (e = c[a]), d.push(this.doSync(e));
                              return d;
                            }.call(a)
                          );
                      return g;
                    };
                  })(this)
                ).observe(document.body, { childList: !0, subtree: !0 })
              : void 0
          );
        }),
        (e.prototype.stop = function () {
          return (
            (this.stopped = !0),
            this.util().removeEvent(
              this.config.scrollContainer || window,
              "scroll",
              this.scrollHandler
            ),
            this.util().removeEvent(window, "resize", this.scrollHandler),
            null != this.interval ? clearInterval(this.interval) : void 0
          );
        }),
        (e.prototype.sync = function (b) {
          return a.notSupported ? this.doSync(this.element) : void 0;
        }),
        (e.prototype.doSync = function (a) {
          var b, c, d, e, f;
          if ((null == a && (a = this.element), 1 === a.nodeType)) {
            for (
              a = a.parentNode || a,
                e = a.querySelectorAll("." + this.config.boxClass),
                f = [],
                c = 0,
                d = e.length;
              d > c;
              c++
            )
              (b = e[c]),
                g.call(this.all, b) < 0
                  ? (this.boxes.push(b),
                    this.all.push(b),
                    this.stopped || this.disabled()
                      ? this.resetStyle()
                      : this.applyStyle(b, !0),
                    f.push((this.scrolled = !0)))
                  : f.push(void 0);
            return f;
          }
        }),
        (e.prototype.show = function (a) {
          return (
            this.applyStyle(a),
            (a.className = a.className + " " + this.config.animateClass),
            null != this.config.callback && this.config.callback(a),
            this.util().emitEvent(a, this.wowEvent),
            this.util().addEvent(a, "animationend", this.resetAnimation),
            this.util().addEvent(a, "oanimationend", this.resetAnimation),
            this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation),
            this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation),
            a
          );
        }),
        (e.prototype.applyStyle = function (a, b) {
          var c, d, e;
          return (
            (d = a.getAttribute("data-wow-duration")),
            (c = a.getAttribute("data-wow-delay")),
            (e = a.getAttribute("data-wow-iteration")),
            this.animate(
              (function (f) {
                return function () {
                  return f.customStyle(a, b, d, c, e);
                };
              })(this)
            )
          );
        }),
        (e.prototype.animate = (function () {
          return "requestAnimationFrame" in window
            ? function (a) {
                return window.requestAnimationFrame(a);
              }
            : function (a) {
                return a();
              };
        })()),
        (e.prototype.resetStyle = function () {
          var a, b, c, d, e;
          for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)
            (a = d[b]), e.push((a.style.visibility = "visible"));
          return e;
        }),
        (e.prototype.resetAnimation = function (a) {
          var b;
          return a.type.toLowerCase().indexOf("animationend") >= 0
            ? ((b = a.target || a.srcElement),
              (b.className = b.className
                .replace(this.config.animateClass, "")
                .trim()))
            : void 0;
        }),
        (e.prototype.customStyle = function (a, b, c, d, e) {
          return (
            b && this.cacheAnimationName(a),
            (a.style.visibility = b ? "hidden" : "visible"),
            c && this.vendorSet(a.style, { animationDuration: c }),
            d && this.vendorSet(a.style, { animationDelay: d }),
            e && this.vendorSet(a.style, { animationIterationCount: e }),
            this.vendorSet(a.style, {
              animationName: b ? "none" : this.cachedAnimationName(a),
            }),
            a
          );
        }),
        (e.prototype.vendors = ["moz", "webkit"]),
        (e.prototype.vendorSet = function (a, b) {
          var c, d, e, f;
          d = [];
          for (c in b)
            (e = b[c]),
              (a["" + c] = e),
              d.push(
                function () {
                  var b, d, g, h;
                  for (
                    g = this.vendors, h = [], b = 0, d = g.length;
                    d > b;
                    b++
                  )
                    (f = g[b]),
                      h.push(
                        (a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] =
                          e)
                      );
                  return h;
                }.call(this)
              );
          return d;
        }),
        (e.prototype.vendorCSS = function (a, b) {
          var c, e, f, g, h, i;
          for (
            h = d(a),
              g = h.getPropertyCSSValue(b),
              f = this.vendors,
              c = 0,
              e = f.length;
            e > c;
            c++
          )
            (i = f[c]), (g = g || h.getPropertyCSSValue("-" + i + "-" + b));
          return g;
        }),
        (e.prototype.animationName = function (a) {
          var b;
          try {
            b = this.vendorCSS(a, "animation-name").cssText;
          } catch (c) {
            b = d(a).getPropertyValue("animation-name");
          }
          return "none" === b ? "" : b;
        }),
        (e.prototype.cacheAnimationName = function (a) {
          return this.animationNameCache.set(a, this.animationName(a));
        }),
        (e.prototype.cachedAnimationName = function (a) {
          return this.animationNameCache.get(a);
        }),
        (e.prototype.scrollHandler = function () {
          return (this.scrolled = !0);
        }),
        (e.prototype.scrollCallback = function () {
          var a;
          return !this.scrolled ||
            ((this.scrolled = !1),
            (this.boxes = function () {
              var b, c, d, e;
              for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++)
                (a = d[b]), a && (this.isVisible(a) ? this.show(a) : e.push(a));
              return e;
            }.call(this)),
            this.boxes.length || this.config.live)
            ? void 0
            : this.stop();
        }),
        (e.prototype.offsetTop = function (a) {
          for (var b; void 0 === a.offsetTop; ) a = a.parentNode;
          for (b = a.offsetTop; (a = a.offsetParent); ) b += a.offsetTop;
          return b;
        }),
        (e.prototype.isVisible = function (a) {
          var b, c, d, e, f;
          return (
            (c = a.getAttribute("data-wow-offset") || this.config.offset),
            (f =
              (this.config.scrollContainer &&
                this.config.scrollContainer.scrollTop) ||
              window.pageYOffset),
            (e =
              f +
              Math.min(this.element.clientHeight, this.util().innerHeight()) -
              c),
            (d = this.offsetTop(a)),
            (b = d + a.clientHeight),
            e >= d && b >= f
          );
        }),
        (e.prototype.util = function () {
          return null != this._util ? this._util : (this._util = new b());
        }),
        (e.prototype.disabled = function () {
          return (
            !this.config.mobile && this.util().isMobile(navigator.userAgent)
          );
        }),
        e
      );
    })());
}).call(this);

var wow = new WOW({
  boxClass: "wow", // animated element css class (default is wow)
  animateClass: "animated", // animation css class (default is animated)
  offset: 0, // distance to the element when triggering the animation (default is 0)
  mobile: false, // trigger animations on mobile devices (default is true)
  live: true, // act on asynchronously loaded content (default is true)
  callback: function (box) {
    // the callback is fired every time an animation is started
    // the argument that is passed in is the DOM node being animated
  },
  scrollContainer: null, // optional scroll container selector, otherwise use window
});
wow.init();

/*!
 * SCROLL
 */
!(function (e, t) {
  "function" == typeof define && define.amd
    ? define([], t(e))
    : "object" == typeof exports
    ? (module.exports = t(e))
    : (e.smoothScroll = t(e));
})(
  "undefined" != typeof global ? global : this.window || this.global,
  function (e) {
    "use strict";
    var t,
      n,
      o,
      r,
      a,
      i,
      u,
      c = {},
      l = "querySelector" in document && "addEventListener" in e,
      s = {
        selector: "[data-scroll]",
        selectorHeader: null,
        speed: 500,
        easing: "easeInOutCubic",
        offset: 0,
        callback: function () {},
      },
      f = function () {
        var e = {},
          t = !1,
          n = 0,
          o = arguments.length;
        "[object Boolean]" === Object.prototype.toString.call(arguments[0]) &&
          ((t = arguments[0]), n++);
        for (
          var r = function (n) {
            for (var o in n)
              Object.prototype.hasOwnProperty.call(n, o) &&
                (t && "[object Object]" === Object.prototype.toString.call(n[o])
                  ? (e[o] = f(!0, e[o], n[o]))
                  : (e[o] = n[o]));
          };
          o > n;
          n++
        ) {
          var a = arguments[n];
          r(a);
        }
        return e;
      },
      d = function (e) {
        return Math.max(e.scrollHeight, e.offsetHeight, e.clientHeight);
      },
      h = function (e, t) {
        var n,
          o,
          r = t.charAt(0),
          a = "classList" in document.documentElement;
        for (
          "[" === r &&
          ((t = t.substr(1, t.length - 2)),
          (n = t.split("=")),
          n.length > 1 &&
            ((o = !0), (n[1] = n[1].replace(/"/g, "").replace(/'/g, ""))));
          e && e !== document && 1 === e.nodeType;
          e = e.parentNode
        ) {
          if ("." === r)
            if (a) {
              if (e.classList.contains(t.substr(1))) return e;
            } else if (
              new RegExp("(^|\\s)" + t.substr(1) + "(\\s|$)").test(e.className)
            )
              return e;
          if ("#" === r && e.id === t.substr(1)) return e;
          if ("[" === r && e.hasAttribute(n[0])) {
            if (!o) return e;
            if (e.getAttribute(n[0]) === n[1]) return e;
          }
          if (e.tagName.toLowerCase() === t) return e;
        }
        return null;
      },
      m = function (e) {
        "#" === e.charAt(0) && (e = e.substr(1));
        for (
          var t,
            n = String(e),
            o = n.length,
            r = -1,
            a = "",
            i = n.charCodeAt(0);
          ++r < o;

        ) {
          if (((t = n.charCodeAt(r)), 0 === t))
            throw new InvalidCharacterError(
              "Invalid character: the input contains U+0000."
            );
          a +=
            (t >= 1 && 31 >= t) ||
            127 == t ||
            (0 === r && t >= 48 && 57 >= t) ||
            (1 === r && t >= 48 && 57 >= t && 45 === i)
              ? "\\" + t.toString(16) + " "
              : t >= 128 ||
                45 === t ||
                95 === t ||
                (t >= 48 && 57 >= t) ||
                (t >= 65 && 90 >= t) ||
                (t >= 97 && 122 >= t)
              ? n.charAt(r)
              : "\\" + n.charAt(r);
        }
        return "#" + a;
      },
      g = function (e, t) {
        var n;
        return (
          "easeInQuad" === e && (n = t * t),
          "easeOutQuad" === e && (n = t * (2 - t)),
          "easeInOutQuad" === e &&
            (n = 0.5 > t ? 2 * t * t : -1 + (4 - 2 * t) * t),
          "easeInCubic" === e && (n = t * t * t),
          "easeOutCubic" === e && (n = --t * t * t + 1),
          "easeInOutCubic" === e &&
            (n =
              0.5 > t
                ? 4 * t * t * t
                : (t - 1) * (2 * t - 2) * (2 * t - 2) + 1),
          "easeInQuart" === e && (n = t * t * t * t),
          "easeOutQuart" === e && (n = 1 - --t * t * t * t),
          "easeInOutQuart" === e &&
            (n = 0.5 > t ? 8 * t * t * t * t : 1 - 8 * --t * t * t * t),
          "easeInQuint" === e && (n = t * t * t * t * t),
          "easeOutQuint" === e && (n = 1 + --t * t * t * t * t),
          "easeInOutQuint" === e &&
            (n =
              0.5 > t ? 16 * t * t * t * t * t : 1 + 16 * --t * t * t * t * t),
          n || t
        );
      },
      p = function (e, t, n) {
        var o = 0;
        if (e.offsetParent)
          do (o += e.offsetTop), (e = e.offsetParent);
          while (e);
        return (o = Math.max(o - t - n, 0)), Math.min(o, v() - b());
      },
      b = function () {
        return Math.max(
          document.documentElement.clientHeight,
          e.innerHeight || 0
        );
      },
      v = function () {
        return Math.max(
          document.body.scrollHeight,
          document.documentElement.scrollHeight,
          document.body.offsetHeight,
          document.documentElement.offsetHeight,
          document.body.clientHeight,
          document.documentElement.clientHeight
        );
      },
      y = function (e) {
        return e && "object" == typeof JSON && "function" == typeof JSON.parse
          ? JSON.parse(e)
          : {};
      },
      O = function (e) {
        return e ? d(e) + e.offsetTop : 0;
      },
      H = function (t, n, o) {
        o ||
          (t.focus(),
          document.activeElement.id !== t.id &&
            (t.setAttribute("tabindex", "-1"),
            t.focus(),
            (t.style.outline = "none")),
          e.scrollTo(0, n));
      };
    c.animateScroll = function (n, o, i) {
      var c = y(o ? o.getAttribute("data-options") : null),
        l = f(t || s, i || {}, c),
        d = "[object Number]" === Object.prototype.toString.call(n) ? !0 : !1,
        h = d || !n.tagName ? null : n;
      if (d || h) {
        var m = e.pageYOffset;
        l.selectorHeader &&
          !r &&
          (r = document.querySelector(l.selectorHeader)),
          a || (a = O(r));
        var b,
          I,
          S = d ? n : p(h, a, parseInt(l.offset, 10)),
          E = S - m,
          A = v(),
          j = 0,
          L = function (t, r, a) {
            var i = e.pageYOffset;
            (t == r || i == r || e.innerHeight + i >= A) &&
              (clearInterval(a), H(n, r, d), l.callback(n, o));
          },
          w = function () {
            (j += 16),
              (b = j / parseInt(l.speed, 10)),
              (b = b > 1 ? 1 : b),
              (I = m + E * g(l.easing, b)),
              e.scrollTo(0, Math.floor(I)),
              L(I, S, u);
          },
          C = function () {
            clearInterval(u), (u = setInterval(w, 16));
          };
        0 === e.pageYOffset && e.scrollTo(0, 0), C();
      }
    };
    var I = function (t) {
        e.location.hash;
        n &&
          ((n.id = n.getAttribute("data-scroll-id")),
          c.animateScroll(n, o),
          (n = null),
          (o = null));
      },
      S = function (r) {
        if (
          0 === r.button &&
          !r.metaKey &&
          !r.ctrlKey &&
          ((o = h(r.target, t.selector)),
          o &&
            "a" === o.tagName.toLowerCase() &&
            o.hostname === e.location.hostname &&
            o.pathname === e.location.pathname &&
            /#/.test(o.href))
        ) {
          var a = m(o.hash);
          if ("#" === a) {
            r.preventDefault(), (n = document.body);
            var i = n.id ? n.id : "smooth-scroll-top";
            return (
              n.setAttribute("data-scroll-id", i),
              (n.id = ""),
              void (e.location.hash.substring(1) === i
                ? I()
                : (e.location.hash = i))
            );
          }
          (n = document.querySelector(a)),
            n &&
              (n.setAttribute("data-scroll-id", n.id),
              (n.id = ""),
              o.hash === e.location.hash && (r.preventDefault(), I()));
        }
      },
      E = function (e) {
        i ||
          (i = setTimeout(function () {
            (i = null), (a = O(r));
          }, 66));
      };
    return (
      (c.destroy = function () {
        t &&
          (document.removeEventListener("click", S, !1),
          e.removeEventListener("resize", E, !1),
          (t = null),
          (n = null),
          (o = null),
          (r = null),
          (a = null),
          (i = null),
          (u = null));
      }),
      (c.init = function (n) {
        l &&
          (c.destroy(),
          (t = f(s, n || {})),
          (r = t.selectorHeader
            ? document.querySelector(t.selectorHeader)
            : null),
          (a = O(r)),
          document.addEventListener("click", S, !1),
          e.addEventListener("hashchange", I, !1),
          r && e.addEventListener("resize", E, !1));
      }),
      c
    );
  }
);

smoothScroll.init({
  selector: "[data-scroll]", // Selector for links (must be a valid CSS selector)
  selectorHeader: "[data-scroll-header]", // Selector for fixed headers (must be a valid CSS selector)
  speed: 500, // Integer. How fast to complete the scroll in milliseconds
  easing: "Linear", // Easing pattern to use
  offset: 90, // Integer. How far to offset the scrolling anchor location in pixels
  updateURL: true, // Boolean. If true, update the URL hash on scroll
  callback: function (anchor, toggle) {}, // Function to run after scrolling
});

/*!
 * LIGHTBOX
 */
!(function (e) {
  function t() {
    var e = location.href;
    return (
      (hashtag =
        -1 !== e.indexOf("#prettyPhoto")
          ? decodeURI(e.substring(e.indexOf("#prettyPhoto") + 1, e.length))
          : !1),
      hashtag && (hashtag = hashtag.replace(/<|>/g, "")),
      hashtag
    );
  }
  function i() {
    "undefined" != typeof theRel &&
      (location.hash = theRel + "/" + rel_index + "/");
  }
  function p() {
    -1 !== location.href.indexOf("#prettyPhoto") &&
      (location.hash = "prettyPhoto");
  }
  function o(e, t) {
    e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var i = "[\\?&]" + e + "=([^&#]*)",
      p = new RegExp(i),
      o = p.exec(t);
    return null == o ? "" : o[1];
  }
  (e.prettyPhoto = { version: "3.1.6" }),
    (e.fn.prettyPhoto = function (a) {
      function s() {
        e(".pp_loaderIcon").hide(),
          (projectedTop =
            scroll_pos.scrollTop + (I / 2 - f.containerHeight / 2)),
          projectedTop < 0 && (projectedTop = 0),
          $ppt.fadeTo(settings.animation_speed, 1),
          $pp_pic_holder
            .find(".pp_content")
            .animate(
              { height: f.contentHeight, width: f.contentWidth },
              settings.animation_speed
            ),
          $pp_pic_holder.animate(
            {
              top: projectedTop,
              left:
                j / 2 - f.containerWidth / 2 < 0
                  ? 0
                  : j / 2 - f.containerWidth / 2,
              width: f.containerWidth,
            },
            settings.animation_speed,
            function () {
              $pp_pic_holder
                .find(".pp_hoverContainer,#fullResImage")
                .height(f.height)
                .width(f.width),
                $pp_pic_holder
                  .find(".pp_fade")
                  .fadeIn(settings.animation_speed),
                isSet && "image" == h(pp_images[set_position])
                  ? $pp_pic_holder.find(".pp_hoverContainer").show()
                  : $pp_pic_holder.find(".pp_hoverContainer").hide(),
                settings.allow_expand &&
                  (f.resized
                    ? e("a.pp_expand,a.pp_contract").show()
                    : e("a.pp_expand").hide()),
                !settings.autoplay_slideshow ||
                  P ||
                  v ||
                  e.prettyPhoto.startSlideshow(),
                settings.changepicturecallback(),
                (v = !0);
            }
          ),
          m(),
          a.ajaxcallback();
      }
      function n(t) {
        $pp_pic_holder
          .find("#pp_full_res object,#pp_full_res embed")
          .css("visibility", "hidden"),
          $pp_pic_holder
            .find(".pp_fade")
            .fadeOut(settings.animation_speed, function () {
              e(".pp_loaderIcon").show(), t();
            });
      }
      function r(t) {
        t > 1 ? e(".pp_nav").show() : e(".pp_nav").hide();
      }
      function l(e, t) {
        if (
          ((resized = !1),
          d(e, t),
          (imageWidth = e),
          (imageHeight = t),
          (k > j || b > I) && doresize && settings.allow_resize && !$)
        ) {
          for (resized = !0, fitting = !1; !fitting; )
            k > j
              ? ((imageWidth = j - 200), (imageHeight = (t / e) * imageWidth))
              : b > I
              ? ((imageHeight = I - 200), (imageWidth = (e / t) * imageHeight))
              : (fitting = !0),
              (b = imageHeight),
              (k = imageWidth);
          (k > j || b > I) && l(k, b), d(imageWidth, imageHeight);
        }
        return {
          width: Math.floor(imageWidth),
          height: Math.floor(imageHeight),
          containerHeight: Math.floor(b),
          containerWidth: Math.floor(k) + 2 * settings.horizontal_padding,
          contentHeight: Math.floor(y),
          contentWidth: Math.floor(w),
          resized: resized,
        };
      }
      function d(t, i) {
        (t = parseFloat(t)),
          (i = parseFloat(i)),
          ($pp_details = $pp_pic_holder.find(".pp_details")),
          $pp_details.width(t),
          (detailsHeight =
            parseFloat($pp_details.css("marginTop")) +
            parseFloat($pp_details.css("marginBottom"))),
          ($pp_details = $pp_details
            .clone()
            .addClass(settings.theme)
            .width(t)
            .appendTo(e("body"))
            .css({ position: "absolute", top: -1e4 })),
          (detailsHeight += $pp_details.height()),
          (detailsHeight = detailsHeight <= 34 ? 36 : detailsHeight),
          $pp_details.remove(),
          ($pp_title = $pp_pic_holder.find(".ppt")),
          $pp_title.width(t),
          (titleHeight =
            parseFloat($pp_title.css("marginTop")) +
            parseFloat($pp_title.css("marginBottom"))),
          ($pp_title = $pp_title
            .clone()
            .appendTo(e("body"))
            .css({ position: "absolute", top: -1e4 })),
          (titleHeight += $pp_title.height()),
          $pp_title.remove(),
          (y = i + detailsHeight),
          (w = t),
          (b =
            y +
            titleHeight +
            $pp_pic_holder.find(".pp_top").height() +
            $pp_pic_holder.find(".pp_bottom").height()),
          (k = t);
      }
      function h(e) {
        return e.match(/youtube\.com\/watch/i) || e.match(/youtu\.be/i)
          ? "youtube"
          : e.match(/vimeo\.com/i)
          ? "vimeo"
          : e.match(/\b.mov\b/i)
          ? "quicktime"
          : e.match(/\b.swf\b/i)
          ? "flash"
          : e.match(/\biframe=true\b/i)
          ? "iframe"
          : e.match(/\bajax=true\b/i)
          ? "ajax"
          : e.match(/\bcustom=true\b/i)
          ? "custom"
          : "#" == e.substr(0, 1)
          ? "inline"
          : "image";
      }
      function c() {
        if (doresize && "undefined" != typeof $pp_pic_holder) {
          if (
            ((scroll_pos = _()),
            (contentHeight = $pp_pic_holder.height()),
            (contentwidth = $pp_pic_holder.width()),
            (projectedTop = I / 2 + scroll_pos.scrollTop - contentHeight / 2),
            projectedTop < 0 && (projectedTop = 0),
            contentHeight > I)
          )
            return;
          $pp_pic_holder.css({
            top: projectedTop,
            left: j / 2 + scroll_pos.scrollLeft - contentwidth / 2,
          });
        }
      }
      function _() {
        return self.pageYOffset
          ? { scrollTop: self.pageYOffset, scrollLeft: self.pageXOffset }
          : document.documentElement && document.documentElement.scrollTop
          ? {
              scrollTop: document.documentElement.scrollTop,
              scrollLeft: document.documentElement.scrollLeft,
            }
          : document.body
          ? {
              scrollTop: document.body.scrollTop,
              scrollLeft: document.body.scrollLeft,
            }
          : void 0;
      }
      function g() {
        (I = e(window).height()),
          (j = e(window).width()),
          "undefined" != typeof $pp_overlay &&
            $pp_overlay.height(e(document).height()).width(j);
      }
      function m() {
        isSet &&
        settings.overlay_gallery &&
        "image" == h(pp_images[set_position])
          ? ((itemWidth = 57),
            (navWidth =
              "facebook" == settings.theme || "pp_default" == settings.theme
                ? 50
                : 30),
            (itemsPerPage = Math.floor(
              (f.containerWidth - 100 - navWidth) / itemWidth
            )),
            (itemsPerPage =
              itemsPerPage < pp_images.length
                ? itemsPerPage
                : pp_images.length),
            (totalPage = Math.ceil(pp_images.length / itemsPerPage) - 1),
            0 == totalPage
              ? ((navWidth = 0),
                $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").hide())
              : $pp_gallery.find(".pp_arrow_next,.pp_arrow_previous").show(),
            (galleryWidth = itemsPerPage * itemWidth),
            (fullGalleryWidth = pp_images.length * itemWidth),
            $pp_gallery
              .css("margin-left", -(galleryWidth / 2 + navWidth / 2))
              .find("div:first")
              .width(galleryWidth + 5)
              .find("ul")
              .width(fullGalleryWidth)
              .find("li.selected")
              .removeClass("selected"),
            (goToPage =
              Math.floor(set_position / itemsPerPage) < totalPage
                ? Math.floor(set_position / itemsPerPage)
                : totalPage),
            e.prettyPhoto.changeGalleryPage(goToPage),
            $pp_gallery_li
              .filter(":eq(" + set_position + ")")
              .addClass("selected"))
          : $pp_pic_holder.find(".pp_content").unbind("mouseenter mouseleave");
      }
      function u() {
        if (
          (settings.social_tools &&
            (facebook_like_link = settings.social_tools.replace(
              "{location_href}",
              encodeURIComponent(location.href)
            )),
          (settings.markup = settings.markup.replace("{pp_social}", "")),
          e("body").append(settings.markup),
          ($pp_pic_holder = e(".pp_pic_holder")),
          ($ppt = e(".ppt")),
          ($pp_overlay = e("div.pp_overlay")),
          isSet && settings.overlay_gallery)
        ) {
          (currentGalleryPage = 0), (toInject = "");
          for (var t = 0; t < pp_images.length; t++)
            pp_images[t].match(/\b(jpg|jpeg|png|gif)\b/gi)
              ? ((classname = ""), (img_src = pp_images[t]))
              : ((classname = "default"), (img_src = "")),
              (toInject +=
                "<li class='" +
                classname +
                "'><a href='#'><img src='" +
                img_src +
                "' width='50' alt='' /></a></li>");
          (toInject = settings.gallery_markup.replace(/{gallery}/g, toInject)),
            $pp_pic_holder.find("#pp_full_res").after(toInject),
            ($pp_gallery = e(".pp_pic_holder .pp_gallery")),
            ($pp_gallery_li = $pp_gallery.find("li")),
            $pp_gallery.find(".pp_arrow_next").click(function () {
              return (
                e.prettyPhoto.changeGalleryPage("next"),
                e.prettyPhoto.stopSlideshow(),
                !1
              );
            }),
            $pp_gallery.find(".pp_arrow_previous").click(function () {
              return (
                e.prettyPhoto.changeGalleryPage("previous"),
                e.prettyPhoto.stopSlideshow(),
                !1
              );
            }),
            $pp_pic_holder.find(".pp_content").hover(
              function () {
                $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeIn();
              },
              function () {
                $pp_pic_holder.find(".pp_gallery:not(.disabled)").fadeOut();
              }
            ),
            (itemWidth = 57),
            $pp_gallery_li.each(function (t) {
              e(this)
                .find("a")
                .click(function () {
                  return (
                    e.prettyPhoto.changePage(t),
                    e.prettyPhoto.stopSlideshow(),
                    !1
                  );
                });
            });
        }
        settings.slideshow &&
          ($pp_pic_holder
            .find(".pp_nav")
            .prepend('<a href="#" class="pp_play">Play</a>'),
          $pp_pic_holder.find(".pp_nav .pp_play").click(function () {
            return e.prettyPhoto.startSlideshow(), !1;
          })),
          $pp_pic_holder.attr("class", "pp_pic_holder " + settings.theme),
          $pp_overlay
            .css({
              opacity: 0,
              height: e(document).height(),
              width: e(window).width(),
            })
            .bind("click", function () {
              settings.modal || e.prettyPhoto.close();
            }),
          e("a.pp_close").bind("click", function () {
            return e.prettyPhoto.close(), !1;
          }),
          settings.allow_expand &&
            e("a.pp_expand").bind("click", function () {
              return (
                e(this).hasClass("pp_expand")
                  ? (e(this).removeClass("pp_expand").addClass("pp_contract"),
                    (doresize = !1))
                  : (e(this).removeClass("pp_contract").addClass("pp_expand"),
                    (doresize = !0)),
                n(function () {
                  e.prettyPhoto.open();
                }),
                !1
              );
            }),
          $pp_pic_holder
            .find(".pp_previous, .pp_nav .pp_arrow_previous")
            .bind("click", function () {
              return (
                e.prettyPhoto.changePage("previous"),
                e.prettyPhoto.stopSlideshow(),
                !1
              );
            }),
          $pp_pic_holder
            .find(".pp_next, .pp_nav .pp_arrow_next")
            .bind("click", function () {
              return (
                e.prettyPhoto.changePage("next"),
                e.prettyPhoto.stopSlideshow(),
                !1
              );
            }),
          c();
      }
      a = jQuery.extend(
        {
          hook: "rel",
          animation_speed: "fast",
          ajaxcallback: function () {},
          slideshow: 5e3,
          autoplay_slideshow: !1,
          opacity: 0.8,
          show_title: !0,
          allow_resize: !0,
          allow_expand: !0,
          default_width: 500,
          default_height: 344,
          counter_separator_label: "/",
          theme: "pp_default",
          horizontal_padding: 20,
          hideflash: !1,
          wmode: "opaque",
          autoplay: !0,
          modal: !1,
          deeplinking: !0,
          overlay_gallery: !0,
          overlay_gallery_max: 30,
          keyboard_shortcuts: !0,
          changepicturecallback: function () {},
          callback: function () {},
          ie6_fallback: !0,
          markup:
            '<div class="pp_pic_holder"> 						<div class="ppt">&nbsp;</div> 						<div class="pp_top"> 							<div class="pp_left"></div> 							<div class="pp_middle"></div> 							<div class="pp_right"></div> 						</div> 						<div class="pp_content_container"> 							<div class="pp_left"> 							<div class="pp_right"> 								<div class="pp_content"> 									<div class="pp_loaderIcon"></div> 									<div class="pp_fade"> 										<a href="#" class="pp_expand" title="Expand the image">Expand</a> 										<div class="pp_hoverContainer"> 											<a class="pp_next" href="#">next</a> 											<a class="pp_previous" href="#">previous</a> 										</div> 										<div id="pp_full_res"></div> 										<div class="pp_details"> 											<div class="pp_nav"> 												<a href="#" class="pp_arrow_previous">Previous</a> 												<p class="currentTextHolder">0/0</p> 												<a href="#" class="pp_arrow_next">Next</a> 											</div> 											<p class="pp_description"></p> 											<div class="pp_social">{pp_social}</div> 											<a class="pp_close" href="#">Close</a> 										</div> 									</div> 								</div> 							</div> 							</div> 						</div> 						<div class="pp_bottom"> 							<div class="pp_left"></div> 							<div class="pp_middle"></div> 							<div class="pp_right"></div> 						</div> 					</div> 					<div class="pp_overlay"></div>',
          gallery_markup:
            '<div class="pp_gallery"> 								<a href="#" class="pp_arrow_previous">Previous</a> 								<div> 									<ul> 										{gallery} 									</ul> 								</div> 								<a href="#" class="pp_arrow_next">Next</a> 							</div>',
          image_markup: '<img id="fullResImage" src="{path}" />',
          flash_markup:
            '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
          quicktime_markup:
            '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
          iframe_markup:
            '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
          inline_markup: '<div class="pp_inline">{content}</div>',
          custom_markup: "",
          social_tools:
            '<div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="//www.facebook.com/plugins/like.php?locale=en_US&href={location_href}&layout=button_count&show_faces=true&width=500&action=like&font&colorscheme=light&height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div>',
        },
        a
      );
      var f,
        v,
        y,
        w,
        b,
        k,
        P,
        x = this,
        $ = !1,
        I = e(window).height(),
        j = e(window).width();
      return (
        (doresize = !0),
        (scroll_pos = _()),
        e(window)
          .unbind("resize.prettyphoto")
          .bind("resize.prettyphoto", function () {
            c(), g();
          }),
        a.keyboard_shortcuts &&
          e(document)
            .unbind("keydown.prettyphoto")
            .bind("keydown.prettyphoto", function (t) {
              if (
                "undefined" != typeof $pp_pic_holder &&
                $pp_pic_holder.is(":visible")
              )
                switch (t.keyCode) {
                  case 37:
                    e.prettyPhoto.changePage("previous"), t.preventDefault();
                    break;
                  case 39:
                    e.prettyPhoto.changePage("next"), t.preventDefault();
                    break;
                  case 27:
                    settings.modal || e.prettyPhoto.close(), t.preventDefault();
                }
            }),
        (e.prettyPhoto.initialize = function () {
          return (
            (settings = a),
            "pp_default" == settings.theme &&
              (settings.horizontal_padding = 16),
            (theRel = e(this).attr(settings.hook)),
            (galleryRegExp = /\[(?:.*)\]/),
            (isSet = galleryRegExp.exec(theRel) ? !0 : !1),
            (pp_images = isSet
              ? jQuery.map(x, function (t) {
                  return -1 != e(t).attr(settings.hook).indexOf(theRel)
                    ? e(t).attr("href")
                    : void 0;
                })
              : e.makeArray(e(this).attr("href"))),
            (pp_titles = isSet
              ? jQuery.map(x, function (t) {
                  return -1 != e(t).attr(settings.hook).indexOf(theRel)
                    ? e(t).find("img").attr("alt")
                      ? e(t).find("img").attr("alt")
                      : ""
                    : void 0;
                })
              : e.makeArray(e(this).find("img").attr("alt"))),
            (pp_descriptions = isSet
              ? jQuery.map(x, function (t) {
                  return -1 != e(t).attr(settings.hook).indexOf(theRel)
                    ? e(t).attr("title")
                      ? e(t).attr("title")
                      : ""
                    : void 0;
                })
              : e.makeArray(e(this).attr("title"))),
            pp_images.length > settings.overlay_gallery_max &&
              (settings.overlay_gallery = !1),
            (set_position = jQuery.inArray(e(this).attr("href"), pp_images)),
            (rel_index = isSet
              ? set_position
              : e("a[" + settings.hook + "^='" + theRel + "']").index(e(this))),
            u(this),
            settings.allow_resize &&
              e(window).bind("scroll.prettyphoto", function () {
                c();
              }),
            e.prettyPhoto.open(),
            !1
          );
        }),
        (e.prettyPhoto.open = function (t) {
          return (
            "undefined" == typeof settings &&
              ((settings = a),
              (pp_images = e.makeArray(arguments[0])),
              (pp_titles = e.makeArray(arguments[1] ? arguments[1] : "")),
              (pp_descriptions = e.makeArray(arguments[2] ? arguments[2] : "")),
              (isSet = pp_images.length > 1 ? !0 : !1),
              (set_position = arguments[3] ? arguments[3] : 0),
              u(t.target)),
            settings.hideflash &&
              e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css(
                "visibility",
                "hidden"
              ),
            r(e(pp_images).size()),
            e(".pp_loaderIcon").show(),
            settings.deeplinking && i(),
            settings.social_tools &&
              ((facebook_like_link = settings.social_tools.replace(
                "{location_href}",
                encodeURIComponent(location.href)
              )),
              $pp_pic_holder.find(".pp_social").html(facebook_like_link)),
            $ppt.is(":hidden") && $ppt.css("opacity", 0).show(),
            $pp_overlay
              .show()
              .fadeTo(settings.animation_speed, settings.opacity),
            $pp_pic_holder
              .find(".currentTextHolder")
              .text(
                set_position +
                  1 +
                  settings.counter_separator_label +
                  e(pp_images).size()
              ),
            "undefined" != typeof pp_descriptions[set_position] &&
            "" != pp_descriptions[set_position]
              ? $pp_pic_holder
                  .find(".pp_description")
                  .show()
                  .html(unescape(pp_descriptions[set_position]))
              : $pp_pic_holder.find(".pp_description").hide(),
            (movie_width = parseFloat(o("width", pp_images[set_position]))
              ? o("width", pp_images[set_position])
              : settings.default_width.toString()),
            (movie_height = parseFloat(o("height", pp_images[set_position]))
              ? o("height", pp_images[set_position])
              : settings.default_height.toString()),
            ($ = !1),
            -1 != movie_height.indexOf("%") &&
              ((movie_height = parseFloat(
                (e(window).height() * parseFloat(movie_height)) / 100 - 150
              )),
              ($ = !0)),
            -1 != movie_width.indexOf("%") &&
              ((movie_width = parseFloat(
                (e(window).width() * parseFloat(movie_width)) / 100 - 150
              )),
              ($ = !0)),
            $pp_pic_holder.fadeIn(function () {
              switch (
                ($ppt.html(
                  settings.show_title &&
                    "" != pp_titles[set_position] &&
                    "undefined" != typeof pp_titles[set_position]
                    ? unescape(pp_titles[set_position])
                    : "&nbsp;"
                ),
                (imgPreloader = ""),
                (skipInjection = !1),
                h(pp_images[set_position]))
              ) {
                case "image":
                  (imgPreloader = new Image()),
                    (nextImage = new Image()),
                    isSet &&
                      set_position < e(pp_images).size() - 1 &&
                      (nextImage.src = pp_images[set_position + 1]),
                    (prevImage = new Image()),
                    isSet &&
                      pp_images[set_position - 1] &&
                      (prevImage.src = pp_images[set_position - 1]),
                    ($pp_pic_holder.find("#pp_full_res")[0].innerHTML =
                      settings.image_markup.replace(
                        /{path}/g,
                        pp_images[set_position]
                      )),
                    (imgPreloader.onload = function () {
                      (f = l(imgPreloader.width, imgPreloader.height)), s();
                    }),
                    (imgPreloader.onerror = function () {
                      alert(
                        "Image cannot be loaded. Make sure the path is correct and image exist."
                      ),
                        e.prettyPhoto.close();
                    }),
                    (imgPreloader.src = pp_images[set_position]);
                  break;
                case "youtube":
                  (f = l(movie_width, movie_height)),
                    (movie_id = o("v", pp_images[set_position])),
                    "" == movie_id &&
                      ((movie_id = pp_images[set_position].split("youtu.be/")),
                      (movie_id = movie_id[1]),
                      movie_id.indexOf("?") > 0 &&
                        (movie_id = movie_id.substr(0, movie_id.indexOf("?"))),
                      movie_id.indexOf("&") > 0 &&
                        (movie_id = movie_id.substr(0, movie_id.indexOf("&")))),
                    (movie = "http://www.youtube.com/embed/" + movie_id),
                    (movie += o("rel", pp_images[set_position])
                      ? "?rel=" + o("rel", pp_images[set_position])
                      : "?rel=1"),
                    settings.autoplay && (movie += "&autoplay=1"),
                    (toInject = settings.iframe_markup
                      .replace(/{width}/g, f.width)
                      .replace(/{height}/g, f.height)
                      .replace(/{wmode}/g, settings.wmode)
                      .replace(/{path}/g, movie));
                  break;
                case "vimeo":
                  (f = l(movie_width, movie_height)),
                    (movie_id = pp_images[set_position]);
                  var t = /http(s?):\/\/(www\.)?vimeo.com\/(\d+)/,
                    i = movie_id.match(t);
                  (movie =
                    "http://player.vimeo.com/video/" +
                    i[3] +
                    "?title=0&byline=0&portrait=0"),
                    settings.autoplay && (movie += "&autoplay=1;"),
                    (vimeo_width = f.width + "/embed/?moog_width=" + f.width),
                    (toInject = settings.iframe_markup
                      .replace(/{width}/g, vimeo_width)
                      .replace(/{height}/g, f.height)
                      .replace(/{path}/g, movie));
                  break;
                case "quicktime":
                  (f = l(movie_width, movie_height)),
                    (f.height += 15),
                    (f.contentHeight += 15),
                    (f.containerHeight += 15),
                    (toInject = settings.quicktime_markup
                      .replace(/{width}/g, f.width)
                      .replace(/{height}/g, f.height)
                      .replace(/{wmode}/g, settings.wmode)
                      .replace(/{path}/g, pp_images[set_position])
                      .replace(/{autoplay}/g, settings.autoplay));
                  break;
                case "flash":
                  (f = l(movie_width, movie_height)),
                    (flash_vars = pp_images[set_position]),
                    (flash_vars = flash_vars.substring(
                      pp_images[set_position].indexOf("flashvars") + 10,
                      pp_images[set_position].length
                    )),
                    (filename = pp_images[set_position]),
                    (filename = filename.substring(0, filename.indexOf("?"))),
                    (toInject = settings.flash_markup
                      .replace(/{width}/g, f.width)
                      .replace(/{height}/g, f.height)
                      .replace(/{wmode}/g, settings.wmode)
                      .replace(/{path}/g, filename + "?" + flash_vars));
                  break;
                case "iframe":
                  (f = l(movie_width, movie_height)),
                    (frame_url = pp_images[set_position]),
                    (frame_url = frame_url.substr(
                      0,
                      frame_url.indexOf("iframe") - 1
                    )),
                    (toInject = settings.iframe_markup
                      .replace(/{width}/g, f.width)
                      .replace(/{height}/g, f.height)
                      .replace(/{path}/g, frame_url));
                  break;
                case "ajax":
                  (doresize = !1),
                    (f = l(movie_width, movie_height)),
                    (doresize = !0),
                    (skipInjection = !0),
                    e.get(pp_images[set_position], function (e) {
                      (toInject = settings.inline_markup.replace(
                        /{content}/g,
                        e
                      )),
                        ($pp_pic_holder.find("#pp_full_res")[0].innerHTML =
                          toInject),
                        s();
                    });
                  break;
                case "custom":
                  (f = l(movie_width, movie_height)),
                    (toInject = settings.custom_markup);
                  break;
                case "inline":
                  (myClone = e(pp_images[set_position])
                    .clone()
                    .append('<br clear="all" />')
                    .css({ width: settings.default_width })
                    .wrapInner(
                      '<div id="pp_full_res"><div class="pp_inline"></div></div>'
                    )
                    .appendTo(e("body"))
                    .show()),
                    (doresize = !1),
                    (f = l(e(myClone).width(), e(myClone).height())),
                    (doresize = !0),
                    e(myClone).remove(),
                    (toInject = settings.inline_markup.replace(
                      /{content}/g,
                      e(pp_images[set_position]).html()
                    ));
              }
              imgPreloader ||
                skipInjection ||
                (($pp_pic_holder.find("#pp_full_res")[0].innerHTML = toInject),
                s());
            }),
            !1
          );
        }),
        (e.prettyPhoto.changePage = function (t) {
          (currentGalleryPage = 0),
            "previous" == t
              ? (set_position--,
                set_position < 0 && (set_position = e(pp_images).size() - 1))
              : "next" == t
              ? (set_position++,
                set_position > e(pp_images).size() - 1 && (set_position = 0))
              : (set_position = t),
            (rel_index = set_position),
            doresize || (doresize = !0),
            settings.allow_expand &&
              e(".pp_contract")
                .removeClass("pp_contract")
                .addClass("pp_expand"),
            n(function () {
              e.prettyPhoto.open();
            });
        }),
        (e.prettyPhoto.changeGalleryPage = function (e) {
          "next" == e
            ? (currentGalleryPage++,
              currentGalleryPage > totalPage && (currentGalleryPage = 0))
            : "previous" == e
            ? (currentGalleryPage--,
              currentGalleryPage < 0 && (currentGalleryPage = totalPage))
            : (currentGalleryPage = e),
            (slide_speed =
              "next" == e || "previous" == e ? settings.animation_speed : 0),
            (slide_to = currentGalleryPage * itemsPerPage * itemWidth),
            $pp_gallery.find("ul").animate({ left: -slide_to }, slide_speed);
        }),
        (e.prettyPhoto.startSlideshow = function () {
          "undefined" == typeof P
            ? ($pp_pic_holder
                .find(".pp_play")
                .unbind("click")
                .removeClass("pp_play")
                .addClass("pp_pause")
                .click(function () {
                  return e.prettyPhoto.stopSlideshow(), !1;
                }),
              (P = setInterval(
                e.prettyPhoto.startSlideshow,
                settings.slideshow
              )))
            : e.prettyPhoto.changePage("next");
        }),
        (e.prettyPhoto.stopSlideshow = function () {
          $pp_pic_holder
            .find(".pp_pause")
            .unbind("click")
            .removeClass("pp_pause")
            .addClass("pp_play")
            .click(function () {
              return e.prettyPhoto.startSlideshow(), !1;
            }),
            clearInterval(P),
            (P = void 0);
        }),
        (e.prettyPhoto.close = function () {
          $pp_overlay.is(":animated") ||
            (e.prettyPhoto.stopSlideshow(),
            $pp_pic_holder
              .stop()
              .find("object,embed")
              .css("visibility", "hidden"),
            e("div.pp_pic_holder,div.ppt,.pp_fade").fadeOut(
              settings.animation_speed,
              function () {
                e(this).remove();
              }
            ),
            $pp_overlay.fadeOut(settings.animation_speed, function () {
              settings.hideflash &&
                e("object,embed,iframe[src*=youtube],iframe[src*=vimeo]").css(
                  "visibility",
                  "visible"
                ),
                e(this).remove(),
                e(window).unbind("scroll.prettyphoto"),
                p(),
                settings.callback(),
                (doresize = !0),
                (v = !1),
                delete settings;
            }));
        }),
        !pp_alreadyInitialized &&
          t() &&
          ((pp_alreadyInitialized = !0),
          (hashIndex = t()),
          (hashRel = hashIndex),
          (hashIndex = hashIndex.substring(
            hashIndex.indexOf("/") + 1,
            hashIndex.length - 1
          )),
          (hashRel = hashRel.substring(0, hashRel.indexOf("/"))),
          setTimeout(function () {
            e(
              "a[" + a.hook + "^='" + hashRel + "']:eq(" + hashIndex + ")"
            ).trigger("click");
          }, 50)),
        this.unbind("click.prettyphoto").bind(
          "click.prettyphoto",
          e.prettyPhoto.initialize
        )
      );
    });
})(jQuery);
var pp_alreadyInitialized = !1;

jQuery("a[data-gal]").each(function () {
  jQuery(this).attr("rel", jQuery(this).data("gal"));
});
jQuery("a[data-rel^='prettyPhoto']").prettyPhoto({
  animationSpeed: "slow",
  theme: "light_square",
  slideshow: true,
  overlay_gallery: true,
  social_tools: false,
  deeplinking: false,
});

/*!
 * DEVICE JS
 */
(function () {
  var e, i, n, o, d, t, c, r, a;
  (window.device = {}),
    (i = window.document.documentElement),
    (a = window.navigator.userAgent.toLowerCase()),
    (device.ios = function () {
      return device.iphone() || device.ipod() || device.ipad();
    }),
    (device.iphone = function () {
      return n("iphone");
    }),
    (device.ipod = function () {
      return n("ipod");
    }),
    (device.ipad = function () {
      return n("ipad");
    }),
    (device.android = function () {
      return n("android");
    }),
    (device.androidPhone = function () {
      return device.android() && n("mobile");
    }),
    (device.androidTablet = function () {
      return device.android() && !n("mobile");
    }),
    (device.blackberry = function () {
      return n("blackberry") || n("bb10") || n("rim");
    }),
    (device.blackberryPhone = function () {
      return device.blackberry() && !n("tablet");
    }),
    (device.blackberryTablet = function () {
      return device.blackberry() && n("tablet");
    }),
    (device.windows = function () {
      return n("windows");
    }),
    (device.windowsPhone = function () {
      return device.windows() && n("phone");
    }),
    (device.windowsTablet = function () {
      return device.windows() && n("touch");
    }),
    (device.fxos = function () {
      return n("(mobile; rv:") || n("(tablet; rv:");
    }),
    (device.fxosPhone = function () {
      return device.fxos() && n("mobile");
    }),
    (device.fxosTablet = function () {
      return device.fxos() && n("tablet");
    }),
    (device.mobile = function () {
      return (
        device.androidPhone() ||
        device.iphone() ||
        device.ipod() ||
        device.windowsPhone() ||
        device.blackberryPhone() ||
        device.fxosPhone()
      );
    }),
    (device.tablet = function () {
      return (
        device.ipad() ||
        device.androidTablet() ||
        device.blackberryTablet() ||
        device.windowsTablet() ||
        device.fxosTablet()
      );
    }),
    (device.portrait = function () {
      return 90 !== Math.abs(window.orientation);
    }),
    (device.landscape = function () {
      return 90 === Math.abs(window.orientation);
    }),
    (n = function (e) {
      return -1 !== a.indexOf(e);
    }),
    (d = function (e) {
      var n;
      return (n = new RegExp(e, "i")), i.className.match(n);
    }),
    (e = function (e) {
      return d(e) ? void 0 : (i.className += " " + e);
    }),
    (c = function (e) {
      return d(e) ? (i.className = i.className.replace(e, "")) : void 0;
    }),
    device.ios()
      ? device.ipad()
        ? e("ios ipad tablet")
        : device.iphone()
        ? e("ios iphone mobile")
        : device.ipod() && e("ios ipod mobile")
      : e(
          device.android()
            ? device.androidTablet()
              ? "android tablet"
              : "android mobile"
            : device.blackberry()
            ? device.blackberryTablet()
              ? "blackberry tablet"
              : "blackberry mobile"
            : device.windows()
            ? device.windowsTablet()
              ? "windows tablet"
              : device.windowsPhone()
              ? "windows mobile"
              : "desktop"
            : device.fxos()
            ? device.fxosTablet()
              ? "fxos tablet"
              : "fxos mobile"
            : "desktop"
        ),
    (o = function () {
      return device.landscape()
        ? (c("portrait"), e("landscape"))
        : (c("landscape"), e("portrait"));
    }),
    (r = "onorientationchange" in window),
    (t = r ? "orientationchange" : "resize"),
    window.addEventListener
      ? window.addEventListener(t, o, !1)
      : window.attachEvent
      ? window.attachEvent(t, o)
      : (window[t] = o),
    o();
}).call(this);

/*!
 * PARALLAX JS
 */
!(function (t, e, i, s) {
  function o(e, i) {
    (this.element = e),
      (this.options = t.extend({}, r, i)),
      (this._defaults = r),
      (this._name = n),
      this.init();
  }
  var n = "stellar",
    r = {
      scrollProperty: "scroll",
      positionProperty: "position",
      horizontalScrolling: !0,
      verticalScrolling: !0,
      horizontalOffset: 0,
      verticalOffset: 0,
      responsive: !1,
      parallaxBackgrounds: !0,
      parallaxElements: !0,
      hideDistantElements: !0,
      hideElement: function (t) {
        t.hide();
      },
      showElement: function (t) {
        t.show();
      },
    },
    a = {
      scroll: {
        getLeft: function (t) {
          return t.scrollLeft();
        },
        setLeft: function (t, e) {
          t.scrollLeft(e);
        },
        getTop: function (t) {
          return t.scrollTop();
        },
        setTop: function (t, e) {
          t.scrollTop(e);
        },
      },
      position: {
        getLeft: function (t) {
          return -1 * parseInt(t.css("left"), 10);
        },
        getTop: function (t) {
          return -1 * parseInt(t.css("top"), 10);
        },
      },
      margin: {
        getLeft: function (t) {
          return -1 * parseInt(t.css("margin-left"), 10);
        },
        getTop: function (t) {
          return -1 * parseInt(t.css("margin-top"), 10);
        },
      },
      transform: {
        getLeft: function (t) {
          var e = getComputedStyle(t[0])[c];
          return "none" !== e
            ? -1 * parseInt(e.match(/(-?[0-9]+)/g)[4], 10)
            : 0;
        },
        getTop: function (t) {
          var e = getComputedStyle(t[0])[c];
          return "none" !== e
            ? -1 * parseInt(e.match(/(-?[0-9]+)/g)[5], 10)
            : 0;
        },
      },
    },
    l = {
      position: {
        setLeft: function (t, e) {
          t.css("left", e);
        },
        setTop: function (t, e) {
          t.css("top", e);
        },
      },
      transform: {
        setPosition: function (t, e, i, s, o) {
          t[0].style[c] =
            "translate3d(" + (e - i) + "px, " + (s - o) + "px, 0)";
        },
      },
    },
    f = (function () {
      var e,
        i = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
        s = t("script")[0].style,
        o = "";
      for (e in s)
        if (i.test(e)) {
          o = e.match(i)[0];
          break;
        }
      return (
        "WebkitOpacity" in s && (o = "Webkit"),
        "KhtmlOpacity" in s && (o = "Khtml"),
        function (t) {
          return (
            o + (o.length > 0 ? t.charAt(0).toUpperCase() + t.slice(1) : t)
          );
        }
      );
    })(),
    c = f("transform"),
    p =
      t("<div />", { style: "background:#fff" }).css(
        "background-position-x"
      ) !== s,
    h = p
      ? function (t, e, i) {
          t.css({ "background-position-x": e, "background-position-y": i });
        }
      : function (t, e, i) {
          t.css("background-position", e + " " + i);
        },
    d = p
      ? function (t) {
          return [
            t.css("background-position-x"),
            t.css("background-position-y"),
          ];
        }
      : function (t) {
          return t.css("background-position").split(" ");
        },
    u =
      e.requestAnimationFrame ||
      e.webkitRequestAnimationFrame ||
      e.mozRequestAnimationFrame ||
      e.oRequestAnimationFrame ||
      e.msRequestAnimationFrame ||
      function (t) {
        setTimeout(t, 1e3 / 60);
      };
  (o.prototype = {
    init: function () {
      (this.options.name = n + "_" + Math.floor(1e9 * Math.random())),
        this._defineElements(),
        this._defineGetters(),
        this._defineSetters(),
        this._handleWindowLoadAndResize(),
        this._detectViewport(),
        this.refresh({ firstLoad: !0 }),
        "scroll" === this.options.scrollProperty
          ? this._handleScrollEvent()
          : this._startAnimationLoop();
    },
    _defineElements: function () {
      this.element === i.body && (this.element = e),
        (this.$scrollElement = t(this.element)),
        (this.$element = this.element === e ? t("body") : this.$scrollElement),
        (this.$viewportElement =
          this.options.viewportElement !== s
            ? t(this.options.viewportElement)
            : this.$scrollElement[0] === e ||
              "scroll" === this.options.scrollProperty
            ? this.$scrollElement
            : this.$scrollElement.parent());
    },
    _defineGetters: function () {
      var t = this,
        e = a[t.options.scrollProperty];
      (this._getScrollLeft = function () {
        return e.getLeft(t.$scrollElement);
      }),
        (this._getScrollTop = function () {
          return e.getTop(t.$scrollElement);
        });
    },
    _defineSetters: function () {
      var e = this,
        i = a[e.options.scrollProperty],
        s = l[e.options.positionProperty],
        o = i.setLeft,
        n = i.setTop;
      (this._setScrollLeft =
        "function" == typeof o
          ? function (t) {
              o(e.$scrollElement, t);
            }
          : t.noop),
        (this._setScrollTop =
          "function" == typeof n
            ? function (t) {
                n(e.$scrollElement, t);
              }
            : t.noop),
        (this._setPosition =
          s.setPosition ||
          function (t, i, o, n, r) {
            e.options.horizontalScrolling && s.setLeft(t, i, o),
              e.options.verticalScrolling && s.setTop(t, n, r);
          });
    },
    _handleWindowLoadAndResize: function () {
      var i = this,
        s = t(e);
      i.options.responsive &&
        s.bind("load." + this.name, function () {
          i.refresh();
        }),
        s.bind("resize." + this.name, function () {
          i._detectViewport(), i.options.responsive && i.refresh();
        });
    },
    refresh: function (i) {
      var s = this,
        o = s._getScrollLeft(),
        n = s._getScrollTop();
      (i && i.firstLoad) || this._reset(),
        this._setScrollLeft(0),
        this._setScrollTop(0),
        this._setOffsets(),
        this._findParticles(),
        this._findBackgrounds(),
        i &&
          i.firstLoad &&
          /WebKit/.test(navigator.userAgent) &&
          t(e).load(function () {
            var t = s._getScrollLeft(),
              e = s._getScrollTop();
            s._setScrollLeft(t + 1),
              s._setScrollTop(e + 1),
              s._setScrollLeft(t),
              s._setScrollTop(e);
          }),
        this._setScrollLeft(o),
        this._setScrollTop(n);
    },
    _detectViewport: function () {
      var t = this.$viewportElement.offset(),
        e = null !== t && t !== s;
      (this.viewportWidth = this.$viewportElement.width()),
        (this.viewportHeight = this.$viewportElement.height()),
        (this.viewportOffsetTop = e ? t.top : 0),
        (this.viewportOffsetLeft = e ? t.left : 0);
    },
    _findParticles: function () {
      var e = this;
      if ((this._getScrollLeft(), this._getScrollTop(), this.particles !== s))
        for (var i = this.particles.length - 1; i >= 0; i--)
          this.particles[i].$element.data("stellar-elementIsActive", s);
      (this.particles = []),
        this.options.parallaxElements &&
          this.$element.find("[data-stellar-ratio]").each(function () {
            var i,
              o,
              n,
              r,
              a,
              l,
              f,
              c,
              p,
              h = t(this),
              d = 0,
              u = 0,
              g = 0,
              m = 0;
            if (h.data("stellar-elementIsActive")) {
              if (h.data("stellar-elementIsActive") !== this) return;
            } else h.data("stellar-elementIsActive", this);
            e.options.showElement(h),
              h.data("stellar-startingLeft")
                ? (h.css("left", h.data("stellar-startingLeft")),
                  h.css("top", h.data("stellar-startingTop")))
                : (h.data("stellar-startingLeft", h.css("left")),
                  h.data("stellar-startingTop", h.css("top"))),
              (n = h.position().left),
              (r = h.position().top),
              (a =
                "auto" === h.css("margin-left")
                  ? 0
                  : parseInt(h.css("margin-left"), 10)),
              (l =
                "auto" === h.css("margin-top")
                  ? 0
                  : parseInt(h.css("margin-top"), 10)),
              (c = h.offset().left - a),
              (p = h.offset().top - l),
              h.parents().each(function () {
                var e = t(this);
                return e.data("stellar-offset-parent") === !0
                  ? ((d = g), (u = m), (f = e), !1)
                  : ((g += e.position().left), void (m += e.position().top));
              }),
              (i =
                h.data("stellar-horizontal-offset") !== s
                  ? h.data("stellar-horizontal-offset")
                  : f !== s && f.data("stellar-horizontal-offset") !== s
                  ? f.data("stellar-horizontal-offset")
                  : e.horizontalOffset),
              (o =
                h.data("stellar-vertical-offset") !== s
                  ? h.data("stellar-vertical-offset")
                  : f !== s && f.data("stellar-vertical-offset") !== s
                  ? f.data("stellar-vertical-offset")
                  : e.verticalOffset),
              e.particles.push({
                $element: h,
                $offsetParent: f,
                isFixed: "fixed" === h.css("position"),
                horizontalOffset: i,
                verticalOffset: o,
                startingPositionLeft: n,
                startingPositionTop: r,
                startingOffsetLeft: c,
                startingOffsetTop: p,
                parentOffsetLeft: d,
                parentOffsetTop: u,
                stellarRatio:
                  h.data("stellar-ratio") !== s ? h.data("stellar-ratio") : 1,
                width: h.outerWidth(!0),
                height: h.outerHeight(!0),
                isHidden: !1,
              });
          });
    },
    _findBackgrounds: function () {
      var e,
        i = this,
        o = this._getScrollLeft(),
        n = this._getScrollTop();
      (this.backgrounds = []),
        this.options.parallaxBackgrounds &&
          ((e = this.$element.find("[data-stellar-background-ratio]")),
          this.$element.data("stellar-background-ratio") &&
            (e = e.add(this.$element)),
          e.each(function () {
            var e,
              r,
              a,
              l,
              f,
              c,
              p,
              u = t(this),
              g = d(u),
              m = 0,
              v = 0,
              L = 0,
              _ = 0;
            if (u.data("stellar-backgroundIsActive")) {
              if (u.data("stellar-backgroundIsActive") !== this) return;
            } else u.data("stellar-backgroundIsActive", this);
            u.data("stellar-backgroundStartingLeft")
              ? h(
                  u,
                  u.data("stellar-backgroundStartingLeft"),
                  u.data("stellar-backgroundStartingTop")
                )
              : (u.data("stellar-backgroundStartingLeft", g[0]),
                u.data("stellar-backgroundStartingTop", g[1])),
              (a =
                "auto" === u.css("margin-left")
                  ? 0
                  : parseInt(u.css("margin-left"), 10)),
              (l =
                "auto" === u.css("margin-top")
                  ? 0
                  : parseInt(u.css("margin-top"), 10)),
              (f = u.offset().left - a - o),
              (c = u.offset().top - l - n),
              u.parents().each(function () {
                var e = t(this);
                return e.data("stellar-offset-parent") === !0
                  ? ((m = L), (v = _), (p = e), !1)
                  : ((L += e.position().left), void (_ += e.position().top));
              }),
              (e =
                u.data("stellar-horizontal-offset") !== s
                  ? u.data("stellar-horizontal-offset")
                  : p !== s && p.data("stellar-horizontal-offset") !== s
                  ? p.data("stellar-horizontal-offset")
                  : i.horizontalOffset),
              (r =
                u.data("stellar-vertical-offset") !== s
                  ? u.data("stellar-vertical-offset")
                  : p !== s && p.data("stellar-vertical-offset") !== s
                  ? p.data("stellar-vertical-offset")
                  : i.verticalOffset),
              i.backgrounds.push({
                $element: u,
                $offsetParent: p,
                isFixed: "fixed" === u.css("background-attachment"),
                horizontalOffset: e,
                verticalOffset: r,
                startingValueLeft: g[0],
                startingValueTop: g[1],
                startingBackgroundPositionLeft: isNaN(parseInt(g[0], 10))
                  ? 0
                  : parseInt(g[0], 10),
                startingBackgroundPositionTop: isNaN(parseInt(g[1], 10))
                  ? 0
                  : parseInt(g[1], 10),
                startingPositionLeft: u.position().left,
                startingPositionTop: u.position().top,
                startingOffsetLeft: f,
                startingOffsetTop: c,
                parentOffsetLeft: m,
                parentOffsetTop: v,
                stellarRatio:
                  u.data("stellar-background-ratio") === s
                    ? 1
                    : u.data("stellar-background-ratio"),
              });
          }));
    },
    _reset: function () {
      var t, e, i, s, o;
      for (o = this.particles.length - 1; o >= 0; o--)
        (t = this.particles[o]),
          (e = t.$element.data("stellar-startingLeft")),
          (i = t.$element.data("stellar-startingTop")),
          this._setPosition(t.$element, e, e, i, i),
          this.options.showElement(t.$element),
          t.$element
            .data("stellar-startingLeft", null)
            .data("stellar-elementIsActive", null)
            .data("stellar-backgroundIsActive", null);
      for (o = this.backgrounds.length - 1; o >= 0; o--)
        (s = this.backgrounds[o]),
          s.$element
            .data("stellar-backgroundStartingLeft", null)
            .data("stellar-backgroundStartingTop", null),
          h(s.$element, s.startingValueLeft, s.startingValueTop);
    },
    destroy: function () {
      this._reset(),
        this.$scrollElement
          .unbind("resize." + this.name)
          .unbind("scroll." + this.name),
        (this._animationLoop = t.noop),
        t(e)
          .unbind("load." + this.name)
          .unbind("resize." + this.name);
    },
    _setOffsets: function () {
      var i = this,
        s = t(e);
      s
        .unbind("resize.horizontal-" + this.name)
        .unbind("resize.vertical-" + this.name),
        "function" == typeof this.options.horizontalOffset
          ? ((this.horizontalOffset = this.options.horizontalOffset()),
            s.bind("resize.horizontal-" + this.name, function () {
              i.horizontalOffset = i.options.horizontalOffset();
            }))
          : (this.horizontalOffset = this.options.horizontalOffset),
        "function" == typeof this.options.verticalOffset
          ? ((this.verticalOffset = this.options.verticalOffset()),
            s.bind("resize.vertical-" + this.name, function () {
              i.verticalOffset = i.options.verticalOffset();
            }))
          : (this.verticalOffset = this.options.verticalOffset);
    },
    _repositionElements: function () {
      var t,
        e,
        i,
        s,
        o,
        n,
        r,
        a,
        l,
        f,
        c = this._getScrollLeft(),
        p = this._getScrollTop(),
        d = !0,
        u = !0;
      if (
        this.currentScrollLeft !== c ||
        this.currentScrollTop !== p ||
        this.currentWidth !== this.viewportWidth ||
        this.currentHeight !== this.viewportHeight
      ) {
        for (
          this.currentScrollLeft = c,
            this.currentScrollTop = p,
            this.currentWidth = this.viewportWidth,
            this.currentHeight = this.viewportHeight,
            f = this.particles.length - 1;
          f >= 0;
          f--
        )
          (t = this.particles[f]),
            (e = t.isFixed ? 1 : 0),
            this.options.horizontalScrolling
              ? ((n =
                  (c +
                    t.horizontalOffset +
                    this.viewportOffsetLeft +
                    t.startingPositionLeft -
                    t.startingOffsetLeft +
                    t.parentOffsetLeft) *
                    -(t.stellarRatio + e - 1) +
                  t.startingPositionLeft),
                (a = n - t.startingPositionLeft + t.startingOffsetLeft))
              : ((n = t.startingPositionLeft), (a = t.startingOffsetLeft)),
            this.options.verticalScrolling
              ? ((r =
                  (p +
                    t.verticalOffset +
                    this.viewportOffsetTop +
                    t.startingPositionTop -
                    t.startingOffsetTop +
                    t.parentOffsetTop) *
                    -(t.stellarRatio + e - 1) +
                  t.startingPositionTop),
                (l = r - t.startingPositionTop + t.startingOffsetTop))
              : ((r = t.startingPositionTop), (l = t.startingOffsetTop)),
            this.options.hideDistantElements &&
              ((u =
                !this.options.horizontalScrolling ||
                (a + t.width > (t.isFixed ? 0 : c) &&
                  a <
                    (t.isFixed ? 0 : c) +
                      this.viewportWidth +
                      this.viewportOffsetLeft)),
              (d =
                !this.options.verticalScrolling ||
                (l + t.height > (t.isFixed ? 0 : p) &&
                  l <
                    (t.isFixed ? 0 : p) +
                      this.viewportHeight +
                      this.viewportOffsetTop))),
            u && d
              ? (t.isHidden &&
                  (this.options.showElement(t.$element), (t.isHidden = !1)),
                this._setPosition(
                  t.$element,
                  n,
                  t.startingPositionLeft,
                  r,
                  t.startingPositionTop
                ))
              : t.isHidden ||
                (this.options.hideElement(t.$element), (t.isHidden = !0));
        for (f = this.backgrounds.length - 1; f >= 0; f--)
          (i = this.backgrounds[f]),
            (e = i.isFixed ? 0 : 1),
            (s = this.options.horizontalScrolling
              ? (c +
                  i.horizontalOffset -
                  this.viewportOffsetLeft -
                  i.startingOffsetLeft +
                  i.parentOffsetLeft -
                  i.startingBackgroundPositionLeft) *
                  (e - i.stellarRatio) +
                "px"
              : i.startingValueLeft),
            (o = this.options.verticalScrolling
              ? (p +
                  i.verticalOffset -
                  this.viewportOffsetTop -
                  i.startingOffsetTop +
                  i.parentOffsetTop -
                  i.startingBackgroundPositionTop) *
                  (e - i.stellarRatio) +
                "px"
              : i.startingValueTop),
            h(i.$element, s, o);
      }
    },
    _handleScrollEvent: function () {
      var t = this,
        e = !1,
        i = function () {
          t._repositionElements(), (e = !1);
        },
        s = function () {
          e || (u(i), (e = !0));
        };
      this.$scrollElement.bind("scroll." + this.name, s), s();
    },
    _startAnimationLoop: function () {
      var t = this;
      (this._animationLoop = function () {
        u(t._animationLoop), t._repositionElements();
      }),
        this._animationLoop();
    },
  }),
    (t.fn[n] = function (e) {
      var i = arguments;
      return e === s || "object" == typeof e
        ? this.each(function () {
            t.data(this, "plugin_" + n) ||
              t.data(this, "plugin_" + n, new o(this, e));
          })
        : "string" == typeof e && "_" !== e[0] && "init" !== e
        ? this.each(function () {
            var s = t.data(this, "plugin_" + n);
            s instanceof o &&
              "function" == typeof s[e] &&
              s[e].apply(s, Array.prototype.slice.call(i, 1)),
              "destroy" === e && t.data(this, "plugin_" + n, null);
          })
        : void 0;
    }),
    (t[n] = function () {
      var i = t(e);
      return i.stellar.apply(i, Array.prototype.slice.call(arguments, 0));
    }),
    (t[n].scrollProperty = a),
    (t[n].positionProperty = l),
    (e.Stellar = o);
})(jQuery, this, document),
  (function () {
    "use strict";
    function t() {
      $.stellar({ positionProperty: "transform" });
    }
    device.tablet() || device.mobile()
      ? $(".parallax, .parallax-layer").addClass("no-parallax")
      : $(window).bind("load", function () {
          t();
        });
  })();

/*!
 * CAROUSEL
 */
!(function (a, b, c, d) {
  function e(b, c) {
    (this.settings = null),
      (this.options = a.extend({}, e.Defaults, c)),
      (this.$element = a(b)),
      (this._handlers = {}),
      (this._plugins = {}),
      (this._supress = {}),
      (this._current = null),
      (this._speed = null),
      (this._coordinates = []),
      (this._breakpoint = null),
      (this._width = null),
      (this._items = []),
      (this._clones = []),
      (this._mergers = []),
      (this._widths = []),
      (this._invalidated = {}),
      (this._pipe = []),
      (this._drag = {
        time: null,
        target: null,
        pointer: null,
        stage: { start: null, current: null },
        direction: null,
      }),
      (this._states = {
        current: {},
        tags: {
          initializing: ["busy"],
          animating: ["busy"],
          dragging: ["interacting"],
        },
      }),
      a.each(
        ["onResize", "onThrottledResize"],
        a.proxy(function (b, c) {
          this._handlers[c] = a.proxy(this[c], this);
        }, this)
      ),
      a.each(
        e.Plugins,
        a.proxy(function (a, b) {
          this._plugins[a.charAt(0).toLowerCase() + a.slice(1)] = new b(this);
        }, this)
      ),
      a.each(
        e.Workers,
        a.proxy(function (b, c) {
          this._pipe.push({ filter: c.filter, run: a.proxy(c.run, this) });
        }, this)
      ),
      this.setup(),
      this.initialize();
  }
  (e.Defaults = {
    items: 3,
    loop: !1,
    center: !1,
    rewind: !1,
    mouseDrag: !0,
    touchDrag: !0,
    pullDrag: !0,
    freeDrag: !1,
    margin: 0,
    stagePadding: 0,
    merge: !1,
    mergeFit: !0,
    autoWidth: !1,
    startPosition: 0,
    rtl: !1,
    smartSpeed: 250,
    fluidSpeed: !1,
    dragEndSpeed: !1,
    responsive: {},
    responsiveRefreshRate: 200,
    responsiveBaseElement: b,
    fallbackEasing: "swing",
    info: !1,
    nestedItemSelector: !1,
    itemElement: "div",
    stageElement: "div",
    refreshClass: "owl-refresh",
    loadedClass: "owl-loaded",
    loadingClass: "owl-loading",
    rtlClass: "owl-rtl",
    responsiveClass: "owl-responsive",
    dragClass: "owl-drag",
    itemClass: "owl-item",
    stageClass: "owl-stage",
    stageOuterClass: "owl-stage-outer",
    grabClass: "owl-grab",
  }),
    (e.Width = { Default: "default", Inner: "inner", Outer: "outer" }),
    (e.Type = { Event: "event", State: "state" }),
    (e.Plugins = {}),
    (e.Workers = [
      {
        filter: ["width", "settings"],
        run: function () {
          this._width = this.$element.width();
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function (a) {
          a.current = this._items && this._items[this.relative(this._current)];
        },
      },
      {
        filter: ["items", "settings"],
        run: function () {
          this.$stage.children(".cloned").remove();
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function (a) {
          var b = this.settings.margin || "",
            c = !this.settings.autoWidth,
            d = this.settings.rtl,
            e = {
              width: "auto",
              "margin-left": d ? b : "",
              "margin-right": d ? "" : b,
            };
          !c && this.$stage.children().css(e), (a.css = e);
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function (a) {
          var b =
              (this.width() / this.settings.items).toFixed(3) -
              this.settings.margin,
            c = null,
            d = this._items.length,
            e = !this.settings.autoWidth,
            f = [];
          for (a.items = { merge: !1, width: b }; d--; )
            (c = this._mergers[d]),
              (c =
                (this.settings.mergeFit && Math.min(c, this.settings.items)) ||
                c),
              (a.items.merge = c > 1 || a.items.merge),
              (f[d] = e ? b * c : this._items[d].width());
          this._widths = f;
        },
      },
      {
        filter: ["items", "settings"],
        run: function () {
          var b = [],
            c = this._items,
            d = this.settings,
            e = Math.max(2 * d.items, 4),
            f = 2 * Math.ceil(c.length / 2),
            g = d.loop && c.length ? (d.rewind ? e : Math.max(e, f)) : 0,
            h = "",
            i = "";
          for (g /= 2; g--; )
            b.push(this.normalize(b.length / 2, !0)),
              (h += c[b[b.length - 1]][0].outerHTML),
              b.push(this.normalize(c.length - 1 - (b.length - 1) / 2, !0)),
              (i = c[b[b.length - 1]][0].outerHTML + i);
          (this._clones = b),
            a(h).addClass("cloned").appendTo(this.$stage),
            a(i).addClass("cloned").prependTo(this.$stage);
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function () {
          for (
            var a = this.settings.rtl ? 1 : -1,
              b = this._clones.length + this._items.length,
              c = -1,
              d = 0,
              e = 0,
              f = [];
            ++c < b;

          )
            (d = f[c - 1] || 0),
              (e = this._widths[this.relative(c)] + this.settings.margin),
              f.push(d + e * a);
          this._coordinates = f;
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function () {
          var a = this.settings.stagePadding,
            b = this._coordinates,
            c = {
              width: Math.ceil(Math.abs(b[b.length - 1])) + 2 * a,
              "padding-left": a || "",
              "padding-right": a || "",
            };
          this.$stage.css(c);
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function (a) {
          var b = this._coordinates.length,
            c = !this.settings.autoWidth,
            d = this.$stage.children();
          if (c && a.items.merge)
            for (; b--; )
              (a.css.width = this._widths[this.relative(b)]),
                d.eq(b).css(a.css);
          else c && ((a.css.width = a.items.width), d.css(a.css));
        },
      },
      {
        filter: ["items"],
        run: function () {
          this._coordinates.length < 1 && this.$stage.removeAttr("style");
        },
      },
      {
        filter: ["width", "items", "settings"],
        run: function (a) {
          (a.current = a.current ? this.$stage.children().index(a.current) : 0),
            (a.current = Math.max(
              this.minimum(),
              Math.min(this.maximum(), a.current)
            )),
            this.reset(a.current);
        },
      },
      {
        filter: ["position"],
        run: function () {
          this.animate(this.coordinates(this._current));
        },
      },
      {
        filter: ["width", "position", "items", "settings"],
        run: function () {
          var a,
            b,
            c,
            d,
            e = this.settings.rtl ? 1 : -1,
            f = 2 * this.settings.stagePadding,
            g = this.coordinates(this.current()) + f,
            h = g + this.width() * e,
            i = [];
          for (c = 0, d = this._coordinates.length; d > c; c++)
            (a = this._coordinates[c - 1] || 0),
              (b = Math.abs(this._coordinates[c]) + f * e),
              ((this.op(a, "<=", g) && this.op(a, ">", h)) ||
                (this.op(b, "<", g) && this.op(b, ">", h))) &&
                i.push(c);
          this.$stage.children(".active").removeClass("active"),
            this.$stage
              .children(":eq(" + i.join("), :eq(") + ")")
              .addClass("active"),
            this.settings.center &&
              (this.$stage.children(".center").removeClass("center"),
              this.$stage.children().eq(this.current()).addClass("center"));
        },
      },
    ]),
    (e.prototype.initialize = function () {
      if (
        (this.enter("initializing"),
        this.trigger("initialize"),
        this.$element.toggleClass(this.settings.rtlClass, this.settings.rtl),
        this.settings.autoWidth && !this.is("pre-loading"))
      ) {
        var b, c, e;
        (b = this.$element.find("img")),
          (c = this.settings.nestedItemSelector
            ? "." + this.settings.nestedItemSelector
            : d),
          (e = this.$element.children(c).width()),
          b.length && 0 >= e && this.preloadAutoWidthImages(b);
      }
      this.$element.addClass(this.options.loadingClass),
        (this.$stage = a(
          "<" +
            this.settings.stageElement +
            ' class="' +
            this.settings.stageClass +
            '"/>'
        ).wrap('<div class="' + this.settings.stageOuterClass + '"/>')),
        this.$element.append(this.$stage.parent()),
        this.replace(this.$element.children().not(this.$stage.parent())),
        this.$element.is(":visible")
          ? this.refresh()
          : this.invalidate("width"),
        this.$element
          .removeClass(this.options.loadingClass)
          .addClass(this.options.loadedClass),
        this.registerEventHandlers(),
        this.leave("initializing"),
        this.trigger("initialized");
    }),
    (e.prototype.setup = function () {
      var b = this.viewport(),
        c = this.options.responsive,
        d = -1,
        e = null;
      c
        ? (a.each(c, function (a) {
            b >= a && a > d && (d = Number(a));
          }),
          (e = a.extend({}, this.options, c[d])),
          delete e.responsive,
          e.responsiveClass &&
            this.$element.attr(
              "class",
              this.$element
                .attr("class")
                .replace(
                  new RegExp(
                    "(" + this.options.responsiveClass + "-)\\S+\\s",
                    "g"
                  ),
                  "$1" + d
                )
            ))
        : (e = a.extend({}, this.options)),
        (null !== this.settings && this._breakpoint === d) ||
          (this.trigger("change", { property: { name: "settings", value: e } }),
          (this._breakpoint = d),
          (this.settings = e),
          this.invalidate("settings"),
          this.trigger("changed", {
            property: { name: "settings", value: this.settings },
          }));
    }),
    (e.prototype.optionsLogic = function () {
      this.settings.autoWidth &&
        ((this.settings.stagePadding = !1), (this.settings.merge = !1));
    }),
    (e.prototype.prepare = function (b) {
      var c = this.trigger("prepare", { content: b });
      return (
        c.data ||
          (c.data = a("<" + this.settings.itemElement + "/>")
            .addClass(this.options.itemClass)
            .append(b)),
        this.trigger("prepared", { content: c.data }),
        c.data
      );
    }),
    (e.prototype.update = function () {
      for (
        var b = 0,
          c = this._pipe.length,
          d = a.proxy(function (a) {
            return this[a];
          }, this._invalidated),
          e = {};
        c > b;

      )
        (this._invalidated.all || a.grep(this._pipe[b].filter, d).length > 0) &&
          this._pipe[b].run(e),
          b++;
      (this._invalidated = {}), !this.is("valid") && this.enter("valid");
    }),
    (e.prototype.width = function (a) {
      switch ((a = a || e.Width.Default)) {
        case e.Width.Inner:
        case e.Width.Outer:
          return this._width;
        default:
          return (
            this._width - 2 * this.settings.stagePadding + this.settings.margin
          );
      }
    }),
    (e.prototype.refresh = function () {
      this.enter("refreshing"),
        this.trigger("refresh"),
        this.setup(),
        this.optionsLogic(),
        this.$element.addClass(this.options.refreshClass),
        this.update(),
        this.$element.removeClass(this.options.refreshClass),
        this.leave("refreshing"),
        this.trigger("refreshed");
    }),
    (e.prototype.onThrottledResize = function () {
      b.clearTimeout(this.resizeTimer),
        (this.resizeTimer = b.setTimeout(
          this._handlers.onResize,
          this.settings.responsiveRefreshRate
        ));
    }),
    (e.prototype.onResize = function () {
      return this._items.length
        ? this._width === this.$element.width()
          ? !1
          : this.$element.is(":visible")
          ? (this.enter("resizing"),
            this.trigger("resize").isDefaultPrevented()
              ? (this.leave("resizing"), !1)
              : (this.invalidate("width"),
                this.refresh(),
                this.leave("resizing"),
                void this.trigger("resized")))
          : !1
        : !1;
    }),
    (e.prototype.registerEventHandlers = function () {
      a.support.transition &&
        this.$stage.on(
          a.support.transition.end + ".owl.core",
          a.proxy(this.onTransitionEnd, this)
        ),
        this.settings.responsive !== !1 &&
          this.on(b, "resize", this._handlers.onThrottledResize),
        this.settings.mouseDrag &&
          (this.$element.addClass(this.options.dragClass),
          this.$stage.on("mousedown.owl.core", a.proxy(this.onDragStart, this)),
          this.$stage.on(
            "dragstart.owl.core selectstart.owl.core",
            function () {
              return !1;
            }
          )),
        this.settings.touchDrag &&
          (this.$stage.on(
            "touchstart.owl.core",
            a.proxy(this.onDragStart, this)
          ),
          this.$stage.on(
            "touchcancel.owl.core",
            a.proxy(this.onDragEnd, this)
          ));
    }),
    (e.prototype.onDragStart = function (b) {
      var d = null;
      3 !== b.which &&
        (a.support.transform
          ? ((d = this.$stage
              .css("transform")
              .replace(/.*\(|\)| /g, "")
              .split(",")),
            (d = {
              x: d[16 === d.length ? 12 : 4],
              y: d[16 === d.length ? 13 : 5],
            }))
          : ((d = this.$stage.position()),
            (d = {
              x: this.settings.rtl
                ? d.left +
                  this.$stage.width() -
                  this.width() +
                  this.settings.margin
                : d.left,
              y: d.top,
            })),
        this.is("animating") &&
          (a.support.transform ? this.animate(d.x) : this.$stage.stop(),
          this.invalidate("position")),
        this.$element.toggleClass(
          this.options.grabClass,
          "mousedown" === b.type
        ),
        this.speed(0),
        (this._drag.time = new Date().getTime()),
        (this._drag.target = a(b.target)),
        (this._drag.stage.start = d),
        (this._drag.stage.current = d),
        (this._drag.pointer = this.pointer(b)),
        a(c).on(
          "mouseup.owl.core touchend.owl.core",
          a.proxy(this.onDragEnd, this)
        ),
        a(c).one(
          "mousemove.owl.core touchmove.owl.core",
          a.proxy(function (b) {
            var d = this.difference(this._drag.pointer, this.pointer(b));
            a(c).on(
              "mousemove.owl.core touchmove.owl.core",
              a.proxy(this.onDragMove, this)
            ),
              (Math.abs(d.x) < Math.abs(d.y) && this.is("valid")) ||
                (b.preventDefault(),
                this.enter("dragging"),
                this.trigger("drag"));
          }, this)
        ));
    }),
    (e.prototype.onDragMove = function (a) {
      var b = null,
        c = null,
        d = null,
        e = this.difference(this._drag.pointer, this.pointer(a)),
        f = this.difference(this._drag.stage.start, e);
      this.is("dragging") &&
        (a.preventDefault(),
        this.settings.loop
          ? ((b = this.coordinates(this.minimum())),
            (c = this.coordinates(this.maximum() + 1) - b),
            (f.x = ((((f.x - b) % c) + c) % c) + b))
          : ((b = this.settings.rtl
              ? this.coordinates(this.maximum())
              : this.coordinates(this.minimum())),
            (c = this.settings.rtl
              ? this.coordinates(this.minimum())
              : this.coordinates(this.maximum())),
            (d = this.settings.pullDrag ? (-1 * e.x) / 5 : 0),
            (f.x = Math.max(Math.min(f.x, b + d), c + d))),
        (this._drag.stage.current = f),
        this.animate(f.x));
    }),
    (e.prototype.onDragEnd = function (b) {
      var d = this.difference(this._drag.pointer, this.pointer(b)),
        e = this._drag.stage.current,
        f = (d.x > 0) ^ this.settings.rtl ? "left" : "right";
      a(c).off(".owl.core"),
        this.$element.removeClass(this.options.grabClass),
        ((0 !== d.x && this.is("dragging")) || !this.is("valid")) &&
          (this.speed(this.settings.dragEndSpeed || this.settings.smartSpeed),
          this.current(this.closest(e.x, 0 !== d.x ? f : this._drag.direction)),
          this.invalidate("position"),
          this.update(),
          (this._drag.direction = f),
          (Math.abs(d.x) > 3 || new Date().getTime() - this._drag.time > 300) &&
            this._drag.target.one("click.owl.core", function () {
              return !1;
            })),
        this.is("dragging") &&
          (this.leave("dragging"), this.trigger("dragged"));
    }),
    (e.prototype.closest = function (b, c) {
      var d = -1,
        e = 30,
        f = this.width(),
        g = this.coordinates();
      return (
        this.settings.freeDrag ||
          a.each(
            g,
            a.proxy(function (a, h) {
              return (
                "left" === c && b > h - e && h + e > b
                  ? (d = a)
                  : "right" === c && b > h - f - e && h - f + e > b
                  ? (d = a + 1)
                  : this.op(b, "<", h) &&
                    this.op(b, ">", g[a + 1] || h - f) &&
                    (d = "left" === c ? a + 1 : a),
                -1 === d
              );
            }, this)
          ),
        this.settings.loop ||
          (this.op(b, ">", g[this.minimum()])
            ? (d = b = this.minimum())
            : this.op(b, "<", g[this.maximum()]) && (d = b = this.maximum())),
        d
      );
    }),
    (e.prototype.animate = function (b) {
      var c = this.speed() > 0;
      this.is("animating") && this.onTransitionEnd(),
        c && (this.enter("animating"), this.trigger("translate")),
        a.support.transform3d && a.support.transition
          ? this.$stage.css({
              transform: "translate3d(" + b + "px,0px,0px)",
              transition: this.speed() / 1e3 + "s",
            })
          : c
          ? this.$stage.animate(
              { left: b + "px" },
              this.speed(),
              this.settings.fallbackEasing,
              a.proxy(this.onTransitionEnd, this)
            )
          : this.$stage.css({ left: b + "px" });
    }),
    (e.prototype.is = function (a) {
      return this._states.current[a] && this._states.current[a] > 0;
    }),
    (e.prototype.current = function (a) {
      if (a === d) return this._current;
      if (0 === this._items.length) return d;
      if (((a = this.normalize(a)), this._current !== a)) {
        var b = this.trigger("change", {
          property: { name: "position", value: a },
        });
        b.data !== d && (a = this.normalize(b.data)),
          (this._current = a),
          this.invalidate("position"),
          this.trigger("changed", {
            property: { name: "position", value: this._current },
          });
      }
      return this._current;
    }),
    (e.prototype.invalidate = function (b) {
      return (
        "string" === a.type(b) &&
          ((this._invalidated[b] = !0),
          this.is("valid") && this.leave("valid")),
        a.map(this._invalidated, function (a, b) {
          return b;
        })
      );
    }),
    (e.prototype.reset = function (a) {
      (a = this.normalize(a)),
        a !== d &&
          ((this._speed = 0),
          (this._current = a),
          this.suppress(["translate", "translated"]),
          this.animate(this.coordinates(a)),
          this.release(["translate", "translated"]));
    }),
    (e.prototype.normalize = function (a, b) {
      var c = this._items.length,
        e = b ? 0 : this._clones.length;
      return (
        !this.isNumeric(a) || 1 > c
          ? (a = d)
          : (0 > a || a >= c + e) &&
            (a = ((((a - e / 2) % c) + c) % c) + e / 2),
        a
      );
    }),
    (e.prototype.relative = function (a) {
      return (a -= this._clones.length / 2), this.normalize(a, !0);
    }),
    (e.prototype.maximum = function (a) {
      var b,
        c = this.settings,
        d = this._coordinates.length,
        e = Math.abs(this._coordinates[d - 1]) - this._width,
        f = -1;
      if (c.loop) d = this._clones.length / 2 + this._items.length - 1;
      else if (c.autoWidth || c.merge)
        for (; d - f > 1; )
          Math.abs(this._coordinates[(b = (d + f) >> 1)]) < e
            ? (f = b)
            : (d = b);
      else d = c.center ? this._items.length - 1 : this._items.length - c.items;
      return a && (d -= this._clones.length / 2), Math.max(d, 0);
    }),
    (e.prototype.minimum = function (a) {
      return a ? 0 : this._clones.length / 2;
    }),
    (e.prototype.items = function (a) {
      return a === d
        ? this._items.slice()
        : ((a = this.normalize(a, !0)), this._items[a]);
    }),
    (e.prototype.mergers = function (a) {
      return a === d
        ? this._mergers.slice()
        : ((a = this.normalize(a, !0)), this._mergers[a]);
    }),
    (e.prototype.clones = function (b) {
      var c = this._clones.length / 2,
        e = c + this._items.length,
        f = function (a) {
          return a % 2 === 0 ? e + a / 2 : c - (a + 1) / 2;
        };
      return b === d
        ? a.map(this._clones, function (a, b) {
            return f(b);
          })
        : a.map(this._clones, function (a, c) {
            return a === b ? f(c) : null;
          });
    }),
    (e.prototype.speed = function (a) {
      return a !== d && (this._speed = a), this._speed;
    }),
    (e.prototype.coordinates = function (b) {
      var c,
        e = 1,
        f = b - 1;
      return b === d
        ? a.map(
            this._coordinates,
            a.proxy(function (a, b) {
              return this.coordinates(b);
            }, this)
          )
        : (this.settings.center
            ? (this.settings.rtl && ((e = -1), (f = b + 1)),
              (c = this._coordinates[b]),
              (c += ((this.width() - c + (this._coordinates[f] || 0)) / 2) * e))
            : (c = this._coordinates[f] || 0),
          (c = Math.ceil(c)));
    }),
    (e.prototype.duration = function (a, b, c) {
      return 0 === c
        ? 0
        : Math.min(Math.max(Math.abs(b - a), 1), 6) *
            Math.abs(c || this.settings.smartSpeed);
    }),
    (e.prototype.to = function (a, b) {
      var c = this.current(),
        d = null,
        e = a - this.relative(c),
        f = (e > 0) - (0 > e),
        g = this._items.length,
        h = this.minimum(),
        i = this.maximum();
      this.settings.loop
        ? (!this.settings.rewind && Math.abs(e) > g / 2 && (e += -1 * f * g),
          (a = c + e),
          (d = ((((a - h) % g) + g) % g) + h),
          d !== a &&
            i >= d - e &&
            d - e > 0 &&
            ((c = d - e), (a = d), this.reset(c)))
        : this.settings.rewind
        ? ((i += 1), (a = ((a % i) + i) % i))
        : (a = Math.max(h, Math.min(i, a))),
        this.speed(this.duration(c, a, b)),
        this.current(a),
        this.$element.is(":visible") && this.update();
    }),
    (e.prototype.next = function (a) {
      (a = a || !1), this.to(this.relative(this.current()) + 1, a);
    }),
    (e.prototype.prev = function (a) {
      (a = a || !1), this.to(this.relative(this.current()) - 1, a);
    }),
    (e.prototype.onTransitionEnd = function (a) {
      return a !== d &&
        (a.stopPropagation(),
        (a.target || a.srcElement || a.originalTarget) !== this.$stage.get(0))
        ? !1
        : (this.leave("animating"), void this.trigger("translated"));
    }),
    (e.prototype.viewport = function () {
      var d;
      if (this.options.responsiveBaseElement !== b)
        d = a(this.options.responsiveBaseElement).width();
      else if (b.innerWidth) d = b.innerWidth;
      else {
        if (!c.documentElement || !c.documentElement.clientWidth)
          throw "Can not detect viewport width.";
        d = c.documentElement.clientWidth;
      }
      return d;
    }),
    (e.prototype.replace = function (b) {
      this.$stage.empty(),
        (this._items = []),
        b && (b = b instanceof jQuery ? b : a(b)),
        this.settings.nestedItemSelector &&
          (b = b.find("." + this.settings.nestedItemSelector)),
        b
          .filter(function () {
            return 1 === this.nodeType;
          })
          .each(
            a.proxy(function (a, b) {
              (b = this.prepare(b)),
                this.$stage.append(b),
                this._items.push(b),
                this._mergers.push(
                  1 *
                    b
                      .find("[data-merge]")
                      .andSelf("[data-merge]")
                      .attr("data-merge") || 1
                );
            }, this)
          ),
        this.reset(
          this.isNumeric(this.settings.startPosition)
            ? this.settings.startPosition
            : 0
        ),
        this.invalidate("items");
    }),
    (e.prototype.add = function (b, c) {
      var e = this.relative(this._current);
      (c = c === d ? this._items.length : this.normalize(c, !0)),
        (b = b instanceof jQuery ? b : a(b)),
        this.trigger("add", { content: b, position: c }),
        (b = this.prepare(b)),
        0 === this._items.length || c === this._items.length
          ? (0 === this._items.length && this.$stage.append(b),
            0 !== this._items.length && this._items[c - 1].after(b),
            this._items.push(b),
            this._mergers.push(
              1 *
                b
                  .find("[data-merge]")
                  .andSelf("[data-merge]")
                  .attr("data-merge") || 1
            ))
          : (this._items[c].before(b),
            this._items.splice(c, 0, b),
            this._mergers.splice(
              c,
              0,
              1 *
                b
                  .find("[data-merge]")
                  .andSelf("[data-merge]")
                  .attr("data-merge") || 1
            )),
        this._items[e] && this.reset(this._items[e].index()),
        this.invalidate("items"),
        this.trigger("added", { content: b, position: c });
    }),
    (e.prototype.remove = function (a) {
      (a = this.normalize(a, !0)),
        a !== d &&
          (this.trigger("remove", { content: this._items[a], position: a }),
          this._items[a].remove(),
          this._items.splice(a, 1),
          this._mergers.splice(a, 1),
          this.invalidate("items"),
          this.trigger("removed", { content: null, position: a }));
    }),
    (e.prototype.preloadAutoWidthImages = function (b) {
      b.each(
        a.proxy(function (b, c) {
          this.enter("pre-loading"),
            (c = a(c)),
            a(new Image())
              .one(
                "load",
                a.proxy(function (a) {
                  c.attr("src", a.target.src),
                    c.css("opacity", 1),
                    this.leave("pre-loading"),
                    !this.is("pre-loading") &&
                      !this.is("initializing") &&
                      this.refresh();
                }, this)
              )
              .attr(
                "src",
                c.attr("src") || c.attr("data-src") || c.attr("data-src-retina")
              );
        }, this)
      );
    }),
    (e.prototype.destroy = function () {
      this.$element.off(".owl.core"),
        this.$stage.off(".owl.core"),
        a(c).off(".owl.core"),
        this.settings.responsive !== !1 &&
          (b.clearTimeout(this.resizeTimer),
          this.off(b, "resize", this._handlers.onThrottledResize));
      for (var d in this._plugins) this._plugins[d].destroy();
      this.$stage.children(".cloned").remove(),
        this.$stage.unwrap(),
        this.$stage.children().contents().unwrap(),
        this.$stage.children().unwrap(),
        this.$element
          .removeClass(this.options.refreshClass)
          .removeClass(this.options.loadingClass)
          .removeClass(this.options.loadedClass)
          .removeClass(this.options.rtlClass)
          .removeClass(this.options.dragClass)
          .removeClass(this.options.grabClass)
          .attr(
            "class",
            this.$element
              .attr("class")
              .replace(
                new RegExp(this.options.responsiveClass + "-\\S+\\s", "g"),
                ""
              )
          )
          .removeData("owl.carousel");
    }),
    (e.prototype.op = function (a, b, c) {
      var d = this.settings.rtl;
      switch (b) {
        case "<":
          return d ? a > c : c > a;
        case ">":
          return d ? c > a : a > c;
        case ">=":
          return d ? c >= a : a >= c;
        case "<=":
          return d ? a >= c : c >= a;
      }
    }),
    (e.prototype.on = function (a, b, c, d) {
      a.addEventListener
        ? a.addEventListener(b, c, d)
        : a.attachEvent && a.attachEvent("on" + b, c);
    }),
    (e.prototype.off = function (a, b, c, d) {
      a.removeEventListener
        ? a.removeEventListener(b, c, d)
        : a.detachEvent && a.detachEvent("on" + b, c);
    }),
    (e.prototype.trigger = function (b, c, d, f, g) {
      var h = { item: { count: this._items.length, index: this.current() } },
        i = a.camelCase(
          a
            .grep(["on", b, d], function (a) {
              return a;
            })
            .join("-")
            .toLowerCase()
        ),
        j = a.Event(
          [b, "owl", d || "carousel"].join(".").toLowerCase(),
          a.extend({ relatedTarget: this }, h, c)
        );
      return (
        this._supress[b] ||
          (a.each(this._plugins, function (a, b) {
            b.onTrigger && b.onTrigger(j);
          }),
          this.register({ type: e.Type.Event, name: b }),
          this.$element.trigger(j),
          this.settings &&
            "function" == typeof this.settings[i] &&
            this.settings[i].call(this, j)),
        j
      );
    }),
    (e.prototype.enter = function (b) {
      a.each(
        [b].concat(this._states.tags[b] || []),
        a.proxy(function (a, b) {
          this._states.current[b] === d && (this._states.current[b] = 0),
            this._states.current[b]++;
        }, this)
      );
    }),
    (e.prototype.leave = function (b) {
      a.each(
        [b].concat(this._states.tags[b] || []),
        a.proxy(function (a, b) {
          this._states.current[b]--;
        }, this)
      );
    }),
    (e.prototype.register = function (b) {
      if (b.type === e.Type.Event) {
        if (
          (a.event.special[b.name] || (a.event.special[b.name] = {}),
          !a.event.special[b.name].owl)
        ) {
          var c = a.event.special[b.name]._default;
          (a.event.special[b.name]._default = function (a) {
            return !c ||
              !c.apply ||
              (a.namespace && -1 !== a.namespace.indexOf("owl"))
              ? a.namespace && a.namespace.indexOf("owl") > -1
              : c.apply(this, arguments);
          }),
            (a.event.special[b.name].owl = !0);
        }
      } else
        b.type === e.Type.State &&
          (this._states.tags[b.name]
            ? (this._states.tags[b.name] = this._states.tags[b.name].concat(
                b.tags
              ))
            : (this._states.tags[b.name] = b.tags),
          (this._states.tags[b.name] = a.grep(
            this._states.tags[b.name],
            a.proxy(function (c, d) {
              return a.inArray(c, this._states.tags[b.name]) === d;
            }, this)
          )));
    }),
    (e.prototype.suppress = function (b) {
      a.each(
        b,
        a.proxy(function (a, b) {
          this._supress[b] = !0;
        }, this)
      );
    }),
    (e.prototype.release = function (b) {
      a.each(
        b,
        a.proxy(function (a, b) {
          delete this._supress[b];
        }, this)
      );
    }),
    (e.prototype.pointer = function (a) {
      var c = { x: null, y: null };
      return (
        (a = a.originalEvent || a || b.event),
        (a =
          a.touches && a.touches.length
            ? a.touches[0]
            : a.changedTouches && a.changedTouches.length
            ? a.changedTouches[0]
            : a),
        a.pageX
          ? ((c.x = a.pageX), (c.y = a.pageY))
          : ((c.x = a.clientX), (c.y = a.clientY)),
        c
      );
    }),
    (e.prototype.isNumeric = function (a) {
      return !isNaN(parseFloat(a));
    }),
    (e.prototype.difference = function (a, b) {
      return { x: a.x - b.x, y: a.y - b.y };
    }),
    (a.fn.owlCarousel = function (b) {
      var c = Array.prototype.slice.call(arguments, 1);
      return this.each(function () {
        var d = a(this),
          f = d.data("owl.carousel");
        f ||
          ((f = new e(this, "object" == typeof b && b)),
          d.data("owl.carousel", f),
          a.each(
            [
              "next",
              "prev",
              "to",
              "destroy",
              "refresh",
              "replace",
              "add",
              "remove",
            ],
            function (b, c) {
              f.register({ type: e.Type.Event, name: c }),
                f.$element.on(
                  c + ".owl.carousel.core",
                  a.proxy(function (a) {
                    a.namespace &&
                      a.relatedTarget !== this &&
                      (this.suppress([c]),
                      f[c].apply(this, [].slice.call(arguments, 1)),
                      this.release([c]));
                  }, f)
                );
            }
          )),
          "string" == typeof b && "_" !== b.charAt(0) && f[b].apply(f, c);
      });
    }),
    (a.fn.owlCarousel.Constructor = e);
})(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this._core = b),
        (this._interval = null),
        (this._visible = null),
        (this._handlers = {
          "initialized.owl.carousel": a.proxy(function (a) {
            a.namespace && this._core.settings.autoRefresh && this.watch();
          }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this._core.$element.on(this._handlers);
    };
    (e.Defaults = { autoRefresh: !0, autoRefreshInterval: 500 }),
      (e.prototype.watch = function () {
        this._interval ||
          ((this._visible = this._core.$element.is(":visible")),
          (this._interval = b.setInterval(
            a.proxy(this.refresh, this),
            this._core.settings.autoRefreshInterval
          )));
      }),
      (e.prototype.refresh = function () {
        this._core.$element.is(":visible") !== this._visible &&
          ((this._visible = !this._visible),
          this._core.$element.toggleClass("owl-hidden", !this._visible),
          this._visible &&
            this._core.invalidate("width") &&
            this._core.refresh());
      }),
      (e.prototype.destroy = function () {
        var a, c;
        b.clearInterval(this._interval);
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (c in Object.getOwnPropertyNames(this))
          "function" != typeof this[c] && (this[c] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.AutoRefresh = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this._core = b),
        (this._loaded = []),
        (this._handlers = {
          "initialized.owl.carousel change.owl.carousel resized.owl.carousel":
            a.proxy(function (b) {
              if (
                b.namespace &&
                this._core.settings &&
                this._core.settings.lazyLoad &&
                ((b.property && "position" == b.property.name) ||
                  "initialized" == b.type)
              )
                for (
                  var c = this._core.settings,
                    e = (c.center && Math.ceil(c.items / 2)) || c.items,
                    f = (c.center && -1 * e) || 0,
                    g =
                      (b.property && b.property.value !== d
                        ? b.property.value
                        : this._core.current()) + f,
                    h = this._core.clones().length,
                    i = a.proxy(function (a, b) {
                      this.load(b);
                    }, this);
                  f++ < e;

                )
                  this.load(h / 2 + this._core.relative(g)),
                    h && a.each(this._core.clones(this._core.relative(g)), i),
                    g++;
            }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this._core.$element.on(this._handlers);
    };
    (e.Defaults = { lazyLoad: !1 }),
      (e.prototype.load = function (c) {
        var d = this._core.$stage.children().eq(c),
          e = d && d.find(".owl-lazy");
        !e ||
          a.inArray(d.get(0), this._loaded) > -1 ||
          (e.each(
            a.proxy(function (c, d) {
              var e,
                f = a(d),
                g =
                  (b.devicePixelRatio > 1 && f.attr("data-src-retina")) ||
                  f.attr("data-src");
              this._core.trigger("load", { element: f, url: g }, "lazy"),
                f.is("img")
                  ? f
                      .one(
                        "load.owl.lazy",
                        a.proxy(function () {
                          f.css("opacity", 1),
                            this._core.trigger(
                              "loaded",
                              { element: f, url: g },
                              "lazy"
                            );
                        }, this)
                      )
                      .attr("src", g)
                  : ((e = new Image()),
                    (e.onload = a.proxy(function () {
                      f.css({
                        "background-image": "url(" + g + ")",
                        opacity: "1",
                      }),
                        this._core.trigger(
                          "loaded",
                          { element: f, url: g },
                          "lazy"
                        );
                    }, this)),
                    (e.src = g));
            }, this)
          ),
          this._loaded.push(d.get(0)));
      }),
      (e.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this._core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this))
          "function" != typeof this[b] && (this[b] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.Lazy = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this._core = b),
        (this._handlers = {
          "initialized.owl.carousel refreshed.owl.carousel": a.proxy(function (
            a
          ) {
            a.namespace && this._core.settings.autoHeight && this.update();
          },
          this),
          "changed.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.settings.autoHeight &&
              "position" == a.property.name &&
              this.update();
          }, this),
          "loaded.owl.lazy": a.proxy(function (a) {
            a.namespace &&
              this._core.settings.autoHeight &&
              a.element.closest("." + this._core.settings.itemClass).index() ===
                this._core.current() &&
              this.update();
          }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this._core.$element.on(this._handlers);
    };
    (e.Defaults = { autoHeight: !1, autoHeightClass: "owl-height" }),
      (e.prototype.update = function () {
        var b = this._core._current,
          c = b + this._core.settings.items,
          d = this._core.$stage.children().toArray().slice(b, c),
          e = [],
          f = 0;
        a.each(d, function (b, c) {
          e.push(a(c).height());
        }),
          (f = Math.max.apply(null, e)),
          this._core.$stage
            .parent()
            .height(f)
            .addClass(this._core.settings.autoHeightClass);
      }),
      (e.prototype.destroy = function () {
        var a, b;
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this))
          "function" != typeof this[b] && (this[b] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.AutoHeight = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this._core = b),
        (this._videos = {}),
        (this._playing = null),
        (this._handlers = {
          "initialized.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.register({
                type: "state",
                name: "playing",
                tags: ["interacting"],
              });
          }, this),
          "resize.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.settings.video &&
              this.isInFullScreen() &&
              a.preventDefault();
          }, this),
          "refreshed.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.is("resizing") &&
              this._core.$stage.find(".cloned .owl-video-frame").remove();
          }, this),
          "changed.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              "position" === a.property.name &&
              this._playing &&
              this.stop();
          }, this),
          "prepared.owl.carousel": a.proxy(function (b) {
            if (b.namespace) {
              var c = a(b.content).find(".owl-video");
              c.length &&
                (c.css("display", "none"), this.fetch(c, a(b.content)));
            }
          }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this._core.$element.on(this._handlers),
        this._core.$element.on(
          "click.owl.video",
          ".owl-video-play-icon",
          a.proxy(function (a) {
            this.play(a);
          }, this)
        );
    };
    (e.Defaults = { video: !1, videoHeight: !1, videoWidth: !1 }),
      (e.prototype.fetch = function (a, b) {
        var c = (function () {
            return a.attr("data-vimeo-id")
              ? "vimeo"
              : a.attr("data-vzaar-id")
              ? "vzaar"
              : "youtube";
          })(),
          d =
            a.attr("data-vimeo-id") ||
            a.attr("data-youtube-id") ||
            a.attr("data-vzaar-id"),
          e = a.attr("data-width") || this._core.settings.videoWidth,
          f = a.attr("data-height") || this._core.settings.videoHeight,
          g = a.attr("href");
        if (!g) throw new Error("Missing video URL.");
        if (
          ((d = g.match(
            /(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/
          )),
          d[3].indexOf("youtu") > -1)
        )
          c = "youtube";
        else if (d[3].indexOf("vimeo") > -1) c = "vimeo";
        else {
          if (!(d[3].indexOf("vzaar") > -1))
            throw new Error("Video URL not supported.");
          c = "vzaar";
        }
        (d = d[6]),
          (this._videos[g] = { type: c, id: d, width: e, height: f }),
          b.attr("data-video", g),
          this.thumbnail(a, this._videos[g]);
      }),
      (e.prototype.thumbnail = function (b, c) {
        var d,
          e,
          f,
          g =
            c.width && c.height
              ? 'style="width:' + c.width + "px;height:" + c.height + 'px;"'
              : "",
          h = b.find("img"),
          i = "src",
          j = "",
          k = this._core.settings,
          l = function (a) {
            (e = '<div class="owl-video-play-icon"></div>'),
              (d = k.lazyLoad
                ? '<div class="owl-video-tn ' +
                  j +
                  '" ' +
                  i +
                  '="' +
                  a +
                  '"></div>'
                : '<div class="owl-video-tn" style="opacity:1;background-image:url(' +
                  a +
                  ')"></div>'),
              b.after(d),
              b.after(e);
          };
        return (
          b.wrap('<div class="owl-video-wrapper"' + g + "></div>"),
          this._core.settings.lazyLoad && ((i = "data-src"), (j = "owl-lazy")),
          h.length
            ? (l(h.attr(i)), h.remove(), !1)
            : void ("youtube" === c.type
                ? ((f = "//img.youtube.com/vi/" + c.id + "/hqdefault.jpg"),
                  l(f))
                : "vimeo" === c.type
                ? a.ajax({
                    type: "GET",
                    url: "//vimeo.com/api/v2/video/" + c.id + ".json",
                    jsonp: "callback",
                    dataType: "jsonp",
                    success: function (a) {
                      (f = a[0].thumbnail_large), l(f);
                    },
                  })
                : "vzaar" === c.type &&
                  a.ajax({
                    type: "GET",
                    url: "//vzaar.com/api/videos/" + c.id + ".json",
                    jsonp: "callback",
                    dataType: "jsonp",
                    success: function (a) {
                      (f = a.framegrab_url), l(f);
                    },
                  }))
        );
      }),
      (e.prototype.stop = function () {
        this._core.trigger("stop", null, "video"),
          this._playing.find(".owl-video-frame").remove(),
          this._playing.removeClass("owl-video-playing"),
          (this._playing = null),
          this._core.leave("playing"),
          this._core.trigger("stopped", null, "video");
      }),
      (e.prototype.play = function (b) {
        var c,
          d = a(b.target),
          e = d.closest("." + this._core.settings.itemClass),
          f = this._videos[e.attr("data-video")],
          g = f.width || "100%",
          h = f.height || this._core.$stage.height();
        this._playing ||
          (this._core.enter("playing"),
          this._core.trigger("play", null, "video"),
          (e = this._core.items(this._core.relative(e.index()))),
          this._core.reset(e.index()),
          "youtube" === f.type
            ? (c =
                '<iframe width="' +
                g +
                '" height="' +
                h +
                '" src="//www.youtube.com/embed/' +
                f.id +
                "?autoplay=1&v=" +
                f.id +
                '" frameborder="0" allowfullscreen></iframe>')
            : "vimeo" === f.type
            ? (c =
                '<iframe src="//player.vimeo.com/video/' +
                f.id +
                '?autoplay=1" width="' +
                g +
                '" height="' +
                h +
                '" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>')
            : "vzaar" === f.type &&
              (c =
                '<iframe frameborder="0"height="' +
                h +
                '"width="' +
                g +
                '" allowfullscreen mozallowfullscreen webkitAllowFullScreen src="//view.vzaar.com/' +
                f.id +
                '/player?autoplay=true"></iframe>'),
          a('<div class="owl-video-frame">' + c + "</div>").insertAfter(
            e.find(".owl-video")
          ),
          (this._playing = e.addClass("owl-video-playing")));
      }),
      (e.prototype.isInFullScreen = function () {
        var b =
          c.fullscreenElement ||
          c.mozFullScreenElement ||
          c.webkitFullscreenElement;
        return b && a(b).parent().hasClass("owl-video-frame");
      }),
      (e.prototype.destroy = function () {
        var a, b;
        this._core.$element.off("click.owl.video");
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this))
          "function" != typeof this[b] && (this[b] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.Video = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this.core = b),
        (this.core.options = a.extend({}, e.Defaults, this.core.options)),
        (this.swapping = !0),
        (this.previous = d),
        (this.next = d),
        (this.handlers = {
          "change.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              "position" == a.property.name &&
              ((this.previous = this.core.current()),
              (this.next = a.property.value));
          }, this),
          "drag.owl.carousel dragged.owl.carousel translated.owl.carousel":
            a.proxy(function (a) {
              a.namespace && (this.swapping = "translated" == a.type);
            }, this),
          "translate.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this.swapping &&
              (this.core.options.animateOut || this.core.options.animateIn) &&
              this.swap();
          }, this),
        }),
        this.core.$element.on(this.handlers);
    };
    (e.Defaults = { animateOut: !1, animateIn: !1 }),
      (e.prototype.swap = function () {
        if (
          1 === this.core.settings.items &&
          a.support.animation &&
          a.support.transition
        ) {
          this.core.speed(0);
          var b,
            c = a.proxy(this.clear, this),
            d = this.core.$stage.children().eq(this.previous),
            e = this.core.$stage.children().eq(this.next),
            f = this.core.settings.animateIn,
            g = this.core.settings.animateOut;
          this.core.current() !== this.previous &&
            (g &&
              ((b =
                this.core.coordinates(this.previous) -
                this.core.coordinates(this.next)),
              d
                .one(a.support.animation.end, c)
                .css({ left: b + "px" })
                .addClass("animated owl-animated-out")
                .addClass(g)),
            f &&
              e
                .one(a.support.animation.end, c)
                .addClass("animated owl-animated-in")
                .addClass(f));
        }
      }),
      (e.prototype.clear = function (b) {
        a(b.target)
          .css({ left: "" })
          .removeClass("animated owl-animated-out owl-animated-in")
          .removeClass(this.core.settings.animateIn)
          .removeClass(this.core.settings.animateOut),
          this.core.onTransitionEnd();
      }),
      (e.prototype.destroy = function () {
        var a, b;
        for (a in this.handlers) this.core.$element.off(a, this.handlers[a]);
        for (b in Object.getOwnPropertyNames(this))
          "function" != typeof this[b] && (this[b] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.Animate = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    var e = function (b) {
      (this._core = b),
        (this._timeout = null),
        (this._paused = !1),
        (this._handlers = {
          "changed.owl.carousel": a.proxy(function (a) {
            a.namespace && "settings" === a.property.name
              ? this._core.settings.autoplay
                ? this.play()
                : this.stop()
              : a.namespace &&
                "position" === a.property.name &&
                this._core.settings.autoplay &&
                this._setAutoPlayInterval();
          }, this),
          "initialized.owl.carousel": a.proxy(function (a) {
            a.namespace && this._core.settings.autoplay && this.play();
          }, this),
          "play.owl.autoplay": a.proxy(function (a, b, c) {
            a.namespace && this.play(b, c);
          }, this),
          "stop.owl.autoplay": a.proxy(function (a) {
            a.namespace && this.stop();
          }, this),
          "mouseover.owl.autoplay": a.proxy(function () {
            this._core.settings.autoplayHoverPause &&
              this._core.is("rotating") &&
              this.pause();
          }, this),
          "mouseleave.owl.autoplay": a.proxy(function () {
            this._core.settings.autoplayHoverPause &&
              this._core.is("rotating") &&
              this.play();
          }, this),
          "touchstart.owl.core": a.proxy(function () {
            this._core.settings.autoplayHoverPause &&
              this._core.is("rotating") &&
              this.pause();
          }, this),
          "touchend.owl.core": a.proxy(function () {
            this._core.settings.autoplayHoverPause && this.play();
          }, this),
        }),
        this._core.$element.on(this._handlers),
        (this._core.options = a.extend({}, e.Defaults, this._core.options));
    };
    (e.Defaults = {
      autoplay: !1,
      autoplayTimeout: 5e3,
      autoplayHoverPause: !1,
      autoplaySpeed: !1,
    }),
      (e.prototype.play = function (a, b) {
        (this._paused = !1),
          this._core.is("rotating") ||
            (this._core.enter("rotating"), this._setAutoPlayInterval());
      }),
      (e.prototype._getNextTimeout = function (d, e) {
        return (
          this._timeout && b.clearTimeout(this._timeout),
          b.setTimeout(
            a.proxy(function () {
              this._paused ||
                this._core.is("busy") ||
                this._core.is("interacting") ||
                c.hidden ||
                this._core.next(e || this._core.settings.autoplaySpeed);
            }, this),
            d || this._core.settings.autoplayTimeout
          )
        );
      }),
      (e.prototype._setAutoPlayInterval = function () {
        this._timeout = this._getNextTimeout();
      }),
      (e.prototype.stop = function () {
        this._core.is("rotating") &&
          (b.clearTimeout(this._timeout), this._core.leave("rotating"));
      }),
      (e.prototype.pause = function () {
        this._core.is("rotating") && (this._paused = !0);
      }),
      (e.prototype.destroy = function () {
        var a, b;
        this.stop();
        for (a in this._handlers) this._core.$element.off(a, this._handlers[a]);
        for (b in Object.getOwnPropertyNames(this))
          "function" != typeof this[b] && (this[b] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.autoplay = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    "use strict";
    var e = function (b) {
      (this._core = b),
        (this._initialized = !1),
        (this._pages = []),
        (this._controls = {}),
        (this._templates = []),
        (this.$element = this._core.$element),
        (this._overrides = {
          next: this._core.next,
          prev: this._core.prev,
          to: this._core.to,
        }),
        (this._handlers = {
          "prepared.owl.carousel": a.proxy(function (b) {
            b.namespace &&
              this._core.settings.dotsData &&
              this._templates.push(
                '<div class="' +
                  this._core.settings.dotClass +
                  '">' +
                  a(b.content)
                    .find("[data-dot]")
                    .addBack("[data-dot]")
                    .attr("data-dot") +
                  "</div>"
              );
          }, this),
          "added.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.settings.dotsData &&
              this._templates.splice(a.position, 0, this._templates.pop());
          }, this),
          "remove.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._core.settings.dotsData &&
              this._templates.splice(a.position, 1);
          }, this),
          "changed.owl.carousel": a.proxy(function (a) {
            a.namespace && "position" == a.property.name && this.draw();
          }, this),
          "initialized.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              !this._initialized &&
              (this._core.trigger("initialize", null, "navigation"),
              this.initialize(),
              this.update(),
              this.draw(),
              (this._initialized = !0),
              this._core.trigger("initialized", null, "navigation"));
          }, this),
          "refreshed.owl.carousel": a.proxy(function (a) {
            a.namespace &&
              this._initialized &&
              (this._core.trigger("refresh", null, "navigation"),
              this.update(),
              this.draw(),
              this._core.trigger("refreshed", null, "navigation"));
          }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this.$element.on(this._handlers);
    };
    (e.Defaults = {
      nav: !1,
      navText: ["prev", "next"],
      navSpeed: !1,
      navElement: "div",
      navContainer: !1,
      navContainerClass: "owl-nav",
      navClass: ["owl-prev", "owl-next"],
      slideBy: 1,
      dotClass: "owl-dot",
      dotsClass: "owl-dots",
      dots: !0,
      dotsEach: !1,
      dotsData: !1,
      dotsSpeed: !1,
      dotsContainer: !1,
    }),
      (e.prototype.initialize = function () {
        var b,
          c = this._core.settings;
        (this._controls.$relative = (
          c.navContainer
            ? a(c.navContainer)
            : a("<div>").addClass(c.navContainerClass).appendTo(this.$element)
        ).addClass("disabled")),
          (this._controls.$previous = a("<" + c.navElement + ">")
            .addClass(c.navClass[0])
            .html(c.navText[0])
            .prependTo(this._controls.$relative)
            .on(
              "click",
              a.proxy(function (a) {
                this.prev(c.navSpeed);
              }, this)
            )),
          (this._controls.$next = a("<" + c.navElement + ">")
            .addClass(c.navClass[1])
            .html(c.navText[1])
            .appendTo(this._controls.$relative)
            .on(
              "click",
              a.proxy(function (a) {
                this.next(c.navSpeed);
              }, this)
            )),
          c.dotsData ||
            (this._templates = [
              a("<div>")
                .addClass(c.dotClass)
                .append(a("<span>"))
                .prop("outerHTML"),
            ]),
          (this._controls.$absolute = (
            c.dotsContainer
              ? a(c.dotsContainer)
              : a("<div>").addClass(c.dotsClass).appendTo(this.$element)
          ).addClass("disabled")),
          this._controls.$absolute.on(
            "click",
            "div",
            a.proxy(function (b) {
              var d = a(b.target).parent().is(this._controls.$absolute)
                ? a(b.target).index()
                : a(b.target).parent().index();
              b.preventDefault(), this.to(d, c.dotsSpeed);
            }, this)
          );
        for (b in this._overrides) this._core[b] = a.proxy(this[b], this);
      }),
      (e.prototype.destroy = function () {
        var a, b, c, d;
        for (a in this._handlers) this.$element.off(a, this._handlers[a]);
        for (b in this._controls) this._controls[b].remove();
        for (d in this.overides) this._core[d] = this._overrides[d];
        for (c in Object.getOwnPropertyNames(this))
          "function" != typeof this[c] && (this[c] = null);
      }),
      (e.prototype.update = function () {
        var a,
          b,
          c,
          d = this._core.clones().length / 2,
          e = d + this._core.items().length,
          f = this._core.maximum(!0),
          g = this._core.settings,
          h = g.center || g.autoWidth || g.dotsData ? 1 : g.dotsEach || g.items;
        if (
          ("page" !== g.slideBy && (g.slideBy = Math.min(g.slideBy, g.items)),
          g.dots || "page" == g.slideBy)
        )
          for (this._pages = [], a = d, b = 0, c = 0; e > a; a++) {
            if (b >= h || 0 === b) {
              if (
                (this._pages.push({
                  start: Math.min(f, a - d),
                  end: a - d + h - 1,
                }),
                Math.min(f, a - d) === f)
              )
                break;
              (b = 0), ++c;
            }
            b += this._core.mergers(this._core.relative(a));
          }
      }),
      (e.prototype.draw = function () {
        var b,
          c = this._core.settings,
          d = this._core.items().length <= c.items,
          e = this._core.relative(this._core.current()),
          f = c.loop || c.rewind;
        this._controls.$relative.toggleClass("disabled", !c.nav || d),
          c.nav &&
            (this._controls.$previous.toggleClass(
              "disabled",
              !f && e <= this._core.minimum(!0)
            ),
            this._controls.$next.toggleClass(
              "disabled",
              !f && e >= this._core.maximum(!0)
            )),
          this._controls.$absolute.toggleClass("disabled", !c.dots || d),
          c.dots &&
            ((b =
              this._pages.length - this._controls.$absolute.children().length),
            c.dotsData && 0 !== b
              ? this._controls.$absolute.html(this._templates.join(""))
              : b > 0
              ? this._controls.$absolute.append(
                  new Array(b + 1).join(this._templates[0])
                )
              : 0 > b && this._controls.$absolute.children().slice(b).remove(),
            this._controls.$absolute.find(".active").removeClass("active"),
            this._controls.$absolute
              .children()
              .eq(a.inArray(this.current(), this._pages))
              .addClass("active"));
      }),
      (e.prototype.onTrigger = function (b) {
        var c = this._core.settings;
        b.page = {
          index: a.inArray(this.current(), this._pages),
          count: this._pages.length,
          size:
            c &&
            (c.center || c.autoWidth || c.dotsData ? 1 : c.dotsEach || c.items),
        };
      }),
      (e.prototype.current = function () {
        var b = this._core.relative(this._core.current());
        return a
          .grep(
            this._pages,
            a.proxy(function (a, c) {
              return a.start <= b && a.end >= b;
            }, this)
          )
          .pop();
      }),
      (e.prototype.getPosition = function (b) {
        var c,
          d,
          e = this._core.settings;
        return (
          "page" == e.slideBy
            ? ((c = a.inArray(this.current(), this._pages)),
              (d = this._pages.length),
              b ? ++c : --c,
              (c = this._pages[((c % d) + d) % d].start))
            : ((c = this._core.relative(this._core.current())),
              (d = this._core.items().length),
              b ? (c += e.slideBy) : (c -= e.slideBy)),
          c
        );
      }),
      (e.prototype.next = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!0), b);
      }),
      (e.prototype.prev = function (b) {
        a.proxy(this._overrides.to, this._core)(this.getPosition(!1), b);
      }),
      (e.prototype.to = function (b, c, d) {
        var e;
        !d && this._pages.length
          ? ((e = this._pages.length),
            a.proxy(this._overrides.to, this._core)(
              this._pages[((b % e) + e) % e].start,
              c
            ))
          : a.proxy(this._overrides.to, this._core)(b, c);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.Navigation = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    "use strict";
    var e = function (c) {
      (this._core = c),
        (this._hashes = {}),
        (this.$element = this._core.$element),
        (this._handlers = {
          "initialized.owl.carousel": a.proxy(function (c) {
            c.namespace &&
              "URLHash" === this._core.settings.startPosition &&
              a(b).trigger("hashchange.owl.navigation");
          }, this),
          "prepared.owl.carousel": a.proxy(function (b) {
            if (b.namespace) {
              var c = a(b.content)
                .find("[data-hash]")
                .addBack("[data-hash]")
                .attr("data-hash");
              if (!c) return;
              this._hashes[c] = b.content;
            }
          }, this),
          "changed.owl.carousel": a.proxy(function (c) {
            if (c.namespace && "position" === c.property.name) {
              var d = this._core.items(
                  this._core.relative(this._core.current())
                ),
                e = a
                  .map(this._hashes, function (a, b) {
                    return a === d ? b : null;
                  })
                  .join();
              if (!e || b.location.hash.slice(1) === e) return;
              b.location.hash = e;
            }
          }, this),
        }),
        (this._core.options = a.extend({}, e.Defaults, this._core.options)),
        this.$element.on(this._handlers),
        a(b).on(
          "hashchange.owl.navigation",
          a.proxy(function (a) {
            var c = b.location.hash.substring(1),
              e = this._core.$stage.children(),
              f = this._hashes[c] && e.index(this._hashes[c]);
            f !== d &&
              f !== this._core.current() &&
              this._core.to(this._core.relative(f), !1, !0);
          }, this)
        );
    };
    (e.Defaults = { URLhashListener: !1 }),
      (e.prototype.destroy = function () {
        var c, d;
        a(b).off("hashchange.owl.navigation");
        for (c in this._handlers) this._core.$element.off(c, this._handlers[c]);
        for (d in Object.getOwnPropertyNames(this))
          "function" != typeof this[d] && (this[d] = null);
      }),
      (a.fn.owlCarousel.Constructor.Plugins.Hash = e);
  })(window.Zepto || window.jQuery, window, document),
  (function (a, b, c, d) {
    function e(b, c) {
      var e = !1,
        f = b.charAt(0).toUpperCase() + b.slice(1);
      return (
        a.each((b + " " + h.join(f + " ") + f).split(" "), function (a, b) {
          return g[b] !== d ? ((e = c ? b : !0), !1) : void 0;
        }),
        e
      );
    }
    function f(a) {
      return e(a, !0);
    }
    var g = a("<support>").get(0).style,
      h = "Webkit Moz O ms".split(" "),
      i = {
        transition: {
          end: {
            WebkitTransition: "webkitTransitionEnd",
            MozTransition: "transitionend",
            OTransition: "oTransitionEnd",
            transition: "transitionend",
          },
        },
        animation: {
          end: {
            WebkitAnimation: "webkitAnimationEnd",
            MozAnimation: "animationend",
            OAnimation: "oAnimationEnd",
            animation: "animationend",
          },
        },
      },
      j = {
        csstransforms: function () {
          return !!e("transform");
        },
        csstransforms3d: function () {
          return !!e("perspective");
        },
        csstransitions: function () {
          return !!e("transition");
        },
        cssanimations: function () {
          return !!e("animation");
        },
      };
    j.csstransitions() &&
      ((a.support.transition = new String(f("transition"))),
      (a.support.transition.end = i.transition.end[a.support.transition])),
      j.cssanimations() &&
        ((a.support.animation = new String(f("animation"))),
        (a.support.animation.end = i.animation.end[a.support.animation])),
      j.csstransforms() &&
        ((a.support.transform = new String(f("transform"))),
        (a.support.transform3d = j.csstransforms3d()));
  })(window.Zepto || window.jQuery, window, document);

$(".owl-watch").owlCarousel({
  loop: false,
  margin: 0,
  dots: false,
  nav: true,
  responsiveClass: true,
  navText: [
    "<i class='fa fa-angle-left effect-1'></i>",
    "<i class='fa fa-angle-right effect-1'></i>",
  ],
  responsive: {
    0: {
      nav: false,
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});

$(".owl-services").owlCarousel({
  loop: false,
  margin: 30,
  dots: false,
  nav: true,
  responsiveClass: true,
  navText: [
    "<i class='fa fa-angle-left effect-1'></i>",
    "<i class='fa fa-angle-right effect-1'></i>",
  ],
  responsive: {
    0: {
      nav: false,
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

$(".testi-carousel").owlCarousel({
  loop: true,
  margin: 30,
  dots: true,
  nav: false,
  responsiveClass: true,
  navText: [
    "<i class='fa fa-angle-left effect-1'></i>",
    "<i class='fa fa-angle-right effect-1'></i>",
  ],
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    600: {
      items: 1,
      nav: false,
    },
    1000: {
      items: 1,
      loop: false,
    },
    1200: {
      items: 1,
      loop: false,
    },
  },
});

/*!
 * PORTFOLIO
 */
!(function (t, i, s) {
  "use strict";
  var e,
    n = t.document,
    o = t.Modernizr,
    r = function (t) {
      return t.charAt(0).toUpperCase() + t.slice(1);
    },
    a = "Moz Webkit O Ms".split(" "),
    h = function (t) {
      var i,
        s = n.documentElement.style;
      if ("string" == typeof s[t]) return t;
      t = r(t);
      for (var e = 0, o = a.length; o > e; e++)
        if (((i = a[e] + t), "string" == typeof s[i])) return i;
    },
    l = h("transform"),
    u = h("transitionProperty"),
    c = {
      csstransforms: function () {
        return !!l;
      },
      csstransforms3d: function () {
        var t = !!h("perspective");
        if (t) {
          var s = " -o- -moz- -ms- -webkit- -khtml- ".split(" "),
            e = "@media (" + s.join("transform-3d),(") + "modernizr)",
            n = i("<style>" + e + "{#modernizr{height:3px}}</style>").appendTo(
              "head"
            ),
            o = i('<div id="modernizr" />').appendTo("html");
          (t = 3 === o.height()), o.remove(), n.remove();
        }
        return t;
      },
      csstransitions: function () {
        return !!u;
      },
    };
  if (o) for (e in c) o.hasOwnProperty(e) || o.addTest(e, c[e]);
  else {
    o = t.Modernizr = { _version: "1.6ish: miniModernizr for Isotope" };
    var d,
      f = " ";
    for (e in c) (d = c[e]()), (o[e] = d), (f += " " + (d ? "" : "no-") + e);
    i("html").addClass(f);
  }
  if (o.csstransforms) {
    var m = o.csstransforms3d
        ? {
            translate: function (t) {
              return "translate3d(" + t[0] + "px, " + t[1] + "px, 0) ";
            },
            scale: function (t) {
              return "scale3d(" + t + ", " + t + ", 1) ";
            },
          }
        : {
            translate: function (t) {
              return "translate(" + t[0] + "px, " + t[1] + "px) ";
            },
            scale: function (t) {
              return "scale(" + t + ") ";
            },
          },
      p = function (t, s, e) {
        var n,
          o,
          r = i.data(t, "isoTransform") || {},
          a = {},
          h = {};
        (a[s] = e), i.extend(r, a);
        for (n in r) (o = r[n]), (h[n] = m[n](o));
        var u = h.translate || "",
          c = h.scale || "",
          d = u + c;
        i.data(t, "isoTransform", r), (t.style[l] = d);
      };
    (i.cssNumber.scale = !0),
      (i.cssHooks.scale = {
        set: function (t, i) {
          p(t, "scale", i);
        },
        get: function (t, s) {
          var e = i.data(t, "isoTransform");
          return e && e.scale ? e.scale : 1;
        },
      }),
      (i.fx.step.scale = function (t) {
        i.cssHooks.scale.set(t.elem, t.now + t.unit);
      }),
      (i.cssNumber.translate = !0),
      (i.cssHooks.translate = {
        set: function (t, i) {
          p(t, "translate", i);
        },
        get: function (t, s) {
          var e = i.data(t, "isoTransform");
          return e && e.translate ? e.translate : [0, 0];
        },
      });
  }
  var y, g;
  o.csstransitions &&
    ((y = {
      WebkitTransitionProperty: "webkitTransitionEnd",
      MozTransitionProperty: "transitionend",
      OTransitionProperty: "oTransitionEnd otransitionend",
      transitionProperty: "transitionend",
    }[u]),
    (g = h("transitionDuration")));
  var v,
    _ = i.event,
    A = i.event.handle ? "handle" : "dispatch";
  (_.special.smartresize = {
    setup: function () {
      i(this).bind("resize", _.special.smartresize.handler);
    },
    teardown: function () {
      i(this).unbind("resize", _.special.smartresize.handler);
    },
    handler: function (t, i) {
      var s = this,
        e = arguments;
      (t.type = "smartresize"),
        v && clearTimeout(v),
        (v = setTimeout(
          function () {
            _[A].apply(s, e);
          },
          "execAsap" === i ? 0 : 100
        ));
    },
  }),
    (i.fn.smartresize = function (t) {
      return t
        ? this.bind("smartresize", t)
        : this.trigger("smartresize", ["execAsap"]);
    }),
    (i.Isotope = function (t, s, e) {
      (this.element = i(s)), this._create(t), this._init(e);
    });
  var w = ["width", "height"],
    C = i(t);
  (i.Isotope.settings = {
    resizable: !0,
    layoutMode: "masonry",
    containerClass: "isotope",
    itemClass: "isotope-item",
    hiddenClass: "isotope-hidden",
    hiddenStyle: { opacity: 0, scale: 0.001 },
    visibleStyle: { opacity: 1, scale: 1 },
    containerStyle: { position: "relative", overflow: "hidden" },
    animationEngine: "best-available",
    animationOptions: { queue: !1, duration: 800 },
    sortBy: "original-order",
    sortAscending: !0,
    resizesContainer: !0,
    transformsEnabled: !0,
    itemPositionDataEnabled: !1,
  }),
    (i.Isotope.prototype = {
      _create: function (t) {
        (this.options = i.extend({}, i.Isotope.settings, t)),
          (this.styleQueue = []),
          (this.elemCount = 0);
        var s = this.element[0].style;
        this.originalStyle = {};
        var e = w.slice(0);
        for (var n in this.options.containerStyle) e.push(n);
        for (var o = 0, r = e.length; r > o; o++)
          (n = e[o]), (this.originalStyle[n] = s[n] || "");
        this.element.css(this.options.containerStyle),
          this._updateAnimationEngine(),
          this._updateUsingTransforms();
        var a = {
          "original-order": function (t, i) {
            return i.elemCount++, i.elemCount;
          },
          random: function () {
            return Math.random();
          },
        };
        (this.options.getSortData = i.extend(this.options.getSortData, a)),
          this.reloadItems(),
          (this.offset = {
            left: parseInt(this.element.css("padding-left") || 0, 10),
            top: parseInt(this.element.css("padding-top") || 0, 10),
          });
        var h = this;
        setTimeout(function () {
          h.element.addClass(h.options.containerClass);
        }, 0),
          this.options.resizable &&
            C.bind("smartresize.isotope", function () {
              h.resize();
            }),
          this.element.delegate(
            "." + this.options.hiddenClass,
            "click",
            function () {
              return !1;
            }
          );
      },
      _getAtoms: function (t) {
        var i = this.options.itemSelector,
          s = i ? t.filter(i).add(t.find(i)) : t,
          e = { position: "absolute" };
        return (
          (s = s.filter(function (t, i) {
            return 1 === i.nodeType;
          })),
          this.usingTransforms && ((e.left = 0), (e.top = 0)),
          s.css(e).addClass(this.options.itemClass),
          this.updateSortData(s, !0),
          s
        );
      },
      _init: function (t) {
        (this.$filteredAtoms = this._filter(this.$allAtoms)),
          this._sort(),
          this.reLayout(t);
      },
      option: function (t) {
        if (i.isPlainObject(t)) {
          this.options = i.extend(!0, this.options, t);
          var s;
          for (var e in t) (s = "_update" + r(e)), this[s] && this[s]();
        }
      },
      _updateAnimationEngine: function () {
        var t,
          i = this.options.animationEngine.toLowerCase().replace(/[ _\-]/g, "");
        switch (i) {
          case "css":
          case "none":
            t = !1;
            break;
          case "jquery":
            t = !0;
            break;
          default:
            t = !o.csstransitions;
        }
        (this.isUsingJQueryAnimation = t), this._updateUsingTransforms();
      },
      _updateTransformsEnabled: function () {
        this._updateUsingTransforms();
      },
      _updateUsingTransforms: function () {
        var t = (this.usingTransforms =
          this.options.transformsEnabled &&
          o.csstransforms &&
          o.csstransitions &&
          !this.isUsingJQueryAnimation);
        t ||
          (delete this.options.hiddenStyle.scale,
          delete this.options.visibleStyle.scale),
          (this.getPositionStyles = t ? this._translate : this._positionAbs);
      },
      _filter: function (t) {
        var i = "" === this.options.filter ? "*" : this.options.filter;
        if (!i) return t;
        var s = this.options.hiddenClass,
          e = "." + s,
          n = t.filter(e),
          o = n;
        if ("*" !== i) {
          o = n.filter(i);
          var r = t.not(e).not(i).addClass(s);
          this.styleQueue.push({ $el: r, style: this.options.hiddenStyle });
        }
        return (
          this.styleQueue.push({ $el: o, style: this.options.visibleStyle }),
          o.removeClass(s),
          t.filter(i)
        );
      },
      updateSortData: function (t, s) {
        var e,
          n,
          o = this,
          r = this.options.getSortData;
        t.each(function () {
          (e = i(this)), (n = {});
          for (var t in r)
            s || "original-order" !== t
              ? (n[t] = r[t](e, o))
              : (n[t] = i.data(this, "isotope-sort-data")[t]);
          i.data(this, "isotope-sort-data", n);
        });
      },
      _sort: function () {
        var t = this.options.sortBy,
          i = this._getSorter,
          s = this.options.sortAscending ? 1 : -1,
          e = function (e, n) {
            var o = i(e, t),
              r = i(n, t);
            return (
              o === r &&
                "original-order" !== t &&
                ((o = i(e, "original-order")), (r = i(n, "original-order"))),
              (o > r ? 1 : r > o ? -1 : 0) * s
            );
          };
        this.$filteredAtoms.sort(e);
      },
      _getSorter: function (t, s) {
        return i.data(t, "isotope-sort-data")[s];
      },
      _translate: function (t, i) {
        return { translate: [t, i] };
      },
      _positionAbs: function (t, i) {
        return { left: t, top: i };
      },
      _pushPosition: function (t, i, s) {
        (i = Math.round(i + this.offset.left)),
          (s = Math.round(s + this.offset.top));
        var e = this.getPositionStyles(i, s);
        this.styleQueue.push({ $el: t, style: e }),
          this.options.itemPositionDataEnabled &&
            t.data("isotope-item-position", { x: i, y: s });
      },
      layout: function (t, i) {
        var s = this.options.layoutMode;
        if ((this["_" + s + "Layout"](t), this.options.resizesContainer)) {
          var e = this["_" + s + "GetContainerSize"]();
          this.styleQueue.push({ $el: this.element, style: e });
        }
        this._processStyleQueue(t, i), (this.isLaidOut = !0);
      },
      _processStyleQueue: function (t, s) {
        var e,
          n,
          r,
          a,
          h = this.isLaidOut && this.isUsingJQueryAnimation ? "animate" : "css",
          l = this.options.animationOptions,
          u = this.options.onLayout;
        if (
          ((n = function (t, i) {
            i.$el[h](i.style, l);
          }),
          this._isInserting && this.isUsingJQueryAnimation)
        )
          n = function (t, i) {
            (e = i.$el.hasClass("no-transition") ? "css" : h),
              i.$el[e](i.style, l);
          };
        else if (s || u || l.complete) {
          var c = !1,
            d = [s, u, l.complete],
            f = this;
          if (
            ((r = !0),
            (a = function () {
              if (!c) {
                for (var i, s = 0, e = d.length; e > s; s++)
                  (i = d[s]), "function" == typeof i && i.call(f.element, t, f);
                c = !0;
              }
            }),
            this.isUsingJQueryAnimation && "animate" === h)
          )
            (l.complete = a), (r = !1);
          else if (o.csstransitions) {
            for (
              var m, p = 0, v = this.styleQueue[0], _ = v && v.$el;
              !_ || !_.length;

            ) {
              if (((m = this.styleQueue[p++]), !m)) return;
              _ = m.$el;
            }
            var A = parseFloat(getComputedStyle(_[0])[g]);
            A > 0 &&
              ((n = function (t, i) {
                i.$el[h](i.style, l).one(y, a);
              }),
              (r = !1));
          }
        }
        i.each(this.styleQueue, n), r && a(), (this.styleQueue = []);
      },
      resize: function () {
        this["_" + this.options.layoutMode + "ResizeChanged"]() &&
          this.reLayout();
      },
      reLayout: function (t) {
        this["_" + this.options.layoutMode + "Reset"](),
          this.layout(this.$filteredAtoms, t);
      },
      addItems: function (t, i) {
        var s = this._getAtoms(t);
        (this.$allAtoms = this.$allAtoms.add(s)), i && i(s);
      },
      insert: function (t, i) {
        this.element.append(t);
        var s = this;
        this.addItems(t, function (t) {
          var e = s._filter(t);
          s._addHideAppended(e),
            s._sort(),
            s.reLayout(),
            s._revealAppended(e, i);
        });
      },
      appended: function (t, i) {
        var s = this;
        this.addItems(t, function (t) {
          s._addHideAppended(t), s.layout(t), s._revealAppended(t, i);
        });
      },
      _addHideAppended: function (t) {
        (this.$filteredAtoms = this.$filteredAtoms.add(t)),
          t.addClass("no-transition"),
          (this._isInserting = !0),
          this.styleQueue.push({ $el: t, style: this.options.hiddenStyle });
      },
      _revealAppended: function (t, i) {
        var s = this;
        setTimeout(function () {
          t.removeClass("no-transition"),
            s.styleQueue.push({ $el: t, style: s.options.visibleStyle }),
            (s._isInserting = !1),
            s._processStyleQueue(t, i);
        }, 10);
      },
      reloadItems: function () {
        this.$allAtoms = this._getAtoms(this.element.children());
      },
      remove: function (t, i) {
        (this.$allAtoms = this.$allAtoms.not(t)),
          (this.$filteredAtoms = this.$filteredAtoms.not(t));
        var s = this,
          e = function () {
            t.remove(), i && i.call(s.element);
          };
        t.filter(":not(." + this.options.hiddenClass + ")").length
          ? (this.styleQueue.push({ $el: t, style: this.options.hiddenStyle }),
            this._sort(),
            this.reLayout(e))
          : e();
      },
      shuffle: function (t) {
        this.updateSortData(this.$allAtoms),
          (this.options.sortBy = "random"),
          this._sort(),
          this.reLayout(t);
      },
      destroy: function () {
        var t = this.usingTransforms,
          i = this.options;
        this.$allAtoms
          .removeClass(i.hiddenClass + " " + i.itemClass)
          .each(function () {
            var i = this.style;
            (i.position = ""),
              (i.top = ""),
              (i.left = ""),
              (i.opacity = ""),
              t && (i[l] = "");
          });
        var s = this.element[0].style;
        for (var e in this.originalStyle) s[e] = this.originalStyle[e];
        this.element
          .unbind(".isotope")
          .undelegate("." + i.hiddenClass, "click")
          .removeClass(i.containerClass)
          .removeData("isotope"),
          C.unbind(".isotope");
      },
      _getSegments: function (t) {
        var i,
          s = this.options.layoutMode,
          e = t ? "rowHeight" : "columnWidth",
          n = t ? "height" : "width",
          o = t ? "rows" : "cols",
          a = this.element[n](),
          h =
            (this.options[s] && this.options[s][e]) ||
            this.$filteredAtoms["outer" + r(n)](!0) ||
            a;
        (i = Math.floor(a / h)),
          (i = Math.max(i, 1)),
          (this[s][o] = i),
          (this[s][e] = h);
      },
      _checkIfSegmentsChanged: function (t) {
        var i = this.options.layoutMode,
          s = t ? "rows" : "cols",
          e = this[i][s];
        return this._getSegments(t), this[i][s] !== e;
      },
      _masonryReset: function () {
        (this.masonry = {}), this._getSegments();
        var t = this.masonry.cols;
        for (this.masonry.colYs = []; t--; ) this.masonry.colYs.push(0);
      },
      _masonryLayout: function (t) {
        var s = this,
          e = s.masonry;
        t.each(function () {
          var t = i(this),
            n = Math.ceil(t.outerWidth(!0) / e.columnWidth);
          if (((n = Math.min(n, e.cols)), 1 === n))
            s._masonryPlaceBrick(t, e.colYs);
          else {
            var o,
              r,
              a = e.cols + 1 - n,
              h = [];
            for (r = 0; a > r; r++)
              (o = e.colYs.slice(r, r + n)), (h[r] = Math.max.apply(Math, o));
            s._masonryPlaceBrick(t, h);
          }
        });
      },
      _masonryPlaceBrick: function (t, i) {
        for (
          var s = Math.min.apply(Math, i), e = 0, n = 0, o = i.length;
          o > n;
          n++
        )
          if (i[n] === s) {
            e = n;
            break;
          }
        var r = this.masonry.columnWidth * e,
          a = s;
        this._pushPosition(t, r, a);
        var h = s + t.outerHeight(!0),
          l = this.masonry.cols + 1 - o;
        for (n = 0; l > n; n++) this.masonry.colYs[e + n] = h;
      },
      _masonryGetContainerSize: function () {
        var t = Math.max.apply(Math, this.masonry.colYs);
        return { height: t };
      },
      _masonryResizeChanged: function () {
        return this._checkIfSegmentsChanged();
      },
      _fitRowsReset: function () {
        this.fitRows = { x: 0, y: 0, height: 0 };
      },
      _fitRowsLayout: function (t) {
        var s = this,
          e = this.element.width(),
          n = this.fitRows;
        t.each(function () {
          var t = i(this),
            o = t.outerWidth(!0),
            r = t.outerHeight(!0);
          0 !== n.x && o + n.x > e && ((n.x = 0), (n.y = n.height)),
            s._pushPosition(t, n.x, n.y),
            (n.height = Math.max(n.y + r, n.height)),
            (n.x += o);
        });
      },
      _fitRowsGetContainerSize: function () {
        return { height: this.fitRows.height };
      },
      _fitRowsResizeChanged: function () {
        return !0;
      },
      _cellsByRowReset: function () {
        (this.cellsByRow = { index: 0 }),
          this._getSegments(),
          this._getSegments(!0);
      },
      _cellsByRowLayout: function (t) {
        var s = this,
          e = this.cellsByRow;
        t.each(function () {
          var t = i(this),
            n = e.index % e.cols,
            o = Math.floor(e.index / e.cols),
            r = (n + 0.5) * e.columnWidth - t.outerWidth(!0) / 2,
            a = (o + 0.5) * e.rowHeight - t.outerHeight(!0) / 2;
          s._pushPosition(t, r, a), e.index++;
        });
      },
      _cellsByRowGetContainerSize: function () {
        return {
          height:
            Math.ceil(this.$filteredAtoms.length / this.cellsByRow.cols) *
              this.cellsByRow.rowHeight +
            this.offset.top,
        };
      },
      _cellsByRowResizeChanged: function () {
        return this._checkIfSegmentsChanged();
      },
      _straightDownReset: function () {
        this.straightDown = { y: 0 };
      },
      _straightDownLayout: function (t) {
        var s = this;
        t.each(function (t) {
          var e = i(this);
          s._pushPosition(e, 0, s.straightDown.y),
            (s.straightDown.y += e.outerHeight(!0));
        });
      },
      _straightDownGetContainerSize: function () {
        return { height: this.straightDown.y };
      },
      _straightDownResizeChanged: function () {
        return !0;
      },
      _masonryHorizontalReset: function () {
        (this.masonryHorizontal = {}), this._getSegments(!0);
        var t = this.masonryHorizontal.rows;
        for (this.masonryHorizontal.rowXs = []; t--; )
          this.masonryHorizontal.rowXs.push(0);
      },
      _masonryHorizontalLayout: function (t) {
        var s = this,
          e = s.masonryHorizontal;
        t.each(function () {
          var t = i(this),
            n = Math.ceil(t.outerHeight(!0) / e.rowHeight);
          if (((n = Math.min(n, e.rows)), 1 === n))
            s._masonryHorizontalPlaceBrick(t, e.rowXs);
          else {
            var o,
              r,
              a = e.rows + 1 - n,
              h = [];
            for (r = 0; a > r; r++)
              (o = e.rowXs.slice(r, r + n)), (h[r] = Math.max.apply(Math, o));
            s._masonryHorizontalPlaceBrick(t, h);
          }
        });
      },
      _masonryHorizontalPlaceBrick: function (t, i) {
        for (
          var s = Math.min.apply(Math, i), e = 0, n = 0, o = i.length;
          o > n;
          n++
        )
          if (i[n] === s) {
            e = n;
            break;
          }
        var r = s,
          a = this.masonryHorizontal.rowHeight * e;
        this._pushPosition(t, r, a);
        var h = s + t.outerWidth(!0),
          l = this.masonryHorizontal.rows + 1 - o;
        for (n = 0; l > n; n++) this.masonryHorizontal.rowXs[e + n] = h;
      },
      _masonryHorizontalGetContainerSize: function () {
        var t = Math.max.apply(Math, this.masonryHorizontal.rowXs);
        return { width: t };
      },
      _masonryHorizontalResizeChanged: function () {
        return this._checkIfSegmentsChanged(!0);
      },
      _fitColumnsReset: function () {
        this.fitColumns = { x: 0, y: 0, width: 0 };
      },
      _fitColumnsLayout: function (t) {
        var s = this,
          e = this.element.height(),
          n = this.fitColumns;
        t.each(function () {
          var t = i(this),
            o = t.outerWidth(!0),
            r = t.outerHeight(!0);
          0 !== n.y && r + n.y > e && ((n.x = n.width), (n.y = 0)),
            s._pushPosition(t, n.x, n.y),
            (n.width = Math.max(n.x + o, n.width)),
            (n.y += r);
        });
      },
      _fitColumnsGetContainerSize: function () {
        return { width: this.fitColumns.width };
      },
      _fitColumnsResizeChanged: function () {
        return !0;
      },
      _cellsByColumnReset: function () {
        (this.cellsByColumn = { index: 0 }),
          this._getSegments(),
          this._getSegments(!0);
      },
      _cellsByColumnLayout: function (t) {
        var s = this,
          e = this.cellsByColumn;
        t.each(function () {
          var t = i(this),
            n = Math.floor(e.index / e.rows),
            o = e.index % e.rows,
            r = (n + 0.5) * e.columnWidth - t.outerWidth(!0) / 2,
            a = (o + 0.5) * e.rowHeight - t.outerHeight(!0) / 2;
          s._pushPosition(t, r, a), e.index++;
        });
      },
      _cellsByColumnGetContainerSize: function () {
        return {
          width:
            Math.ceil(this.$filteredAtoms.length / this.cellsByColumn.rows) *
            this.cellsByColumn.columnWidth,
        };
      },
      _cellsByColumnResizeChanged: function () {
        return this._checkIfSegmentsChanged(!0);
      },
      _straightAcrossReset: function () {
        this.straightAcross = { x: 0 };
      },
      _straightAcrossLayout: function (t) {
        var s = this;
        t.each(function (t) {
          var e = i(this);
          s._pushPosition(e, s.straightAcross.x, 0),
            (s.straightAcross.x += e.outerWidth(!0));
        });
      },
      _straightAcrossGetContainerSize: function () {
        return { width: this.straightAcross.x };
      },
      _straightAcrossResizeChanged: function () {
        return !0;
      },
    }),
    (i.fn.imagesLoaded = function (t) {
      function s() {
        t.call(n, o);
      }
      function e(t) {
        var n = t.target;
        n.src !== a &&
          -1 === i.inArray(n, h) &&
          (h.push(n),
          --r <= 0 && (setTimeout(s), o.unbind(".imagesLoaded", e)));
      }
      var n = this,
        o = n.find("img").add(n.filter("img")),
        r = o.length,
        a =
          "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==",
        h = [];
      return (
        r || s(),
        o.bind("load.imagesLoaded error.imagesLoaded", e).each(function () {
          var t = this.src;
          (this.src = a), (this.src = t);
        }),
        n
      );
    });
  var z = function (i) {
    t.console && t.console.error(i);
  };
  i.fn.isotope = function (t, s) {
    if ("string" == typeof t) {
      var e = Array.prototype.slice.call(arguments, 1);
      this.each(function () {
        var s = i.data(this, "isotope");
        return s
          ? i.isFunction(s[t]) && "_" !== t.charAt(0)
            ? void s[t].apply(s, e)
            : void z("no such method '" + t + "' for isotope instance")
          : void z(
              "cannot call methods on isotope prior to initialization; attempted to call method '" +
                t +
                "'"
            );
      });
    } else
      this.each(function () {
        var e = i.data(this, "isotope");
        e
          ? (e.option(t), e._init(s))
          : i.data(this, "isotope", new i.Isotope(t, this, s));
      });
    return this;
  };
})(window, jQuery);

/*!
 * IMAGESLOAD PORTFOLIO
 */
(function () {
  function e() {}
  function t(e, t) {
    for (var n = e.length; n--; ) if (e[n].listener === t) return n;
    return -1;
  }
  function n(e) {
    return function () {
      return this[e].apply(this, arguments);
    };
  }
  var i = e.prototype,
    r = this,
    o = r.EventEmitter;
  (i.getListeners = function (e) {
    var t,
      n,
      i = this._getEvents();
    if ("object" == typeof e) {
      t = {};
      for (n in i) i.hasOwnProperty(n) && e.test(n) && (t[n] = i[n]);
    } else t = i[e] || (i[e] = []);
    return t;
  }),
    (i.flattenListeners = function (e) {
      var t,
        n = [];
      for (t = 0; t < e.length; t += 1) n.push(e[t].listener);
      return n;
    }),
    (i.getListenersAsObject = function (e) {
      var t,
        n = this.getListeners(e);
      return n instanceof Array && ((t = {}), (t[e] = n)), t || n;
    }),
    (i.addListener = function (e, n) {
      var i,
        r = this.getListenersAsObject(e),
        o = "object" == typeof n;
      for (i in r)
        r.hasOwnProperty(i) &&
          -1 === t(r[i], n) &&
          r[i].push(o ? n : { listener: n, once: !1 });
      return this;
    }),
    (i.on = n("addListener")),
    (i.addOnceListener = function (e, t) {
      return this.addListener(e, { listener: t, once: !0 });
    }),
    (i.once = n("addOnceListener")),
    (i.defineEvent = function (e) {
      return this.getListeners(e), this;
    }),
    (i.defineEvents = function (e) {
      for (var t = 0; t < e.length; t += 1) this.defineEvent(e[t]);
      return this;
    }),
    (i.removeListener = function (e, n) {
      var i,
        r,
        o = this.getListenersAsObject(e);
      for (r in o)
        o.hasOwnProperty(r) &&
          ((i = t(o[r], n)), -1 !== i && o[r].splice(i, 1));
      return this;
    }),
    (i.off = n("removeListener")),
    (i.addListeners = function (e, t) {
      return this.manipulateListeners(!1, e, t);
    }),
    (i.removeListeners = function (e, t) {
      return this.manipulateListeners(!0, e, t);
    }),
    (i.manipulateListeners = function (e, t, n) {
      var i,
        r,
        o = e ? this.removeListener : this.addListener,
        s = e ? this.removeListeners : this.addListeners;
      if ("object" != typeof t || t instanceof RegExp)
        for (i = n.length; i--; ) o.call(this, t, n[i]);
      else
        for (i in t)
          t.hasOwnProperty(i) &&
            (r = t[i]) &&
            ("function" == typeof r ? o.call(this, i, r) : s.call(this, i, r));
      return this;
    }),
    (i.removeEvent = function (e) {
      var t,
        n = typeof e,
        i = this._getEvents();
      if ("string" === n) delete i[e];
      else if ("object" === n)
        for (t in i) i.hasOwnProperty(t) && e.test(t) && delete i[t];
      else delete this._events;
      return this;
    }),
    (i.removeAllListeners = n("removeEvent")),
    (i.emitEvent = function (e, t) {
      var n,
        i,
        r,
        o,
        s = this.getListenersAsObject(e);
      for (r in s)
        if (s.hasOwnProperty(r))
          for (i = s[r].length; i--; )
            (n = s[r][i]),
              n.once === !0 && this.removeListener(e, n.listener),
              (o = n.listener.apply(this, t || [])),
              o === this._getOnceReturnValue() &&
                this.removeListener(e, n.listener);
      return this;
    }),
    (i.trigger = n("emitEvent")),
    (i.emit = function (e) {
      var t = Array.prototype.slice.call(arguments, 1);
      return this.emitEvent(e, t);
    }),
    (i.setOnceReturnValue = function (e) {
      return (this._onceReturnValue = e), this;
    }),
    (i._getOnceReturnValue = function () {
      return this.hasOwnProperty("_onceReturnValue")
        ? this._onceReturnValue
        : !0;
    }),
    (i._getEvents = function () {
      return this._events || (this._events = {});
    }),
    (e.noConflict = function () {
      return (r.EventEmitter = o), e;
    }),
    "function" == typeof define && define.amd
      ? define("eventEmitter/EventEmitter", [], function () {
          return e;
        })
      : "object" == typeof module && module.exports
      ? (module.exports = e)
      : (this.EventEmitter = e);
}).call(this),
  (function (e) {
    function t(t) {
      var n = e.event;
      return (n.target = n.target || n.srcElement || t), n;
    }
    var n = document.documentElement,
      i = function () {};
    n.addEventListener
      ? (i = function (e, t, n) {
          e.addEventListener(t, n, !1);
        })
      : n.attachEvent &&
        (i = function (e, n, i) {
          (e[n + i] = i.handleEvent
            ? function () {
                var n = t(e);
                i.handleEvent.call(i, n);
              }
            : function () {
                var n = t(e);
                i.call(e, n);
              }),
            e.attachEvent("on" + n, e[n + i]);
        });
    var r = function () {};
    n.removeEventListener
      ? (r = function (e, t, n) {
          e.removeEventListener(t, n, !1);
        })
      : n.detachEvent &&
        (r = function (e, t, n) {
          e.detachEvent("on" + t, e[t + n]);
          try {
            delete e[t + n];
          } catch (i) {
            e[t + n] = void 0;
          }
        });
    var o = { bind: i, unbind: r };
    "function" == typeof define && define.amd
      ? define("eventie/eventie", o)
      : (e.eventie = o);
  })(this),
  (function (e, t) {
    "function" == typeof define && define.amd
      ? define(
          ["eventEmitter/EventEmitter", "eventie/eventie"],
          function (n, i) {
            return t(e, n, i);
          }
        )
      : "object" == typeof exports ||
        (e.imagesLoaded = t(e, e.EventEmitter, e.eventie));
  })(window, function (e, t, n) {
    function i(e, t) {
      for (var n in t) e[n] = t[n];
      return e;
    }
    function r(e) {
      return "[object Array]" === d.call(e);
    }
    function o(e) {
      var t = [];
      if (r(e)) t = e;
      else if ("number" == typeof e.length)
        for (var n = 0, i = e.length; i > n; n++) t.push(e[n]);
      else t.push(e);
      return t;
    }
    function s(e, t, n) {
      if (!(this instanceof s)) return new s(e, t);
      "string" == typeof e && (e = document.querySelectorAll(e)),
        (this.elements = o(e)),
        (this.options = i({}, this.options)),
        "function" == typeof t ? (n = t) : i(this.options, t),
        n && this.on("always", n),
        this.getImages(),
        a && (this.jqDeferred = new a.Deferred());
      var r = this;
      setTimeout(function () {
        r.check();
      });
    }
    function f(e) {
      this.img = e;
    }
    function c(e) {
      (this.src = e), (v[e] = this);
    }
    var a = e.jQuery,
      h = e.console,
      u = "undefined" != typeof h,
      d = Object.prototype.toString;
    (s.prototype = new t()),
      (s.prototype.options = {}),
      (s.prototype.getImages = function () {
        this.images = [];
        for (var e = 0, t = this.elements.length; t > e; e++) {
          var n = this.elements[e];
          "IMG" === n.nodeName && this.addImage(n);
          var i = n.nodeType;
          if (i && (1 === i || 9 === i || 11 === i))
            for (
              var r = n.querySelectorAll("img"), o = 0, s = r.length;
              s > o;
              o++
            ) {
              var f = r[o];
              this.addImage(f);
            }
        }
      }),
      (s.prototype.addImage = function (e) {
        var t = new f(e);
        this.images.push(t);
      }),
      (s.prototype.check = function () {
        function e(e, r) {
          return (
            t.options.debug && u && h.log("confirm", e, r),
            t.progress(e),
            n++,
            n === i && t.complete(),
            !0
          );
        }
        var t = this,
          n = 0,
          i = this.images.length;
        if (((this.hasAnyBroken = !1), !i)) return void this.complete();
        for (var r = 0; i > r; r++) {
          var o = this.images[r];
          o.on("confirm", e), o.check();
        }
      }),
      (s.prototype.progress = function (e) {
        this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded;
        var t = this;
        setTimeout(function () {
          t.emit("progress", t, e),
            t.jqDeferred && t.jqDeferred.notify && t.jqDeferred.notify(t, e);
        });
      }),
      (s.prototype.complete = function () {
        var e = this.hasAnyBroken ? "fail" : "done";
        this.isComplete = !0;
        var t = this;
        setTimeout(function () {
          if ((t.emit(e, t), t.emit("always", t), t.jqDeferred)) {
            var n = t.hasAnyBroken ? "reject" : "resolve";
            t.jqDeferred[n](t);
          }
        });
      }),
      a &&
        (a.fn.imagesLoaded = function (e, t) {
          var n = new s(this, e, t);
          return n.jqDeferred.promise(a(this));
        }),
      (f.prototype = new t()),
      (f.prototype.check = function () {
        var e = v[this.img.src] || new c(this.img.src);
        if (e.isConfirmed)
          return void this.confirm(e.isLoaded, "cached was confirmed");
        if (this.img.complete && void 0 !== this.img.naturalWidth)
          return void this.confirm(0 !== this.img.naturalWidth, "naturalWidth");
        var t = this;
        e.on("confirm", function (e, n) {
          return t.confirm(e.isLoaded, n), !0;
        }),
          e.check();
      }),
      (f.prototype.confirm = function (e, t) {
        (this.isLoaded = e), this.emit("confirm", this, t);
      });
    var v = {};
    return (
      (c.prototype = new t()),
      (c.prototype.check = function () {
        if (!this.isChecked) {
          var e = new Image();
          n.bind(e, "load", this),
            n.bind(e, "error", this),
            (e.src = this.src),
            (this.isChecked = !0);
        }
      }),
      (c.prototype.handleEvent = function (e) {
        var t = "on" + e.type;
        this[t] && this[t](e);
      }),
      (c.prototype.onload = function (e) {
        this.confirm(!0, "onload"), this.unbindProxyEvents(e);
      }),
      (c.prototype.onerror = function (e) {
        this.confirm(!1, "onerror"), this.unbindProxyEvents(e);
      }),
      (c.prototype.confirm = function (e, t) {
        (this.isConfirmed = !0),
          (this.isLoaded = e),
          this.emit("confirm", this, t);
      }),
      (c.prototype.unbindProxyEvents = function (e) {
        n.unbind(e.target, "load", this), n.unbind(e.target, "error", this);
      }),
      s
    );
  });

/*!
 * Bootstrap-select v1.13.0-beta (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2018 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */
!(function (a, b) {
  "function" == typeof define && define.amd
    ? define(["jquery"], function (a) {
        return b(a);
      })
    : "object" == typeof module && module.exports
    ? (module.exports = b(require("jquery")))
    : b(a.jQuery);
})(this, function (a) {
  !(function (a) {
    "use strict";
    function b(a, b) {
      return (
        a.length === b.length &&
        a.every(function (a, c) {
          return a === b[c];
        })
      );
    }
    function c(a, b, c, d) {
      for (
        var f = ["content", "subtext", "tokens"], g = !1, h = 0;
        h < f.length;
        h++
      ) {
        var i = f[h],
          j = a[i];
        if (
          j &&
          (d && (j = e(j)),
          (j = j.toUpperCase()),
          (g = "contains" === c ? j.indexOf(b) >= 0 : j.startsWith(b)))
        )
          break;
      }
      return g;
    }
    function d(a) {
      return parseInt(a, 10) || 0;
    }
    function e(b) {
      var c = [
        { re: /[\xC0-\xC6]/g, ch: "A" },
        { re: /[\xE0-\xE6]/g, ch: "a" },
        { re: /[\xC8-\xCB]/g, ch: "E" },
        { re: /[\xE8-\xEB]/g, ch: "e" },
        { re: /[\xCC-\xCF]/g, ch: "I" },
        { re: /[\xEC-\xEF]/g, ch: "i" },
        { re: /[\xD2-\xD6]/g, ch: "O" },
        { re: /[\xF2-\xF6]/g, ch: "o" },
        { re: /[\xD9-\xDC]/g, ch: "U" },
        { re: /[\xF9-\xFC]/g, ch: "u" },
        { re: /[\xC7-\xE7]/g, ch: "c" },
        { re: /[\xD1]/g, ch: "N" },
        { re: /[\xF1]/g, ch: "n" },
      ];
      return (
        a.each(c, function () {
          b = b ? b.replace(this.re, this.ch) : "";
        }),
        b
      );
    }
    function f(b) {
      var c = arguments,
        d = b;
      [].shift.apply(c);
      var e,
        f = this.each(function () {
          var b = a(this);
          if (b.is("select")) {
            var f = b.data("selectpicker"),
              g = "object" == typeof d && d;
            if (f) {
              if (g)
                for (var h in g) g.hasOwnProperty(h) && (f.options[h] = g[h]);
            } else {
              var i = a.extend(
                {},
                w.DEFAULTS,
                a.fn.selectpicker.defaults || {},
                b.data(),
                g
              );
              (i.template = a.extend(
                {},
                w.DEFAULTS.template,
                a.fn.selectpicker.defaults
                  ? a.fn.selectpicker.defaults.template
                  : {},
                b.data().template,
                g.template
              )),
                b.data("selectpicker", (f = new w(this, i)));
            }
            "string" == typeof d &&
              (e = f[d] instanceof Function ? f[d].apply(f, c) : f.options[d]);
          }
        });
      return void 0 !== e ? e : f;
    }
    var g = document.createElement("_");
    if ((g.classList.toggle("c3", !1), g.classList.contains("c3"))) {
      var h = DOMTokenList.prototype.toggle;
      DOMTokenList.prototype.toggle = function (a, b) {
        return 1 in arguments && !this.contains(a) == !b ? b : h.call(this, a);
      };
    }
    String.prototype.startsWith ||
      (function () {
        var a = (function () {
            try {
              var a = {},
                b = Object.defineProperty,
                c = b(a, a, a) && b;
            } catch (a) {}
            return c;
          })(),
          b = {}.toString,
          c = function (a) {
            if (null == this) throw new TypeError();
            var c = String(this);
            if (a && "[object RegExp]" == b.call(a)) throw new TypeError();
            var d = c.length,
              e = String(a),
              f = e.length,
              g = arguments.length > 1 ? arguments[1] : void 0,
              h = g ? Number(g) : 0;
            h != h && (h = 0);
            var i = Math.min(Math.max(h, 0), d);
            if (f + i > d) return !1;
            for (var j = -1; ++j < f; )
              if (c.charCodeAt(i + j) != e.charCodeAt(j)) return !1;
            return !0;
          };
        a
          ? a(String.prototype, "startsWith", {
              value: c,
              configurable: !0,
              writable: !0,
            })
          : (String.prototype.startsWith = c);
      })(),
      Object.keys ||
        (Object.keys = function (a, b, c) {
          c = [];
          for (b in a) c.hasOwnProperty.call(a, b) && c.push(b);
          return c;
        });
    var i = { useDefault: !1, _set: a.valHooks.select.set };
    a.valHooks.select.set = function (b, c) {
      return (
        c && !i.useDefault && a(b).data("selected", !0),
        i._set.apply(this, arguments)
      );
    };
    var j = null,
      k = (function () {
        try {
          return new Event("change"), !0;
        } catch (a) {
          return !1;
        }
      })();
    a.fn.triggerNative = function (a) {
      var b,
        c = this[0];
      c.dispatchEvent
        ? (k
            ? (b = new Event(a, { bubbles: !0 }))
            : ((b = document.createEvent("Event")), b.initEvent(a, !0, !1)),
          c.dispatchEvent(b))
        : c.fireEvent
        ? ((b = document.createEventObject()),
          (b.eventType = a),
          c.fireEvent("on" + a, b))
        : this.trigger(a);
    };
    var l = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        '"': "&quot;",
        "'": "&#x27;",
        "`": "&#x60;",
      },
      m = {
        "&amp;": "&",
        "&lt;": "<",
        "&gt;": ">",
        "&quot;": '"',
        "&#x27;": "'",
        "&#x60;": "`",
      },
      n = function (a) {
        var b = function (b) {
            return a[b];
          },
          c = "(?:" + Object.keys(a).join("|") + ")",
          d = RegExp(c),
          e = RegExp(c, "g");
        return function (a) {
          return (a = null == a ? "" : "" + a), d.test(a) ? a.replace(e, b) : a;
        };
      },
      o = n(l),
      p = n(m),
      q = {
        32: " ",
        48: "0",
        49: "1",
        50: "2",
        51: "3",
        52: "4",
        53: "5",
        54: "6",
        55: "7",
        56: "8",
        57: "9",
        59: ";",
        65: "A",
        66: "B",
        67: "C",
        68: "D",
        69: "E",
        70: "F",
        71: "G",
        72: "H",
        73: "I",
        74: "J",
        75: "K",
        76: "L",
        77: "M",
        78: "N",
        79: "O",
        80: "P",
        81: "Q",
        82: "R",
        83: "S",
        84: "T",
        85: "U",
        86: "V",
        87: "W",
        88: "X",
        89: "Y",
        90: "Z",
        96: "0",
        97: "1",
        98: "2",
        99: "3",
        100: "4",
        101: "5",
        102: "6",
        103: "7",
        104: "8",
        105: "9",
      },
      r = {
        ESCAPE: 27,
        ENTER: 13,
        SPACE: 32,
        TAB: 9,
        ARROW_UP: 38,
        ARROW_DOWN: 40,
      },
      s = {};
    (s.full = (a.fn.dropdown.Constructor.VERSION || "")
      .split(" ")[0]
      .split(".")),
      (s.major = s.full[0]);
    var t = {
        DISABLED: "disabled",
        DIVIDER: "4" === s.major ? "dropdown-divider" : "divider",
        SHOW: "4" === s.major ? "show" : "open",
        DROPUP: "dropup",
        MENURIGHT: "dropdown-menu-right",
        MENULEFT: "dropdown-menu-left",
        BUTTONCLASS: "4" === s.major ? "btn-light" : "btn-default",
      },
      u = new RegExp(r.ARROW_UP + "|" + r.ARROW_DOWN),
      v = new RegExp("^" + r.TAB + "$|" + r.ESCAPE),
      w =
        (new RegExp(r.ENTER + "|" + r.SPACE),
        function (b, c) {
          var d = this;
          i.useDefault ||
            ((a.valHooks.select.set = i._set), (i.useDefault = !0)),
            (this.$element = a(b)),
            (this.$newElement = null),
            (this.$button = null),
            (this.$menu = null),
            (this.options = c),
            (this.selectpicker = {
              main: { map: { newIndex: {}, originalIndex: {} } },
              current: { map: {} },
              search: { map: {} },
              view: {},
              keydown: {
                keyHistory: "",
                resetKeyHistory: {
                  start: function () {
                    return setTimeout(function () {
                      d.selectpicker.keydown.keyHistory = "";
                    }, 800);
                  },
                },
              },
            }),
            null === this.options.title &&
              (this.options.title = this.$element.attr("title"));
          var e = this.options.windowPadding;
          "number" == typeof e && (this.options.windowPadding = [e, e, e, e]),
            (this.val = w.prototype.val),
            (this.render = w.prototype.render),
            (this.refresh = w.prototype.refresh),
            (this.setStyle = w.prototype.setStyle),
            (this.selectAll = w.prototype.selectAll),
            (this.deselectAll = w.prototype.deselectAll),
            (this.destroy = w.prototype.destroy),
            (this.remove = w.prototype.remove),
            (this.show = w.prototype.show),
            (this.hide = w.prototype.hide),
            this.init();
        });
    (w.VERSION = "1.13.0-beta"),
      (w.DEFAULTS = {
        noneSelectedText: "Nothing selected",
        noneResultsText: "No results matched {0}",
        countSelectedText: function (a, b) {
          return 1 == a ? "{0} item selected" : "{0} items selected";
        },
        maxOptionsText: function (a, b) {
          return [
            1 == a
              ? "Limit reached ({n} item max)"
              : "Limit reached ({n} items max)",
            1 == b
              ? "Group limit reached ({n} item max)"
              : "Group limit reached ({n} items max)",
          ];
        },
        selectAllText: "Select All",
        deselectAllText: "Deselect All",
        doneButton: !1,
        doneButtonText: "Close",
        multipleSeparator: ", ",
        styleBase: "btn",
        style: "btn-default",
        size: "auto",
        title: null,
        selectedTextFormat: "values",
        width: !1,
        container: !1,
        hideDisabled: !1,
        showSubtext: !1,
        showIcon: !0,
        showContent: !0,
        dropupAuto: !0,
        header: !1,
        liveSearch: !1,
        liveSearchPlaceholder: null,
        liveSearchNormalize: !1,
        liveSearchStyle: "contains",
        actionsBox: !1,
        iconBase: "glyphicon",
        tickIcon: "glyphicon-ok",
        showTick: !1,
        template: { caret: '<span class="caret"></span>' },
        maxOptions: !1,
        mobile: !1,
        selectOnTab: !1,
        dropdownAlignRight: !1,
        windowPadding: 0,
        virtualScroll: 600,
      }),
      "4" === s.major &&
        ((w.DEFAULTS.style = "btn-light"),
        (w.DEFAULTS.iconBase = ""),
        (w.DEFAULTS.tickIcon = "bs-ok-default")),
      (w.prototype = {
        constructor: w,
        init: function () {
          var a = this,
            b = this.$element.attr("id");
          this.$element.addClass("bs-select-hidden"),
            (this.multiple = this.$element.prop("multiple")),
            (this.autofocus = this.$element.prop("autofocus")),
            (this.$newElement = this.createDropdown()),
            this.createLi(),
            this.$element.after(this.$newElement).prependTo(this.$newElement),
            (this.$button = this.$newElement.children("button")),
            (this.$menu = this.$newElement.children(".dropdown-menu")),
            (this.$menuInner = this.$menu.children(".inner")),
            (this.$searchbox = this.$menu.find("input")),
            this.$element.removeClass("bs-select-hidden"),
            !0 === this.options.dropdownAlignRight &&
              this.$menu.addClass(t.MENURIGHT),
            void 0 !== b && this.$button.attr("data-id", b),
            this.checkDisabled(),
            this.clickListener(),
            this.options.liveSearch && this.liveSearchListener(),
            this.render(),
            this.setStyle(),
            this.setWidth(),
            this.options.container
              ? this.selectPosition()
              : this.$element.on("hide.bs.select", function () {
                  if (a.isVirtual()) {
                    var b = a.$menuInner[0],
                      c = b.firstChild.cloneNode(!1);
                    b.replaceChild(c, b.firstChild), (b.scrollTop = 0);
                  }
                }),
            this.$menu.data("this", this),
            this.$newElement.data("this", this),
            this.options.mobile && this.mobile(),
            this.$newElement.on({
              "hide.bs.dropdown": function (b) {
                a.$menuInner.attr("aria-expanded", !1),
                  a.$element.trigger("hide.bs.select", b);
              },
              "hidden.bs.dropdown": function (b) {
                a.$element.trigger("hidden.bs.select", b);
              },
              "show.bs.dropdown": function (b) {
                a.$menuInner.attr("aria-expanded", !0),
                  a.$element.trigger("show.bs.select", b);
              },
              "shown.bs.dropdown": function (b) {
                a.$element.trigger("shown.bs.select", b);
              },
            }),
            a.$element[0].hasAttribute("required") &&
              this.$element.on("invalid", function () {
                a.$button.addClass("bs-invalid"),
                  a.$element.on({
                    "shown.bs.select": function () {
                      a.$element.val(a.$element.val()).off("shown.bs.select");
                    },
                    "rendered.bs.select": function () {
                      this.validity.valid &&
                        a.$button.removeClass("bs-invalid"),
                        a.$element.off("rendered.bs.select");
                    },
                  }),
                  a.$button.on("blur.bs.select", function () {
                    a.$element.focus().blur(), a.$button.off("blur.bs.select");
                  });
              }),
            setTimeout(function () {
              a.$element.trigger("loaded.bs.select");
            });
        },
        createDropdown: function () {
          var b = this.multiple || this.options.showTick ? " show-tick" : "",
            c = this.$element.parent().hasClass("input-group")
              ? " input-group-btn"
              : "",
            d = this.autofocus ? " autofocus" : "",
            e = this.options.header
              ? '<div class="popover-title"><button type="button" class="close" aria-hidden="true">&times;</button>' +
                this.options.header +
                "</div>"
              : "",
            f = this.options.liveSearch
              ? '<div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"' +
                (null === this.options.liveSearchPlaceholder
                  ? ""
                  : ' placeholder="' +
                    o(this.options.liveSearchPlaceholder) +
                    '"') +
                ' role="textbox" aria-label="Search"></div>'
              : "",
            g =
              this.multiple && this.options.actionsBox
                ? '<div class="bs-actionsbox"><div class="btn-group btn-group-sm btn-block"><button type="button" class="actions-btn bs-select-all btn ' +
                  t.BUTTONCLASS +
                  '">' +
                  this.options.selectAllText +
                  '</button><button type="button" class="actions-btn bs-deselect-all btn ' +
                  t.BUTTONCLASS +
                  '">' +
                  this.options.deselectAllText +
                  "</button></div></div>"
                : "",
            h =
              this.multiple && this.options.doneButton
                ? '<div class="bs-donebutton"><div class="btn-group btn-block"><button type="button" class="btn btn-sm ' +
                  t.BUTTONCLASS +
                  '">' +
                  this.options.doneButtonText +
                  "</button></div></div>"
                : "",
            i =
              '<div class="dropdown bootstrap-select' +
              b +
              c +
              '"><button type="button" class="' +
              this.options.styleBase +
              ' dropdown-toggle" data-toggle="dropdown"' +
              d +
              ' role="button"><div class="filter-option"><div class="filter-option-inner"></div></div>&nbsp;<span class="bs-caret">' +
              this.options.template.caret +
              '</span></button><div class="dropdown-menu ' +
              ("4" === s.major ? "" : t.SHOW) +
              '" role="combobox">' +
              e +
              f +
              g +
              '<div class="inner ' +
              t.SHOW +
              '" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner ' +
              ("4" === s.major ? t.SHOW : "") +
              '"></ul></div>' +
              h +
              "</div></div>";
          return a(i);
        },
        setPositionData: function () {
          this.selectpicker.view.canHighlight = [];
          for (var a = 0; a < this.selectpicker.current.data.length; a++) {
            var b = this.selectpicker.current.data[a],
              c = !0;
            "divider" === b.type
              ? ((c = !1), (b.height = this.sizeInfo.dividerHeight))
              : "optgroup-label" === b.type
              ? ((c = !1), (b.height = this.sizeInfo.dropdownHeaderHeight))
              : (b.height = this.sizeInfo.liHeight),
              b.disabled && (c = !1),
              this.selectpicker.view.canHighlight.push(c),
              (b.position =
                (0 === a ? 0 : this.selectpicker.current.data[a - 1].position) +
                b.height);
          }
        },
        isVirtual: function () {
          return (
            (!1 !== this.options.virtualScroll &&
              this.selectpicker.main.elements.length >=
                this.options.virtualScroll) ||
            !0 === this.options.virtualScroll
          );
        },
        createView: function (c, d) {
          function e(a, d) {
            var e,
              j,
              k,
              l,
              m,
              n,
              o,
              p = f.selectpicker.current.elements.length,
              q = [],
              r = void 0,
              s = !0,
              t = f.isVirtual();
            (f.selectpicker.view.scrollTop = a),
              !0 === t &&
                f.sizeInfo.hasScrollBar &&
                f.$menu[0].offsetWidth > f.sizeInfo.totalMenuWidth &&
                ((f.sizeInfo.menuWidth = f.$menu[0].offsetWidth),
                (f.sizeInfo.totalMenuWidth =
                  f.sizeInfo.menuWidth + f.sizeInfo.scrollBarWidth),
                f.$menu.css("min-width", f.sizeInfo.menuWidth)),
              (e = Math.ceil(
                (f.sizeInfo.menuInnerHeight / f.sizeInfo.liHeight) * 1.5
              )),
              (j = Math.round(p / e) || 1);
            for (var u = 0; u < j; u++) {
              var v = (u + 1) * e;
              if (
                (u === j - 1 && (v = p), (q[u] = [u * e + (u ? 1 : 0), v]), !p)
              )
                break;
              void 0 === r &&
                a <=
                  f.selectpicker.current.data[v - 1].position -
                    f.sizeInfo.menuInnerHeight &&
                (r = u);
            }
            if (
              (void 0 === r && (r = 0),
              (m = [
                f.selectpicker.view.position0,
                f.selectpicker.view.position1,
              ]),
              (k = Math.max(0, r - 1)),
              (l = Math.min(j - 1, r + 1)),
              (f.selectpicker.view.position0 = Math.max(0, q[k][0]) || 0),
              (f.selectpicker.view.position1 = Math.min(p, q[l][1]) || 0),
              (n =
                m[0] !== f.selectpicker.view.position0 ||
                m[1] !== f.selectpicker.view.position1),
              void 0 !== f.activeIndex &&
                ((h =
                  f.selectpicker.current.elements[
                    f.selectpicker.current.map.newIndex[f.prevActiveIndex]
                  ]),
                (i =
                  f.selectpicker.current.elements[
                    f.selectpicker.current.map.newIndex[f.activeIndex]
                  ]),
                (g =
                  f.selectpicker.current.elements[
                    f.selectpicker.current.map.newIndex[f.selectedIndex]
                  ]),
                d &&
                  (f.activeIndex !== f.selectedIndex &&
                    (i.classList.remove("active"),
                    i.firstChild && i.firstChild.classList.remove("active")),
                  (f.activeIndex = void 0)),
                f.activeIndex &&
                  f.activeIndex !== f.selectedIndex &&
                  g &&
                  g.length &&
                  (g.classList.remove("active"),
                  g.firstChild && g.firstChild.classList.remove("active"))),
              void 0 !== f.prevActiveIndex &&
                f.prevActiveIndex !== f.activeIndex &&
                f.prevActiveIndex !== f.selectedIndex &&
                h &&
                h.length &&
                (h.classList.remove("active"),
                h.firstChild && h.firstChild.classList.remove("active")),
              (d || n) &&
                ((o = f.selectpicker.view.visibleElements
                  ? f.selectpicker.view.visibleElements.slice()
                  : []),
                (f.selectpicker.view.visibleElements =
                  f.selectpicker.current.elements.slice(
                    f.selectpicker.view.position0,
                    f.selectpicker.view.position1
                  )),
                f.setOptionStatus(),
                (c || (!1 === t && d)) &&
                  (s = !b(o, f.selectpicker.view.visibleElements)),
                (d || !0 === t) && s))
            ) {
              var w,
                x,
                y = f.$menuInner[0],
                z = document.createDocumentFragment(),
                A = y.firstChild.cloneNode(!1),
                B =
                  !0 === t
                    ? f.selectpicker.view.visibleElements
                    : f.selectpicker.current.elements;
              y.replaceChild(A, y.firstChild);
              for (var u = 0, C = B.length; u < C; u++) z.appendChild(B[u]);
              !0 === t &&
                ((w =
                  0 === f.selectpicker.view.position0
                    ? 0
                    : f.selectpicker.current.data[
                        f.selectpicker.view.position0 - 1
                      ].position),
                (x =
                  f.selectpicker.view.position1 > p - 1
                    ? 0
                    : f.selectpicker.current.data[p - 1].position -
                      f.selectpicker.current.data[
                        f.selectpicker.view.position1 - 1
                      ].position),
                (y.firstChild.style.marginTop = w + "px"),
                (y.firstChild.style.marginBottom = x + "px")),
                y.firstChild.appendChild(z);
            }
            if (((f.prevActiveIndex = f.activeIndex), f.options.liveSearch)) {
              if (c && d) {
                var D,
                  E = 0;
                f.selectpicker.view.canHighlight[E] ||
                  (E =
                    1 + f.selectpicker.view.canHighlight.slice(1).indexOf(!0)),
                  (D = f.selectpicker.view.visibleElements[E]),
                  f.selectpicker.view.currentActive &&
                    (f.selectpicker.view.currentActive.classList.remove(
                      "active"
                    ),
                    f.selectpicker.view.currentActive.firstChild &&
                      f.selectpicker.view.currentActive.firstChild.classList.remove(
                        "active"
                      )),
                  D &&
                    (D.classList.add("active"),
                    D.firstChild && D.firstChild.classList.add("active")),
                  (f.activeIndex = f.selectpicker.current.map.originalIndex[E]);
              }
            } else f.$menuInner.focus();
          }
          d = d || 0;
          var f = this;
          this.selectpicker.current = c
            ? this.selectpicker.search
            : this.selectpicker.main;
          var g,
            h,
            i = [];
          this.setPositionData(),
            e(d, !0),
            this.$menuInner
              .off("scroll.createView")
              .on("scroll.createView", function (a, b) {
                f.noScroll || e(this.scrollTop, b), (f.noScroll = !1);
              }),
            a(window)
              .off("resize.createView")
              .on("resize.createView", function () {
                e(f.$menuInner[0].scrollTop);
              });
        },
        createLi: function () {
          var b,
            c = this,
            d = [],
            e = 0,
            f = 0,
            g = [],
            h = 0,
            i = 0,
            j = -1;
          this.selectpicker.view.titleOption ||
            (this.selectpicker.view.titleOption =
              document.createElement("option"));
          var k = {
              span: document.createElement("span"),
              subtext: document.createElement("small"),
              a: document.createElement("a"),
              li: document.createElement("li"),
              whitespace: document.createTextNode(" "),
            },
            l = k.span.cloneNode(!1),
            m = document.createDocumentFragment();
          (l.className =
            c.options.iconBase + " " + c.options.tickIcon + " check-mark"),
            k.a.appendChild(l),
            k.a.setAttribute("role", "option"),
            (k.subtext.className = "text-muted"),
            (k.text = k.span.cloneNode(!1)),
            (k.text.className = "text");
          var n = function (a, b, c, d) {
              var e = k.li.cloneNode(!1);
              return (
                a &&
                  (1 === a.nodeType || 11 === a.nodeType
                    ? e.appendChild(a)
                    : (e.innerHTML = a)),
                void 0 !== c && "" !== c && (e.className = c),
                void 0 !== d && null !== d && e.classList.add("optgroup-" + d),
                e
              );
            },
            p = function (a, b, c) {
              var d = k.a.cloneNode(!0);
              return (
                a &&
                  (11 === a.nodeType
                    ? d.appendChild(a)
                    : d.insertAdjacentHTML("beforeend", a)),
                (void 0 !== b) & ("" !== b) && (d.className = b),
                "4" === s.major && d.classList.add("dropdown-item"),
                c && d.setAttribute("style", c),
                d
              );
            },
            q = function (a) {
              var b,
                d,
                e = k.text.cloneNode(!1);
              if (a.optionContent) e.innerHTML = a.optionContent;
              else {
                if (((e.textContent = a.text), a.optionIcon)) {
                  var f = k.whitespace.cloneNode(!1);
                  (d = k.span.cloneNode(!1)),
                    (d.className = c.options.iconBase + " " + a.optionIcon),
                    m.appendChild(d),
                    m.appendChild(f);
                }
                a.optionSubtext &&
                  ((b = k.subtext.cloneNode(!1)),
                  (b.textContent = a.optionSubtext),
                  e.appendChild(b));
              }
              return m.appendChild(e), m;
            },
            r = function (a) {
              var b,
                d,
                e = k.text.cloneNode(!1);
              if (((e.textContent = a.labelEscaped), a.labelIcon)) {
                var f = k.whitespace.cloneNode(!1);
                (d = k.span.cloneNode(!1)),
                  (d.className = c.options.iconBase + " " + a.labelIcon),
                  m.appendChild(d),
                  m.appendChild(f);
              }
              return (
                a.labelSubtext &&
                  ((b = k.subtext.cloneNode(!1)),
                  (b.textContent = a.labelSubtext),
                  e.appendChild(b)),
                m.appendChild(e),
                m
              );
            };
          if (this.options.title && !this.multiple) {
            j--;
            var u = this.$element[0],
              v = !1;
            if (!this.selectpicker.view.titleOption.parentNode) {
              (this.selectpicker.view.titleOption.className =
                "bs-title-option"),
                (this.selectpicker.view.titleOption.innerHTML =
                  this.options.title),
                (this.selectpicker.view.titleOption.value = "");
              v =
                void 0 === a(u.options[u.selectedIndex]).attr("selected") &&
                void 0 === this.$element.data("selected");
            }
            u.insertBefore(this.selectpicker.view.titleOption, u.firstChild),
              v && (u.selectedIndex = 0);
          }
          var w = this.$element.find("option");
          w.each(function (k) {
            var l = a(this);
            if ((j++, !l.hasClass("bs-title-option"))) {
              var m,
                s,
                u = l.data(),
                v = this.className || "",
                x = o(this.style.cssText),
                y = u.content,
                z = this.textContent,
                A = u.tokens,
                B = u.subtext,
                C = u.icon,
                D = l.parent(),
                E = D[0],
                F = "OPTGROUP" === E.tagName,
                G = F && E.disabled,
                H = this.disabled || G,
                I =
                  this.previousElementSibling &&
                  "OPTGROUP" === this.previousElementSibling.tagName,
                J = D.data();
              if (
                !0 === u.hidden ||
                (c.options.hideDisabled && ((H && !F) || G))
              ) {
                if (
                  ((m = u.prevHiddenIndex),
                  l.next().data("prevHiddenIndex", void 0 !== m ? m : k),
                  j--,
                  !I && void 0 !== m)
                ) {
                  var K = w[m].previousElementSibling;
                  K && "OPTGROUP" === K.tagName && !K.disabled && (I = !0);
                }
                return void (
                  I &&
                  "divider" !== g[g.length - 1].type &&
                  (j++,
                  d.push(n(!1, 0, t.DIVIDER, h + "div")),
                  g.push({ type: "divider", optID: h, originalIndex: k }))
                );
              }
              if (F && !0 !== u.divider) {
                if (c.options.hideDisabled && H) {
                  if (void 0 === J.allOptionsDisabled) {
                    var L = D.children();
                    D.data(
                      "allOptionsDisabled",
                      L.filter(":disabled").length === L.length
                    );
                  }
                  if (D.data("allOptionsDisabled")) return void j--;
                }
                var M = " " + E.className || "";
                if (!this.previousElementSibling) {
                  h += 1;
                  var N = E.label,
                    O = o(N),
                    P = J.subtext,
                    Q = J.icon;
                  0 !== k &&
                    d.length > 0 &&
                    (j++,
                    d.push(n(!1, 0, t.DIVIDER, h + "div")),
                    g.push({ type: "divider", optID: h, originalIndex: k })),
                    j++;
                  var R = r({ labelEscaped: O, labelSubtext: P, labelIcon: Q });
                  d.push(n(R, 0, "dropdown-header" + M, h)),
                    g.push({
                      content: O,
                      subtext: P,
                      type: "optgroup-label",
                      optID: h,
                      originalIndex: k,
                    }),
                    (i = j - 1);
                }
                if ((c.options.hideDisabled && H) || !0 === u.hidden)
                  return void j--;
                (s = q({
                  text: z,
                  optionContent: y,
                  optionSubtext: B,
                  optionIcon: C,
                })),
                  d.push(n(p(s, "opt " + v + M, x), 0, "", h)),
                  g.push({
                    content: z,
                    subtext: B,
                    tokens: A,
                    type: "option",
                    optID: h,
                    headerIndex: i,
                    lastIndex: i + E.childElementCount,
                    originalIndex: k,
                  }),
                  e++;
              } else if (!0 === u.divider)
                d.push(n(!1, 0, "divider")),
                  g.push({ type: "divider", originalIndex: k });
              else {
                if (
                  !I &&
                  c.options.hideDisabled &&
                  void 0 !== (m = u.prevHiddenIndex)
                ) {
                  var K = w[m].previousElementSibling;
                  K && "OPTGROUP" === K.tagName && !K.disabled && (I = !0);
                }
                I &&
                  "divider" !== g[g.length - 1].type &&
                  (j++,
                  d.push(n(!1, 0, t.DIVIDER, h + "div")),
                  g.push({ type: "divider", optID: h, originalIndex: k })),
                  (s = q({
                    text: z,
                    optionContent: y,
                    optionSubtext: B,
                    optionIcon: C,
                  })),
                  d.push(n(p(s, v, x))),
                  g.push({
                    content: z,
                    subtext: B,
                    tokens: A,
                    type: "option",
                    originalIndex: k,
                  }),
                  e++;
              }
              (c.selectpicker.main.map.newIndex[k] = j),
                (c.selectpicker.main.map.originalIndex[j] = k);
              var S = g[g.length - 1];
              S.disabled = H;
              var T = 0;
              S.content && (T += S.content.length),
                S.subtext && (T += S.subtext.length),
                C && (T += 1),
                T > f && ((f = T), (b = d[d.length - 1]));
            }
          }),
            (this.selectpicker.main.elements = d),
            (this.selectpicker.main.data = g),
            (this.selectpicker.current = this.selectpicker.main),
            (this.selectpicker.view.widestOption = b),
            (this.selectpicker.view.availableOptionsCount = e);
        },
        findLis: function () {
          return this.$menuInner.find(".inner > li");
        },
        render: function () {
          var b = this,
            c = this.$element.find("option"),
            d = [],
            e = [];
          this.togglePlaceholder(),
            this.tabIndex(),
            c.each(function (c) {
              if (
                this.selected &&
                (d.push(this),
                e.length < 100 && "count" !== b.options.selectedTextFormat)
              ) {
                if (
                  b.options.hideDisabled &&
                  (this.disabled ||
                    ("OPTGROUP" === this.parentNode.tagName &&
                      this.parentNode.disabled))
                )
                  return;
                var f,
                  g,
                  h = a(this),
                  i = h.data(),
                  j =
                    i.icon && b.options.showIcon
                      ? '<i class="' +
                        b.options.iconBase +
                        " " +
                        i.icon +
                        '"></i> '
                      : "";
                (f =
                  b.options.showSubtext && i.subtext && !b.multiple
                    ? ' <small class="text-muted">' + i.subtext + "</small>"
                    : ""),
                  (g =
                    void 0 !== h.attr("title")
                      ? h.attr("title")
                      : i.content && b.options.showContent
                      ? i.content.toString()
                      : j + h.html() + f),
                  e.push(g);
              }
            });
          var f = this.multiple ? e.join(this.options.multipleSeparator) : e[0];
          if (
            (d.length > 100 && (f += "..."),
            this.multiple &&
              this.options.selectedTextFormat.indexOf("count") > -1)
          ) {
            var g = this.options.selectedTextFormat.split(">");
            if (
              (g.length > 1 && d.length > g[1]) ||
              (1 === g.length && d.length >= 2)
            ) {
              var h = this.selectpicker.view.availableOptionsCount;
              f = (
                "function" == typeof this.options.countSelectedText
                  ? this.options.countSelectedText(d.length, h)
                  : this.options.countSelectedText
              )
                .replace("{0}", d.length.toString())
                .replace("{1}", h.toString());
            }
          }
          void 0 == this.options.title &&
            (this.options.title = this.$element.attr("title")),
            "static" == this.options.selectedTextFormat &&
              (f = this.options.title),
            f ||
              (f =
                void 0 !== this.options.title
                  ? this.options.title
                  : this.options.noneSelectedText),
            this.$button.attr("title", p(a.trim(f.replace(/<[^>]*>?/g, "")))),
            this.$button.find(".filter-option-inner").html(f),
            this.$element.trigger("rendered.bs.select");
        },
        setStyle: function (a, b) {
          this.$element.attr("class") &&
            this.$newElement.addClass(
              this.$element
                .attr("class")
                .replace(
                  /selectpicker|mobile-device|bs-select-hidden|validate\[.*\]/gi,
                  ""
                )
            );
          var c = a || this.options.style;
          "add" == b
            ? this.$button.addClass(c)
            : "remove" == b
            ? this.$button.removeClass(c)
            : (this.$button.removeClass(this.options.style),
              this.$button.addClass(c));
        },
        liHeight: function (b) {
          if (b || (!1 !== this.options.size && !this.sizeInfo)) {
            this.sizeInfo || (this.sizeInfo = {});
            var c = document.createElement("div"),
              e = document.createElement("div"),
              f = document.createElement("div"),
              g = document.createElement("ul"),
              h = document.createElement("li"),
              i = document.createElement("li"),
              j = document.createElement("li"),
              k = document.createElement("a"),
              l = document.createElement("span"),
              m =
                this.options.header &&
                this.$menu.find(".popover-title").length > 0
                  ? this.$menu.find(".popover-title")[0].cloneNode(!0)
                  : null,
              n = this.options.liveSearch
                ? document.createElement("div")
                : null,
              o =
                this.options.actionsBox &&
                this.multiple &&
                this.$menu.find(".bs-actionsbox").length > 0
                  ? this.$menu.find(".bs-actionsbox")[0].cloneNode(!0)
                  : null,
              p =
                this.options.doneButton &&
                this.multiple &&
                this.$menu.find(".bs-donebutton").length > 0
                  ? this.$menu.find(".bs-donebutton")[0].cloneNode(!0)
                  : null;
            if (
              ((this.sizeInfo.selectWidth = this.$newElement[0].offsetWidth),
              (l.className = "text"),
              (k.className = "dropdown-item"),
              (c.className = this.$menu[0].parentNode.className + " " + t.SHOW),
              (c.style.width = this.sizeInfo.selectWidth + "px"),
              (e.className = "dropdown-menu " + t.SHOW),
              (f.className = "inner " + t.SHOW),
              (g.className =
                "dropdown-menu inner " + ("4" === s.major ? t.SHOW : "")),
              (h.className = t.DIVIDER),
              (i.className = "dropdown-header"),
              l.appendChild(document.createTextNode("Inner text")),
              k.appendChild(l),
              j.appendChild(k),
              i.appendChild(l.cloneNode(!0)),
              this.selectpicker.view.widestOption &&
                g.appendChild(
                  this.selectpicker.view.widestOption.cloneNode(!0)
                ),
              g.appendChild(j),
              g.appendChild(h),
              g.appendChild(i),
              m && e.appendChild(m),
              n)
            ) {
              var q = document.createElement("input");
              (n.className = "bs-searchbox"),
                (q.className = "form-control"),
                n.appendChild(q),
                e.appendChild(n);
            }
            o && e.appendChild(o),
              f.appendChild(g),
              e.appendChild(f),
              p && e.appendChild(p),
              c.appendChild(e),
              document.body.appendChild(c);
            var r,
              u = k.offsetHeight,
              v = i ? i.offsetHeight : 0,
              w = m ? m.offsetHeight : 0,
              x = n ? n.offsetHeight : 0,
              y = o ? o.offsetHeight : 0,
              z = p ? p.offsetHeight : 0,
              A = a(h).outerHeight(!0),
              B = !!window.getComputedStyle && window.getComputedStyle(e),
              C = e.offsetWidth,
              D = B ? null : a(e),
              E = {
                vert:
                  d(B ? B.paddingTop : D.css("paddingTop")) +
                  d(B ? B.paddingBottom : D.css("paddingBottom")) +
                  d(B ? B.borderTopWidth : D.css("borderTopWidth")) +
                  d(B ? B.borderBottomWidth : D.css("borderBottomWidth")),
                horiz:
                  d(B ? B.paddingLeft : D.css("paddingLeft")) +
                  d(B ? B.paddingRight : D.css("paddingRight")) +
                  d(B ? B.borderLeftWidth : D.css("borderLeftWidth")) +
                  d(B ? B.borderRightWidth : D.css("borderRightWidth")),
              },
              F = {
                vert:
                  E.vert +
                  d(B ? B.marginTop : D.css("marginTop")) +
                  d(B ? B.marginBottom : D.css("marginBottom")) +
                  2,
                horiz:
                  E.horiz +
                  d(B ? B.marginLeft : D.css("marginLeft")) +
                  d(B ? B.marginRight : D.css("marginRight")) +
                  2,
              };
            (f.style.overflowY = "scroll"),
              (r = e.offsetWidth - C),
              document.body.removeChild(c),
              (this.sizeInfo.liHeight = u),
              (this.sizeInfo.dropdownHeaderHeight = v),
              (this.sizeInfo.headerHeight = w),
              (this.sizeInfo.searchHeight = x),
              (this.sizeInfo.actionsHeight = y),
              (this.sizeInfo.doneButtonHeight = z),
              (this.sizeInfo.dividerHeight = A),
              (this.sizeInfo.menuPadding = E),
              (this.sizeInfo.menuExtras = F),
              (this.sizeInfo.menuWidth = C),
              (this.sizeInfo.totalMenuWidth = this.sizeInfo.menuWidth),
              (this.sizeInfo.scrollBarWidth = r),
              (this.sizeInfo.selectHeight = this.$newElement[0].offsetHeight),
              this.setPositionData();
          }
        },
        getSelectPosition: function () {
          var b,
            c = this,
            d = a(window),
            e = c.$newElement.offset(),
            f = a(c.options.container);
          c.options.container && !f.is("body")
            ? ((b = f.offset()),
              (b.top += parseInt(f.css("borderTopWidth"))),
              (b.left += parseInt(f.css("borderLeftWidth"))))
            : (b = { top: 0, left: 0 });
          var g = c.options.windowPadding;
          (this.sizeInfo.selectOffsetTop = e.top - b.top - d.scrollTop()),
            (this.sizeInfo.selectOffsetBot =
              d.height() -
              this.sizeInfo.selectOffsetTop -
              this.sizeInfo.selectHeight -
              b.top -
              g[2]),
            (this.sizeInfo.selectOffsetLeft = e.left - b.left - d.scrollLeft()),
            (this.sizeInfo.selectOffsetRight =
              d.width() -
              this.sizeInfo.selectOffsetLeft -
              this.sizeInfo.selectWidth -
              b.left -
              g[1]),
            (this.sizeInfo.selectOffsetTop -= g[0]),
            (this.sizeInfo.selectOffsetLeft -= g[3]);
        },
        setMenuSize: function (a) {
          this.getSelectPosition();
          var b,
            c,
            d,
            e,
            f,
            g,
            h,
            i = this.sizeInfo.selectWidth,
            j = this.sizeInfo.liHeight,
            k = this.sizeInfo.headerHeight,
            l = this.sizeInfo.searchHeight,
            m = this.sizeInfo.actionsHeight,
            n = this.sizeInfo.doneButtonHeight,
            o = this.sizeInfo.dividerHeight,
            p = this.sizeInfo.menuPadding,
            q = 0;
          if (
            (this.options.dropupAuto &&
              ((h = j * this.selectpicker.current.elements.length + p.vert),
              this.$newElement.toggleClass(
                t.DROPUP,
                this.sizeInfo.selectOffsetTop - this.sizeInfo.selectOffsetBot >
                  this.sizeInfo.menuExtras.vert &&
                  h + this.sizeInfo.menuExtras.vert + 50 >
                    this.sizeInfo.selectOffsetBot
              )),
            "auto" === this.options.size)
          )
            (e =
              this.selectpicker.current.elements.length > 3
                ? 3 * this.sizeInfo.liHeight + this.sizeInfo.menuExtras.vert - 2
                : 0),
              (c =
                this.sizeInfo.selectOffsetBot - this.sizeInfo.menuExtras.vert),
              (d = e + k + l + m + n),
              (g = Math.max(e - p.vert, 0)),
              this.$newElement.hasClass(t.DROPUP) &&
                (c =
                  this.sizeInfo.selectOffsetTop -
                  this.sizeInfo.menuExtras.vert),
              (f = c),
              (b = c - k - l - m - n - p.vert);
          else if (
            this.options.size &&
            "auto" != this.options.size &&
            this.selectpicker.current.elements.length > this.options.size
          ) {
            for (var r = 0; r < this.options.size; r++)
              "divider" === this.selectpicker.current.data[r].type && q++;
            (c = j * this.options.size + q * o + p.vert),
              (b = c - p.vert),
              (f = c + k + l + m + n),
              (d = g = "");
          }
          "auto" === this.options.dropdownAlignRight &&
            this.$menu.toggleClass(
              t.MENURIGHT,
              this.sizeInfo.selectOffsetLeft >
                this.sizeInfo.selectOffsetRight &&
                this.sizeInfo.selectOffsetRight < this.$menu[0].offsetWidth - i
            ),
            this.$menu.css({
              "max-height": f + "px",
              overflow: "hidden",
              "min-height": d + "px",
            }),
            this.$menuInner.css({
              "max-height": b + "px",
              "overflow-y": "auto",
              "min-height": g + "px",
            }),
            (this.sizeInfo.menuInnerHeight = b),
            this.selectpicker.current.data.length &&
              this.selectpicker.current.data[
                this.selectpicker.current.data.length - 1
              ].position > this.sizeInfo.menuInnerHeight &&
              ((this.sizeInfo.hasScrollBar = !0),
              (this.sizeInfo.totalMenuWidth =
                this.sizeInfo.menuWidth + this.sizeInfo.scrollBarWidth),
              this.$menu.css("min-width", this.sizeInfo.totalMenuWidth)),
            this.dropdown && this.dropdown._popper.update();
        },
        setSize: function (b) {
          if (
            (this.liHeight(b),
            this.options.header && this.$menu.css("padding-top", 0),
            !1 !== this.options.size)
          ) {
            var c,
              d = this,
              e = a(window),
              f = 0;
            this.setMenuSize(),
              "auto" === this.options.size
                ? (this.$searchbox
                    .off("input.setMenuSize propertychange.setMenuSize")
                    .on(
                      "input.setMenuSize propertychange.setMenuSize",
                      function () {
                        return d.setMenuSize();
                      }
                    ),
                  e
                    .off("resize.setMenuSize scroll.setMenuSize")
                    .on("resize.setMenuSize scroll.setMenuSize", function () {
                      return d.setMenuSize();
                    }))
                : this.options.size &&
                  "auto" != this.options.size &&
                  this.selectpicker.current.elements.length >
                    this.options.size &&
                  (this.$searchbox.off(
                    "input.setMenuSize propertychange.setMenuSize"
                  ),
                  e.off("resize.setMenuSize scroll.setMenuSize")),
              b
                ? (f = this.$menuInner[0].scrollTop)
                : d.multiple ||
                  ("number" ==
                    typeof (c =
                      d.selectpicker.main.map.newIndex[
                        d.$element[0].selectedIndex
                      ]) &&
                    !1 !== d.options.size &&
                    ((f = d.sizeInfo.liHeight * c),
                    (f =
                      f -
                      d.sizeInfo.menuInnerHeight / 2 +
                      d.sizeInfo.liHeight / 2))),
              d.createView(!1, f);
          }
        },
        setWidth: function () {
          var a = this;
          "auto" === this.options.width
            ? requestAnimationFrame(function () {
                a.$menu.css("min-width", "0"), a.liHeight(), a.setMenuSize();
                var b = a.$newElement.clone().appendTo("body"),
                  c = b.css("width", "auto").children("button").outerWidth();
                b.remove(),
                  (a.sizeInfo.selectWidth = Math.max(
                    a.sizeInfo.totalMenuWidth,
                    c
                  )),
                  a.$newElement.css("width", a.sizeInfo.selectWidth + "px");
              })
            : "fit" === this.options.width
            ? (this.$menu.css("min-width", ""),
              this.$newElement.css("width", "").addClass("fit-width"))
            : this.options.width
            ? (this.$menu.css("min-width", ""),
              this.$newElement.css("width", this.options.width))
            : (this.$menu.css("min-width", ""),
              this.$newElement.css("width", "")),
            this.$newElement.hasClass("fit-width") &&
              "fit" !== this.options.width &&
              this.$newElement.removeClass("fit-width");
        },
        selectPosition: function () {
          this.$bsContainer = a('<div class="bs-container" />');
          var b,
            c,
            d,
            e = this,
            f = a(this.options.container),
            g = function (a) {
              var g = {};
              e.$bsContainer
                .addClass(
                  a.attr("class").replace(/form-control|fit-width/gi, "")
                )
                .toggleClass(t.DROPUP, a.hasClass(t.DROPUP)),
                (b = a.offset()),
                f.is("body")
                  ? (c = { top: 0, left: 0 })
                  : ((c = f.offset()),
                    (c.top +=
                      parseInt(f.css("borderTopWidth")) - f.scrollTop()),
                    (c.left +=
                      parseInt(f.css("borderLeftWidth")) - f.scrollLeft())),
                (d = a.hasClass(t.DROPUP) ? 0 : a[0].offsetHeight),
                s.major < 4 &&
                  ((g.top = b.top - c.top + d), (g.left = b.left - c.left)),
                (g.width = a[0].offsetWidth),
                e.$bsContainer.css(g);
            };
          this.$button.on("click.bs.dropdown.data-api", function () {
            e.isDisabled() ||
              (g(e.$newElement),
              e.$bsContainer
                .appendTo(e.options.container)
                .toggleClass(t.SHOW, !e.$button.hasClass(t.SHOW))
                .append(e.$menu));
          }),
            a(window).on("resize scroll", function () {
              g(e.$newElement);
            }),
            this.$element.on("hide.bs.select", function () {
              e.$menu.data("height", e.$menu.height()), e.$bsContainer.detach();
            });
        },
        setOptionStatus: function () {
          var a = this,
            b = this.$element.find("option");
          if (
            ((a.noScroll = !1),
            a.selectpicker.view.visibleElements &&
              a.selectpicker.view.visibleElements.length)
          )
            for (
              var c = 0;
              c < a.selectpicker.view.visibleElements.length;
              c++
            ) {
              var d =
                  a.selectpicker.current.map.originalIndex[
                    c + a.selectpicker.view.position0
                  ],
                e = b[d];
              if (e) {
                var f = this.selectpicker.main.map.newIndex[d],
                  g = this.selectpicker.main.elements[f];
                a.setDisabled(
                  d,
                  e.disabled ||
                    ("OPTGROUP" === e.parentNode.tagName &&
                      e.parentNode.disabled),
                  f,
                  g
                ),
                  a.setSelected(d, e.selected, f, g);
              }
            }
        },
        setSelected: function (a, b, c, d) {
          var e,
            f,
            g,
            h = void 0 !== this.activeIndex,
            i = this.activeIndex === a,
            j = i || (b && !this.multiple && !h);
          c || (c = this.selectpicker.main.map.newIndex[a]),
            d || (d = this.selectpicker.main.elements[c]),
            (g = d.firstChild),
            b && (this.selectedIndex = a),
            d.classList.toggle("selected", b),
            d.classList.toggle("active", j),
            j &&
              ((this.selectpicker.view.currentActive = d),
              (this.activeIndex = a)),
            g &&
              (g.classList.toggle("selected", b),
              g.classList.toggle("active", j),
              g.setAttribute("aria-selected", b)),
            j ||
              (!h &&
                b &&
                this.prevActiveIndex &&
                ((e =
                  this.selectpicker.main.map.newIndex[this.prevActiveIndex]),
                (f = this.selectpicker.main.elements[e]),
                f.classList.remove("active"),
                f.firstChild && f.firstChild.classList.remove("active")));
        },
        setDisabled: function (a, b, c, d) {
          var e;
          c || (c = this.selectpicker.main.map.newIndex[a]),
            d || (d = this.selectpicker.main.elements[c]),
            (e = d.firstChild),
            d.classList.toggle(t.DISABLED, b),
            e &&
              ("4" === s.major && e.classList.toggle(t.DISABLED, b),
              e.setAttribute("aria-disabled", b),
              b
                ? e.setAttribute("tabindex", -1)
                : e.setAttribute("tabindex", 0));
        },
        isDisabled: function () {
          return this.$element[0].disabled;
        },
        checkDisabled: function () {
          var a = this;
          this.isDisabled()
            ? (this.$newElement.addClass(t.DISABLED),
              this.$button
                .addClass(t.DISABLED)
                .attr("tabindex", -1)
                .attr("aria-disabled", !0))
            : (this.$button.hasClass(t.DISABLED) &&
                (this.$newElement.removeClass(t.DISABLED),
                this.$button.removeClass(t.DISABLED).attr("aria-disabled", !1)),
              -1 != this.$button.attr("tabindex") ||
                this.$element.data("tabindex") ||
                this.$button.removeAttr("tabindex")),
            this.$button.click(function () {
              return !a.isDisabled();
            });
        },
        togglePlaceholder: function () {
          var a = this.$element[0],
            b = a.selectedIndex,
            c = -1 === b;
          c || a.options[b].value || (c = !0),
            this.$button.toggleClass("bs-placeholder", c);
        },
        tabIndex: function () {
          this.$element.data("tabindex") !== this.$element.attr("tabindex") &&
            -98 !== this.$element.attr("tabindex") &&
            "-98" !== this.$element.attr("tabindex") &&
            (this.$element.data("tabindex", this.$element.attr("tabindex")),
            this.$button.attr("tabindex", this.$element.data("tabindex"))),
            this.$element.attr("tabindex", -98);
        },
        clickListener: function () {
          var b = this,
            c = a(document);
          c.data("spaceSelect", !1),
            this.$button.on("keyup", function (a) {
              /(32)/.test(a.keyCode.toString(10)) &&
                c.data("spaceSelect") &&
                (a.preventDefault(), c.data("spaceSelect", !1));
            }),
            this.$newElement.on("show.bs.dropdown", function () {
              s.major > 3 &&
                !b.dropdown &&
                ((b.dropdown = b.$button.data("bs.dropdown")),
                (b.dropdown._menu = b.$menu[0]));
            }),
            this.$button.on("click.bs.dropdown.data-api", function () {
              b.$newElement.hasClass(t.SHOW) || b.setSize();
            }),
            this.$element.on("shown.bs.select", function () {
              b.$menuInner[0].scrollTop !== b.selectpicker.view.scrollTop &&
                (b.$menuInner[0].scrollTop = b.selectpicker.view.scrollTop),
                b.options.liveSearch
                  ? b.$searchbox.focus()
                  : b.$menuInner.focus();
            }),
            this.$menuInner.on("click", "li a", function (c, d) {
              var e = a(this),
                f = b.isVirtual() ? b.selectpicker.view.position0 : 0,
                g =
                  b.selectpicker.current.map.originalIndex[
                    e.parent().index() + f
                  ],
                h = b.$element.val(),
                i = b.$element.prop("selectedIndex"),
                k = !0;
              if (
                (b.multiple &&
                  1 !== b.options.maxOptions &&
                  c.stopPropagation(),
                c.preventDefault(),
                !b.isDisabled() && !e.parent().hasClass(t.DISABLED))
              ) {
                var l = b.$element.find("option"),
                  m = l.eq(g),
                  n = m.prop("selected"),
                  o = m.parent("optgroup"),
                  p = b.options.maxOptions,
                  q = o.data("maxOptions") || !1;
                if (b.multiple) {
                  if (
                    (m.prop("selected", !n),
                    g === b.activeIndex && (d = !0),
                    d ||
                      ((b.prevActiveIndex = b.activeIndex),
                      (b.activeIndex = void 0)),
                    b.setSelected(g, !n),
                    e.blur(),
                    !1 !== p || !1 !== q)
                  ) {
                    var r = p < l.filter(":selected").length,
                      s = q < o.find("option:selected").length;
                    if ((p && r) || (q && s))
                      if (p && 1 == p)
                        l.prop("selected", !1),
                          m.prop("selected", !0),
                          b.$menuInner
                            .find(".selected")
                            .removeClass("selected"),
                          b.setSelected(g, !0);
                      else if (q && 1 == q) {
                        o.find("option:selected").prop("selected", !1),
                          m.prop("selected", !0);
                        var u =
                          b.selectpicker.current.data[
                            e.parent().index() + b.selectpicker.view.position0
                          ].optID;
                        b.$menuInner
                          .find(".optgroup-" + u)
                          .removeClass("selected"),
                          b.setSelected(g, !0);
                      } else {
                        var v =
                            "string" == typeof b.options.maxOptionsText
                              ? [
                                  b.options.maxOptionsText,
                                  b.options.maxOptionsText,
                                ]
                              : b.options.maxOptionsText,
                          w = "function" == typeof v ? v(p, q) : v,
                          x = w[0].replace("{n}", p),
                          y = w[1].replace("{n}", q),
                          z = a('<div class="notify"></div>');
                        w[2] &&
                          ((x = x.replace("{var}", w[2][p > 1 ? 0 : 1])),
                          (y = y.replace("{var}", w[2][q > 1 ? 0 : 1]))),
                          m.prop("selected", !1),
                          b.$menu.append(z),
                          p &&
                            r &&
                            (z.append(a("<div>" + x + "</div>")),
                            (k = !1),
                            b.$element.trigger("maxReached.bs.select")),
                          q &&
                            s &&
                            (z.append(a("<div>" + y + "</div>")),
                            (k = !1),
                            b.$element.trigger("maxReachedGrp.bs.select")),
                          setTimeout(function () {
                            b.setSelected(g, !1);
                          }, 10),
                          z.delay(750).fadeOut(300, function () {
                            a(this).remove();
                          });
                      }
                  }
                } else
                  l.prop("selected", !1),
                    m.prop("selected", !0),
                    b.setSelected(g, !0);
                !b.multiple || (b.multiple && 1 === b.options.maxOptions)
                  ? b.$button.focus()
                  : b.options.liveSearch && b.$searchbox.focus(),
                  k &&
                    ((h != b.$element.val() && b.multiple) ||
                      (i != b.$element.prop("selectedIndex") && !b.multiple)) &&
                    ((j = [g, m.prop("selected"), n]),
                    b.$element.triggerNative("change"));
              }
            }),
            this.$menu.on(
              "click",
              "li." +
                t.DISABLED +
                " a, .popover-title, .popover-title :not(.close)",
              function (c) {
                c.currentTarget == this &&
                  (c.preventDefault(),
                  c.stopPropagation(),
                  b.options.liveSearch && !a(c.target).hasClass("close")
                    ? b.$searchbox.focus()
                    : b.$button.focus());
              }
            ),
            this.$menuInner.on(
              "click",
              ".divider, .dropdown-header",
              function (a) {
                a.preventDefault(),
                  a.stopPropagation(),
                  b.options.liveSearch
                    ? b.$searchbox.focus()
                    : b.$button.focus();
              }
            ),
            this.$menu.on("click", ".popover-title .close", function () {
              b.$button.click();
            }),
            this.$searchbox.on("click", function (a) {
              a.stopPropagation();
            }),
            this.$menu.on("click", ".actions-btn", function (c) {
              b.options.liveSearch ? b.$searchbox.focus() : b.$button.focus(),
                c.preventDefault(),
                c.stopPropagation(),
                a(this).hasClass("bs-select-all")
                  ? b.selectAll()
                  : b.deselectAll();
            }),
            this.$element.on({
              change: function () {
                b.render(),
                  b.$element.trigger("changed.bs.select", j),
                  (j = null);
              },
              focus: function () {
                b.$button.focus();
              },
            });
        },
        liveSearchListener: function () {
          var a = this,
            b = document.createElement("li");
          this.$button.on("click.bs.dropdown.data-api", function () {
            a.$searchbox.val() && a.$searchbox.val("");
          }),
            this.$searchbox.on(
              "click.bs.dropdown.data-api focus.bs.dropdown.data-api touchend.bs.dropdown.data-api",
              function (a) {
                a.stopPropagation();
              }
            ),
            this.$searchbox.on("input propertychange", function () {
              var d = a.$searchbox.val();
              if (
                ((a.selectpicker.search.map.newIndex = {}),
                (a.selectpicker.search.map.originalIndex = {}),
                (a.selectpicker.search.elements = []),
                (a.selectpicker.search.data = []),
                d)
              ) {
                var e,
                  f = [],
                  g = d.toUpperCase(),
                  h = {},
                  i = [],
                  j = a._searchStyle(),
                  k = a.options.liveSearchNormalize;
                a._$lisSelected = a.$menuInner.find(".selected");
                for (var e = 0; e < a.selectpicker.main.data.length; e++) {
                  var l = a.selectpicker.main.data[e];
                  h[e] || (h[e] = c(l, g, j, k)),
                    h[e] &&
                      void 0 !== l.headerIndex &&
                      -1 === i.indexOf(l.headerIndex) &&
                      (l.headerIndex > 0 &&
                        ((h[l.headerIndex - 1] = !0),
                        i.push(l.headerIndex - 1)),
                      (h[l.headerIndex] = !0),
                      i.push(l.headerIndex),
                      (h[l.lastIndex + 1] = !0)),
                    h[e] && "optgroup-label" !== l.type && i.push(e);
                }
                for (var e = 0, m = i.length; e < m; e++) {
                  var n = i[e],
                    p = i[e - 1],
                    l = a.selectpicker.main.data[n],
                    q = a.selectpicker.main.data[p];
                  ("divider" !== l.type ||
                    ("divider" === l.type &&
                      q &&
                      "divider" !== q.type &&
                      m - 1 !== e)) &&
                    (a.selectpicker.search.data.push(l),
                    f.push(a.selectpicker.main.elements[n]),
                    (a.selectpicker.search.map.newIndex[l.originalIndex] =
                      f.length - 1),
                    (a.selectpicker.search.map.originalIndex[f.length - 1] =
                      l.originalIndex));
                }
                (a.activeIndex = void 0),
                  (a.noScroll = !0),
                  a.$menuInner.scrollTop(0),
                  (a.selectpicker.search.elements = f),
                  a.createView(!0),
                  f.length ||
                    ((b.className = "no-results"),
                    (b.innerHTML = a.options.noneResultsText.replace(
                      "{0}",
                      '"' + o(d) + '"'
                    )),
                    a.$menuInner[0].firstChild.appendChild(b));
              } else a.$menuInner.scrollTop(0), a.createView(!1);
            });
        },
        _searchStyle: function () {
          return this.options.liveSearchStyle || "contains";
        },
        val: function (a) {
          return void 0 !== a
            ? (this.$element.val(a).triggerNative("change"), this.$element)
            : this.$element.val();
        },
        changeAll: function (a) {
          if (this.multiple) {
            void 0 === a && (a = !0);
            for (
              var b = this.$element.find("option"), c = 0, d = 0, e = 0;
              e < this.selectpicker.current.elements.length;
              e++
            ) {
              var f = this.selectpicker.current.map.originalIndex[e],
                g = b[f];
              g && (g.selected && c++, (g.selected = a), g.selected && d++);
            }
            c !== d &&
              (this.setOptionStatus(),
              this.togglePlaceholder(),
              this.$element.triggerNative("change"));
          }
        },
        selectAll: function () {
          return this.changeAll(!0);
        },
        deselectAll: function () {
          return this.changeAll(!1);
        },
        toggle: function (a) {
          (a = a || window.event),
            a && a.stopPropagation(),
            this.$button.trigger("click.bs.dropdown.data-api");
        },
        keydown: function (b) {
          var d,
            e,
            f,
            g,
            h,
            i = a(this),
            j = i.is("input") ? i.parent().parent() : i.parent(),
            k = j.data("this"),
            l = k.findLis(),
            m = !1,
            n =
              b.which === r.TAB &&
              !i.hasClass("dropdown-toggle") &&
              !k.options.selectOnTab,
            o = u.test(b.which) || n,
            p = k.$menuInner[0].scrollTop,
            s = k.isVirtual(),
            w = !0 === s ? k.selectpicker.view.position0 : 0;
          if (
            ((e = k.$newElement.hasClass(t.SHOW)),
            !e &&
              (o ||
                (b.which >= 48 && b.which <= 57) ||
                (b.which >= 96 && b.which <= 105) ||
                (b.which >= 65 && b.which <= 90)) &&
              k.$button.trigger("click.bs.dropdown.data-api"),
            b.which === r.ESCAPE &&
              e &&
              (b.preventDefault(),
              k.$button.trigger("click.bs.dropdown.data-api").focus()),
            o)
          ) {
            if (!l.length) return;
            (d =
              !0 === s
                ? l.index(l.filter(".active"))
                : k.selectpicker.current.map.newIndex[k.activeIndex]),
              void 0 === d && (d = -1),
              -1 !== d &&
                ((f = k.selectpicker.current.elements[d + w]),
                f.classList.remove("active"),
                f.firstChild && f.firstChild.classList.remove("active")),
              b.which === r.ARROW_UP
                ? (-1 !== d && d--,
                  d + w < 0 && (d += l.length),
                  k.selectpicker.view.canHighlight[d + w] ||
                    (-1 ===
                      (d =
                        k.selectpicker.view.canHighlight
                          .slice(0, d + w)
                          .lastIndexOf(!0) - w) &&
                      (d = l.length - 1)))
                : (b.which === r.ARROW_DOWN || n) &&
                  (d++,
                  d + w >= k.selectpicker.view.canHighlight.length && (d = 0),
                  k.selectpicker.view.canHighlight[d + w] ||
                    (d =
                      d +
                      1 +
                      k.selectpicker.view.canHighlight
                        .slice(d + w + 1)
                        .indexOf(!0))),
              b.preventDefault();
            var x = w + d;
            b.which === r.ARROW_UP
              ? 0 === w && d === l.length - 1
                ? ((k.$menuInner[0].scrollTop = k.$menuInner[0].scrollHeight),
                  (x = k.selectpicker.current.elements.length - 1))
                : ((g = k.selectpicker.current.data[x]),
                  (h = g.position - g.height),
                  (m = h < p))
              : (b.which === r.ARROW_DOWN || n) &&
                (0 !== w && 0 === d
                  ? ((k.$menuInner[0].scrollTop = 0), (x = 0))
                  : ((g = k.selectpicker.current.data[x]),
                    (h = g.position - k.sizeInfo.menuInnerHeight),
                    (m = h > p))),
              (f = k.selectpicker.current.elements[x]),
              f.classList.add("active"),
              f.firstChild && f.firstChild.classList.add("active"),
              (k.activeIndex = k.selectpicker.current.map.originalIndex[x]),
              (k.selectpicker.view.currentActive = f),
              m && (k.$menuInner[0].scrollTop = h),
              k.options.liveSearch ? k.$searchbox.focus() : i.focus();
          } else if (
            (!i.is("input") && !v.test(b.which)) ||
            (b.which === r.SPACE && k.selectpicker.keydown.keyHistory)
          ) {
            var y,
              z,
              A = [];
            b.preventDefault(),
              (k.selectpicker.keydown.keyHistory += q[b.which]),
              k.selectpicker.keydown.resetKeyHistory.cancel &&
                clearTimeout(k.selectpicker.keydown.resetKeyHistory.cancel),
              (k.selectpicker.keydown.resetKeyHistory.cancel =
                k.selectpicker.keydown.resetKeyHistory.start()),
              (z = k.selectpicker.keydown.keyHistory),
              /^(.)\1+$/.test(z) && (z = z.charAt(0));
            for (var B = 0; B < k.selectpicker.current.data.length; B++) {
              var C,
                D = k.selectpicker.current.data[B];
              (C = c(D, z, "startsWith", !0)),
                C &&
                  k.selectpicker.view.canHighlight[B] &&
                  ((D.index = B), A.push(D.originalIndex));
            }
            if (A.length) {
              var E = 0;
              l.removeClass("active").find("a").removeClass("active"),
                1 === z.length &&
                  ((E = A.indexOf(k.activeIndex)),
                  -1 === E || E === A.length - 1 ? (E = 0) : E++),
                (y = k.selectpicker.current.map.newIndex[A[E]]),
                (g = k.selectpicker.current.data[y]),
                p - g.position > 0
                  ? ((h = g.position - g.height), (m = !0))
                  : ((h = g.position - k.sizeInfo.menuInnerHeight),
                    (m = g.position > p + k.sizeInfo.menuInnerHeight)),
                (f = k.selectpicker.current.elements[y]),
                f.classList.add("active"),
                f.firstChild && f.firstChild.classList.add("active"),
                (k.activeIndex = A[E]),
                f.firstChild.focus(),
                m && (k.$menuInner[0].scrollTop = h),
                i.focus();
            }
          }
          e &&
            ((b.which === r.SPACE && !k.selectpicker.keydown.keyHistory) ||
              b.which === r.ENTER ||
              (b.which === r.TAB && k.options.selectOnTab)) &&
            (b.which !== r.SPACE && b.preventDefault(),
            (k.options.liveSearch && b.which === r.SPACE) ||
              (k.$menuInner.find(".active a").trigger("click", !0),
              i.focus(),
              k.options.liveSearch ||
                (b.preventDefault(), a(document).data("spaceSelect", !0))));
        },
        mobile: function () {
          this.$element.addClass("mobile-device");
        },
        refresh: function () {
          var b = a.extend({}, this.options, this.$element.data());
          (this.options = b),
            (this.selectpicker.main.map.newIndex = {}),
            (this.selectpicker.main.map.originalIndex = {}),
            this.createLi(),
            this.checkDisabled(),
            this.render(),
            this.setStyle(),
            this.setWidth(),
            this.setSize(!0),
            this.$element.trigger("refreshed.bs.select");
        },
        hide: function () {
          this.$newElement.hide();
        },
        show: function () {
          this.$newElement.show();
        },
        remove: function () {
          this.$newElement.remove(), this.$element.remove();
        },
        destroy: function () {
          this.$newElement.before(this.$element).remove(),
            this.$bsContainer
              ? this.$bsContainer.remove()
              : this.$menu.remove(),
            this.$element
              .off(".bs.select")
              .removeData("selectpicker")
              .removeClass("bs-select-hidden selectpicker");
        },
      });
    var x = a.fn.selectpicker;
    (a.fn.selectpicker = f),
      (a.fn.selectpicker.Constructor = w),
      (a.fn.selectpicker.noConflict = function () {
        return (a.fn.selectpicker = x), this;
      }),
      a(document)
        .off("keydown.bs.dropdown.data-api")
        .on(
          "keydown.bs.select",
          '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bs-searchbox input',
          w.prototype.keydown
        )
        .on(
          "focusin.modal",
          '.bootstrap-select [data-toggle="dropdown"], .bootstrap-select [role="listbox"], .bs-searchbox input',
          function (a) {
            a.stopPropagation();
          }
        ),
      a(window).on("load.bs.select.data-api", function () {
        a(".selectpicker").each(function () {
          var b = a(this);
          f.call(b, b.data());
        });
      });
  })(a);
});
//# sourceMappingURL=bootstrap-select.js.map

/*!
 * RETINA
 */
("use strict");
function arrayify(a) {
  return Array.prototype.slice.call(a);
}
function chooseCap(a) {
  var b = parseInt(a, 10);
  return environment < b ? environment : b;
}
function forceOriginalDimensions(a) {
  return (
    a.hasAttribute("data-no-resize") ||
      (0 === a.offsetWidth && 0 === a.offsetHeight
        ? (a.setAttribute("width", a.naturalWidth),
          a.setAttribute("height", a.naturalHeight))
        : (a.setAttribute("width", a.offsetWidth),
          a.setAttribute("height", a.offsetHeight))),
    a
  );
}
function setSourceIfAvailable(a, b) {
  var c = a.nodeName.toLowerCase(),
    d = document.createElement("img");
  d.addEventListener("load", function () {
    "img" === c
      ? forceOriginalDimensions(a).setAttribute("src", b)
      : (a.style.backgroundImage = "url(" + b + ")");
  }),
    d.setAttribute("src", b),
    a.setAttribute(processedAttr, !0);
}
function dynamicSwapImage(a, b) {
  var c = arguments.length <= 2 || void 0 === arguments[2] ? 1 : arguments[2],
    d = chooseCap(c);
  if (b && d > 1) {
    var e = b.replace(srcReplace, "@" + d + "x$1");
    setSourceIfAvailable(a, e);
  }
}
function manualSwapImage(a, b, c) {
  environment > 1 && setSourceIfAvailable(a, c);
}
function getImages(a) {
  return a
    ? "function" == typeof a.forEach
      ? a
      : arrayify(a)
    : "undefined" != typeof document
    ? arrayify(document.querySelectorAll(selector))
    : [];
}
function cleanBgImg(a) {
  return a.style.backgroundImage.replace(inlineReplace, "$2");
}
function retina(a) {
  getImages(a).forEach(function (a) {
    if (!a.getAttribute(processedAttr)) {
      var b = "img" === a.nodeName.toLowerCase(),
        c = b ? a.getAttribute("src") : cleanBgImg(a),
        d = a.getAttribute("data-rjs"),
        e = !isNaN(parseInt(d, 10));
      e ? dynamicSwapImage(a, c, d) : manualSwapImage(a, c, d);
    }
  });
}
Object.defineProperty(exports, "__esModule", { value: !0 });
var hasWindow = "undefined" != typeof window,
  environment = hasWindow ? window.devicePixelRatio || 1 : 1,
  srcReplace = /(\.[A-z]{3,4}\/?(\?.*)?)$/,
  inlineReplace = /url\(('|")?([^\)'"]+)('|")?\)/i,
  selector = "[data-rjs]",
  processedAttr = "data-rjs-processed";
hasWindow &&
  (window.addEventListener("load", retina), (window.retinajs = retina)),
  (exports.default = retina);
