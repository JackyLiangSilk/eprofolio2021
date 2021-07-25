<article id="contact">
	<h2 class="major">Contact</h2>
	<form id="ajaxForm">
		<div class="fields">
			<div class="field half">
				<label for="name">Name*</label>
				<input type="text" name="name" id="name" required/>
			</div>
			<div class="field half">
				<label for="email">Email*</label>
				<input type="text" name="email" id="email" required/>
			</div>
			<div class="field">
				<label for="message">Message*</label>
				<textarea name="message" id="message" rows="4" required></textarea>
			</div>
		</div>
		<ul class="actions">
			<li><input type="submit" value="Send Message" class="primary" /></li>
			<li><input type="reset" value="Reset" /></li>
		</ul>
	</form>
	<div class="sent_status">
		<div class="loading"><img src="images/loader.gif" alt=""></div>
		<div class="good">Thank you for contact me, I will get back to you ASAP!</div>
		<div class="bad">oops! Something went wrong, please try again later or send your message to <a href="mailto:jiaqiliang.jacky@gmail.com">my email</a>, I will get back to you ASAP. Thank you</div>
	</div>
</article>