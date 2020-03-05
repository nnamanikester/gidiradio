(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Episode.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Episode.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\wamp64\\www\\gidiradio\\resources\\js\\views\\Episode.vue: Unexpected token (112:0)\n\n\u001b[0m \u001b[90m 110 | \u001b[39m\u001b[36mimport\u001b[39m moment from \u001b[0m\n\u001b[0m \u001b[90m 111 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 112 | \u001b[39m\u001b[36mexport\u001b[39m \u001b[36mdefault\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m     | \u001b[39m\u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 113 | \u001b[39m    name\u001b[33m:\u001b[39m \u001b[32m'Episode'\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 114 | \u001b[39m    components\u001b[33m:\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m 115 | \u001b[39m        \u001b[33mAdvert\u001b[39m\u001b[0m\n    at Parser.raise (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:7044:17)\n    at Parser.unexpected (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:8422:16)\n    at Parser.parseImportSource (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:12073:41)\n    at Parser.parseImport (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:12067:24)\n    at Parser.parseStatementContent (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:10822:27)\n    at Parser.parseStatement (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:10724:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:11298:25)\n    at Parser.parseBlockBody (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:11285:10)\n    at Parser.parseTopLevel (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:10655:10)\n    at Parser.parse (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:12264:10)\n    at parse (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\parser\\lib\\index.js:12315:38)\n    at parser (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\core\\lib\\parser\\index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:93:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (C:\\wamp64\\www\\gidiradio\\node_modules\\@babel\\core\\lib\\transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (C:\\wamp64\\www\\gidiradio\\node_modules\\gensync\\index.js:254:32)\n    at C:\\wamp64\\www\\gidiradio\\node_modules\\gensync\\index.js:266:13\n    at async.call.result.err.err (C:\\wamp64\\www\\gidiradio\\node_modules\\gensync\\index.js:216:11)");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Episode.vue?vue&type=template&id=583446a8&":
/*!*****************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Episode.vue?vue&type=template&id=583446a8& ***!
  \*****************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.episode.title
    ? _c(
        "article",
        {
          staticClass:
            "station type-station status-publish has-post-thumbnail hentry genre-country entry"
        },
        [
          _c("div", { staticClass: "entry-header-container header-station" }, [
            _c("figure", { staticClass: "post-thumbnail" }, [
              _c("img", {
                staticClass: "attachment-full size-full wp-post-image",
                staticStyle: { "object-position": "50% 100%" },
                attrs: {
                  width: "1000",
                  height: "1164",
                  src: _vm.episodeSrc + _vm.episode.image,
                  alt: "",
                  sizes: "(max-width: 1000px) 100vw, 1000px"
                }
              })
            ]),
            _vm._v(" "),
            _c("header", { staticClass: "entry-header" }, [
              _c("h1", { staticClass: "entry-title" }, [
                _vm._v(_vm._s(_vm.episode.title))
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "entry-meta" }, [
                _c(
                  "button",
                  {
                    staticClass: "btn-play ",
                    attrs: { "data-play-id": "169" }
                  },
                  [_vm._v("play")]
                ),
                _c("span", { staticClass: "play-count" }, [
                  _vm._v(_vm._s(_vm.episode.plays.length) + " Plays")
                ]),
                _vm._v(".\n                    "),
                _c("span", { staticClass: "play-count" }, [
                  _vm._v(_vm._s(_vm.episode.comments.length) + " Comments")
                ]),
                _vm._v(".\n                    "),
                _c("span", { staticClass: "btn-like" }, [
                  _c("span", { staticClass: "count" }, [
                    _vm._v(" " + _vm._s(_vm.episode.views.length) + " views")
                  ])
                ]),
                _vm._v(".\n                    "),
                _c("span", { staticClass: "byline" }, [
                  _c("span", { staticClass: "svg-icon" }, [
                    _c("img", {
                      staticClass: "avatar avatar-48 photo",
                      attrs: {
                        alt: "",
                        src: _vm.oapSrc + _vm.episode.oap.image,
                        height: "48",
                        width: "48"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("span", { staticClass: "author vcard" }, [
                    _c("a", { staticClass: "url fn n", attrs: { href: "" } }, [
                      _vm._v(_vm._s(_vm.episode.oap.display_name))
                    ])
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "entry-content" }, [
            _c("div", { staticClass: "flex-row" }, [
              _c("div", { staticClass: "flex" }, [
                _c(
                  "div",
                  { staticClass: "wp-block-loop wp-block-loop-station " },
                  [
                    _c("h3", [_vm._v("Episode Details")]),
                    _vm._v(" "),
                    _c("p", [
                      _vm._v(
                        "\n                            " +
                          _vm._s(_vm.episode.details) +
                          "\n                        "
                      )
                    ])
                  ]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "comments-area" }, [
                  _vm.episode.comments
                    ? _c(
                        "ol",
                        { staticClass: "comment-list" },
                        _vm._l(_vm.episode.comments, function(comment) {
                          return _c(
                            "li",
                            {
                              key: comment.id,
                              staticClass:
                                "comment byuser even thread-even depth-1 parent"
                            },
                            [
                              _c(
                                "article",
                                {
                                  staticClass: "comment-body",
                                  attrs: { id: "div-comment-87" }
                                },
                                [
                                  _c(
                                    "footer",
                                    { staticClass: "comment-meta" },
                                    [
                                      _c(
                                        "div",
                                        { staticClass: "comment-author vcard" },
                                        [
                                          _c("img", {
                                            staticClass:
                                              "avatar avatar-96 photo",
                                            attrs: {
                                              alt: "",
                                              src:
                                                "http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&d=mm&r=g",
                                              height: "96",
                                              width: "96"
                                            }
                                          }),
                                          _c("b", { staticClass: "fn" }, [
                                            _vm._v(_vm._s(comment.name))
                                          ]),
                                          _vm._v(" "),
                                          _c("span", { staticClass: "says" }, [
                                            _vm._v("says:")
                                          ])
                                        ]
                                      ),
                                      _vm._v(" "),
                                      _c(
                                        "div",
                                        { staticClass: "comment-metadata" },
                                        [
                                          _c("time", [
                                            _vm._v(
                                              _vm._s(
                                                _vm
                                                  .moment(comment.created_at)
                                                  .startOf("hour")
                                                  .fromNow()
                                              )
                                            )
                                          ])
                                        ]
                                      )
                                    ]
                                  ),
                                  _vm._v(" "),
                                  _c(
                                    "div",
                                    { staticClass: "comment-content" },
                                    [_c("p", [_vm._v(_vm._s(comment.body))])]
                                  )
                                ]
                              )
                            ]
                          )
                        }),
                        0
                      )
                    : _vm._e(),
                  _vm._v(" "),
                  _vm._m(0)
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "sep" }),
              _vm._v(" "),
              _c("div", { staticClass: "sidebar" }, [
                _c(
                  "div",
                  { staticClass: "sticky-top" },
                  [
                    _c("div", {
                      staticClass: "wp-block-spacer",
                      staticStyle: { height: "40px" },
                      attrs: { "aria-hidden": "true" }
                    }),
                    _vm._v(" "),
                    _c("Advert"),
                    _vm._v(" "),
                    _c("div", {
                      staticClass: "wp-block-spacer",
                      staticStyle: { height: "20px" },
                      attrs: { "aria-hidden": "true" }
                    })
                  ],
                  1
                )
              ])
            ])
          ])
        ]
      )
    : _vm._e()
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "comment-respond", attrs: { id: "respond" } },
      [
        _c("h2", { staticClass: "comment-reply-title" }, [
          _vm._v("Leave a Reply "),
          _c("small", [
            _c("a", { attrs: { rel: "nofollow", href: "#" } }, [
              _vm._v("Cancel reply")
            ])
          ])
        ]),
        _vm._v(" "),
        _c(
          "form",
          {
            staticClass: "comment-form",
            attrs: { action: "", method: "post" }
          },
          [
            _c("p", { staticClass: "comment-notes" }, [
              _c("span", { attrs: { id: "email-notes" } }, [
                _vm._v("Your email address will not be published.")
              ]),
              _vm._v("Required fields are marked "),
              _c("span", { staticClass: "required" }, [_vm._v("*")])
            ]),
            _vm._v(" "),
            _c("p", { staticClass: "comment-form-comment" }, [
              _c("label", { attrs: { for: "comment" } }, [_vm._v("Comment")]),
              _vm._v(" "),
              _c("textarea", {
                attrs: {
                  id: "comment",
                  name: "comment",
                  cols: "45",
                  rows: "8",
                  maxlength: "65525",
                  required: "required"
                }
              })
            ]),
            _vm._v(" "),
            _c("label", { attrs: { for: "author" } }, [
              _vm._v("Name "),
              _c("span", { staticClass: "required" }, [_vm._v("*")])
            ]),
            _vm._v(" "),
            _c("input", {
              attrs: {
                name: "author",
                type: "text",
                size: "30",
                maxlength: "245",
                required: "required"
              }
            }),
            _vm._v(" "),
            _c("label", { attrs: { for: "email" } }, [
              _vm._v("Email "),
              _c("span", { staticClass: "required" }, [_vm._v("*")])
            ]),
            _vm._v(" "),
            _c("input", {
              attrs: {
                name: "email",
                type: "email",
                value: "",
                size: "30",
                maxlength: "100",
                "aria-describedby": "email-notes",
                required: "required"
              }
            }),
            _vm._v(" "),
            _c("label", { attrs: { for: "url" } }, [_vm._v("Website")]),
            _vm._v(" "),
            _c("input", {
              attrs: {
                name: "url",
                type: "url",
                value: "",
                size: "30",
                maxlength: "200"
              }
            }),
            _vm._v(" "),
            _c("p", { staticClass: "comment-form-cookies-consent" }, [
              _c("input", {
                attrs: {
                  name: "cookies-consent",
                  type: "checkbox",
                  value: "yes"
                }
              }),
              _vm._v(" "),
              _c("label", { attrs: { for: "cookies-consent" } }, [
                _vm._v(
                  "Save my name, email, and website in this browser for the next time I comment."
                )
              ])
            ]),
            _vm._v(" "),
            _c("p", { staticClass: "form-submit" }, [
              _c("input", {
                staticClass: "submit",
                attrs: { name: "submit", type: "submit", value: "Post Comment" }
              })
            ])
          ]
        )
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/Episode.vue":
/*!****************************************!*\
  !*** ./resources/js/views/Episode.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Episode.vue?vue&type=template&id=583446a8& */ "./resources/js/views/Episode.vue?vue&type=template&id=583446a8&");
/* harmony import */ var _Episode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Episode.vue?vue&type=script&lang=js& */ "./resources/js/views/Episode.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Episode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Episode.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Episode.vue?vue&type=script&lang=js&":
/*!*****************************************************************!*\
  !*** ./resources/js/views/Episode.vue?vue&type=script&lang=js& ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Episode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Episode.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Episode.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Episode_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/Episode.vue?vue&type=template&id=583446a8&":
/*!***********************************************************************!*\
  !*** ./resources/js/views/Episode.vue?vue&type=template&id=583446a8& ***!
  \***********************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Episode.vue?vue&type=template&id=583446a8& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Episode.vue?vue&type=template&id=583446a8&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Episode_vue_vue_type_template_id_583446a8___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);