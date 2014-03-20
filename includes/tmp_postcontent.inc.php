</div><!--/main-content-->
</div><!--/wrap-->
<div class="band">
	<div class="wrap">
        <div class="col span-2 self-pic-wrap">
            <img alt="Simon Hudson" class="self-pic" src="<?php echo $sitePath['imgs']; ?>self.png" />
        </div>
		<div class="col span-7 about-wrap">
			<section class="about">
				<h2>Hi there, my name's Simon and I build websites.</h2>
                <p>I am an experienced web designer/front-end developer who specialises in writing lean, standards-compliant <abbr title="eXtensible Hypertext Markup Language">(X)HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript to create accessible and usable websites. I have a strong understanding of <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> and <abbr title="Web Accessibility Initiative">WAI</abbr> requirements, W3C standards, browser quirks and progressive enhancement/graceful degradation, as well as experience developing for assistive technologies.</p>
                <nav class="social-links">
                    <ul>
                        <li><a class="link-cv" href="<?php echo $sitePath['root']; ?>Simon_Hudson_CV"><span class="icon"></span><span>Download my CV <span class="file-size">(PDF, <?php echo formatBytes(filesize('Simon_Hudson_CV.pdf')); ?>)</span></span></a></li>
                        <li><a class="link-github" href="https://github.com/simonhudson"><span class="icon"></span><span>github.com/simonhudson</span></a></li>
                </nav>
            </section>
		</div>
	</div><!--/wrap-->
    <footer role="footer">
    </footer><!--/footer-->
</div><!--/band-->
<!--<script src="<?php echo $sitePath['libs']; ?>jquery-1.11.0.min.js"></script>
<script src="<?php echo $sitePath['js']; ?>production<?php if ($serveMinifiedAssets) { ?>.min<?php } ?>.js"></script>-->
</body>
</html>