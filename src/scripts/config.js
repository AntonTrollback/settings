System.config({
  baseURL: "/",
  defaultJSExtensions: true,
  transpiler: "babel",
  babelOptions: {
    "optional": [
      "runtime"
    ]
  },
  paths: {
    "github:*": "jspm_packages/github/*",
    "npm:*": "jspm_packages/npm/*"
  },

  map: {
    "babel": "npm:babel-core@5.5.8",
    "babel-runtime": "npm:babel-runtime@5.5.8",
    "core-js": "npm:core-js@0.9.17",
    "doc-ready": "npm:doc-ready@1.0.3",
    "fastclick": "npm:fastclick@1.0.6",
    "ismobilejs": "npm:ismobilejs@0.3.9",
    "lodash": "npm:lodash@3.10.1",
    "skrollr": "npm:skrollr@0.6.26",
    "sniffr": "npm:sniffr@0.1.1",
    "svg4everybody": "npm:svg4everybody@2.0.0",
    "transitionend-property": "npm:transitionend-property@0.0.2",
    "github:jspm/nodelibs-process@0.1.1": {
      "process": "npm:process@0.10.1"
    },
    "npm:babel-runtime@5.5.8": {
      "process": "github:jspm/nodelibs-process@0.1.1"
    },
    "npm:core-js@0.9.17": {
      "fs": "github:jspm/nodelibs-fs@0.1.2",
      "process": "github:jspm/nodelibs-process@0.1.1",
      "systemjs-json": "github:systemjs/plugin-json@0.1.0"
    },
    "npm:doc-ready@1.0.3": {
      "eventie": "npm:eventie@1.0.6",
      "process": "github:jspm/nodelibs-process@0.1.1"
    },
    "npm:lodash@3.10.1": {
      "process": "github:jspm/nodelibs-process@0.1.1"
    },
    "npm:skrollr@0.6.26": {
      "process": "github:jspm/nodelibs-process@0.1.1"
    }
  }
});
