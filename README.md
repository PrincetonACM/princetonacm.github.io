# princetonacm.github.io

The official website for the Princeton University student chapter of the Association for Computing Machinery.

To build the new version of your website, first make sure you have Ruby, Rake (`gem install rake`), and Bundler
(`gem install bundler`) installed. Then do the following:

1. Commit your changes to the repository using the usual `git add`, `git commit`, and `git push` commands.
2. Run `rake generate` from the home directory of your repository. Note that you may need to first install
   some packages, so run `bundle install` if this is the case.
3. Run `rake publish`. Then do a full refresh of [princetonacm.github.io](https://princetonacm.github.io).
   (Note: be patient; you may have to wait a few moments to see your changes reflected.) 
   
When in development mode, you can use the command `bundle exec jekyll serve` to run a local version of the website
that will update whenever you make a change (similar to the `dev` command of `npm` and `yarn`).

## FAQs

***How do I update a particular webpage?*** Go to the respective folder and change either the ```index.html``` or ```index.markdown``` file. As the name suggests, ```.html``` files must contain HTML code, while ```.markdown``` files must contain [Markdown](https://www.markdownguide.org/). For example, to post to the announcements page, you'll need to edit ```/announcements/index.markdown```. The COSCON page would be found in the ```events/coscon``` subdirectory, etc.

***How do I add a new webpage?*** Similar to above, you'll need to create a directory in the appropriate location with either an ```index.html``` or ```index.markdown``` file, at the very least.

***How do I add CSS styles?*** If it's a small change that might be generally applicable, then you can edit ```_assets/stylesheets/base.scss``` (note that this is in SCSS, but it's almost identical to vanilla CSS). Otherwise, we recommend creating a new ```.scss``` file in ```_assets/stylesheets``` with your CSS: see, for example, ```_assets/stylesheets/galleries.scss```, which contains the SCSS styles to implement all of the photo galleries. *Important: You'll need to import the SCSS file you create in* ```_assets/stylesheets/main.scss```.

***How do I add JavaScript?*** Similar to above, you'll need to add your code to ```_assets/javascripts```, either to the ```main.js``` file, or through your own file. Same guidelines as above for deciding which to do.

***Where should I upload files? Images?*** There's no single place to upload files, but the general rule of thumb is to create a subdirectory in the page where the file is referenced and the put the file in there. See, for example, the Code@Night archive (```events/code-at-night/archive```). Images have their own directory (```/images```). *Please make sure to compress your uploads as much as possible before uploading them; this can have a major impact on performance!*

***How do I update the navbar and the footer?*** You'll need to edit the ```_layouts/base.html``` file. There is a section of HTML to edit the navbar, and likewise for the footer. All of the base layouts (e.g. what a page looks like and what site headers/footers look like) lie in the ```_layouts``` directory.

***How do I update the calendar?*** The calendar on the events page is a Google Calendar that can only be updated by officers.

***If I post an announcement, is the homepage section "Featured Announcements" automatically updated?*** No; you will need to update the homepage separately if you'd like to feature the announcement. We recommend featuring no more than three.

***If I post to the Google Calendar, is the homepage section "Featured Events" automatically updated?*** Again, no; this is something that a future tech chair may be able to change, though!

## Other Tips

- If there's an element you'd like to add, check if someone has already implemented it! Galleries, slides, page layouts, various icons, etc. have already been added to the website already. And if our website doesn't have it, check if someone else has an implementation (be sure to check the license on it though).

- After you've published and are satisfied with all of your changes to [princetonacm.github.io](https://princetonacm.github.io), make sure to log into [CPanel](https://princeton.hosting2.acm.org:2083/) to reflect the changes on the official website ([princeton.acm.org](https://princeton.acm.org)).
