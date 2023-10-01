---
layout: page
status: publish
published: true
title: About Us
categories: []
tags: []
comments: []
---

<img src="/images/acm_at_princeton_with_chapter_grey.png" style="margin-left: 10px;">

~~Founded in 2010 by a group of computer science geeks,~~ Princeton ACM is Princeton's student chapter of the world's largest educational and scientific computing society, the <a href="https://acm.org" target="_blank">Association for Computing Machinery (ACM)</a>. We are advised by the one and only <a href="https://www.cs.princeton.edu/~wayne/contact/" target="_blank">Professor Kevin Wayne</a>.

~~We're so much more than a geek squad, though.~~ **Our mission is to promote the ACM's goal of "advancing computing as a science and a profession" amongst Princeton students** (undergraduate or graduate). To this end, we hold a variety of events to engage our fellow students, including mini-hackathons (which we affectionately refer to as [Code@Nights](/events/code-at-night)), a Princeton-wide computer science competition ([COSCON](/events/coscon)), [advising](/events/advising) over coffee, [interview prep](/events/interview_prep), talks with professors, and more. If you'd like to stay in the loop on all that we're doing, [join us](https://forms.gle/MXidbe4AvtaXKLbg9) today! To join, you must be a Princeton student, but that's it — after all, the challenges, promises, and beauties of computer science cut across disciplines, experience levels, and social backgrounds.

ACM is fundamentally run by its members, as detailed in our [constitution](/about/constitution/). However, we do have a board that oversees the day-to-day operations, heads outreach/sponsorship, and plans events over the course of its term. But don't forget that **the board works for you** — we work on your feedback so please let us know [here](/contact/) if there's something we could be doing better, or if you'd like to see a particular event happen. You can meet the board members for this school year below:

<div style="display: flex; flex-wrap: wrap;">
  {% for officer in site.data.officers %}
    <div class="col-lg-3">
      <div>
        <img class="officer-image" src="/images/officers/2023-2024/{{ officer.name | downcase | split: ' ' | join: '_' }}.jpg" alt="{{ officer.name }}">
        <p class="officer-name">{{ officer.name }}</p>
        <p class="officer-info">{{ officer.position }}</p>
        <p class="officer-info">{{ officer.year }} | {{officer.major}}</p>
        <a href="mailto:{{ officer.netid }}@princeton.edu">{{ officer.netid }}@princeton.edu</a>
      </div>
    </div>
  {% endfor %}
</div>
