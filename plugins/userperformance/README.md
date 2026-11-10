# User Performance KPI for GLPI 11

A free custom GLPI 11.x plugin for comparing technician/user operational KPIs.

## Included
- User/technician comparison dashboard
- Assigned tickets
- Resolved/closed among assigned tickets
- Pending / processing / new tickets
- Written tickets and follow-ups
- Resolution rate
- SLA eligible tickets, SLA breaches and SLA compliance
- Average TTO (first technician follow-up)
- Average TTR (ticket open to solved)
- Date, technician, group, category, status and priority filters
- CSV detail export
- Browser Print / Save as PDF

## Compatibility
- GLPI 11.x, including 11.0.9
- PHP 8.2+
- MySQL/MariaDB

## Install
1. Extract this folder into `<GLPI>/plugins/` so the final path is `<GLPI>/plugins/userperformance/`.
2. Log in to GLPI as an administrator.
3. Go to **Setup/Configuration > Plugins** (the exact menu label can vary by GLPI theme/interface).
4. Install and enable **User Performance KPI**.
5. Open **Tools > User Performance KPI**.

## Notes on KPI interpretation
The report is based on tickets opened during the selected period. "Resolved/Closed" means assigned tickets currently in solved/closed status; it is not a proof of which user clicked the solve action. Written tickets count distinct tickets on which the technician authored at least one follow-up. SLA compliance is calculated only for tickets with a `time_to_resolve` value.

This plugin deliberately does not calculate an overall performance score. Use the indicators together with workload, ticket priority/complexity, SLA, TTO and TTR when conducting performance evaluation.

## Security
The dashboard requires the GLPI ticket READ right because it displays ticket-derived data. Restrict access to the relevant GLPI profiles/entities according to your organization's performance-reporting policy.
