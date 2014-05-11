package com.example.angelhack;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

public class RegSelect extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_reg_select);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.reg_select, menu);
		
		Button a = (Button) findViewById(R.id.button1);
		a.setOnClickListener(new OnClickListener() {

			public void onClick(View v) {

				startActivity(new Intent(RegSelect.this, WorkersList.class));

			}
		});

		return true;
	}

}
