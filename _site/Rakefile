require "rubygems"
require "tmpdir"

require "bundler/setup"
require "jekyll"


GITHUB_REPONAME = "princetonacm/princetonacm.github.com"


desc "Generate blog files"
task :generate do
  Jekyll::Site.new(Jekyll.configuration({
    "source"      => ".",
    "destination" => "_site"
  })).process
end


desc "Generate and publish blog to gh-pages"
task :publish => [:generate] do
  Dir.mktmpdir do |tmp|
    cp_r "_site/.", tmp

    pwd = Dir.pwd
    Dir.chdir tmp

    system "git init"
    system "git add ."
    message = "Site updated at #{Time.now.utc}"
    system "git commit -m #{message.inspect}"
    system "git remote add origin https://github.com/PrincetonACM/princetonacm.github.io.git"
    system "git push origin gh-pages --force"

    Dir.chdir pwd
  end
end