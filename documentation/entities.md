# Entities

- Domain
- Navigation
- Page
- Content
- Media
- User
- Group
- Comment
- Notification

## Relationships

- Domain
-- Navigation
--- Page
---- Content
----- Media
- User
-- Group
-- Comment
-- Notification

Every entity can have comments. A comment has an User as author and can be directed to a different User.
A notification is a system generated message, directed at a User or multiple Users.

## Domain

Respresents a domain, basically the starting point of the request.
The CMS decides by the request domain, which Domain entity to load.

### Properties

- scheme -> The scheme to use (http|https)
- host -> The domain host (www.example.com)
- path -> The path appended to the domain (/home ; optional)
- navigations -> List of Navigation entities
- startpage -> The page to use as the start page
- layout -> The layout to use
- language -> The domain language (optional)

## Navigation

### Properties

- name -> The name of the navigation
- pages -> List of Page entities

## Page

### Properties

- name -> The name of the page
- navigation_name -> An alternative navigation name (optional)
- url_name -> An alternative url name (optional)
- content -> List of Content entities

## Content

### Properties

- title -> The content title
- hide_title -> Hide the title
- bodytext -> The text of the content (optional)
- media -> List of Media entities (optional)
- access_groups -> List of Group entities (optional)

## Media

### Properties

- title
- alt
- path
- caption

## User

### Properties

- username
- name
- email
- password
- avatar -> Media entity
- admin
- group
- comments -> List of Comment entities
- notifications -> List of Notification entities

## Group

### Properties

- title
- parent_group -> Group entity

## Comment

### Properties

- title
- text
- author -> User entity
- users -> List of User entities
- groups -> List of Group entities

## Notification

### Properties

- text
- users -> List of User entities
- groups -> List of Group entities
