# Enable PHP extensions in cloud.gov

An example app showing how to enable additional PHP extensions in a cloud.gov app using the standard Cloud Foundry buildpack. Note, more details on this approach can be found [here](https://docs.cloudfoundry.org/buildpacks/php/gsg-php-config.html#options).

## Usage

Clone this repo.

Add the extension you want to enable in the `PHP_EXTENSIONS` section of the `.bp-config/options.json` file.

Make sure you are logged in to cloud.gov, and do `cf push` to deploy the app. When the app is started, navigate to the route for the app. 
