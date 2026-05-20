<?= loadPartial("head"); ?>

<?= loadPartial("navbar"); ?>

<main class="flex min-h-[calc(100vh-13rem)] items-center justify-center px-4 py-4">
	<div class="w-full max-w-3xl rounded-3xl border border-slate-200 bg-white shadow-xl">
		<div class="grid gap-6 lg:grid-cols-[1fr_1.1fr]">
			<div class="hidden rounded-l-3xl bg-brand-700 p-8 text-white lg:block">
				<div class="max-w-sm">
					<p class="text-xs font-semibold uppercase tracking-wider text-brand-200">Welcome back</p>
					<h1 class="mt-4 text-3xl font-bold tracking-tight">Sign in to SkillSync</h1>
					<p class="mt-4 text-sm leading-6 text-brand-100">Access your account to manage job listings, applications, and employer connections.</p>
				</div>
			</div>
			<div class="rounded-3xl bg-white p-6 sm:p-8">
				<header class="text-center lg:text-left">
					<p class="text-xs font-semibold uppercase tracking-wider text-brand-700">Account</p>
					<h1 class="mt-2 text-2xl font-bold text-slate-900">Sign in</h1>
					<p class="mt-2 text-sm text-slate-500">Access your SkillSync account</p>
				</header>

		<?php if (isset($error) && $error): ?>
			<div class="mt-4 rounded-md border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800" role="alert">
				<?= htmlspecialchars($error) ?>
			</div>
		<?php endif; ?>

		<form method="POST" class="mt-6 space-y-4">
			<div>
				<label for="email" class="mb-1 block text-xs font-medium text-slate-600">Email</label>
				<input type="email" id="email" name="email" placeholder="you@example.com"
					class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
			</div>
			<div>
				<label for="password" class="mb-1 block text-xs font-medium text-slate-600">Password</label>
				<input type="password" id="password" name="password" placeholder="Your password"
					class="w-full rounded-md border border-slate-300 px-3 py-2 text-sm focus:border-brand-600 focus:outline-none focus:ring-2 focus:ring-brand-600/20" required />
			</div>

			<button type="submit" class="w-full rounded-md bg-brand-700 px-4 py-2.5 text-sm font-medium text-white hover:bg-brand-800">
				Sign in
			</button>

			<p class="text-center text-sm text-slate-500">
				No account? <a href="/auth/register" class="font-medium text-brand-700 hover:text-brand-800">Create one</a>
			</p>
		</form>
		</div>	</div>
</div>
</main>

<?= loadPartial("footer"); ?>