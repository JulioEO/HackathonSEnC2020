package com.example.sistemassalasinteligentes

import android.app.DatePickerDialog
import android.app.TimePickerDialog
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import kotlinx.android.synthetic.main.activity_date_time_picker.*
import java.net.URL
import java.text.DateFormat
import java.util.*

class DateTimePicker : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_date_time_picker)
        val apiURL = URL("https://nobremarcos.com.br/")
        val c = Calendar.getInstance()
        val year = c.get(Calendar.YEAR)
        val month = c.get(Calendar.MONTH)
        val day = c.get(Calendar.DAY_OF_MONTH)
        val hour = c.get(Calendar.HOUR)
        val minute = c.get(Calendar.MINUTE)

        textViewDate.setOnClickListener {
            val dpd = DatePickerDialog(this, DatePickerDialog.OnDateSetListener { view, mYear, mMonth, mDay ->
                textViewDate.setText("" + mDay + "/" + mMonth + "/" + mDay)
            }, year, month, day)
            dpd.show()
        }

        textViewTime.setOnClickListener {
            val timeSetListener = TimePickerDialog.OnTimeSetListener{timePicker, hour, minute ->
                textViewTime.setText("" + hour.toString() + ":" + minute.toString())
            }
            TimePickerDialog(this, timeSetListener, hour, minute, true).show()
        }
    }
}