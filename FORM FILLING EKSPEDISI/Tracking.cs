using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace ekspedisi
{
    public partial class Tracking : Form
    {
        public Tracking()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            using (input input = new input())
            {
                input.ShowDialog();
            }
        }

        private void button2_Click(object sender, EventArgs e)
        {
            using (Tracking tracking = new Tracking())
            {
                tracking.ShowDialog();
            }
        }

        private void button3_Click(object sender, EventArgs e)
        {
            using (scan scan = new scan())
            {
                scan.ShowDialog();
            }
        }

        private void button4_Click(object sender, EventArgs e)
        {
            using (Cekharga cekharga = new Cekharga())
            {
                cekharga.ShowDialog();
            }
        }

        private void button6_Click(object sender, EventArgs e)
        {
            using (laporan laporan = new laporan())
            {
                laporan.ShowDialog();
            }
        }

        private void pictureBox4_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}
