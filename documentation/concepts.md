# Main Concept Ideas

## Page-based data handling

The CMS is structuring its data in pages.
Pages will be the main point of data handling, but not the only one.
Pages are part of navigations and contain content, which itself contains media, like files and so on.

## Layouts

Layouts are represented as special classes that define the positions where to place content in pages
and assets in content.
It should be possible to create layouts in a kinda WYSIWYG editor. It sould just contain basic coordinates or
data representing the positioning of content elements to each other (defining columns and rows for example).
It should not be too generic, because the layout class should not be dependent on the frontend rendering.
The frontend rendering (Vue.js for example) should read layouts and decide what to do visually with these
informations.

## User handling

Users are records which represent all kind of authenticated user records in the CMS, frontend and backend
alike. They can have groups, which determine access rights for these users.
Special user groups are the admin groups, which can access the backend, edit content and users.
Pages and content need to be restrictable to user groups.

## Headless CMS

The CSM should not create any HTML code. The only time it does is, when creating templates for Vue.js.
The CMS just reponses with JSON data of its records. The Frontend JS should then represent this JSON
data in its generated template structure.

For this the CMS needs an Entry point for all requests where it just responses with the basic HTML template
and Vue.js. At this point, Vue is going to create requests to various entry points of the CMS, which will
only respond with JSON data, depending on the request.

The idea is, that caching on the server side is not needed, since the data packages requested are small and
can be delivered quickly enough. The rendering on client side is done by the quick Vue.js and the browser
should not have any problem with rendering small chunks of data.

A possible benefit would be the ability to feed into any endpoint, not just the Vue frontend, but basically
provide an API for any kind of visualization of the CMS data.

The backend of the CMS should follow the same concept and will also use Vue for the visualization.

## Plugin API

There may be a plugin API with wich to extend functionality of the CMS. I am not sure as of now, how to implement
this.

## Make the CMS into a package

The goal for this is to have the CMS as a symfony package to be able to install into a project.

## Providing codeception, a basic deploy script and docker configuration

There could be a full blown general deployment mechanism, a docker configuration for local development and a
codeception test suite for the CMS.
