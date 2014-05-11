package com.example.angelhack;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.TextView;

public class Login extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_login);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.login, menu);

		Button a = (Button) findViewById(R.id.button1);
		a.setOnClickListener(new OnClickListener() {

			public void onClick(View v) {

				startActivity(new Intent(Login.this, WorkersList.class));

			}
		});

	
		final TextView view2 = (TextView) findViewById(R.id.textView1);
		view2.setOnClickListener(new OnClickListener() {

			public void onClick(View w) {

				startActivity(new Intent(Login.this, RegSelect.class));

			}
		});

		return true;

	}

}
