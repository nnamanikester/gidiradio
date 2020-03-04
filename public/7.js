(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[7],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/OAPProfile.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/OAPProfile.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
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
  name: 'OAPProfile',
  data: function data() {
    return {
      oap: [],
      oapSrc: '/images/oaps/',
      programmeSrc: '/images/programmes/'
    };
  },
  metaInfo: function metaInfo() {
    return {
      title: this.oap.name ? this.oap.name : ''
    };
  },
  methods: {
    getOap: function getOap() {
      var _this = this;

      axios__WEBPACK_IMPORTED_MODULE_0___default.a.get("/api/oap/".concat(this.$route.params.slug)).then(function (res) {
        res.data.forEach(function (item) {
          _this.oap = item;
        });
      })["catch"](function (er) {
        var error = er;
      });
    }
  },
  mounted: function mounted() {
    this.getOap();
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca&":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca& ***!
  \********************************************************************************************************************************************************************************************************/
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
  return _vm.oap.name
    ? _c("article", { staticClass: "entry user" }, [
        _c("div", { staticClass: "entry-header-container" }, [
          _c("header", { staticClass: "entry-header" }, [
            _c("h1", { staticClass: "entry-title" }, [
              _vm._v(_vm._s(_vm.oap.name))
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "entry-description" }, [
              _vm._v(
                "\n                    " +
                  _vm._s(_vm.oap.bio) +
                  "\n                "
              )
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "entry-meta" }, [
              _c(
                "button",
                {
                  staticClass: "btn-follow button-rounded",
                  attrs: { disabled: "" }
                },
                [
                  _c("span", { staticClass: "follow" }, [
                    _vm._v(_vm._s(_vm.oap.display_name))
                  ])
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "user-links" })
            ])
          ]),
          _vm._v(" "),
          _c("figure", { staticClass: "post-thumbnail" }, [
            _c("img", {
              staticStyle: { "object-position": "50% 68.51851851851852%" },
              attrs: { alt: "", src: _vm.oapSrc + _vm.oap.image }
            })
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "entry-content sub-content" }, [
          _c(
            "div",
            { staticClass: "wp-block-loop wp-block-loop-station-product " },
            [
              _c("div", { staticClass: "jscroll-inner" }, [
                _c("h3", [_vm._v("Programmes")]),
                _vm._v(" "),
                _c("div", { staticClass: "row" }, [
                  _vm.oap.programmes
                    ? _c(
                        "div",
                        {
                          staticClass:
                            " col-6 col-sm-4 col-md-3 col-lg-2-4 col-xl-2"
                        },
                        _vm._l(_vm.oap.programmes, function(pro) {
                          return _c(
                            "article",
                            {
                              key: pro.id,
                              staticClass:
                                "block-loop-item product type-product status-publish has-post-thumbnail product_cat-cd entry first instock sale shipping-taxable purchasable product-type-simple"
                            },
                            [
                              _c("figure", { staticClass: "post-thumbnail" }, [
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
                                      attrs: {
                                        width: "1200",
                                        height: "1200",
                                        src: _vm.programmeSrc + pro.image
                                      }
                                    })
                                  ]
                                )
                              ]),
                              _vm._v(" "),
                              _c("header", { staticClass: "entry-header" }, [
                                _c("h3", { staticClass: "entry-title" }, [
                                  _c(
                                    "a",
                                    {
                                      attrs: {
                                        to: {
                                          name: "Programme",
                                          params: { slug: pro.slug }
                                        },
                                        rel: "bookmark"
                                      }
                                    },
                                    [_vm._v(_vm._s(pro.title))]
                                  )
                                ])
                              ])
                            ]
                          )
                        }),
                        0
                      )
                    : _vm._e()
                ])
              ])
            ]
          )
        ])
      ])
    : _vm._e()
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/OAPProfile.vue":
/*!*******************************************!*\
  !*** ./resources/js/views/OAPProfile.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./OAPProfile.vue?vue&type=template&id=79fdb3ca& */ "./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca&");
/* harmony import */ var _OAPProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./OAPProfile.vue?vue&type=script&lang=js& */ "./resources/js/views/OAPProfile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _OAPProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__["render"],
  _OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/OAPProfile.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/OAPProfile.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/views/OAPProfile.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_OAPProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./OAPProfile.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/OAPProfile.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_OAPProfile_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca&":
/*!**************************************************************************!*\
  !*** ./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca& ***!
  \**************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./OAPProfile.vue?vue&type=template&id=79fdb3ca& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/OAPProfile.vue?vue&type=template&id=79fdb3ca&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_OAPProfile_vue_vue_type_template_id_79fdb3ca___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);