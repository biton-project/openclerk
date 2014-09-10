<h2>How are transactions automatically created?</h2>

<p>
	<a href="<?php echo htmlspecialchars(url_for('kb', array('q' => 'finance'))); ?>">&lt; What is <?php echo get_site_config('site_name'); ?> Finance?</a>
</p>

<p>
	As of Openclerk 0.22, all of your accounts and addresses can automatically generate
	<a href="<?php echo htmlspecialchars(url_for('your_transactions')); ?>">transactions</a>
	for historical and future daily activity.
</p>

<p>
	Transactions will be generated by comparing the balance of each account for each currency, against the balance
	for that account and currency, from the day before. This means that at most there will only be one transaction
	created every day for every account and currency pair.
</p>

<p>
	Transactions can be automatically created for all types of
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_addresses')); ?>">addresses</a>,
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_pools')); ?>">mining pool accounts</a>,
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_exchanges')); ?>">exchange accounts</a>, and
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_other')); ?>">other accounts</a>.

	Transactions are not generated for
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_securities')); ?>">securities exchanges accounts</a> or
	<a href="<?php echo htmlspecialchars(url_for('wizard_accounts_individual_securities')); ?>">individual security accounts</a>,
	since their values generally change so frequently that generating transactions would be pointless.
</p>

<p>
	You may enable or disable automatic transaction generation by visiting <a href="<?php echo htmlspecialchars(url_for('wizard_accounts')); ?>">your accounts wizard</a>
	and toggling transaction generation through the wizards. Disabling transaction generation will prevent any future transactions from being generated, but it will not
	delete any historical transactions.
</p>

<p>
	To prevent historical transactions from being accidentally deleted, you should not delete old accounts, but rather
	<i>disable</i> them through the wizard.
</p>
