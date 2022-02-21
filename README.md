# greet_user
## Overview

The Greet User module inserts a block with a customized greeting into a Drupal site with the following characteristics:
1. Drupal version: Drupal 8
2. Theme: Bartik
3. Install Profile: Standard

Logged-on users will see a greeting in the left side-bar, which states:
```
Hello <user-name>!
Your last login was <date>.
Visit your profile
```
  
* \<user-name\> will be replaced with the user's actual account name
* The last login date will be shown, formatted as: December 21st, 2012 9:01am
* The words "Visit your profile" should link to the user's profile page.

A screenshot is included below.

![image](https://user-images.githubusercontent.com/61120350/155034672-099fb82d-3b4a-4d88-84c2-bfd81f92bf73.png)

Anonymous users will not see this block, and will see the default appearance of the site's regions. A screenshot is included below. \

![image](https://user-images.githubusercontent.com/61120350/155034885-2c119448-3a08-48e9-81a4-9b9420fb72e4.png)


## Installation instructions
- Please clone this repo to your site's codebase in the web/modules/custom folder.
```
cd /path/to/your/site/codebase/web/modules/custom
git clone https://github.com/pondecino/greet_user.git
```
- After cloning, there will be a greet_user folder beneath web/modules/custom, as shown below.
- ![image](https://user-images.githubusercontent.com/61120350/155035194-993d5ab5-7c33-4ada-80eb-71c2c71d6ffb.png) 
- Clear your site's caches, and navigate to the Extend path at admin/modules
- Locate the Greet User module, check the box to install. 
- Click the "Install" button at bottom of the page.
