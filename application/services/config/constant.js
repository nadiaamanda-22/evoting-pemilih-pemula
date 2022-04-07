require('dotenv').config();
const env = (key, defaultValue = null) => {
    if (process.env[key] == null) {
        return defaultValue;
    }
    else {
        return process.env[key];
    }
}

const constantVariable = {
    defaultUploadPath: env('PATH_USER_PHOTO_UPLOAD', './public/uploads/'),
    userPhotoPath: env('DEFAULT_PATH_UPLOAD', './public/uploads/user_photo/'),
    apiVersion: env('API_VERSION', 1)
}

module.exports = constantVariable;