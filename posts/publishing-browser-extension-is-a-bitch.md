---
title: "Publishing a Browser Extension is a Bitch"
cover_image_path: "/images/posts/publishing-browser-extension-is-a-bitch.png"
---

**TL;DR;** Publishing to the Chrome Web Store is a pain in the ass. Even flipping a visibility flag takes days to "review."

**Context**: I Made a Browser Extension to Beat my Doomscrolling

I recently published a browser extension to help fight doomscrolling—[Purposely](https://chromewebstore.google.com/detail/purposely/facckbkggkelmjcbilhoemegpcnnaake). It’s built to keep you focused, but the real challenge wasn’t the coding—it was getting it live on the Chrome Web Store.

## Building is Easy

Thanks to [Plasmo](https://plasmo.com/), building the extension was a breeze. It brings modern JavaScript tooling to the browser extension game—think hot reloading, a slick build process, all that good stuff. Honestly, building was the fun part.

## Publishing is Hard (and Takes Forever)

Okay, it's not *hard*, per se—just a bunch of steps, each one slower than the last.

Purposely needs broad host permissions to do its thing, which means it needs access to all URLs you visit. Google, in its infinite wisdom, decided that warranted a deeper review. Fair enough, right? I thought so too. 

Being proactive (or so I thought), I kicked off the review process the moment I had a working version, assuming that the first review would be the most thorough. Any changes after that? Smooth sailing, right?

**Wrong.**

## Here’s How It Went Down:

- **First Review**: 4 days. Full review. Fine. I expected that.
- **Second Review**: Added a YouTube promo video to the listing - 4 more days.
- **Third Review**: Changed the visibility from *unlisted* to *public* - another 4 days.

Look, I get that reviewing code might take time (though I’m pretty sure it’s automated, let’s not kid ourselves). 

I can even understand a review for adding a YouTube video - maybe they’re making sure it’s not some wild, inappropriate content. But come on, YouTube has filters for that!

But a 4-day wait just to change a visibility flag? That’s absurd. It’s literally a toggle on *your* platform. It’s not like I’m asking for the moon here - just let me make my extension visible to the world.

### In Conclusion: Brace Yourself

So if you’re planning to publish a browser extension, be prepared to hurry up and wait. A lot. Building might be easy, but getting past Google’s gatekeepers is a different story. Grab a coffee, take a deep breath, and get ready for the slow crawl to approval.

---

If you want to try out Purposely, you can find it on the Chrome Web Store [here](https://chromewebstore.google.com/detail/purposely/facckbkggkelmjcbilhoemegpcnnaake) or at [purposely.so](https://purposely.so).
