package com.example.sistemassalasinteligentes

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.content.Intent
import kotlinx.android.synthetic.main.reservar_sala.*

class ReservarSalaActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.reservar_sala)

        buttonBloco1.setOnClickListener {
            val intent = Intent(this, BlocosActivities::class.java)
            startActivity(intent)
        }
    }
}