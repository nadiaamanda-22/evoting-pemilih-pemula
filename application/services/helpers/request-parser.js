'use strict';
const fs = require('fs');

exports.RequestMethod = {
    QUERY: 'QUERY',
    PARAM: 'PARAM',
    PARAMS: 'PARAMS',
    BODY: 'BODY'
}

exports.forValues = (model, req, method = this.RequestMethod.QUERY) => {
    var values = [];
    Object.keys(model).forEach((key) => {
        var val = null;
        switch (method) {
            case this.RequestMethod.QUERY: {
                val = req.query[key];
                break;
            }
            case this.RequestMethod.PARAM: {
                val = req.param[key];
                break;
            }
            case this.RequestMethod.PARAMS: {
                val = req.params[key];
                break;
            }
            case this.RequestMethod.BODY: {
                if (req.files[key] != null) {
                    let file = req.files[key];
                    let fileName = file.name;
                    let extension = fileName.split('.');
                    val = file.md5 + '.' + extension[1];
                    fs.rename("./public/uploads/" + fileName, "./public/uploads/" + val);

                } else {
                    val = req.body[key];
                }
                break;
            }
            default:
                {
                    val = req.query[key];
                    break;
                }
        }
        model[key] = val;
    });
    Object.values(model).forEach((v) => {
        values.push(v);
    });

    return values;
}

exports.forObject = (model, req, method = this.RequestMethod.QUERY) => {
    var values = model;
    Object.keys(model).forEach((key) => {
        var val = null;
        switch (method) {
            case this.RequestMethod.QUERY: {
                val = req.query[key];
                break;
            }
            case this.RequestMethod.PARAM: {
                val = req.param[key];
                break;
            }
            case this.RequestMethod.PARAMS: {
                val = req.params[key];
                break;
            }
            case this.RequestMethod.BODY: {
                if (req.files[key] != null) {
                    val = req.files[key];
                } else {
                    val = req.body[key];
                }
                break;
            }
            default:
                {
                    val = req.query[key];
                    break;
                }
        }

        if (val != null) {
            values[key] = val;
            model[key] = val;
        }
    });
    return values;
}
