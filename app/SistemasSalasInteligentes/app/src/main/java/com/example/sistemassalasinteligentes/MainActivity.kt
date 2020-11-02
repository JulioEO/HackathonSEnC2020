package com.example.sistemassalasinteligentes

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.content.Intent
import kotlinx.android.synthetic.main.activity_main.*

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        buttonLogin.setOnClickListener {
            val intent = Intent(this, ReservarSalaActivity::class.java)
            startActivity(intent)
        }
    }
}