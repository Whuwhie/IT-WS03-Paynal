<?= loadPartial("head"); ?>

<?= loadPartial("navbar"); ?>

<main class="flex flex-1 items-start justify-center px-4 py-10">
	<div class="w-full max-w-md rounded-xl border border-slate-200 bg-white p-6 shadow-sm sm:p-8">
		<header class="text-center">
			<p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Account</p>
			<h1 class="mt-1 text-xl font-bold text-slate-900">Create account</h1>
			<p class="mt-1 text-sm text-slate-500">Join SkillSync to manage listings</p>
		</header>

		<?php if (isset($errors) && count($errors)): ?>
			<div class="mt-4 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800" role="alert">
				<ul class="list-inside list-disc space-y-1">
					<?php foreach ($errors as $err): ?>
						<li><?= htmlspecialchars($err) ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<form method="POST" class="mt-6 space-y-4">
			<div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
				<div>
					<label for="first_name" class="mb-1 block text-xs font-medium text-slate-600">First name</label>
					<input type="text" id="first_name" name="first_name" value="<?= htmlspecialchars($old['first_name'] ?? '') ?>"
						class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
				</div>
				<div>
					<label for="last_name" class="mb-1 block text-xs font-medium text-slate-600">Last name</label>
					<input type="text" id="last_name" name="last_name" value="<?= htmlspecialchars($old['last_name'] ?? '') ?>"
						class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
				</div>
			</div>
			<div>
				<label for="email" class="mb-1 block text-xs font-medium text-slate-600">Email</label>
				<input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>"
					class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
			</div>
			<div>
				<label for="password" class="mb-1 block text-xs font-medium text-slate-600">Password</label>
				<input type="password" id="password" name="password"
					class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
			</div>
			<div>
				<label for="password_confirm" class="mb-1 block text-xs font-medium text-slate-600">Confirm password</label>
				<input type="password" id="password_confirm" name="password_confirm"
					class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
			</div>

			<button type="submit" class="w-full rounded-md bg-brand-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-800">
				Register
			</button>

			<p class="text-center text-sm text-slate-500">
				Already have an account? <a href="/auth/login" class="font-medium text-brand-700 hover:text-brand-800">Sign in</a>
			</p>
		</form>
	</div>
</main>

<?= loadPartial("footer"); ?>
