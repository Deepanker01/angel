package com.example.angelhack;

import android.os.Bundle;
import android.app.Activity;
import android.content.Intent;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.ImageView;

public class WorkersList extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_workers_list);
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.workers_list, menu);

		ImageView a = (ImageView) findViewById(R.id.imageView5);
		a.setOnClickListener(new OnClickListener() {

			public void onClick(View v1) {

				startActivity(new Intent(WorkersList.this, WorkeProfile.class));

			}
		});

		ImageView b = (ImageView) findViewById(R.id.imageView2);
		b.setOnClickListener(new OnClickListener() {

			public void onClick(View v2) {

				startActivity(new Intent(WorkersList.this, Worker2.class));

			}
		});

		ImageView c = (ImageView) findViewById(R.id.imageView3);
		c.setOnClickListener(new OnClickListener() {

			public void onClick(View v3) {

				startActivity(new Intent(WorkersList.this, Worker3.class));

			}
		});

		ImageView d = (ImageView) findViewById(R.id.imageView4);
		d.setOnClickListener(new OnClickListener() {

			public void onClick(View v4) {

				startActivity(new Intent(WorkersList.this, Worker4.class));

			}
		});

		ImageView e = (ImageView) findViewById(R.id.imageView1);
		e.setOnClickListener(new OnClickListener() {

			public void onClick(View v5) {

				startActivity(new Intent(WorkersList.this, Worker5.class));

			}
		});
		return true;
	}

}
