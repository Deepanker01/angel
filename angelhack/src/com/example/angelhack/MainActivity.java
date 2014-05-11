package com.example.angelhack;

import android.os.Bundle;
import android.os.Handler;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;

public class MainActivity extends Activity {

	private static int SPLASH__TIME = 2000;

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_splash);
		new Handler().postDelayed(new Runnable() {

			@Override
			public void run() {
				// TODO Auto-generated method stub
				Intent i = new Intent(MainActivity.this, Login.class);
				startActivity(i);
				finish();
			}
		}, SPLASH__TIME);

	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {

		/*
		 * Button a = (Button) findViewById(R.id.sac);
		 * 
		 * a.setOnClickListener(new OnClickListener() {
		 * 
		 * @Override public void onClick(View v) {
		 * 
		 * startActivity(new Intent(MainActivity.this, MainActivity2.class)); }
		 * 
		 * });
		 */

		/*
		 * Button b = (Button) findViewById(R.id.button3);
		 * b.setOnClickListener(new OnClickListener() {
		 * 
		 * @Override public void onClick(View d) { startActivity(new
		 * Intent(MainActivity.this, SecondActivity.class));
		 * 
		 * 
		 * } });
		 */

		return true;
	}

}
