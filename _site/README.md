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