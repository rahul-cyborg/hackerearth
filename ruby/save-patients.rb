n = gets.chomp.strip.to_i
flag = 1
vaccines = gets.chomp.strip.split(' ').map(&:to_i).sort
patients = gets.chomp.strip.split(' ').map(&:to_i).sort
(0...n).each do |i|
  if vaccines[i] <= patients[i]
    flag = 0
    break;
  end
end
puts "No" if flag == 0
puts "Yes" if flag == 1

