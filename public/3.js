(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[3],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Advert.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Advert.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Advert'
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Programme.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Programme.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_Advert__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/Advert */ "./resources/js/components/Advert.vue");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! moment */ "./node_modules/moment/moment.js");
/* harmony import */ var moment__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(moment__WEBPACK_IMPORTED_MODULE_2__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//



/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'Programme',
  components: {
    Advert: _components_Advert__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  data: function data() {
    return {
      programme: [],
      moment: moment__WEBPACK_IMPORTED_MODULE_2___default.a,
      src: '/images/programmes/',
      oapSrc: '/images/oaps/',
      episodeSrc: '/images/programmes/episodes/'
    };
  },
  methods: {
    getProgramme: function getProgramme() {
      var _this = this;

      axios__WEBPACK_IMPORTED_MODULE_1___default.a.get("/api/programme/".concat(this.$route.params.slug)).then(function (res) {
        res.data.forEach(function (item) {
          _this.programme = item;
        });
      })["catch"](function (err) {
        var error = err;
      });
    }
  },
  metaInfo: function metaInfo() {
    return {
      title: this.programme.title ? this.programme.title : ''
    };
  },
  mounted: function mounted() {
    this.getProgramme();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff& ***!
  \*********************************************************************************************************************************************************************************************************/
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
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "wp-block-column" }, [
      _c("h3", [_vm._v("Advertisment")]),
      _vm._v(" "),
      _c("div", { staticClass: "wp-block-column" }, [
        _c("div", { staticClass: "wp-block-columns" }, [
          _c(
            "div",
            {
              staticClass:
                "wp-block-cover has-pale-cyan-blue-background-color has-background-dim h-auto rounded",
              staticStyle: {
                "background-image": "url(wp-content/uploads/2019/06/holder.png)"
              }
            },
            [
              _c("div", { staticClass: "wp-block-cover__inner-container" }, [
                _c(
                  "p",
                  {
                    staticClass: "has-medium-font-size",
                    staticStyle: { "text-align": "center" }
                  },
                  [_vm._v("MTN EVERYWHERE YOU GO")]
                )
              ])
            ]
          )
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "wp-block-columns" }, [
          _c(
            "div",
            {
              staticClass:
                "wp-block-cover has-background-dim h-auto gd-primary rounded",
              staticStyle: {
                "background-image": "url(wp-content/uploads/2019/06/holder.png)"
              }
            },
            [
              _c("div", { staticClass: "wp-block-cover__inner-container" }, [
                _c(
                  "p",
                  {
                    staticClass: "has-text-color has-medium-font-size",
                    staticStyle: { color: "#ffffff", "text-align": "center" }
                  },
                  [_vm._v("INDOMIE INSTANT NOODLES")]
                )
              ])
            ]
          )
        ])
      ]),
      _vm._v(" "),
      _c("div", {
        staticClass:
          "wp-block-loop wp-block-loop-post post-thumbnail-16x9 align"
      })
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d& ***!
  \*******************************************************************************************************************************************************************************************************/
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
  return _vm.programme.title
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
                  src: _vm.src + _vm.programme.image,
                  alt: "",
                  sizes: "(max-width: 1000px) 100vw, 1000px"
                }
              })
            ]),
            _vm._v(" "),
            _c("header", { staticClass: "entry-header" }, [
              _c("h1", { staticClass: "entry-title" }, [
                _vm._v(_vm._s(_vm.programme.title))
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "entry-meta" }, [
                _c("span", { staticClass: "play-count" }, [
                  _vm._v(_vm._s(_vm.programme.comments.length) + " Comments")
                ]),
                _vm._v(".\n                    "),
                _c("span", { staticClass: "btn-like" }, [
                  _c("span", { staticClass: "count" }, [
                    _vm._v(" " + _vm._s(_vm.programme.views.length) + " views")
                  ])
                ]),
                _vm._v(".\n                    "),
                _c("span", { staticClass: "byline" }, [
                  _c("span", { staticClass: "svg-icon" }, [
                    _c("img", {
                      staticClass: "avatar avatar-48 photo",
                      attrs: {
                        alt: "",
                        src: _vm.oapSrc + _vm.programme.oap.image,
                        height: "48",
                        width: "48"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("span", { staticClass: "author vcard" }, [
                    _c("a", { staticClass: "url fn n", attrs: { href: "" } }, [
                      _vm._v(_vm._s(_vm.programme.oap.display_name))
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
                    _c("h3", [_vm._v("Programme Details")]),
                    _vm._v(" "),
                    _c("p", [
                      _vm._v(
                        "\n                            " +
                          _vm._s(_vm.programme.details) +
                          "\n                        "
                      )
                    ]),
                    _vm._v(" "),
                    _c("h3", [_vm._v("Previous Episodes")]),
                    _vm._v(" "),
                    _vm.programme.episodes
                      ? _c(
                          "div",
                          { staticClass: "row" },
                          _vm._l(_vm.programme.episodes, function(episode) {
                            return _c(
                              "div",
                              {
                                key: episode.id,
                                staticClass:
                                  " col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3"
                              },
                              [
                                _c(
                                  "article",
                                  {
                                    staticClass:
                                      "block-loop-item station type-station status-publish has-post-thumbnail hentry genre-pop station_tag-youtube entry"
                                  },
                                  [
                                    _c(
                                      "figure",
                                      { staticClass: "post-thumbnail" },
                                      [
                                        _c(
                                          "a",
                                          {
                                            staticClass: "post-thumbnail-inner",
                                            attrs: {
                                              href: "#",
                                              "aria-hidden": "true",
                                              tabindex: "-1"
                                            }
                                          },
                                          [
                                            _c("img", {
                                              staticClass:
                                                "attachment-post-thumbnail size-post-thumbnail wp-post-image",
                                              attrs: {
                                                width: "1000",
                                                height: "1250",
                                                src:
                                                  _vm.episodeSrc +
                                                  episode.image,
                                                alt: "",
                                                sizes:
                                                  "(max-width: 1000px) 100vw, 1000px"
                                              }
                                            })
                                          ]
                                        ),
                                        _vm._v(" "),
                                        _vm._m(0, true)
                                      ]
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "header",
                                      { staticClass: "entry-header" },
                                      [
                                        _c(
                                          "h3",
                                          { staticClass: "entry-title" },
                                          [
                                            _c(
                                              "router-link",
                                              {
                                                attrs: {
                                                  to: {
                                                    name: "Episode",
                                                    params: {
                                                      programmeSlug:
                                                        _vm.programme.slug,
                                                      episodeSlug: episode.slug
                                                    }
                                                  }
                                                }
                                              },
                                              [
                                                _vm._v(
                                                  "  " + _vm._s(episode.title)
                                                )
                                              ]
                                            )
                                          ],
                                          1
                                        )
                                      ]
                                    )
                                  ]
                                )
                              ]
                            )
                          }),
                          0
                        )
                      : _vm._e()
                  ]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "comments-area" }, [
                  _vm.programme.comments
                    ? _c(
                        "ol",
                        { staticClass: "comment-list" },
                        _vm._l(_vm.programme.comments, function(comment) {
                          return _c(
                            "li",
                            {
                              key: comment.id,
                              staticClass:
                                "comment byuser even thread-even depth-1 parent"
                            },
                            [
                              _c("article", { staticClass: "comment-body" }, [
                                _c("footer", { staticClass: "comment-meta" }, [
                                  _vm._m(1, true),
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
                                ]),
                                _vm._v(" "),
                                _c("div", { staticClass: "comment-content" }, [
                                  _c("p", [_vm._v(_vm._s(comment.body))])
                                ])
                              ])
                            ]
                          )
                        }),
                        0
                      )
                    : _vm._e(),
                  _vm._v(" "),
                  _vm._m(2)
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
    return _c("div", { staticClass: "entry-action" }, [
      _c("span", { staticClass: "btn-like" }),
      _vm._v(" "),
      _c("button", { staticClass: "btn-play" }, [_vm._v("play")]),
      _vm._v(" "),
      _c("span", { staticClass: "btn-more" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "comment-author vcard" }, [
      _c("img", {
        staticClass: "avatar avatar-96 photo",
        attrs: {
          alt: "",
          src:
            "http://0.gravatar.com/avatar/ff7f090e3d537b2106e5e0b4277459c3?s=96&d=mm&r=g",
          height: "96",
          width: "96"
        }
      }),
      _c("b", { staticClass: "fn" }, [_vm._v("kester")]),
      _vm._v(" "),
      _c("span", { staticClass: "says" }, [_vm._v("says:")])
    ])
  },
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

/***/ "./resources/js/components/Advert.vue":
/*!********************************************!*\
  !*** ./resources/js/components/Advert.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Advert.vue?vue&type=template&id=7ec213ff& */ "./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff&");
/* harmony import */ var _Advert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Advert.vue?vue&type=script&lang=js& */ "./resources/js/components/Advert.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Advert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/Advert.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/Advert.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./resources/js/components/Advert.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Advert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Advert.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Advert.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Advert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Advert.vue?vue&type=template&id=7ec213ff& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Advert.vue?vue&type=template&id=7ec213ff&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Advert_vue_vue_type_template_id_7ec213ff___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/views/Programme.vue":
/*!******************************************!*\
  !*** ./resources/js/views/Programme.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Programme.vue?vue&type=template&id=619e3f0d& */ "./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d&");
/* harmony import */ var _Programme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Programme.vue?vue&type=script&lang=js& */ "./resources/js/views/Programme.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Programme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Programme.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Programme.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./resources/js/views/Programme.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Programme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Programme.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Programme.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Programme_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d&":
/*!*************************************************************************!*\
  !*** ./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d& ***!
  \*************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Programme.vue?vue&type=template&id=619e3f0d& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Programme.vue?vue&type=template&id=619e3f0d&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Programme_vue_vue_type_template_id_619e3f0d___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);